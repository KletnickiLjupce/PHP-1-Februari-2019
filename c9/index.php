<?php

interface conf {
	public function setApiToken();
	public function setApiKey();
}


abstract class Blago {

	public $calories;


	function setCalories($cal){
		$this->calories = $cal;
	}

	public abstract function doNotTouch();
}


class Torta extends Blago implements conf {

	public $cost;
	public $type;

	function setApiToken(){
		
	}

	function setApiKey(){

	}

	function doNotTouch(){}

}

class Kolac extends Torta {

	public $color;
}

function printAre($obj){
	echo '<hr><pre>';
	print_r($obj);
	echo '</pre>';
}


$tiramisu = new Torta;

printAre($tiramisu);

$ekler = new Kolac;

printAre($ekler);

//$blago = new Blago;

