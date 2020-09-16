<?php


$niza = [ 36 , 42 , 58 , 98 , 79 , 58 , 2 , 100];

// da go najde vroriot paren element 
// i da gi sobere slednite 2 elemeni i ispecati nivnata suma

$counter = 0;

foreach ($niza as $key => $value) {

	if ( $value % 2 === 0 && $counter === 1){
		$zbir = $niza[$key+1] + $niza[$key+2];
		echo $zbir;
	}

	if( $value % 2 === 0){
		$counter++;
	}

}