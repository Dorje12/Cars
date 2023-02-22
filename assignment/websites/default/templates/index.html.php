<!DOCTYPE html>
<html>
	<!-- in this file we are linking the css file adn giving title from variable declare -->
	<head>
		<link rel="stylesheet" href="/styles.css"/>
		<title><?=$title?></title>
	</head>
	<body>
	<header>
		<section>
			<aside>
				<!-- calling the function to show the closing time of the sunday -->
				<?=Closing_time_Sunday();?>
			</aside>
			<!-- image of logo is used that is provided by university -->
			<img src="/images/logo.png"/>

		</section>
	</header>
	<nav>
		<ul>
			<li><a href="/">Home</a></li>
			<!-- using a tag to redirect to the mentioned page inside list  tag as menu bar -->
			<li><a href="/cars.php">Showroom</a></li>
			<!-- using a tag to redirect to the mentioned page inside list  tag as menu bar -->
			<li><a href="/about.php">About Us</a></li>
			<!-- using a tag to redirect to the mentioned page inside list  tag as menu bar -->
			<li><a href="/contact.php">Contact us</a></li>
			<!-- using a tag to redirect to the mentioned page inside list  tag as menu bar -->
			<li><a href="/admin/">Admin</a></li>
			<!-- using a tag to redirect to the mentioned page inside list  tag as menu bar -->
			<li><a href="/careers.php"> Claire's Careers</a></li>
		</ul>

	</nav>
	<!-- random banner generator is used in the file mentioned and it is used  -->
<img src="/images/randombanner.php"/>
<!-- recalling the variable  -->
		<?=$output?> 

<!-- footer tag is used to display the footer in the webpage -->
	<footer>
		&copy; Claire's Cars 2018
	</footer>
</body>
</html>
