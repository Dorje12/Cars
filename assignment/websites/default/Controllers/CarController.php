<?php
//creating the class that controll the car page
class controller_for_carPage{
	
	//creating the private variable that is private
	private $table_Of_cars;
		//creating the private variable that is private
	private $table_Of_manufacturer;
	
//creating the constructor that have parameter
	public function __construct($carTable, $manufacturerTable){
		//assigning the value of local variable to global varaiable
		$this->table_Of_cars = $carTable;
			//assigning the value of local variable to global varaiable
		$this->table_Of_manufacturer = $manufacturerTable;
	}
	
	//creating the function that takes data and return
	public function carsPage_web() {
		//adding the function to the variable
		$table_Of_cars = $this->table_Of_cars->search_path('archive', 'N');
	//adding the function to the variable
		$table_Of_manufacturer = $this->table_Of_manufacturer->search_all();
		//this code return type
		return [
			//this code send template of the file path
				'template' => 'cars.html.php',
//this code returns the title of page
				'title' => 'Claires\'s Cars - Our Cars',
				//this code return the assigned value of tables  or variables
				'variables' => [
							'table_Of_cars' => $table_Of_cars,
							'table_Of_manufacturer' => $table_Of_manufacturer
							]
				]; 
	}
	
}