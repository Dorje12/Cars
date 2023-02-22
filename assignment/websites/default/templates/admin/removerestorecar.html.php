
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

//checking if the session is started or not and if user is logged in or not
		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
			//nested id condition to restore
			if (isset($_POST['restore'])){
				//printing the data below
				echo 'Car Restored';
			}
			//nested id condtion to delete
			else if (isset ($_POST['delete'])){
				//printing the data below
				echo 'Car Deleted';
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
<!-- when submmit is pressed add the details into database -->
				<input type="submit" name="submit" value="Log In" />
			</form>
		<?php
		}
	?>
</section>

	</main>
	

