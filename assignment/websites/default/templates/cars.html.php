<?php
 
?>
	<main class="admin">
<!-- there is main tag with class admin and section tag with class left  -->
	<section class="left">
		<ul>
<?php 	
//using foreach loop for linking the webpage
foreach ($table_Of_manufacturer as $manufacturer){
	//printing the given data
			echo '<li><a href="manufacturercars.php?manufacturer=' . $manufacturer['id'] . '">' . $manufacturer['name'] . '</a></li>';
		
	} 
			
?>
		</ul>
	</section>

	<section class="right">
<!-- heading tag is written to display the heading -->
		<h2>Our cars</h2>

	<ul class="cars">

	<?php
//using foreach loop for the following condition
	foreach ($table_Of_cars as $car) {
//printing the following data
		echo '<li>';
//nested loop is required for linking the images in web page
		 for ($i = 0; file_exists('images/cars/' . $car['id'] . '_' . $i . '.jpg'); $i++) {?>
		 <!-- linking the image to make it open in new page -->
            <a href="/images/cars/<?=$car['id'] . '_' . $i?>.jpg"><img src="/images/cars/<?=$car['id'] . '_' . $i ?>.jpg" /></a>
          <?php 
        } 
//printing the given data in echo
		echo '<div class="details">';
		//foreach loop is used again 
				foreach ($table_Of_manufacturer as $manufacturer) {
					//if else condition is used here for manufacturer id
			if ($car['manufacturerId'] == $manufacturer['id']) {
				//printing the mentioned data
				echo '<h2>' . $manufacturer['name'] . ' ' . $car['name'] . '</h2>';
			}
		}
		//printing the mentioned data
		echo '<h4>' . $car['oldPrice'] . '</h4>';
		//printing the mentioned data
		echo '<h3>Now £' . $car['price'] . '</h3>';
		//printing the mentioned data
		echo '<p>' . $car['description'] . '</p>';
//printing the mentioned data
		echo '</div>';
		echo '</li>';
	}
	//ending php code here!!
	?>
</ul>
</section>
	</main>