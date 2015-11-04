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

?>
