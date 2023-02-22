
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

//if condition to make sure if the session is strated or not 
//s user is logged in or not
		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
//printing car deleted when condition meet
			echo 'Car deleted';

		}

		else {
			//if condition is not that good then else condition is used
			?>
			<h2>Log in</h2>

			<form action="index.php" method="post">
					<!-- inserting the value into input -->
				<label>Username</label>
				<input type="text" name="username" />
	<!-- inserting the value into input -->
				<label>Password</label>
				<input type="password" name="password" />
<!-- submitting the data inro form -->
				<input type="submit" name="submit" value="Log In" />
			</form>
		<?php
		}
	?>
</section>
	</main>

