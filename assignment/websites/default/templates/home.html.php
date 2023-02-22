<main class="home">
<!-- paragraph tag is used to display welcome message where main tag with home class -->
	<p>Welcome to Claire's Cars, Northampton's specialist in classic and import cars.</p>

	<ul class="cars">

	<?php
//using foreach loop for the article table
	foreach ($table_Of_articles as $article) {
//printing the html tag in php print
		echo '<li>';
		//using for loop for the image processing
		for ($i = 0; file_exists('images/articles/' . $article['id'] . '_' . $i . '.jpg'); $i++) {?>
<!-- linking the image so that image can be displayed when clicked -->
            <a href="/images/articles/<?=$article['id'] . '_' . $i?>.jpg"><img src="/images/articles/<?=$article['id'] . '_' . $i ?>.jpg" /></a>
          <?php 
        } 
		//printing the html tag in pho echo code
		echo '<div class="details">';
		//printing the html tag in pho echo code
			echo '<h2>' . $article['name'] . '</h2>';
			//printing the html tag in pho echo code
			echo '<h4>' . $article['date'] . '</h4>';
			//printing the html tag in pho echo code
			echo '<h4>' . $article['addedBy'] . '</h3>';
			//printing the html tag in pho echo code
			echo '<p>' . $article['content'] . '</p>';
//printing the html tag in pho echo code
		echo '</div>';
		//printing the html tag in pho echo code
		echo '</li>';
	}

	?>

	</ul>
	
	
	
	
	
</main>