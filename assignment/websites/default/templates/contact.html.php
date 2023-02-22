<main class="home">

				<h2>Enquiries</h2>
<!-- there is main tag with home class and heading that is displayed in web -->
			<form action="enquiries.php" method="post">
				<!-- input takes data from user using form and send it to database -->
				<label>Name</label>
				<input type="text" name="customerName" />
<!-- input takes data from user using form and send it to database -->
				<label>Mobile Number</label>
				<input type="text" name="phoneNumber" />
				<!-- input takes data from user using form and send it to database -->
				<label>Email Id</label>
				<input type="text" name="email" />
				<!-- input takes data from user using form and send it to database -->
				<label>Enquiry</label>
				<textarea name="enquiry"></textarea>
<!-- input takes data from user using form and send it to database -->
<!-- submit button submits the form -->
				<input type="submit" name="submit" value="Finish" />
			</form>
			<!-- ending form and main tag -->
</main>