<?php
//creating the class where we write the code
class Controller_for_adminWeb {
//creatig the private varaiable
	private $table_Of_cars;
	//creating the private varaiable
	private $table_Of_manufacturer;
	//creating the private varaiable
	private $table_Of_admin;
	//creating the private varaiable
	private $table_Of_enqueries;
	//creating the private varaiable
	private $table_Of_articles;
	//creaeting the function that have variables as parameters
	public function __construct($table_Of_cars, $table_Of_manufacturer, $table_Of_admin, $table_Of_enqueries, $table_Of_articles){
		

	//declaring the name of local variable to global varaiable
		$this->table_Of_cars = $table_Of_cars;
		//declaring the name of local variable to global varaiable
		$this->table_Of_manufacturer = $table_Of_manufacturer;
		//declaring the name of local variable to global varaiable
		$this->table_Of_admin = $table_Of_admin;
		//declaring the name of local variable to global varaiable
		$this->table_Of_enqueries = $table_Of_enqueries;
		//declaring the name of local variable to global varaiable
		$this->table_Of_articles = $table_Of_articles;
	}
	//creating function that uses another function to work
	//this function returns
	public function AdminHomePage_web(){
		//declaring the name of local variable to global varaiable
		$board_head = $this->table_Of_admin->search_all();

			return [
				//this page gives the template or path of the page
				'template' => 'admin/adminhome.html.php',
				//giving the title to the webpage
				'title' => 'Claires\'s Cars - Admin Home Page',
				//takes variables from variable
				'variables' => [
								'admins' => $board_head
								
								]
				];
	}
	//creating function that uses another function to work
	//this function returns
	public function AdminCarsPage_web() {
		//using varaiable to assign function
		$cars_web = $this->table_Of_cars->search_path('archive', 'N');
		//returning the value that we want
		return [
				//this page gives the template or path of the page
				'template' => 'admin/cars.html.php',
				//giving the title to the webpage
				'title' => 'Claires\'s Cars - Admin Cars Page',
				//takes variables from variable
				'variables' => [
								'cars' => $cars_web
								]
				];
	}
	
	//creating function that uses another function to work
	//this function returns
	public function AdminArchivedCarsPage_web() {
			//using varaiable to assign function
		$cars_web = $this->table_Of_cars->search_path('archive', 'Y');
			//returning the value that we want
		return [
				//this page gives the template or path of the page
				'template' => 'admin/archived.html.php',
				//giving the title to the webpage
				'title' => 'Claires\'s Cars - Admin Archive Page',
				//takes variables from variable
				'variables' => [
								'cars' => $cars_web
								]
				];
	}
//creating function that uses another function to work
	//this function returns
	public function AdminEditCarPage_web(){
			//using varaiable to assign function
			//using id else conditions 
		if (isset($_POST['submit'])){
			$this->table_Of_cars->update_all();
				//this page gives the template or path of the page
			header('location: /admin/cars.php');
		}
		//using if else conditions 
		else {
				//returning the value that we want
		$table_Of_cars= $this->table_Of_cars->search_path('id', $_GET['id']);
		$table_Of_manufacturer= $this->table_Of_manufacturer->search_all();
		//using if else conditions 
		return [
				//this page gives the template or path of the page
		'template' => 'admin/editcar.html.php',
		//giving the title to the webpage
		'title' => 'Claires\'s Cars - Admin Cars',
		//takes variables from variable
		'variables' => [
					'cars' => $table_Of_cars,
					'manu' => $table_Of_manufacturer
					]
		];
		}
	}
	//creating function that uses another function to work
	//this function returns
	public function AdminDeleteCarPage_web(){
			//using varaiable to assign function
		$this->table_Of_cars->search_Delete_path('id');
			//returning the value that we want
		return [
				//this page gives the template or path of the page
			'template' => 'admin/deletecar.html.php',
			//giving the title to the webpage
			'title' => 'Claires\'s Cars - Admin Cars Page',
			//takes variables from variable
			'variables' => []
		];
	}
	//creating function that uses another function to work
	//this function returns
	public function AdminArchiveCarPage_web(){
			//using varaiable to assign function
		$this->table_Of_cars->search_and_archiveCar('Y');
			//returning the value that we want
		return [
				//this page gives the template or path of the page
			'template' => 'admin/archivecar.html.php',
			//giving the title to the webpage
			'title' => 'Claires\'s Cars - Admin Archive Page',
			//takes variables from variable
			'variables' => []
		];
	}
	//creating function that uses another function to work
	//this function returns
		public function AdminRemoveRestoreCarPage_web(){
				//returning the value that we want
		//using if else conditions 

		if (isset($_POST['delete'])){
			$this->table_Of_cars->search_Delete_path('id');
		}//returning the value that we want
		//using if else conditions 

		else if (isset($_POST['restore'])){
			$this->table_Of_cars->search_and_archiveCar('N');
		}
			//returning the value that we want
		return [
				//this page gives the template or path of the page
			'template' => 'admin/removerestorecar.html.php',
			//giving the title to the webpage
			'title' => 'Claires\'s Cars - Admin Archive Page',
			//takes variables from variable
			'variables' => []
		];
	}
	//creating function that uses another function to work
	//this function returns
	public function AdminAddCarPage_web(){
		//using if else conditions 

		if (isset($_POST['submit'])){
			$this->table_Of_cars->adding_car_Db($_POST);
	//returning the value that we want
			$total = count($_FILES['image']['name']);	
//using for loop
			for ($i = 0; $i < $total; $i++) {
		//using if else conditions 

				if ($_FILES['image']['error'][$i] == 0) {
					$fileName = $this->table_Of_cars->lastInsertId() . '_' . $i . '.jpg';
					move_uploaded_file($_FILES['image']['tmp_name'][$i], 'images/cars/' . $fileName);
				}
			}
		}
		//creating function that uses another function to work
	//this function returns
	$table_Of_manufacturer= $this->table_Of_manufacturer->search_all();
		
			//returning the value that we want
		return [
				//this page gives the template or path of the page
				'template' => 'admin/addcar.html.php',
				//giving the title to the webpage
				'title' => 'Claires\'s Cars - Admin Cars Page',
				//takes variables from variable
				'variables' => [
								'manu' => $table_Of_manufacturer
								]
				];
	}
	//creating function that uses another function to work
	//this function returns
	public function AdminLogOutPage_web(){
			//returning the value that we want
		return [
				//this page gives the template or path of the page
				'template' => 'admin/adminlogout.html.php',
				//giving the title to the webpage
				'title'=> 'Claires\'s Cars - Admin User Page',
				//takes variables from variable
				'variables' => []
				];
	}
	//creating function that uses another function to work
	//this function returns
	public function AdminUsersPage_web(){
			//using varaiable to assign function
		$board_head= $this->table_Of_admin->search_all();
			//returning the value that we want
		return [
				//this page gives the template or path of the page
		'template'=>'admin/admins.html.php',
		//giving the title to the webpage
		'title'=> 'Claires\'s Cars - Admin User Page',
		//takes variables from variable
		'variables' => [
					'admins' => $board_head]
		];
	}
	//creating function that uses another function to work
	//this function returns
	public function AdminAddUserPage_web() {
				//using varaiable to assign function
		$this->table_Of_admin->adding_Admin_Db();
	//returning the value that we want
		return [
				//this page gives the template or path of the page
				'template' => 'admin/adminsupdated.html.php',
				//giving the title to the webpage
				'title' => 'Claires\'s Cars - Admin User Page',
				//takes variables from variable
				'variables' => [
								
								]
				];
	}
	//creating function that uses another function to work
	//this function returns
	public function AdminDeleteUserPage_web() {
			//using varaiable to assign function
		$this->table_Of_admin->deleting_Admin_db('username');
			//returning the value that we want
		return [
				//this page gives the template or path of the page
			'template' => 'admin/adminsdeleted.html.php',
			//giving the title to the webpage
			'title' => 'Claires\'s Cars - Admin User Page',
			//takes variables from variable
			'variables' => []
			];
		
	}
	//creating function that uses another function to work
	//this function returns
	public function AdminEnquiriesPage_web(){
			//using varaiable to assign function
		//using if else conditions 

		if (isset($_POST['id'])){
			$this->table_Of_enqueries->updating_Enqiry_Db();
		}
		//reassigning the local variable to global variable
		$table_Of_enqueries = $this->table_Of_enqueries->search_path('status', 'pending');
			//returning the value that we want
		return [
				//this page gives the template or path of the page
			'template'=> 'admin/enquiries.html.php',
			//giving the title to the webpage
			'title'=> 'Claires\'s Cars - Enquiries Page',
			//takes variables from variable
			'variables' => [
				'enquiries' => $table_Of_enqueries]
				];
	}
	//creating function that uses another function to work
	//this function returns
	public function AdminArticlesPage_web(){
	//using varaiable to assign function
		//using if else conditions 

		if (isset($_POST['submit'])){
				//this page gives the template or path of the page
			$this->table_Of_articles->adding_Article_Db();
		//using if else conditions 
			
			$sum = count($_FILES['image']['name']);	
		//returning the value that we want
			for ($i = 0; $i < $sum; $i++) {
		//using if else conditions 

				if ($_FILES['image']['error'][$i] == 0) {
					$fileName = $this->table_Of_articles->lastInsertId() . '_' . $i . '.jpg';
					move_uploaded_file($_FILES['image']['tmp_name'][$i], 'images/articles/' . $fileName);
				}
			}
		}
		//using if else conditions 

		else if(isset($_POST['delete'])){
			
			$this->table_Of_articles->deleting_Article_Db();
		}
			//returning the value that we want
		return [
				//this page gives the template or path of the page
			'template'=> 'admin/articles.html.php',
			//giving the title to the webpage
			'title'=> 'Claires\'s Cars - Articles Page',
			'variables' => []
			//takes variables from variable
			];
	}
}