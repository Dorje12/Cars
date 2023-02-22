<main class="admin">
<!-- main tag is used class name admin with section tag -->
	<section class="left">
		<ul>
<?php 	
//using for loop into the code to link the cars
foreach ($manu as $manufacturers){
	//printing the html tag that links in php echo code
			echo '<li><a href="manufacturercars.php?manufacturer=' . $manufacturers['id'] . '">' . $manufacturers['name'] . '</a></li>';
		
	} 
			
?>
		</ul>
	</section>

	<section class="right">

<?php		
//using foreach loop to print manufacturer name
foreach ($manuName as $manufacturerName){
	//printing the html tag with varaiable with parameter
			echo '<h1>'. $manufacturerName['name'] . ' Cars</h1><br/>';
			
			} 
 ?>

	<ul class="cars">


	<?php
//using loop to display image of cars
	foreach ($cars as $car) {
		//printing html tag 
		echo '<li>';
//using if else condition to manage condition
		if (file_exists('images/cars/' . $car['id'] . '.jpg')) {
			//printing the images of cars
			echo '<a href="images/cars/' . $car['id'] . '.jpg"><img src="images/cars/' . $car['id'] . '.jpg" /></a>';
		}
//printing html tag
		echo '<div class="details">';
		//using foreach loops
		foreach ($manuCars as $manufacturer){
			//printing the html tag
				echo '<h2>' . $manufacturer['name'] . ' ' . $car['name'] . '</h2>';
		}	//printing the html tag
		echo '<h3>£' . $car['price'] . '</h3>';
		//printing the html tag
		echo '<p>' . $car['description'] . '</p>';
//printing the html tag
		echo '</div>';
		//printing the html tag
		echo '</li>';
	}

	?>

</ul>
<!-- closing html tags -->
</section>
	</main>
