<?php

class Studenti {


	// PROPERTIES

	private $id ;
	public $name ;
	public $lastname ;
	public $age;
	public $email;
	public $phone ;

	public static $no_of_instances = 0;




	// METHODS

	function __construct( $name , $lastname, string $phone = '1' ){

		$this->name = $name;
		$this->lastname = $lastname;
		$this->phone = $phone;

		self::$no_of_instances++;

		echo 'Kreiran nov objekt <br>';
	}

	function getId(){

		return $this->id;
	}

	function setId($id){

		//logger
		$this->logUserChange();
		$this->id = $id;
	}

	function logUserChange(){

		echo 'Logged<br>';
		// zapisi vo baza deka e proment podatok

	}

	public static function printAre($obj){
		echo '<hr><pre>';
		print_r($obj);
		echo '</pre>';
	}

}