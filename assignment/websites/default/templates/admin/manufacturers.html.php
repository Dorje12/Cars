
	<main class="admin">

				<section class="left">
		<ul><!-- inside li tag a tag it used to link the php files to menu bar -->
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
//if condition to check the login status of user
		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		?>


			<h2>Manufacturers</h2>
<!-- //redirecting user to add manudracture page -->
			<a class="new" href="addmanufacturers.php">Add new manufacturer</a>

			<?php
			//printing the data below
			echo '<table>';
			//printing the data below
			echo '<thead>';
			//printing the data below
			echo '<tr>';
			//printing the data below
			echo '<th>Name</th>';
			//printing the data below
			echo '<th style="width: 5%">&nbsp;</th>';
			//printing the data below
			echo '<th style="width: 5%">&nbsp;</th>';
			//printing the data below
			echo '</tr>';

//using foreach loop for categories
			foreach ($species as $category) {
				echo '<tr>';
				//printing the data below
				echo '<td>' . $category['name'] . '</td>';
				//printing the data below
				echo '<td><a style="float: right" href="editmanufacturer.php?id=' . $category['id'] . '">Edit</a></td>';
				echo '<td><form method="post" action="deletemanufacturer.php">
				<input type="hidden" name="id" value="' . $category['id'] . '" />
				<input type="submit" name="submit" value="Delete" />
				</form></td>';
				//printing the data below
				echo '</tr>';
			}
//printing the data below
			echo '</thead>';
			//printing the data below
			echo '</table>';

		}

		else {
			?>
			<h2>Log in</h2>

			<form action="index.php" method="post">
				<!-- input method to input the value into form -->
				<label>Username</label>
				<input type="text" name="username" />
				<!-- input method to input the value into form -->

				<label>Password</label>
				<input type="password" name="password" />
<!-- when submmit is pressed add the details into database -->
				<input type="submit" name="submit" value="Log In" />
			</form>
		<?php
		}
	?>

</section>
	</main>

