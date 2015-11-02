<?php

require_once 'ParentModel.php';
require_once '../classes/User.php';

class UserModel extends ParentModel {

	public $orm;

	public function __construct() {
		$this->orm = new User();
		$this->orm->setTableName("usuario");
		$this->orm->setNameId("id_usuario");
	}

}


$data = json_decode($HTTP_RAW_POST_DATA)->data;
//print $data->usu_nombre;


$model = new UserModel();
$model->save(
	array(
		"usu_nombre" => $data->usu_nombre
		)
	);

/*
print json_encode(array(
	"get" => json_encode($_GET),
	"post" => json_encode($HTTP_RAW_POST_DATA),
	"vars" => json_encode(get_defined_vars($this))
	));
*/

?>
