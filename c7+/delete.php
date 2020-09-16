
<a href="index.php"> Go Back !</a>
<br>

<?php

// echo $_GET['id'];


require_once "db.php";

$sql = " DELETE FROM studenti
		 WHERE id = :id";

$query = $db->prepare($sql);

$query->bindValue( ':id' , $_GET['id'] , PDO::PARAM_INT);
$query->execute();

$query->fetch(PDO::FETCH_ASSOC);

// header("Location: index.php");