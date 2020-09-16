
<a href="login.php"> Back to Log In</a>

<?php


echo '<pre>';
print_r($_GET);
echo '</pre>';

echo '<pre>';
print_r($_POST);
echo '</pre>';


echo '<pre>';
print_r($_REQUEST);
echo '</pre>';


error_reporting(1);

//napravete validacija dali username e Neven\
//ako i passwordot e stavre ispisete "Uspesen login"

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if( isset($username) && isset($password)){

	if( $username === 'Neven' && $password === 'stavre') {

		echo 'Uspesen login ' . $username;
	} else {
		echo 'Pogresen username ili password';
	}

} else {
	echo 'Nemate vneseno username ili password';
}


?>
