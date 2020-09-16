<?php session_start(); ?>
<form method="post">
<select>
	<?php

		$options = $_SESSION['options'];
		
		if(isset($_POST['new_option'])){
			$_SESSION['options'] .= '||' . $_POST['new_option'];
		}

		if( isset($_SESSION['options']) ) {

			$options = explode('||', $_SESSION['options']);

			foreach ($options as $option) {
				echo "<option> $option </option>";
			}

		}

	?>
</select>

<br>
<br>

<input type="" name="new_option">

<input type="submit" name="" value="Submit">

</form>
<?php



// da se ispise edno input pole vo koe so klikanje na submit
// vo dropdownot pod nego ke dodava nova opcija