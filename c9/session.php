<?php

session_start();

echo '<hr><pre>';
print_r($_SESSION);
echo '</pre>';

$_SESSION['name'] = 'Stavre';
$_SESSION['lastname'] = 'Stojkov';
$_SESSION['age'] = 50;
$_SESSION['email'] = '';
$_SESSION['phone'] = '072313333';