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
// using session to make sure you login
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
//validation for nesded if else condition
		if(isset($_SESSION['master']) && $_SESSION['master'] == 'Y') {
			?>
					
<!-- creating form that takes data -->
		<form action="adminsupdated.php" method="post" style="padding: 40px">
		<h2>Add Admins</h2>
		<!-- creating form that takes data and insert into db -->
			<label>Username</label>
			<input type="text" name="username" />
			<!-- creating form that takes data and insert into db -->
			<label>First Name</label>
			<input type="test" name="firstName" />
			<!-- creating form that takes data and insert into db -->
			<label>Password</label>
			<input type="password" name="password" />
			<!-- creating form that takes data and insert into db -->
			<label>Master Account<br><h6>Y for Yes and N for No</h6><br></label>
			
			<input type="text" name="master" value="N" />
			<!-- creating form that takes data and insert into db -->
			<!--Now submit button to submit -->
			<input type="submit" name="submit" value="Log In" />
		</form><br>
		
			<!-- form action to delete admin -->
		<form action="adminsdeleted.php" method="post" style="padding: 40px">
		<label >
		<h2>Delete Admin</h2></label>
			<!-- creating form that takes data and deleting from db -->
			<!--Now submit button to submit -->
			<label>Enter Existing Username</label>
			<input type="text" name="username" />
<!--Now submit button to submit -->
			<input type="submit" name="delete" value="Delete" />
		
		</form>
			<?php
		}
		else{
			//else tag for condition and h3 for tagging
			?>
				<h3>You need to have Master rights to use this area.</h3>
			
			<?php
		}
		
	}
?>

	</section>
	</main>