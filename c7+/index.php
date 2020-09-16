<!-- <table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Lastname</th>
			<th>age</th>
			<th>email</th>
			<th>phone</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>1</td>
			<td>Neven</td>
			<td>Gjoreski</td>
			<td>31</td>
			<td>n.g@hotmail.com</td>
			<td>077111111</td>
		</tr>
		<tr>
			<td>1</td>
			<td>Neven</td>
			<td>Gjoreski</td>
			<td>31</td>
			<td>n.g@hotmail.com</td>
			<td>077111111</td>
		</tr>
		<tr>
			<td>1</td>
			<td>Neven</td>
			<td>Gjoreski</td>
			<td>31</td>
			<td>n.g@hotmail.com</td>
			<td>077111111</td>
		</tr>
	</tbody>
</table> -->


<?php

require_once "db.php";


$sql = 'SELECT * FROM studenti';
$query = $db->query($sql);
$result = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Lastname</th>
			<th>age</th>
			<th>email</th>
			<th>phone</th>
			<th>Delete</th>
			<th>Update</th>
		</tr>
	</thead>

	<tbody>
		<?php

		foreach ($result as $row) {
			echo "
	<tr>
		<td>{$row['id']}</td>
		<td>{$row['name']}</td>
		<td>{$row['lastname']}</td>
		<td>{$row['age']}</td>
		<td>{$row['email']}</td>
		<td>{$row['phone']}</td>
		<td><a href='delete.php?id={$row['id']}'> Delete </a></td>
		<td>
			<form method='post' action='edit.php'>
				<input type='hidden' name='id' value='{$row['id']}'>
				<input type='submit' value='Edit'/>
			</form>
		</td>
	</tr>
			";
		}

		?>
	</tbody>
</table>


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

<form action="insert.php" method="post">
	<label for="name"> Name </label>
	<input type="" name="name" id='name'>

	<br>

	<label for="lastname"> Lastname </label>
	<input type="" name="lastname" id='lastname'>

	<br>

	<label for="age"> Age </label>
	<input type="" name="age" id='age'>

	<br>

	<label for="email"> Email </label>
	<input type="" name="email" id='email'>

	<br>

	<label for="phone"> Phone </label>
	<input type="" name="phone" id='phone'>

	<input type="submit" name="" value="Submit" style="width: 100%">
</form>