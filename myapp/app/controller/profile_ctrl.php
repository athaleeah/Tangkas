<?php
class profile_ctrl extends Controller{
	// Constructor
	public function __construct(){

	}
	public function profile(){
		
		$arr_title['title'] = "User Profile";
		session_start();
		$data = $this->logic("profile_model")->get_data_profile();
		$arr_data['datalogin'] = $_SESSION;
		$arr_data['datausers'] = $data;
		 
		// Display page and send data
		$this->display('template/header', $arr_title);
		$this->display('template/sidebar', $_SESSION);
		$this->display("users/profile", $_SESSION);
		$this->display('template/footer');
	}
	
//INSERT
	// mau akses data dari model
	public function insert(){
		if($this->logic("profile_model")->insertDataProfile() == true){ 
			header('Location: '.APP_PATH.'/profile_ctrl/profile');
			exit;
		}
	}

	//UPDATE PROFILE 
	public function updateProfile(){ 
		//var_dump($_POST);
		
		if($this->logic("profile_model")->updateProfileUsers($_POST) == true){
			header('Location: '.APP_PATH.'/profile_ctrl/profile');
			exit;
		}else{
			header('Location: '.APP_PATH.'/profile_ctrl/profile');
			exit;
			
		}
	}
	
	public function insertPass() {
    
    if ($this->logic("profile_model")->insertDataPassword($data) == true) { 
        header('Location: '.APP_PATH.'/profile_ctrl/profile');
        exit;
    }
	}

	public function changePassword() { 
		
		if ($this->logic("profile_model")->changePassword_model($_POST) == true) {
			header('Location: '.APP_PATH.'/home/dashboard');
			exit;
		} else {
			header('Location: '.APP_PATH.'/profile_ctrl/profile');
			exit;
		}
	}


	
// submit laporan bencana
	public function submitlaporan() {
		session_start();
		print_r($_SESSION);
		
		// Cek session
		if (isset($_SESSION['full_name'])) {
			try {
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
					// Debugging output
					print_r($_FILES);
					print_r($_POST);
					
					$reportDescription = filter_input(INPUT_POST, 'report-description', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
					
					// Handle file upload
					if (isset($_FILES['report-file']) && $_FILES['report-file']['error'] == UPLOAD_ERR_OK) {
						$uploadDir = '/var/www/html/app/public/fotobukti/'; // Directory to save the uploaded file
						$fileExtension = pathinfo($_FILES['report-file']['name'], PATHINFO_EXTENSION);
						$id_laporan = uniqid();
						$uploadFile = $uploadDir . $id_laporan . '.' . $fileExtension;
						$file_name = $id_laporan . '.' . $fileExtension;
				
						// Move the uploaded file to the server's directory
						if (move_uploaded_file($_FILES['report-file']['tmp_name'], $uploadFile)) {
							$reportFile = $uploadFile;
							//echo 'Laporan berhasil dikirim. File name: ' . $reportFile;
							
							// run AI
							//$data_ai = $this->run_ai($reportDescription, "https://silaben.site/app/public/fotobukti/$file_name");
							//$kesesuaian_laporan = $data_ai['kesesuaian_laporan'];
							//$klasifikasi_bencana = $data_ai['klasifikasi_bencana'];
							
							//echo $kesesuaian_laporan;
							
							// insert data ke database
							$statuslaporan = $this->logic("Home_model")->insert_data_pelaporan_web($id_laporan, $file_name, $_POST, $data_ai);
						
							if($klasifikasi_bencana === "bukan bencana"){
								// redirect ke halaman
								header('Location: ' . APP_PATH . '/home/bukanbencana/');
								exit();
							}elseif($kesesuaian_laporan === "sesuai"){
								// redirect ke halaman
								header('Location: ' . APP_PATH . '/home/success/');
								exit();
							}else{
								// redirect ke halaman
								header('Location: ' . APP_PATH . '/home/pending/');
								exit();
							}
							
							
						} else {
							// redirect ke halaman
							header('Location: ' . APP_PATH . '/home/error/');
							exit();
						}
					} else {
						// redirect ke halaman
						header('Location: ' . APP_PATH . '/home/error/');
						exit();
					}
				}else{
					// redirect ke halaman
					header('Location: ' . APP_PATH . '/home/error/');
					exit();
				}
			} catch (Exception $e) {
				// redirect ke halaman
				header('Location: ' . APP_PATH . '/home/error/');
				exit();
			}
		}else{
			// redirect ke halaman
			header('Location: ' . APP_PATH . '/login/index/');
			exit();
		}
	}

}
?>