
<a href="index.php"> Go Back !</a>
<?php

// print_r($_POST);

require_once "db.php";

$sql = "INSERT INTO studenti ( name , lastname, age, email, phone)
	VALUES ( :name, :lastname, :age, :email, :phone)";

$query = $db->prepare($sql);

$query->bindValue(':name' , $_POST['name'], PDO::PARAM_STR);
$query->bindValue(':lastname' , $_POST['lastname'], PDO::PARAM_STR);
$query->bindValue(':age' , $_POST['age'], PDO::PARAM_INT);
$query->bindValue(':email' , $_POST['email'], PDO::PARAM_STR);
$query->bindValue(':phone' , $_POST['phone'], PDO::PARAM_STR);

$query->execute();
$query->fetch(PDO::FETCH_ASSOC);


?>