 
<main class="admin">

				<section class="left">
		<ul>
			<!-- inside li tag a tag it used to link the php files to menu bar -->
			<li><a href="manufacturers.php">Manufacturers</a></li>
			<!-- inside li tag a tag it used to link the php files to menu bar -->
			<li><a href="cars.php">Cars</a></li>
			<!-- inside li tag a tag it used to link the php files to menu bar -->
			<li><a href="archived.php">Archived Cars</a></li>
			<!-- inside li tag a tag it used to link the php files to menu bar -->
			<li><a href="admins.php"> Admins</a></li>
			<!-- inside li tag a tag it used to link the php files to menu bar -->
			<li><a href="enquiries.php"> Enquiries</a></li>
			<!-- inside li tag a tag it used to link the php files to menu bar -->
			<li><a href="articles.php"> Create Article</a></li>
			<!-- inside li tag a tag it used to link the php files to menu bar -->
			<li><a href="adminlogout.php"> Log Out</a></li>
		</ul>
	</section>


	<section class="right">
		
	<?php
//if condition to make sure the user is logged in
		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		?>


			<h2>Cars</h2>
<!-- creating link to direct user to add cars -->
			<a class="new" href="addcar.php">Add new car</a>

			<?php
			//printing the given data
			echo '<table>';
			//printing the given data
			echo '<thead>';
			//printing the given data
			echo '<tr>';
			//printing the given data
			echo '<th style="width: 10%">Model</th>';
			//printing the given data
			echo '<th style="width: 10%">Price</th>';
			//printing the given data
			echo '<th style="width: 10%">Engine Type</th>';
			//printing the given data
			echo '<th style="width: 10%">Mileage</th>';
			//printing the given data
			echo '<th style="width: 10%">Added By</th>';
			//printing the given data
			echo '<th style="width: 5%">&nbsp;</th>';
			//printing the given data
			echo '<th style="width: 5%">&nbsp;</th>';
			//printing the given data
			echo '</tr>';

			foreach ($cars as $car) {
				//printing the given data
				echo '<tr>';
				//printing the given data
				echo '<td>' . $car['name'] . '</td>';
				//printing the given data
				echo '<td>£' . $car['price'] . '</td>';
				//printing the given data
				echo '<td>' . $car['engineType'] . '</td>';
				//printing the given data
				echo '<td>' . $car['mileage'] . '</td>';
				//printing the given data
				echo '<td>' . $car['addedBy'] . '</td>';
				//printing the given data
				echo '<td><a style="float: right" href="editcar.php?id=' . $car['id'] . '">Edit</a></td>';
				//printing the given data
				echo '<td><form method="post" action="archivecar.php">
				<input type="hidden" name="id" value="' . $car['id'] . '" />
				<input type="submit" name="submit" value="Archive" />
				</form></td>';
				//printing the given data
				echo '</tr>';
			}
//printing the given data
			echo '</thead>';
			//printing the given data
			echo '</table>';

		}

		else {
			//else condition if the if condition doesn't make it
			?>
			<h2>Log in</h2>

			<form action="admin.php" method="post">
				<!-- inserting the value into input -->
				<label>Username</label>
				<input type="text" name="username" />
				<!-- inserting the value into input -->
				<label>Password</label>
				<input type="password" name="password" />
				<!-- submitting the data into form -->
				<input type="submit" name="submit" value="Log In" />
			</form>
		<?php
		}
	?>

</section>
	</main>