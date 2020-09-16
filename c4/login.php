<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>

	<form method="post" action="request.php">
		<label for="username">Username :</label>
		<input name="username" id="username" placeholder="Enter Username"
		required>

		<br>
		<br>

		<label for="password">Password :</label>
		<input type="password" name="password" id="password" placeholder="Enter Password" required>

		<br>
		<br>

		<input type="hidden" name="from" value="facebook">

		<input type="submit" value="Submit">

	</form>

	<?php

	echo '<pre>';
	print_r($_GET);
	echo '</pre>';

	?>
</body>
</html>