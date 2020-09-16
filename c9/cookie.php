<?php


setcookie('torta' , 'Snikers' , time() + 3600);
//setcookie('torta' , 'Snikers' , time() - 3600);


echo '<hr><pre>';
print_r($_COOKIE);
echo '</pre>';


echo $_COOKIE['torta'];
