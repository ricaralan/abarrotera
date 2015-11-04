<?php
	include_once '../../constants.php';
	include_once '../../redirect_session.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Administrador</title>
	<script src="<?= BASE_URL?>js/angular/angular.min.js"></script>
	<script src="<?= BASE_URL?>js/angular/modules/app.js"></script>
	<script src="<?= BASE_URL?>js/angular/routes/angular-route.js"></script>
	<script src="<?= BASE_URL?>js/angular/routes/admin.js"></script>
	<script src="<?= BASE_URL?>js/angular/controllers/ProveedoresController.js"></script>
	<script>
		var BASE_URL = "<?= BASE_URL?>";
	</script>
</head>
<body ng-app="app">
	<a href="#/proveedores">Ver proveedores</a>
	<div ng-view></div>
</body>
</html>