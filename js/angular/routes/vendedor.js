app.config(["$routeProvider", function($routeProvider) {
	$routeProvider.
	when("/provedores", {templateUrl : "/route/"}).
	when("/provedores/create", {templateUrl : "/route/create"}).
	when("/provedores/update/:id", {templateUrl : "/route/update/:id", controller : ""}).
	otherwise({redirectTo : "/"});
}]);