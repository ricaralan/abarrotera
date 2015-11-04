<?php

include_once 'ParentController.php';
include_once '../models/ProveedorModel.php';

class ProveedorController extends ParentController {

	public function __construct() {
		$this->model = new ProveedorModel();
	}

}

$controller = new ProveedorController();

if(isset($_GET["all"])) {
	print $controller->getAll();
} else if(isset($_GET["getOne"])) {
	print json_encode(json_decode($controller->getById($_GET["getOne"], null))->objects[0]);
} else if(isset($_GET["get"]) && isset($HTTP_RAW_POST_DATA)) {
	print ($controller->getWhere(null, json_decode($HTTP_RAW_POST_DATA)->data));
} else if(isset($_GET["save"]) && isset($HTTP_RAW_POST_DATA)) {
	print $controller->save($_GET["save"], json_decode($HTTP_RAW_POST_DATA)->data);
} else if(isset($_GET["delete"])) {
	print $controller->delete($_GET["delete"]);
}

?>
