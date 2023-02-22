
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
		
	<?php
//if consition to check the session log in or not 

		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
//printint hte text for output

			echo 'Car archived';

		}

		else {
			//else condition when if condition is not mer
			?>
			<h2>Log in</h2>
<!-- creating the for to submit data -->
			<form action="index.php" method="post">
				<label>Username</label>
				<input type="text" name="username" />
<!-- inserting the data and password into it -->
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

