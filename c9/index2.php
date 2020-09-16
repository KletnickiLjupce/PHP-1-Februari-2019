<?php

class Blago {

	protected $calories;

	function __construct(){
		echo ' kreirano e Blago <br>';
	}

	function getCalories(){
		return $this->calories;
	}

	function vikni(){
		echo 'vikam od Blago <br>';
	}

	function a(){
		self::vikni();
	}
}


class Torta extends Blago {

	public $cost;
	public $type;

	function __construct(){
		echo ' kreirano e Torta <br>';
	}

	function setCalories($cal){
		$this->calories = $cal;
	}


	function vikni(){
		echo 'vikam od Torta <br>';
	}
}

function printAre($obj){
	echo '<hr><pre>';
	print_r($obj);
	echo '</pre>';
}


$tiramisu = new Torta;
// $tiramisu->calories = 15;
$tiramisu->setCalories(15);
//echo $tiramisu->getCalories();

$tiramisu->vikni();

Blago::vikni();
printAre($tiramisu);

echo $tiramisu->a();