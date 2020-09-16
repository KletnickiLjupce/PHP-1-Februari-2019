<?php

require_once('model/model.php');

class Controller {

		public $model;

		public function __construct(){

				$this->model = new Model;
		}

		function getAllStudents(){

				$students = $this->model->getAllStudents();

				// print_r($students);				

				include_once("view/view.php");
		}

		function getStudent($id){
				$student = $this->model->getStudent($id);
				include_once("view/view.php");
		}

}