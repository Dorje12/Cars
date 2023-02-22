
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

//if condition to post data when submit
	if (isset($_POST['submit'])) {
		//if condition to check id there is error is not?
		if ($_FILES['image']['error'] == 0) {
			//function in variable
			$fileName = $pdo->lastInsertId() . '.jpg';
			move_uploaded_file($_FILES['image']['tmp_name'], '../productimages/' . $fileName);
		}
//printing the data into it
		echo 'Product saved';
	}

	else {
		//else condition when if condition doesn't meet
		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
//this code for foreach loop
			foreach ($cars as $car){

		?>

			<h2>Edit Car</h2>

			<form action="editcar.php" method="POST" enctype="multipart/form-data">
	<!-- input method to input the value into form -->
				<input type="hidden" name="id" value="<?php echo $car['id']; ?>" />
				<label>Name</label>
				<input type="text" name="name" value="<?php echo $car['name']; ?>" />
	<!-- input method to input the value into form -->
				<label>Description</label>
				<textarea name="description"><?php echo $car['description']; ?></textarea>
	<!-- input method to input the value into form -->
				<label>Current Price</label>
				<input type="text" name="price" value="<?php echo $car['price']; ?>" />
	<!-- input method to input the value into form -->
				<label>Old Price</label>
				<input type="text" name="oldPrice" value="" />

					<!-- input method to input the value into form -->
				<label>Category</label>

				<select name="manufacturerId">
				<?php
			}
//foreach loop 
					foreach ($manu as $manufacturer) {
						//if condition is used
						if ($car['categoryId'] == $manufacturer['id']) {
							//printing the data
							echo '<option selected="selected" value="' . $manufacturer['id'] . '">' . $manufacturer['name'] . '</option>';
						}
						//else condition
						else {
							//printing the data
							echo '<option value="' . $manufacturer['id'] . '">' . $manufacturer['name'] . '</option>';	
						}
						
					}

				?>

				</select>

				<label>Product image</label>
<!-- input method to input the value into form -->
				<input type="file" name="image[]" multiple="multiple" />
<!-- input method to input the value into form -->
				<input type="submit" name="submit" value="Save Product" />

			</form>

		<?php
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
<!-- input method to input the value into form -->
				<input type="submit" name="submit" value="Log In" />
			</form>
		<?php
		}

	}
	?>

</section>
	</main>