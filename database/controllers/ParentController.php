<?php

class ParentController {

	protected $model;

	public function getAll() {
		return json_encode($this->model->getAll());
	}

	public function getById($id, $columns = null) {
		return json_encode($this->model->getById($id, $columns));
	}

	public function getWhere($columns = null, $where) {
		return json_encode($this->model->getWhere($columns, $where));
	}

	public function save($id = null, $data = array()) {
		return json_encode($this->model->save($data, $id));
	}

	public function delete($id) {
		return json_encode($this->model->delete($id));
	}

}

?>
