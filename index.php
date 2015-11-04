<?php
	include_once 'constants.php';
	include_once 'redirect_session.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Abarrotera</title>
	<script src="<?= BASE_URL?>js/angular/angular.min.js"></script>
	<script src="<?= BASE_URL?>js/angular/modules/app.js"></script>
	<script src="<?= BASE_URL?>js/angular/controllers/UserController.js"></script>
	<script>
		var BASE_URL = "<?= BASE_URL?>";
	</script>
</head>
<body ng-app="app">

	<form ng-controller="UserController" ng-submit="login()">
		<input type="text" placeholder="Usuario" required ng-model="user.usu_usuario" />
		<input type="password" placeholder="Contraseña" required ng-model="user.usu_contrasena" />
		<input type="submit" />
	</form>

	<form ng-controller="UserController" ng-submit="createUser()">
		<input type="text" placeholder="Nombres" required ng-model="user.usu_nombres" />
		<input type="text" placeholder="Apellidos" required ng-model="user.usu_apellidos" />
		<input type="text" placeholder="Usuario" required ng-model="user.usu_usuario" />
		<input type="password" placeholder="Contraseña" required ng-model="user.usu_contrasena" />
		<select ng-model="user.usu_rol">
			<option value="">Seleccione el rol de Usuario</option>
			<option value="administrador">Administrador</option>
			<option value="vendedor">Vendedor</option>
		</select>
		<input type="submit"/>
	</form>
</body>
</html>