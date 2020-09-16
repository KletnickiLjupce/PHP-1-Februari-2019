<table border="1">	
		<tr>	
			<th>Name</th>
			<th>Lastname</th>
			<th>Email</th>
		</tr>

		<?php

			if ( $students ) {
				foreach ($students as $id => $student) {
					echo "
						<tr>
							<td>$student->name</td>
							<td>$student->lastname</td>
							<td>$student->email</td>
							<td><a href='index.php?id=$id'>$student->name</a></td>
						</tr>
					";
				}
			} elseif( $student ){
				echo "
						<tr>
							<td>$student->name</td>
							<td>$student->lastname</td>
							<td>$student->email</td>
							<td><a href='index.php?id=$id'>$student->name</a></td>
						</tr>
					";
			}


		?>
</table>