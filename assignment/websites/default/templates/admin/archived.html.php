
<main class="admin">

				<section class="left">
		<ul>
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
//if condition to check if the admin is logged in or not
		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		?>
			<h2>Cars</h2>

			<?php
			//printing the given data
			echo '<table>';
			//printing the given data
			echo '<thead>';
			//printing the given data
			echo '<tr>';
			//printing the given data
			echo '<th style="width: 30%">Name</th>';
			//printing the given data
			echo '<th style="width: 10%">Price</th>';
			//printing the given data
			echo '<th style="width: 5%">&nbsp;</th>';
			//printing the given data
			echo '<th style="width: 5%">&nbsp;</th>';
			//printing the given data
			echo '</tr>';
//using foreach loop to submit the data
			foreach ($cars as $car) {
				echo '<tr>';
				//printing the given data
				echo '<td>' . $car['name'] . '</td>';
				//printing the given data
				echo '<td>£' . $car['price'] . '</td>';
				//printing the given data
				echo '<td><a style="float: right" href="editcar.php?id=' . $car['id'] . '">Edit</a></td>';
				//printing the given data
				echo '<td><form method="post" action="removerestorecar.php">
				<input type="hidden" name="id" value="' . $car['id'] . '" />
				<input type="submit" name="delete" value="Delete" />
				<input type="submit" name="restore" value="Restore" />
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
//else condition to if condition doesn't make it
			?>
			<h2>Log in</h2>
<!-- creating data into input tag  -->
			<form action="admin.php" method="post">
				<label>Username</label>
				<!-- creating data into input tag  -->
				<input type="text" name="username" />
				<label>Password</label>
				<!-- creating data into input tag  -->
				<input type="password" name="password" />
<!-- submit the data when submit button -->
				<input type="submit" name="submit" value="Log In" />
			</form>
		<?php
		}
	?>

</section>
	</main>