<?php
include_once 'constants.php';

session_start();

$url = 'location: '.BASE_URL;

$changeLocation = false;

if(isset($_GET["destroy"])) {
	session_destroy();
	header($url);
} else {
	switch ($_SESSION["rol"]) {
		case 'administrador':
			$url .= 'views/admin';
			break;
		case 'vendedor':
			$url .= 'views/vendedor';
			break;
	}
	$changeLocation = $url !== 'location: '.BASE_URL;

	if($_SERVER['REQUEST_URI'] !== '/' || $changeLocation) {
		header($url);
	}
}


?>