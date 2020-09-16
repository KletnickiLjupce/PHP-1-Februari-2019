<!-- za pauza da se resi !!!!!!! -->

<form method="post">
<select>
	<?php

		$options = [];
		
		if(isset($_POST['new_option'])){
			$new_option = $_POST['new_option'];
		}

		if( isset($_POST['options']) ) {

			$options = explode('||', $_POST['options']);
			array_push($options, $new_option);

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

<input type="hidden" name="options" value=" <?= implode('||', $options) ?>">

</form>
<?php



// da se ispise edno input pole vo koe so klikanje na submit
// vo dropdownot pod nego ke dodava nova opcija