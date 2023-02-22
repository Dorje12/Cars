<?php
//creating the class that controls manufacture
class  Controller_for_manufacturerWeb {
//creating the private variable
	private $table_Of_cars;
	//creating the private variable
	private $table_Of_manufacturer;
	
//creating the constructor with the parameters
	public function __construct($table_Of_cars, $table_Of_manufacturer){
		//assinging the value of global variable to local variable
		$this->table_Of_cars = $table_Of_cars;
		//assinging the value of global variable to local variable
		$this->table_Of_manufacturer = $table_Of_manufacturer;
	}
//creating the function that have return types	
		public function ManufacturerCarsPage_web(){
		//assinging the value of function to local variable
		$config_cars = $this->table_Of_cars->search_path('manufacturerId', $_GET['manufacturer']);
			//assinging the value of function to local variable
		$config_manufacturer = $this->table_Of_manufacturer->search_all();
			//assinging the value of function to local variable
		$config_manuFacturerCars = $this->table_Of_manufacturer->search_path('id', $_GET['manufacturer']);
			//assinging the value of function to local variable
		$config_mannuFacturerName = $this->table_Of_manufacturer->Search_Names('id', $_GET['manufacturer']);
		//returning the values 
		return [ 
			//returning the template with the file path
				'template' => 'manufacturercars.html.php',
			//returning the title
				'title' => 'Claires\'s Cars - Manufacturers Page',
				//variable returning 
				'variables' => [
								'cars' => $config_cars,
								'manu' => $config_manufacturer,
								'manuCars' => $config_manuFacturerCars,
								'manuName' => $config_mannuFacturerName
								]
				];
	} 
}