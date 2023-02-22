
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
//if condition posting when submit
	if (isset($_POST['submit'])) {
//printing the values
		echo 'Manufacturer Saved';
	}
	//else condition if condition doesn't meet
	else {
		//nested if condition to check when logeed in
		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
			//using foreach loop
			foreach ($currentManu as $currentMan){

		?>


			<h2>Edit Manufacturer</h2>

			<form action="" method="POST">
<!-- input method to input the value into form -->
				<input type="hidden" name="id" value="<?php echo $currentMan['id']; ?>" />
				<label>Name</label>
				<!-- input method to input the value into form -->
				<input type="text" name="name" value="<?php echo $currentMan['name']; ?>" />
<!-- 
submit when submitting the data -->
				<input type="submit" name="submit" value="Save Manufacturer" />

			</form>
			

		<?php
			}
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
<!-- 
submit when submitting the data -->
				<input type="submit" name="submit" value="Log In" />
			</form>
		<?php
		}

	}
	?>


</section>
	</main>
