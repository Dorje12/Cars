
	<main class="admin">

				<section class="left">
		<ul>
			<li><a href="addmanufacturers.php">Manufacturers</a></li>
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

	if (isset($_POST['submit'])) {
//using if else condition to add manufactururer
		echo 'Manufacturer added successfully';
	}
	//using else condition
	else {
		//using neested if else for the process
		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		?>


			<h2>Add Manufacturer</h2>

			<form action="" method="POST">
				<!-- creating from tag to create a form -->
				<label>Name</label>
				<!-- taking label tag and input to make user input the value -->
				<input type="text" name="name" />
<!-- 
submit to submit the value in database table -->
				<input type="submit" name="submit" value="Add Manufacturer" />

			</form>
			

		<?php
		//using else condition to the code to make code fluent
		}

		else {
			?>
			<!-- if session is not true then this happens -->
			<h2>Log in</h2>

			<form action="index.php" method="post">
				<!-- user input tag to take input from user -->
				<label>Username</label>
				<input type="text" name="username" />
				<!-- user input tag to take input from user -->
				<label>Password</label>
				<input type="password" name="password" />
				<!-- user input tag to take input from user -->
				<input type="submit" name="submit" value="Log In" />
			</form>
		<?php
		}

	}
	?>

</section>
	</main>
