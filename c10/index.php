<?php

require_once("controller/controller.php");

$controller = new Controller;



if(isset($_GET['id'])){

	$controller->getStudent($_GET['id']);
} else {

	$controller->getAllStudents();
}

