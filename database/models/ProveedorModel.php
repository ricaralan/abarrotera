<?php

require_once 'ParentModel.php';
require_once '../classes/Proveedor.php';

class ProveedorModel extends ParentModel {

	public $orm;

	public function __construct() {
		$this->orm = new Proveedor();
		$this->orm->setTableName("proveedor");
		$this->orm->setNameId("id_proveedor");
	}

}

?>
