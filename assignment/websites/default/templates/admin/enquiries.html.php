
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
//if condition to check the login status of user
		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		?>


			<h2>Enquiries</h2>


			<?php
			//printing the data below
			echo '<table>';
				//printing the data below
			echo '<thead>';
				//printing the data below
			echo '<tr>';
				//printing the data below
			echo '<th style="width: 10%">Customer Name</th>';
				//printing the data below
			echo '<th style="width: 10%">Mobile Number</th>';
				//printing the data below
			echo '<th style="width: 10%">Email Id</th><br>';
				//printing the data below
			echo '<th style="width: 20%">Enquires</th>';
				//printing the data below
			echo '<th style="width: 5%">Finish</th>';
				//printing the data below
			echo '</tr>';

			foreach ($enquiries as $enquiry) {
					//printing the data below
				echo '<tr>';
					//printing the data below
				echo '<td>' . $enquiry['customerName'] . '</td>';
					//printing the data below
				echo '<td>' . $enquiry['phoneNumber'] . '</td>';
					//printing the data below
				echo '<td>' . $enquiry['email'] . '</td>';
					//printing the data below
				echo '<td>' . $enquiry['enquiry'] . '</td>';
					//printing the data below
				echo '<td> <form method="post" action="enquiries.php">
				<input type="hidden" name="id" value="' . $enquiry['id'] . '" />
				<input type="submit" name="status" value="Complete" />
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

			<form action="admin.php" method="post">
				<!-- input method to input the value into form -->
				<label>Username</label>
				<input type="text" name="username" />
				<!-- input method to input the value into form -->
				<label>Password</label>
				<input type="password" name="password" />
<!-- when submitting the data post in form -->
				<input type="submit" name="submit" value="Log In" />
			</form>
		<?php
		}
	?>

</section>
	</main>