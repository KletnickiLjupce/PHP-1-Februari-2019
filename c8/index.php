<?php


// require("studenti.class.php");
require "studenti.class.php";

// $student = new Studenti;
$student = new Studenti( 'Neven' , 'Gjoreski');

$student->name = 'Neven';
echo $student->name . '<br>';

$student->setId(5);
echo $student->getId()  . '<br>';

$student2 = new Studenti( 'Ljupce' , 'Kletnicki' , 73111111);
$student2->name = 'Ljupce';

echo 'number of instances : ' . Studenti::$no_of_instances . '<br>';


$student2->nickname = 'Tralalajka';

Studenti::printAre($student);
Studenti::printAre($student2);

