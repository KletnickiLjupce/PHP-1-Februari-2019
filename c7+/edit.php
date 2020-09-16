<a href="index.php"> Go Back !</a>
<br>

<?php

require_once "db.php";

if(isset($_POST['submit']) && $_POST['submit'] === 'Update' ){
	
	$sql = "UPDATE studenti
			SET name = :name , lastname = :lastname, email = :email , age = :age , phone = :phone
			WHERE id = :id
	";

	$query = $db->prepare($sql);
	$query->bindValue(':name' , $_POST['name'], PDO::PARAM_STR);
	$query->bindValue(':lastname' , $_POST['lastname'], PDO::PARAM_STR);
	$query->bindValue(':age' , $_POST['age'], PDO::PARAM_INT);
	$query->bindValue(':email' , $_POST['email'], PDO::PARAM_STR);
	$query->bindValue(':phone' , $_POST['phone'], PDO::PARAM_STR);
	$query->bindValue(':id' , $_POST['id'], PDO::PARAM_INT);

	if( $query->execute() ){
		echo 'Successful Update';
	} else {
		echo 'Unsuccessful Update';
	}

} else {

	$id = $_POST['id'];

	//kako ne treba bez query bind parametri
	//sekogas da se koristat prepared statments

	$sql = "SELECT * FROM studenti WHERE id = '$id' ";
	$query = $db->query($sql);
	$result = $query->fetch(PDO::FETCH_ASSOC);

	?>

	<style type="text/css">
		table, td, th {
			border : 1px solid black;
			border-collapse: collapse;
			padding: 5px;
		}

		label{
			clear: left;
		}

		input {
			float : right;
		}

		label, input {
			clear: both;
		}
	</style>

	<hr>

	<form action="edit.php" method="post">

		<input type="hidden" name="id" value="<?= $id ?>">

		<label for="name"> Name </label>
		<input type="" name="name" id='name' value="<?= $result['name'] ?>">

		<br>

		<label for="lastname"> Lastname </label>
		<input type="" name="lastname" id='lastname' value="<?= $result['lastname'] ?>">

		<br>

		<label for="age"> Age </label>
		<input type="" name="age" id='age' value="<?= $result['age'] ?>">

		<br>

		<label for="email"> Email </label>
		<input type="" name="email" id='email' value="<?= $result['email'] ?>">

		<br>

		<label for="phone"> Phone </label>
		<input type="" name="phone" id='phone' value="<?= $result['phone'] ?>">

		<input type="submit" name="submit" value="Update" style="width: 100%">
	</form>

<?php
	}
?>