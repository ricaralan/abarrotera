app.controller("ProveedoresController", ["$scope", "$http","$routeParams", "$location", function($scope, $http, $routeParams, $location) {

	$scope.optionProveedor = "Registrar";

	$scope.getAllProveedores = function() {
		$http.get(BASE_URL + "/database/controllers/ProveedorController.php?all")
			.success(function(proveedores) {
			$scope.proveedores = proveedores;
		});
	};

	$scope.createProveedor = function() {
		json = JSON.stringify($scope.proveedor);
		$http.post(BASE_URL + "/database/controllers/ProveedorController.php?save", {
			data : $scope.proveedor
		}).success(function(data) {
			if(data.inserted) {
				$scope.proveedor = {};
				alert("Proveedor regitrado correctamente!");
				$location.path("/proveedores");
			}
		});
	};

	$scope.updateProveedor = function() {
		json = JSON.stringify($scope.proveedor);
		$http.post(BASE_URL + "/database/controllers/ProveedorController.php?save="+$routeParams.id, {
			data : $scope.proveedor
		}).success(function(data) {
			if(data.updated) {
				$scope.proveedor = {};
				alert("Proveedor actualizado correctamente!");
				$location.path("/proveedores");
			}
		});
	};

	$scope.opcionProveedor = function() {
		if($routeParams.id) {
			$scope.updateProveedor();
		} else {
			$scope.createProveedor();
		}
	}

	$scope.getDataProveedor = function() {
		if($routeParams.id) {
			$http.get(BASE_URL + "/database/controllers/ProveedorController.php?getOne="+$routeParams.id)
				.success(function(data) {
				$scope.proveedor = data;
			});
			$scope.optionProveedor = "Actualizar";
		}
	}

	$scope.getDataProveedor();

}]);