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
//if condition to check the sessions 
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
		//h2 tag to print when admin is deleted
			?>
					<h2> Admin Account Deleted</h2>
			<?php
	
		
	}
?>

	</section>
	</main>