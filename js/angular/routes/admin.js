app.config(["$routeProvider", function($routeProvider) {
	$routeProvider.
	when("/proveedores", {templateUrl : BASE_URL+"views/prefabs/proveedores/show.php"}).
	when("/proveedores/create", {templateUrl : BASE_URL+"views/prefabs/proveedores/create_update.php"}).
	when("/proveedores/update/:id", {templateUrl : BASE_URL+"views/prefabs/proveedores/create_update.php", controller : ""}).
	otherwise({redirectTo : "/"});
}]);