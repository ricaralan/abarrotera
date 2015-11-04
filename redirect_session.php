<?php
include_once 'constants.php';
session_start();

switch ($_SESSION["rol"]) {
	case 'administrador':
		header('location: '.BASE_URL.'views/admin');
		break;
	case 'vendedor':
		header('location: '.BASE_URL.'views/vendedor');
		break;
	default:
		if($_SERVER['REQUEST_URI'] !== '/') {
			header('location: '.BASE_URL);
		}
}

?>