<?php
class users extends Controller{
//class Home{
	// Constructor
	public function __construct(){  

	}
//GET
	public function userlist(){
		// Set session variables
		session_start();
			
		// Associative Arrays (arrays with keys)
		$arr_title['title'] = "Users Page";
		
		// get data from database
		// CONTROLER INI AKSES DATA YANG DIAMBIL DARI MODEL USERS. dengan fungsi get users lalu simpan menjadi """$data""
		$data = $this->logic("users_model")->get_data_users();
		
		$arr_data['datausers'] = $data;
		$arr_data['datalogin'] = $_SESSION;
		//var_dump($data);
		
		// Display page and send data
		$this->display('template/header', $arr_title);
		$this->display('template/sidebar', $_SESSION);
		$this->display("users/userlist", $arr_data); // folder view / file
		$this->display('template/footer');
		
	}
//INSERT
	// mau akses data dari model
	public function insert(){
		if($this->logic("users_model")->insertDataUsers() == true){
			header('Location: '.APP_PATH.'/users/userlist');
			exit;
		}
	}
	
	
	//delete
	// mau akses data dari model, di login_model
	public function delete(){
		//var_dump($_POST);
		
		// get data post
		$id = $_POST['duser_id'];
		
		if($this->logic("users_model")->deleteDataUsers($id) == true){
			header('Location: '.APP_PATH.'/users/userlist');
			exit;
		}else{
			header('Location: '.APP_PATH.'/users/userlist');
			exit;
		}
	}
	
	// update data user
	public function update(){ 
		//var_dump($_POST);
		
		if($this->logic("users_model")->updateDataUsers($_POST) == true){
			header('Location: '.APP_PATH.'/users/userlist');
			exit;
		}else{
			header('Location: '.APP_PATH.'/users/userlist');
			exit;
			
		}
	}
	
}

?>