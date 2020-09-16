<?php


//NIZI

//Indeksirani nizi
				//      0               1             2
$indeksirani = [ 'Breaking Bed' , 'Gossip Girl' , 'House' ];


//var_dump($indeksirani);

echo '<pre>';
print_r($indeksirani);
echo '</pre>';


echo $indeksirani[1];
echo '<br>';


// Asocijativni nizi

$serija = [ 'name' => 'Gossip Girl' , 'year' => '2007' ];

echo $serija['year'];


// primeri
		// 0   1   2
$niza1 = [ 1 , 2 , 3];
$niza2 = [ '0' => 1, '1' => 2, '2' => 3];
echo '<br>';

echo $niza2[2];


// Multidimenzionalni
echo '<br>';

$multi1 = [
			'serii'   => [ 'Game of Thrones' , 'House of Cards', 'Arrow'],
			'filmovi' => [ 'La la land' , 'Notebook' , 'Saw' ]
			];

echo $multi1['serii'][1]; // House of Cards

$serii = [ 'Game of Thrones' , 'House of Cards', 'Arrow'];
$filmovi = [ 'La la land' , 'Notebook' , 'Saw' ];

$multi2 = [
			'serii'   => $serii ,
			'filmovi' => $filmovi
			];

// $multi1 === $multi2


//zadacka
//da se ispecati Hobbit
$serii = [ 'Game of Thrones' , 'House of Cards', 'Hobbit'];
$filmovi = [ 'La la land' , 'Notebook' , $serii ];

$multi2 = [
			'serii'   => $filmovi
			];

echo '<pre>';
print_r($multi2);
echo '</pre>';

echo $multi2['serii'][2][2];

// Uslovi

echo '<hr>';

$action = 'Asd';

if ($action === 'Open'){

	echo 'Akcijata koja ja kliknavte e Open';
} elseif( $action === 'Close'){

	echo 'Akcijata koja ja kliknavte e Close';
} elseif ($action === 'Cancel'){

	echo 'Akcijata koja ja kliknavte e Cancel';
} else {

	echo 'Kliknavte na nepostoecko dugme';
}

echo '<br>';
//SWITCH

switch ($action){

	case 'Open':
		echo 'Akcijata koja ja kliknavte e Open';
		break;
	case 'Close':
		echo 'Akcijata koja ja kliknavte e Close';
		break;
	case 'Cancel':
		echo 'Akcijata koja ja kliknavte e Cancel';
		break;
	default:
		echo 'Kliknavte na nepostoecko dugme';
}

echo '<hr>';


//Strukturi za povtoruvanje 
// LOOP structures

$serii = [ 'Game of Thrones' , 'House of Cards', 'Hobbit'];

// echo $serii[0];
// echo $serii[1];
// echo $serii[2];

// for(deklaracija ; uslov ; inkrement){
	//naredbi
// }

$niza = [ 56 , 72 , 48 , 98, 156, 13 , 9];

for ( $i = 0 ; $i < count($niza) ; $i++){
	echo $niza[$i];
	echo '<br>';
}

for ( $i = 0 ; $i < count($serii) ; $i++){
	echo $serii[$i];
	echo '<br>';
}


//FOREACH iteracija na nizi
// $serii = [ 'Game of Thrones' , 'House of Cards', 'Hobbit'];
foreach( $serii as $ime_na_serija ){
	echo $ime_na_serija . '<br>';
}

//zadaca da se najde zbir od site elementi na nizata
$zbir = 0;

for( $i = 0; $i < count($niza); $i++){
	$zbir += $niza[$i];
}
echo "Zbirot na elementite e $zbir ";

//istoto so foreach
$zbir = 0;
foreach ($niza as $element) {
	$zbir += $element;
}

echo "Zbirot na elementite e $zbir ";

//double "" vs single ''
// $serii = [ 'name' => 'GOT'];
// echo "Zbirot na elementite e {$serii['name']}" ;

//zbir na boevi od 1 do 100

$zbir = 0;

for($i = 1; $i <= 100; $i++){
	$zbir += $i;
}

echo '<br> Zbrirot na broevite do 100 e : '  . $zbir ;


// Break and continue;

$niza = [ 56 , 72 , 48 , 98, 156, 13 , 9];

//ako najde broj pogolem od 100 , da prestane da pecati

echo '<hr>';

foreach ($niza as $element) {
	if($element > 100){
		break;
	}
	echo $element . '<br>';
}


//da ne gi printa broevite pogolemi od 100

foreach ($niza as $element) {
	if($element > 100){
		continue;
	}
	echo $element . '<br>';
}

//iteracija niz asocijativni nizi
$serija = [ 'name' => 'Gossip Girl' , 'year' => '2007' ];

foreach ($serija as $key => $value) {
	echo 'Property e ' . $key . ' , a vrednosta e : ' . $value . '<br>';
}


// While

//while (uslov){
	//naredbi
//}


$niza = [ 56 , 72 , 48 , 98, 156, 13 , 9];

$i = 0;
while( $i < count($niza)){
	echo 'elementot e : ' . $niza[$i] . '<br>';
	$i++;
}


//Do .... while
// do {

// } while(uslov)


$serii = [ '' ,'Game of Thrones' , 'House of Cards', 'Hobbit' , 'Saw' , 'Lotr'];

echo "<select>";

foreach ($serii as $ime) {
	echo "<option> $ime </option>";
}
echo "</select>";


echo '<div style="height:1000px;"></div>';
?>