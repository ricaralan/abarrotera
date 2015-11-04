<?php

include_once 'ParentController.php';
include_once '../models/UserModel.php';

class UserController extends ParentController {

	public function __construct() {
		$this->model = new UserModel();
	}

}

$controller = new UserController();

if(isset($_GET["get"]) && isset($HTTP_RAW_POST_DATA)) {
	$json = json_decode($controller->getWhere(null, json_decode($HTTP_RAW_POST_DATA)->data));
	if($json->affected_rows === 1) {
		session_start();
		$_SESSION["id_usuario"] = $json->objects[0]->id_usuario;
		$_SESSION["rol"] = $json->objects[0]->usu_rol;
		$_SESSION["nombres"] = $json->objects[0]->usu_nombres;
		$_SESSION['apellidos'] = $json->objects[0]->usu_apellidos;
		$_SESSION['usuario'] = $json->objects[0]->usu_usuario;
	}
	print json_encode(array(
		"success" => $json->affected_rows === 1,
		"user" => $json->objects[0]
	));
	if(isset($_GET["login"])) {
		
	}
} else if(isset($_GET["save"]) && isset($HTTP_RAW_POST_DATA)) {
	print $controller->save($_GET["save"], json_decode($HTTP_RAW_POST_DATA)->data);
} else if(isset($_GET["delete"])) {
	print $controller->delete($_GET["delete"]);
}

?>
