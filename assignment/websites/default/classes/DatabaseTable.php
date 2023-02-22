<?php
// we are creating the class for the databasefile that we need to run the code with
class Config_queries {
	//creating a private variable so that we can use them in further codes
	private $pdo;
	//creating a private variable so that we can use them in further codes
	private $database_table;
	//creating a private variable so that we can use them in further codes
	private $main_key;

	//creating the public function or constructor with the vlaues main_key and 
	//tables that are required for it
	//construct is the construction that we need for this code to run
	public function __construct($pdo, $database_table, $main_key) {
		//this local variable is said to be equal in above variable i.e public variable
		$this->pdo = $pdo;
		//this local variable is said to be equal in above variable i.e public variable
		$this->database_table = $database_table;
		//this local variable is said to be equal in above variable i.e public variable
		$this->main_key = $main_key;
		//we are closing the construction or function
	}

	//we are creating the public function that search all files in the database
	//we have returned fetched data from the table that have been assigned
		public function search_all(){
		//we have a varaiable that selects data from database and execute it
		$database_use = $this->pdo->prepare('SELECT * FROM ' . $this->database_table);
		//this code use execute function that is inbuilt and helps to execute the 
		//code written
		$database_use->execute();
		//this code returns the fetched data from the database mentioned in the code.
		return $database_use->fetchAll();
		//we are closing the function
	}
	
	//we are creating the function that search the path with the variables passed
	//into the function where the function returns the fetched data from the 
	//database we have mentioned in the code
	public function search_path($area, $merit){
//this variable uses the prepare function that is inbuilt and 
//it selects the data from the table and send it to further process
		$database_use = $this->pdo->prepare('SELECT * FROM ' . $this->database_table . ' WHERE ' . $area . ' = :value');
		//this code assign the value to the variable that is fetched from database
		$requirement_of_web = [
			//this code add value 
				'value' => $merit
				];
		//this varaiable execute the variable using the database
		//the execute function is inbuilt function that is used here
		$database_use->execute($requirement_of_web);
		//this code returns the fetched data 
		return $database_use->fetchAll();
		//ending the function here
	}
	

//creating the function that updates data 
	public function update_all(){
		//this code updates the data to table using update query
		$database_use = $this->pdo->prepare('UPDATE ' . $this->database_table . '
		
								SET name = :name,
								    description = :description, 
								    price = :price,
								    manufacturerId = :manufacturerId,
									oldPrice = :oldPrice
								   WHERE id = :id 
						');
		//this is the code that updates using the queries
		//this code uses the default code post that posts the data
		//creating function
		$requirements_of_web = [
			//this code post name
			'name' => $_POST['name'],
			//this code post description
			'description' => $_POST['description'],
			//this code post price
			'price' => $_POST['price'],
			//this code post manufacturer id
			'manufacturerId' => $_POST['manufacturerId'],
			//this code post old price
			'oldPrice' => 'Was £' . $_POST['oldPrice'],
			//this code post id
			'id' => $_POST['id']
			//closing query
		];
		//this code execute the query that is written above
		$database_use->execute($requirements_of_web);
		//closing the function 
	}
	//creating function that search the delete path with the area parameter
	//this function execute the delete queries
	//from the database created
	public function search_Delete_path($area){
		//this variable execute the delete queries that delete the database selected
		$database_use = $this->pdo->prepare('DELETE FROM ' . $this->database_table . ' WHERE ' . $area . ' = :value');
		//this varaiable post the value
		//post is the default function
		$requirements_of_web = ['value' => $_POST['id']];
		//this vairabale execute the function above
		$database_use->execute($requirements_of_web);
		//closing the function
	}
	
	//creating the function that search and archive the cars with the parameter
	//this function update the update queries
	//from the database we select
	public function search_and_archiveCar($area){
//this varaibale use the update query form the database selected
		$database_use = $this->pdo->prepare('UPDATE ' . $this->database_table . '
									SET archive = :value
									WHERE id = :id ');
//we are setting the values to the database table we have selected throught this code
//now we are adding into the variable to execute the action in this code
		$requirements_of_web = [
			//this code update the valur to the varaiable assigned
				'value' => $area,
			//this code post the data to the id using post function that is inbuild
				'id' => $_POST['id']
				//closing 
				];
			//this code executes the above variable to update the value to the database that is selected
		$database_use->execute($requirements_of_web);
		//closing the function
		
	}
	
//creating the function that adds the car to the database
//this function insert cars ino the database selected
//there are no parameter in the functions
	public function adding_car_Db(){
		//in the variable we are inserting the values to the attributes of the table in selected database
		$database_use = $this->pdo->prepare('INSERT INTO cars (name, description, price, manufacturerId, archive, engineType, mileage, addedBy)
									VALUES (:model, :description, :price, :manufacturerId, :archive, :engineType, :mileage, :addedBy)');
		//we are writting the validation for inserting the value to the database

		$requirements_of_web = [
			//we are posting the model using post prebuilt function
			'model' => $_POST['model'],
			//we are posting the description using post prebuilt function
			'description' => $_POST['description'],
			//we are posting the price using post prebuilt function
			'price' => $_POST['price'],
			//we are posting the manudacturer using post prebuilt function
			'manufacturerId' => $_POST['manufacturerId'],
			//we are posting the model using post prebuilt function
			'archive' => 'N',
			//we are posting the engine Type using post prebuilt function
			'engineType' => $_POST['engineType'],
			//we are posting the mileage using post prebuilt function
			'mileage' => $_POST['mileage'],
			//we are posting the user using post prebuilt function
			'addedBy' => $_SESSION['user']
			//closing the variable 
			];
		//executing the valdation that is given in code
		$database_use->execute($requirements_of_web);
		//closing the function
	}
	
	//function that insert into database
	public function adding_Manufacturer_Db(){
		//this variable inserts the data into the database
		$database_use = $this->pdo->prepare('INSERT INTO manufacturers (name)
									VALUES (:name)');
		
		//this varaiable uses post function to post data
		$requirements_of_web = [
			//this function post the name data
			'name' => $_POST['name']
			//variable end
			];
		//this code executes the variable mentioned above
		$database_use->execute($requirements_of_web);
		//closing the function
		
	}
	//creating the function taht updates the data into the table
	public function update_Manufacturer_Db(){
		//this variable use that update the table
		$database_use = $this->pdo->prepare('UPDATE ' . $this->database_table . '
									SET name = :name
									WHERE id = :id ');
		//validations or post
		$requirements_of_web = [
			//posting the name to database
				'name' => $_POST['name'],
				//posting the id to database
				'id' => $_POST['id']
				];
		//executing the variable to update that database
		$database_use->execute($requirements_of_web);
		//ending the function
	}
	
	//this function helps to search name or select from the database
		public function Search_Names($area, $merit){
//this variable carries the select query that selects data from the database
		$database_use = $this->pdo->prepare('SELECT name FROM ' . $this->database_table . ' WHERE ' . $area . ' = :value');
		//validation that vallidate the value
		$requirements_of_web = [
			//value add
				'value' => $merit
				];
		//executing the variable
		$database_use->execute($requirements_of_web);
		//returning the datbase use
		return $database_use->fetchAll();
		//end function
	}
	//adding the that insert the value to database
	public function adding_Admin_Db(){
		//this variable insert data into users table
		$database_use = $this->pdo->prepare('INSERT INTO users (username, password, firstName, master)
									VALUES ( :username, :password, :firstName, :master)');
		//validation that post data
		$requirements_of_web = [
			//this post data to table selected
				'username' => $_POST['username'],
				//this post data to table selected
				'password' => $_POST['password'],
				//this post data to table selected
				'firstName' => $_POST['firstName'],
				//this post data to table selected
				'master' => $_POST['master']
				];
				//execute the varaiable used 
		$database_use->execute($requirements_of_web);
		//ending the function
	
	}
	
	//creating the function 
	public function deleting_Admin_db($field){
		//this code deletes the data from database
		$database_use = $this->pdo->prepare('DELETE FROM ' . $this->database_table . ' WHERE ' . $field . ' = :value');
		//this code post data into username
		$requirements_of_web = ['value' => $_POST['username']];
		//this code execute the variable
		$database_use->execute($requirements_of_web);
		//end function
	}
	
	//creating the function 
	public function inserting_Enquiry_db(){
		//this code insert into database
		$database_use = $this->pdo->prepare('INSERT INTO enquiries (customerName, enquiry, phoneNumber, email, status)
									VALUES ( :customerName, :enquiry, :phoneNumber, :email, :status)');
		//this code post data to database
		$requirements_of_web = [
				//this code post data to database
				'customerName' => $_POST['customerName'],
					//this code post data to database
				'enquiry' => $_POST['enquiry'],
					//this code post data to database
				'phoneNumber' => $_POST['phoneNumber'],
					//this code post data to database
				'email' => $_POST['email'],
					//this code post data to database
				'status' => 'pending'
				];
		$database_use->execute($requirements_of_web);
		//end function
	}
	//creating the function 
	public function updating_Enqiry_Db(){
		//updating the data into database
		$database_use = $this->pdo->prepare('UPDATE ' . $this->database_table . '
									SET status = :status
									WHERE id = :id ');
			//this code post data to database
		$requirements_of_web = [
				//this code post data to database
				'status' => $_POST['status'],
					//this code post data to database
				'id' => $_POST['id']
				];

		$database_use->execute($requirements_of_web);
	}
	//creating the function 
	public function adding_Article_Db(){
		//this code insert data into databse
			$database_use = $this->pdo->prepare('INSERT INTO articles (date, name, content, addedBy)
									VALUES ( :date, :name, :content, :addedBy)');
			//this code post data to database
		$requirements_of_web = [
				//this code post data to database
				'date' => $_POST['date'],
					//this code post data to database
				'name' => $_POST['name'],
					//this code post data to database
				'content' => $_POST['content'],
					//this code post data to database
				'addedBy' => $_SESSION['user']
				];
		$database_use->execute($requirements_of_web);
	}
	//creating the function 
	public function deleting_Article_Db(){
//this code delete the data from database
			$database_use = $this->pdo->prepare('DELETE FROM ' . $this->database_table . ' WHERE name = :name AND date = :date');
				//this code post data to database
			$requirements_of_web = [
					//this code post data to database
						'date' => $_POST['date'],
							//this code post data to database
						'name' => $_POST['name']
						];
						//executing the code
			$database_use->execute($requirements_of_web);
			//end of function
	}
	
	
//creating the function that 	
	public function lastInsertId() {
		//returns the same function 
		return $this->pdo->lastInsertId();	
	}

}