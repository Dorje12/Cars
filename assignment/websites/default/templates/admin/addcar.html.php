<main class="admin">
<!-- main tag with the class admin is used -->

				<section class="left">
					<!-- section tag with the class left is used -->
		<ul>
			<!-- ul tag is used -->
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

		
	<?php
//inside php using id else condition and using post method to post data using button

	if (isset($_POST['submit'])) {


//printing the message when the car is added
		echo 'Car added sucessfully';
	}
	else {
		//using nested if else for the session
		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		?>


			<h2>Add Car</h2>

			<form action="addcar.php" method="POST" enctype="multipart/form-data">
				<!-- inside fomr tag we are using label taag to give label to input tag where user
				insert data -->
				<label>Car Model</label>
				<input type="text" name="model" />
	<!-- inside fomr tag we are using label taag to give label to input tag where user
				insert data -->
				<label>Car Engine Type</label>
				<input type="text" name="engineType" />
					<!-- inside fomr tag we are using label taag to give label to input tag where user
				insert data -->
				<label>Car Mileage</label>
				<input type="text" name="mileage" />
					<!-- inside fomr tag we are using label taag to give label to input tag where user
				insert data -->
				<label>Description</label>
				<textarea name="description"></textarea>
	<!-- inside fomr tag we are using label taag to give label to input tag where user
				insert data -->
				<label>Price</label>
				<input type="text" name="price" />
	<!-- inside fomr tag we are using label taag to give label to input tag where user
				insert data -->
				<label>Manufacturer</label>
			<!-- selecting the manufacture id from database tablet to display value -->
				<select name="manufacturerId">
				<?php
//using for each loop
					foreach ($manu as $manufacturer) {
						echo '<option value="' . $manufacturer['id'] . '">' . $manufacturer['name'] . '</option>';
					}

				?>

				</select>
<!-- for images input for user -->
				<label>Image</label>

				<input type="file" name="image[]" multiple="multiple"/>
<!-- submit button to submit inserted data -->
				<input type="submit" name="submit" value="Add Car" />

			</form>
			

		
		<?php
		}

		else {
			?>
	
			<h2>Log in</h2>
<!-- form tag to create form -->
			<form action="index.php" method="post">
<!-- creating a password input -->
				<label>Password</label>
				<input type="password" name="password" />
<!-- input tag to take data from user -->
				<input type="submit" name="submit" value="Log In" />
			</form>
		<?php
		//ending php
		}

	}
	?>

</section>
	</main>