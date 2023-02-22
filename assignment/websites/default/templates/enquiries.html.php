	<main class="home">
	
	
	<h2>Enquiries</h2>
	<!-- there is main tag with home class and heading that is displayed in web -->

<form action="enquiries.php" method="post">
		<!-- input takes data from user using form and send it to database -->
	<label>Name</label>
	<input type="text" name="customerName" />
	<!-- input takes data from user using form and send it to database -->
	<label>Phone Number</label>
	<input type="text" name="phoneNumber" />
		<!-- input takes data from user using form and send it to database -->
	<label>Email</label>
	<input type="text" name="email" />
		<!-- input takes data from user using form and send it to database -->
	<label>Enquiry</label>
	<textarea name="enquiry"></textarea>
<!-- submit button submits the form -->
	<input type="submit" name="submit" value="submit" />
</form>
<!-- header tag is used to display the message -->
					<h5> Enquiry submitted we will be intouch shortly.</h5>

	</main>