<?php
class login extends Controller{
//class Home{
	// Constructor
	public function __construct(){  

	}
	
	public function user(){ 
		$arr_data['title'] = "Login";
		
		// Display page and send data
		//$this->display('template/header', $arr_data); 
		$this->display("login/user", $arr_data);
		//$this->display('template/footer');
		
	}
	//DISPLAY PAGE 
	public function register(){ 
		// kirim data 
		$arr_data['title'] = "Register";
		
		// Display page and send data
		$this->display("login/register", $arr_data);
		
	}
	 
	// CREATE / ADD DATA TO TABEL / ADDING
	public function signup(){ 
		//var_dump($_POST);
		
		// var dump ($_post)
		if($this->logic("login_model")->createDataNewUser($_POST)== true){ //menambah data baru
			header('Location: '.APP_PATH.'/login/user');
			exit;
		}else{
			header('Location: '.APP_PATH.'/login/register');
			exit;
		}
	}
	
	
	 
	public function process(){
		//var_dump($_POST);
		$inputrole = $_POST['input-role'];
		$inputemail = $_POST['Input-email'];
		$inputpassword = $_POST['input-password'];
		
		// 1.  PANGGIL MODEL
		$data_login = $this->logic("login_model")->check_login_process($inputrole,$inputemail,$inputpassword);
		//var_dump($data_login);
		
		if(!empty($data_login)){
			// Set session variables
			session_start();
			$_SESSION['id'] = $data_login[0]["id"]; 
			$_SESSION['role'] = $data_login[0]["role"]; 
			$_SESSION['full_name'] = $data_login[0]["full_name"];
			$_SESSION['email'] = $data_login[0]["email"];
			$_SESSION['gender'] = $data_login[0]["gender"];
			$_SESSION['no_hp'] = $data_login[0]["no_hp"];
			$_SESSION['alamat'] = $data_login[0]["alamat"];
			$_SESSION['nik'] = $data_login[0]["nik"];
			$_SESSION['profile_pict'] = $data_login[0]["profile_pict"]; 
			
			//echo "PRINT SESISION DATA:<br>";
			//var_dump($_SESSION); untuk mencoba dia berhasil ambil session/simpan session. kalau NULL = fail
			
			// Display page and send data
			$this->display('template/header', $_SESSION);
			$this->display('template/sidebar', $_SESSION);
			$this->display("home/dashboard", $_SESSION);
			$this->display('template/footer');
		}else{
			// Redirect ke halaman login jika gagal
			header('Location: '.APP_PATH.'/login/user');
			exit;
		}

	}
	public function logout() {
		// Mulai sesi
		session_start();

		// Hancurkan sesi
		session_destroy();

		// Redirect ke halaman login atau homepage
		header('Location: '.APP_PATH.'/login/user');
		exit;
	}

	
	
	//CARA CEK JIKA SESSION SUKSES = 
	//<?php
		//var_dump($data); ?
		//

	// mau akses data dari model, di login_model
	
}

?>