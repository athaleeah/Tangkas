<?php
class fastreport_ctrl extends Controller{
	// Constructor
	public function __construct(){

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
	}
	
	public function fastreported(){ 
		if($this->logic("data_model")->createDataNewReport($_POST) == true){  
			$_SESSION['success_message'] = "Laporan berhasil dikirimkan.";
			header('Location: '.APP_PATH.'/history_user/history_user');
		} else {
			header('Location: '.APP_PATH.'/fastreport_ctrl/fastreport');
		}
		exit;
	}

	
//INSERT
	// mau akses data dari model
	public function insert(){
		if($this->logic("users_model")->insertDataProfile() == true){ 
			header('Location: '.APP_PATH.'/fastreport_ctrl/profile');
			exit;
		}
	}
	
	//delete
	// mau akses data dari model, di login_model
	public function delete(){
		//var_dump($_POST);
		
		// get data post
		$id = $_POST['duser_id'];
		if($this->logic("users_model")->deleteDataProfile($id) == true){
			header('Location: '.APP_PATH.'/fastreport_ctrl/profile');
			exit;
		}else{
			header('Location: '.APP_PATH.'/fastreport_ctrl/profile');
			exit;
		}
	}
	
	// update data user
	public function update(){ 
		//var_dump($_POST);
		
		if($this->logic("users_model")->updateDataProfile($_POST) == true){
			header('Location: '.APP_PATH.'/fastreport_ctrl/profile');
			exit;
		}else{
			header('Location: '.APP_PATH.'/fastreport_ctrl/profile');
			exit;
			
		}
	}
}
?>