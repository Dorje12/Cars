<?php
//creating the class to controll the key page
class Primary_Controller_ForWeb {
	//creating the private local varaiable to help the class
	private $table_Of_enquiries;
	//creating the private local varaiable to help the class
	private $table_Of_articles;
	
	//creating the constructior with the attributes
	public function __construct($enquiriesTable, $articlesTable){
//assigning the value of local variable to the global variable
		$this->table_Of_enquiries = $enquiriesTable;
		//assigning the value of local variable to the global variable
		$this->table_Of_articles = $articlesTable;
	}
	
//creating the function that return the  function and output
	public function homePage_web() {
	//assinging the variable to the function to the global variable	
		$table_Of_articles = $this->table_Of_articles->search_all();
		//returning 
		return [
			//reteurning the template with file location
				'template' => 'home.html.php',
				//title of the page 
				'title' => 'Claires\'s Cars - HomePage',
				//returning the value of variable to the variables
				'variables' => [
							'table_Of_articles' => $table_Of_articles]
				];
				//ending function
	}
	//creating the function that return the  function and output	
	public function aboutPage_web() {
		//assinging the variable to the function to the global variable	
		//returning
		return [ 
				'template' => 'about.html.php',
				//reteurning the template with file location
				'title' => 'Claires\'s Cars - About Us Page',
				//title of the page 
					//returning the value of variable to the variables
				'variables' => []
				];
				//ending function
	}
	//creating the function that return the  function and output
	public function contactPage_web() {
		//assinging the variable to the function to the global variable
		//returning	
		return [
				'template' => 'contact.html.php',
				//reteurning the template with file location
				'title' => 'Claires\'s Cars - Contact Us Page',
				//title of the page 
					//returning the value of variable to the variablesd
				'variables' => []
				];
				//ending function
	}
	//creating the function that return the  function and output
	public function enquiriesPage_web(){
//assinging the variable to the function to the global variable	
//using if condition
		if (isset($_POST['submit'])){
			$this->table_Of_enquiries->inserting_Enquiry_db();
		}
		//returning
		return [
				'template' => 'enquiries.html.php',
				//reteurning the template with file location
				'title' => 'Claire\’s Enquiries Page',
				//title of the page 
					//returning the value of variable to the variables
				'variables' => [
				]
				];
				//ending function
	}
	//creating the function that return the  function and output
	public function careersPage_web() {
		//returning
		return [
				'template' => 'careers.html.php',
				//reteurning the template with file location
				'title' => 'Claire\’s Careers Page',
				//title of the page 
				//returning the value of variable to the variables
				'variables' => []
				];
				//ending function
	}
//creating the function that return the  function and output
	public function head() {
		//returning
		return [ 
				'template' => 'adminlogin.php',
				//reteurning the template with file location
				'title' => 'Login-admin Page',
				//title of the page 
				//returning the value of variable to the variables
				'variables' => []
				];
				//ending function
	}



}