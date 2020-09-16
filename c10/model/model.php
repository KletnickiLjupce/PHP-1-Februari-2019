<?php

class Model {

		function getAllStudents(){

						/*
					$student1 = new Student( 'Neven' , 'Gjoreski', 'asd@asd.asd' );
					$student2 = new Student( 'Neven2' , 'Gjoreski', 'asd@asd.asd' );

					$stunts = [ $student1 , $student2 ];

					*/

				$students = [
					new Student( 'Neven' , 'Gjoreski', 'asd@asd.asd' ),
					new Student( 'Neven2' , 'Gjoreski', 'asd@asd.asd' )
				];

				return $students;
		}

		function getStudent($id){

			$students = $this->getAllStudents();

			return $students[$id];
		}
}


class Student {

	public $name;
	public $lastname;
	public $email;

	public function __construct( $n, $l, $e) {

			$this->name = $n;
			$this->lastname = $l;
			$this->email = $e;

	}
}