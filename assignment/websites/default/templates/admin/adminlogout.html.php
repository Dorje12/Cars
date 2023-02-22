	<main class="admin">
				
	<?php	
	//if else condition to make user user is logged in
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		//destroying session to make sure you log out
		session_destroy();
	?>

	<section class="right">
		<!-- logout successful -->
	<h2>Log out Successful</h2>
	</section>
	<?php
	}
//else condition to make sure that user 
	else {
		?>
		<h2>Log in</h2>
<!-- creating form for the user to loginto the account and logout -->
		<form action="adminhome.php" method="post" style="padding: 40px">
		<!-- label and input to insert the value -->
			<label>Enter Username</label>
			<input type="text" name="username" />
			<!-- label and input to insert the value -->
			<label>Enter Password</label>
			<input type="password" name="password" />
			<!-- submit button to submit  -->
			<input type="submit" name="submit" value="Log In" />
		</form>
	<?php
	}
	?>
	</main>