<?php
//creating the class to controll the manufracture of the admin in database
class AdminManufacturerController {
	//creating the private variable that is used in class
	private $table_Of_cars;
	//creating the private variable that is used in class
	private $table_Of_manufacturer;
	//creating the private variable that is used in class
	private $table_Of_admin;
	//creating the function that help the web to run
	public function __construct($carTable, $manufacturerTable, $adminTable){
		//assigning the value of the local varaiable to global variable
		$this->table_Of_cars = $carTable;
		//assigning the value of the local varaiable to global variable
		$this->table_Of_manufacturer = $manufacturerTable;
		//assigning the value of the local varaiable to global variable
		$this->table_Of_admin = $adminTable;
	}
	
		//creating the function that help the web to run
//with the return type that returns some useful data
	public function AdminManufacturersPage_web(){
		//assigning the value to the variable through the function
		$species = $this->table_Of_manufacturer->search_all();
		//returning the return type
		return [
				'template' => 'admin/manufacturers.html.php',
				//returning the template with the file path
				'title' => 'Claires\'s Cars - Admin Manufacturer Page',
				//this show the title of the page 
				//this vode returns the variable to the variables
				'variables' => [
								'species' => $species
								]
		];
	}
	//creating the function that help the web to run
//with the return type that returns some useful data
	public function AdminAddManufacturersPage_web(){
		
		
		if (isset($_POST['submit'])) {
					//assigning the value to the variable through the function
			$this->table_Of_manufacturer->adding_Manufacturer_Db($_POST);
		}
		return [
			 //returning the return type
				'template' => 'admin/addmanufacturer.html.php',
				//returning the template with the file path
				'title' => 'Claires\'s Cars - Admin Manufacturer',
				//this show the title of the page 
				//this vode returns the variable to the variables
				'variables' => []
				];
	}
	//creating the function that help the web to run
//with the return type that returns some useful data
	public function AdminEditManufacturerPage_web(){
		if (isset($_POST['submit'])) {
					//assigning the value to the variable through the function
			$this->table_Of_manufacturer->update_Manufacturer_Db();
			//assigning the value to the file path
			header('location: /admin/manufacturers.php');
		}
		//assigning the value to the variable through the function
		$table_Of_manufacturer = $this->table_Of_manufacturer->search_path('id', $_GET['id']);
		
		return [
			
				'template' => 'admin/editmanufacturer.html.php',
				//returning the template with the file path
				'title' =>'Claires\'s Cars - Admin Manufacturer',
				//this show the title of the page 
				//this vode returns the variable to the variables
				'variables' => [
								'table_Of_manufacturer' => $table_Of_manufacturer
								]
				];
	}
	//creating the function that help the web to run
//with the return type that returns some useful data
	public function AdminDeleteManufacturerPage_web(){
				//assigning the value to the variable through the function
		$this->table_Of_manufacturer->search_Delete_path('id');
		 //returning the return type
		return [
			'template' => 'admin/deletemanufacturer.html.php',
			//returning the template with the file path
			'title' => 'Claires\'s Cars - Admin Manufacturer',
			//this show the title of the page 
				//this vode returns the variable to the variables
			'variables' => []
		];
	}
	
}