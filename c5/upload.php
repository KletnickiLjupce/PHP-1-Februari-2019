
<form method="post" enctype="multipart/form-data">

	<input type="file" name="document">
	<input type="submit" value="Upload">
	<!-- <button onclick="this.form.submit()">Upload alternative</button> -->
</form>

<?php

if ( $_FILES ) {

	echo '<pre>';
	print_r($_FILES);
	echo '</pre>';

	$filename = rand() . $_FILES['document']['name'];
	$destination = 'upload/' . $filename;
	$temp_filename = $_FILES['document']['tmp_name'];

	if(!file_exists('upload')){
		mkdir('upload');
	}

	if($_FILES['document']['error'] === 0){

		if( $_FILES['document']['size'] < 5 * 1024 * 1024){

			if ( move_uploaded_file( $temp_filename , $destination) ){
				echo "Succesfull Upload";
			} else {
				echo "Unsuccesfull Upload";
			}

		} else {
			echo " Filesize is bigger than allowed ";
		}

	} else {
		echo " Error while uploading document file";
	}

}



?>