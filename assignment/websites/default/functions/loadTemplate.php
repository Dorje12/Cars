<?php
//creating the function with the parameters
function Loading_Template_ForWeb($fileName, $templateVars) {
	//using extract with the variables
	extract($templateVars);
	//using obstrat function
	ob_start();
	//requiring the file name
	require $fileName;
	//cleaning function the content
	$contents = ob_get_clean();
	//returning the variables
	return $contents;
}

//creating the function the eco the function to closed
function Closing_time_Sunday (){
	//printing the sunday closing hour using function
	echo '<h3>Opening Hours:</h3>
				<p>Mon-Fri: 09:00-17:30</p>
				<p>Sat: 09:00-17:00</p>
				<p>Sun: Closed</p> ';
			
}