
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
//if consition is the user is logged in or not
		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
			//nested if else condition 
			if (isset($_POST['submit'])){
				//printing the news if article is created
				echo '<h2> Article created </h2>';
			}
			//else if condition if article is deleted
			else if (isset($_POST['delete'])){
				echo '<h2> Article deleted </h2>';
			}
			//else condition if id condition does't approve
			else {
		?>


			<h2>Create Article</h2>
<!-- creating form where user input values -->
			<form action="articles.php" method="post" enctype="multipart/form-data">
				<!-- input the valur into this input tag -->
				<label>Name</label>
				<input type="text" name="name" />
<!-- input the valur into this input tag -->
				<label>Date</label>
				<input type="Date" name="date" />
				
				<!-- input the valur into this input tag -->
				<label>Content</label>
				<textarea name="content"></textarea>
				<!-- input the valur into this input tag -->
				<label>Image</label>
				<!-- input the valur into this input tag -->
				<input type="file" name="image[]" multiple="multiple"/>
<!-- input the valur into this input tag -->
				<input type="submit" name="submit" value="submit" />
			</form></br>
			
			
			
			<form action="articles.php" method="post">
				<!-- input the valur into this input tag -->
				<label><h2>Delete Article</h2></label></br>
				<label>Name</label>
				<!-- input the valur into this input tag -->
				<input type="text" name="name" />
<!-- input the valur into this input tag -->
				<label>Date</label>
				<input type="Date" name="date" />
<!-- input the valur into this input tag -->
				<input type="submit" name="delete" value="delete" />
			</form>

			<?php
			}
		}

		else {
			?>
			<h2>Log in</h2>
<!-- input the valur into this input tag -->
			<form action="admin.php" method="post">
				<label>Username</label>
				<input type="text" name="username" />
				<!-- input the valur into this input tag -->
				<label>Password</label>
				<input type="password" name="password" />
				<!-- input the valur into this input tag -->
<!-- submitting the data -->
				<input type="submit" name="submit" value="Log In" />
			</form>
		<?php
		}
	?>

</section>
	</main>