<?php

$abrakadabra = [ 12 , 45, 69 , 58 , 42 , 88 ];


//da se izvadi maksimum i minimum
// sredna vrednost


$min = $abrakadabra[0];
$max = $abrakadabra[0];
$zbir = 0;

foreach ($abrakadabra as $value) {
	
	if( $min > $value){
		$min = $value;
	}

	if( $max < $value){
		$max = $value;
	}

	$zbir += $value;
}

echo " Minimalnata vrednost e : $min <br>";
echo " Maksimalnata vrednost e : $max <br>";
echo " Srednata vrednost e : " . $zbir/count($abrakadabra) . '<br>';

echo '<hr>';


$indexirana = [ 'Neven' , 'Gjoreski' , 31];
echo "Korisnikot ima $indexirana[2] godina";

$asocijativna = [ 
				  'ime' => 'Neven' , 
				  'prezime' => 'Gjoreski' , 
				  'godini' => 31
				];

echo "Korisnikot ima {$asocijativna['godini']} godina";

//nizata e ?

$serija = 
[
	'serii' => [ 
					'1' => [ 
							'1995' => ['Friends']
							] 
				]
];

echo '<br>';

echo $serija['serii'][1]['1995'][0]; // Friends

echo '<br>';

$covek = 
[
	[ 
		'info' => [ 
					'name' => 'Stavre'
				  ]
	]
];

echo $covek[0]['info']['name']; // Stavre

echo '<br>';


//print_r($serija);

$boi = [ 'pink' , 'yellow' , 'orange', 'green' , 'blue'];
?>

<!-- nacin 1 -->
<select>
	<?php 
		foreach($boi as $boja){
			echo "<option> $boja </option>";
		}
	?>
</select>

<!-- nacin 2 -->
<select>
	<?php foreach($boi as $boja ){ ?>
		<option> <?= $boja ?></option>
	<?php } ?>
</select>

<!-- nacin 3 -->

<?php
echo '<select>';
foreach($boi as $boja){
	echo "<option> $boja </option>";
}
echo '</select>';
?>

<?php

echo '<hr>FUNKCII';

//povikuvanje na ista funkcija poveke od ednas
echo isprintaj();
echo isprintaj();

function isprintaj (){
	echo '<br>Echo od funkcika<br>';	
}


$gospodin = 'Neven';


function isprintaj_minimum_maksimum_srednavrednost_na_nizata($abrakadabra){

	global $gospodin;

	$min = $abrakadabra[0];
	$max = $abrakadabra[0];
	$zbir = 0;

	foreach ($abrakadabra as $value) {
		
		if( $min > $value){
			$min = $value;
		}

		if( $max < $value){
			$max = $value;
		}

		$zbir += $value;
	}

	echo " Minimalnata vrednost e : $min <br>";
	echo " Maksimalnata vrednost e : $max <br>";
	echo " Srednata vrednost e : " . $zbir/count($abrakadabra) . '<br>';

	// echo 'Vi blagodarime sto ja koristite usugata ' . $gospodin;
	echo 'Vi blagodarime sto ja koristite usugata ' . $GLOBALS['gospodin'];
}

$niza = [ 12 , 45, 69 , 58 , 42 , 88 ];

isprintaj_minimum_maksimum_srednavrednost_na_nizata($niza);

$niza2 = [ 99 , 45, 62 , 1 , 100 , 88 ];

isprintaj_minimum_maksimum_srednavrednost_na_nizata($niza2);



//return vrednosti na funkcija

function vrati_minimum_maksimum_srednavrednost_na_nizata($abrakadabra){

	$min = $abrakadabra[0];
	$max = $abrakadabra[0];
	$zbir = 0;

	foreach ($abrakadabra as $value) {
		
		if( $min > $value){
			$min = $value;
		}

		if( $max < $value){
			$max = $value;
		}

		$zbir += $value;
	}

	return [ $min , $max , $zbir/count($abrakadabra) ];
	
	// return [ 
	// 			'min' => $min , 
	// 			'max' => $max , 
	// 			'avg' => $zbir/count($abrakadabra) 
	// 		];
}


// list($min , $max, $avg) = vrati_minimum_maksimum_srednavrednost_na_nizata($niza);

// echo " Minimalnata vrednost e : $min <br>";
// echo " Maksimalnata vrednost e : $max <br>";
// echo " Srednata vrednost e : $avg <br>";

$response = vrati_minimum_maksimum_srednavrednost_na_nizata($niza);

// echo " Minimalnata vrednost e : $response[0] <br>";
// echo " Maksimalnata vrednost e : $response[1] <br>";
// echo " Srednata vrednost e : $response[2] <br>";

// echo " Minimalnata vrednost e : $response[min] <br>";
// echo " Maksimalnata vrednost e : $response[max] <br>";
// echo " Srednata vrednost e : $response[avg] <br>";


$ime = 'Stavre';

//pokazuvaci 
function smeni_go_imeto(&$ime){
	$ime = 'Emma Watson';
}

smeni_go_imeto($ime);

echo '<hr>'.$ime;

//default vrednosti
function zgolemi($number , $za_kolku = 10){
	return $number + $za_kolku;
}

$broj = 45;

$zgolemeno = zgolemi($broj);
echo '<br>' . $zgolemeno;

$zgolemeno = zgolemi($broj , 5);
echo '<br>' . $zgolemeno;

//povikuvanje na funkcija preku string

$zgolemi_string = 'zgolemi';

$zgolemeno = $zgolemi_string($broj , 5);
echo '<br>' . $zgolemeno;

