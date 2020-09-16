<a href="naracka.html"> Go Back Ur Wrong !!!</a>

<?php

ini_set('html_errors' , 'Off');
ini_set('display_errors' , 'Off');

echo '<pre>';
print_r($_REQUEST);
echo '</pre>';

$ceni = [
	'amburger' => 200,
	'chicken'  => 250,
	'otdog'    => 150,
	'majonez'  => 20,
	'kecap'    => 20,
	'pomfrit'  => 50,
	'pavlaka'  => 40,
];

$glaven_obrok 		  = $_REQUEST['glaven_obrok'];
$dodatoci			  = implode(' i ', $_REQUEST['dodatok']);
$ekstra_dodatoci	  = implode(' i ', $_REQUEST['ekstra_dodatok']);

$smetka = 0;

$smetka += $ceni[$glaven_obrok];

foreach ($_REQUEST['dodatok'] as $dodatok) {
	$smetka += $ceni[$dodatok];
}


foreach ($_REQUEST['ekstra_dodatok'] as $ekstra_dodatok) {
	$smetka += $ceni[$ekstra_dodatok];	
}

echo " Naracavre : $glaven_obrok kako glaven obrok, so dodatoci : $dodatoci, a ekstra dodatoci $ekstra_dodatoci ! A cenata na smetkata e $smetka";