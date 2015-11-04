app.controller("UserController", ["$scope", "$http", function ($scope, $http) {

	$scope.createUser = function() {
		if($scope.user.usu_rol) {
			json = JSON.stringify($scope.user);
			$http.post(BASE_URL + "/database/controllers/UserController.php?save", {
				data : $scope.user
			}).success(function(data) {
				if(data.inserted) {
					$scope.user = {};
					alert("Usuario regitrado correctamente!");
				}
			});
		} else {
			alert("Debes escoger un rol para el usuario");
		}
	};

	$scope.login = function() {
		json = JSON.stringify($scope.user);
		$http.post(BASE_URL + "/database/controllers/UserController.php?get&login", {
			data : $scope.user
		}).success(function(data) {
			console.log(data);
			if(data.success) {
				window.location = BASE_URL + "redirect_session.php"
			} else {
				alert("Usuario o contraseña incorrectos");
			}
		});
	};

}]);