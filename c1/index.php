<?php

/*
	
*/

$cas = 'PHP so MySQL';
// $cas = 'a';

//$cas = "PHP so MySQL";

//echo $cas;
//print_r($cas);
// var_dump($cas);

$array = [ 123 , 'Stavre' , true , [] ];
$array = array();

//Operatori vo PHP

//Aritmeticki 
//	( + , - , * , /, %, . )

$number = 5;

// $number = $number + 5;
// $number += 5;

//$number *= $number;
//$number = $number * $number;
// echo $number;

// $number++;
// echo $number++;
// echo $number;

// ++$number;
// echo ++$number;
// echo $number;

$number--;
--$number;

//RELACISKI
// ( ==, ===, !=, !== , < , > , <= , >= ...)

// (5 == '5') //true
// (5 === '5') //false

// echo (5 != '5') ;//false
// echo  (5 !== '5'); //true

$ime = 'Neven';
$prezime = 'Gjoreski';

// echo $ime . ' ' . $prezime;
// echo $ime + $prezime;

// logicki operatori
// ( and &&, or ||, xor ! )

// if(condition){ 
	// block of code
// }

// if(condition){

// } else {

// }

// if(condition){

// } elseif(condition){

// } else {

// }

// if($ime === 'Neven'){
// 	echo 'Imeto e tocno';
// } else {
// 	echo 'Imeto e pogresno';
// }

$broj = 5;

// $to_print = '';

if($broj % 2 === 0){
	$to_print = 'brojot e paren';
} else {
	$to_print = 'brojot e neparen';
}


// echo $to_print;

// echo ( $broj % 2 === 0 ) ? 'brojot e paren' : 'brojot e neparen';


if( ($ime === 'Neven') ){
	echo 'tocno';
} else {
	echo 'netocno';
}


?>