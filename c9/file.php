<?php

//echo file_get_contents('test.txt');

$my_file = fopen('test.txt' , 'r');

//echo fread($my_file, filesize('test.txt'));


fclose($my_file);

$my_file = fopen('test.txt' , 'w');

fwrite($my_file, 'Ova e zapis vo fajlot');

fclose($my_file);

$my_file = fopen('test.txt' , 'a');

fwrite($my_file, PHP_EOL .'Ova e dodatok'  );

echo '<pre>';
//echo file_get_contents('test.txt');
echo '</pre>';

fclose($my_file);

$my_file = fopen('test.txt' , 'r');

$counter = 0;
while(!feof($my_file)){
	// echo fgets($my_file) . '<hr>';
	echo fgetc($my_file) . '<hr>';
	$counter++;
}

echo $counter;

fclose($my_file);