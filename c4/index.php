
Vnesi ime :<input type="" name="">
<?php

	// STRING FUNKCII

//trim - removes whitespaces from the sides of the string
$trim = ' Neven ';

echo (trim($trim) === 'Neven') . '<br>';

//ucfirst - converts the first character to uppercase

$ucfirst = 'neven';
echo ucfirst($ucfirst) . '<br>';

//strlen - return length of the string

$strlen = 'PHP e zakon jazik !!!';

echo strlen($strlen) . '<br>';
// echo $strlen[20];

//strpos - (string, find)

$strpos = 'PHP e zakon jazik !!!';
echo strpos($strpos , 'zakon') . '<br>';

//substr - part of a string
$substr = 'asdasdahsdj##d23998f4-83dc-4f11-95ec-e06bf7f41584##asdasd';

echo substr($substr, strpos($substr , '##') + 2 , 36);
echo '<br>';

//strtolower - converts a string to lowercase

$strtolower1 = 'Open'; 
$strtolower2 = 'OPEN';

echo (strtolower($strtolower1) === strtolower($strtolower2));
echo '<br>';

//strtoupper - converts a string to uppercase Open -> OPEN

//explode - string to array ( seperator, string)
$explode = 'Hello World, It is nice to see you!';
$exploded = explode(' ', $explode);

echo '<pre>';
print_r($exploded);
echo '</pre>';

echo explode('##' , $substr)[1];

//implode - converts array to string
echo '<br>';
echo implode('##', $exploded);

// str_replace - replace a part of a string with another

$str_replace = 'Neven Gjoreski e najlosiot profesor!!!';
echo '<br>';
echo str_replace('najlosiot', 'najdobriot', $str_replace);


//str_word_count - returns a count of the words in string

$string = 'Neven Gjoreski e najlosiot profesor!!!';
echo '<br>';
echo str_word_count($string);
echo '<br>';
echo count(explode(' ', $string));


//OPSTI FUNKCII

//die;
//exit;

//die('greska vo kodot'); //die()
//exit; // exit()

echo '<hr>';

//sleep(15);
//echo 'Se iznaspav';

//phpinfo();


//MATH

//abs() - returns absolute of value

//ceil() / floor() / round() - rounds a number down , up , closest

$number = 4.01;

echo 'ceil ' . ceil($number) . '<br>';

echo 'floor ' . floor(4.98) . '<br>';

echo 'round ' . round(4.49) . '<br>';
echo 'round ' . round(4.51) . '<br>';

//rand();

// echo rand( 1 , 100 );
//echo mt_rand();

//NIZI

//count - returns number of elements in array

//in_array() - returns if element is found in array

$boi = ['green', 'yellow' , 'pink', 'brown', 'black'];

if ( in_array('white', $boi) ) {
	echo 'bojata e najdena<br>';
} else {
	echo 'bojata ne e najdena<br>';
}

//sort - sorting the array accending order
//rsort - sorting the array in decending order

$broevi = [ 56 , 64 , 13 , 7 , 100];
sort($broevi);
//rsort($broevi);
print_r($broevi);

//array_merge() //merges arrays into 1 array

$a1 = [ 5 , 7 , 66];
$a2 = [ 99, 14 , 32];

echo '<pre>';
print_r(array_merge($a1, $a2));
echo '</pre>';

//array_push()

$array_push = [ 'Neven' , 'Stavre', 'Mia'];
//array_push($array_push, 'Beyonce');
$array_push[] = 'Beyonce';

echo '<pre>';
print_r($array_push);
echo '</pre>';

//array_pop()

?>