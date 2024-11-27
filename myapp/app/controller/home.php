<?php
class home extends Controller{
	// Constructor
	public function __construct(){

	}

	// Default method
	public function index($name="Juan", $age="24"){
		
		// Associative Arrays (arrays with keys)
		$arr_data['name'] = $name;
		$arr_data['age'] = $age;
		$arr_data['title'] = "Home Page";
		
		// Display page and send data
		$this->display('template/header', $arr_data);
		$this->display("home/index", $arr_data);
		$this->display('template/footer');
	}

	public function dashboard(){
		// Associative Arrays (arrays with keys)
		$arr_title['title'] = "Home Page";
		//$arr_data['title'] = "Home Page";
		session_start();
		// Display page and send data
		$this->display('template/header', $arr_title);
		$this->display('template/sidebar', $_SESSION);
		$this->display("home/dashboard", $_SESSION);
		$this->display('template/footer');
	}
	
	
	public function addprofile(){ 
		// Associative Arrays (arrays with keys)
		session_start();
		$arr_title['title'] = "Add User";
		
		// Display page and send data
		$this->display('template/header', $arr_title);
		$this->display('template/sidebar', $_SESSION);
		$this->display("users/addprofile", $_SESSION);
		$this->display('template/footer');
		
	}
	
	public function report(){
		// Associative Arrays (arrays with keys)
		
		$arr_title['title'] = "Report Page";
		
		session_start();
		// Display page and send data
		$this->display('template/header', $arr_title);
		$this->display('template/sidebar', $_SESSION); 
		$this->display("document/report", $_SESSION);
		//				folder view / file
		$this->display('template/footer');
		
	}

	public function fastreport(){
		// Associative Arrays (arrays with keys)
		session_start();
		$arr_title['title'] = "Fast Report";
		
		$data = $this->logic("users_model")->get_data_users();
		$arr_data['datalogin'] = $_SESSION;
		$arr_data['datausers'] = $data; 
		
		
		//session_start();
		// Display page and send data
		$this->display('template/header', $arr_title); // tampilkan judul
		$this->display('template/sidebar', $_SESSION); // tampilkan sidebar
		$this->display("document/fastreport", $_SESSION); // tampilkan data login USER -- nama muncul
		$this->display('template/footer');  
						//folder view / file
	}
	
	public function fastreported(){ 
		//echo "VAR DUMP UNTUK INPUT UI CONTROLLER: <br>";
		//var_dump($_POST);
		
		//echo "<br><br><br><br>";
		
		// var dump ($_post) 
		if($this->logic("data_model")->createDataNewReport($_POST)== true){
			header('Location: '.APP_PATH.'/home/dashboard');
			exit;
		}else{
			header('Location: '.APP_PATH.'/home/fastreport');
			exit;
		}
	}
		
	public function map(){
		// Associative Arrays (arrays with keys)
		$arr_title['title'] = "Map Page";

		session_start();
		// Display page and send data
		$this->display('template/header', $arr_title);
		$this->display('template/sidebar', $_SESSION);
		$this->display("risklevels/map", $_SESSION); 
		//				folder view / file
		$this->display('template/footer');
		
	}
	
	public function datalaporanweb(){
		try {
			// get data
			$datalaporan = $this->logic("datareport_model")->get_data_report();
			
			// Output JSON response
			header('Content-Type: application/json');
			echo json_encode($datalaporan);
			
		} catch (Exception $e) {
			// Handle exceptions
			echo "GET DATA FAILED";
		}		
	}
}
?>