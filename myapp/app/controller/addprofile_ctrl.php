<?php
class addprofile_ctrl extends Controller{
	// Constructor
	public function __construct(){

	}
 
	public function addprofile(){ 
		// Associative Arrays (arrays with keys)
		$arr_title['title'] = "Add User";
		session_start();
				
		
		$data = $this->logic("addprofile_model")->get_data_addprofile();
		$arr_data['datalogin'] = $_SESSION;
		$arr_data['datausers'] = $data;
		
		// Display page and send data
		$this->display('template/header', $arr_title);
		$this->display('template/sidebar', $_SESSION);
		$this->display("users/addprofile", $_SESSION);
		$this->display('template/footer');
		
	}

	
//INSERT
	// mau akses data dari model
	public function addNewUserProfile() {
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				
				// check status login in database
				$status = $this->logic("addprofile_model")->createDataNewUserProfile($_POST);
				
				if ($status === "Duplicate user") {
					echo "DUPLICATE USER";
					
				} else if ($status) { 
					 
					header('Location: '.APP_PATH.'/home/dashboard');
					
				} else {
					echo "REGISTER FAILED";
				} 
			}
		} catch (Exception $e) {
			echo "REGISTER FAILED";
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
						$uploadFile = $uploadDir . $id . '.' . $fileExtension;
						$file_name = $id . '.' . $fileExtension;
				
						// Move the uploaded file to the server's directory
						if (move_uploaded_file($_FILES['report-file']['tmp_name'], $uploadFile)) {
							$reportFile = $uploadFile;
							//echo 'Laporan berhasil dikirim. File name: ' . $reportFile;
							
							// insert data ke database
							$statuslaporan = $this->logic("addprofile_model")->createDataNewUserProfile($id, $file_name, $_POST);
							
						
				//			if($klasifikasi_bencana === "bukan bencana"){
				//				// redirect ke halaman
				//				header('Location: ' . APP_PATH . '/home/bukanbencana/');
				//				exit();
				//			}elseif($kesesuaian_laporan === "sesuai"){
				//				// redirect ke halaman
				//				header('Location: ' . APP_PATH . '/home/success/');
				//				exit();
				//			}else{
				//				// redirect ke halaman
				//				header('Location: ' . APP_PATH . '/home/pending/');
				//				exit();
				//			}
							
							
						} else {
							// redirect ke halaman
							header('Location: ' . APP_PATH . '/addprofile_ctrl/addprofile/');
							exit();
						}
					} else {
						// redirect ke halaman
						header('Location: ' . APP_PATH . '/addprofile_ctrl/addprofile/');
						exit();
					}
				}else{
					// redirect ke halaman
					header('Location: ' . APP_PATH . '/addprofile_ctrl/addprofile/');
					exit();
				}
			} catch (Exception $e) {
				// redirect ke halaman
				header('Location: ' . APP_PATH . '/addprofile_ctrl/addprofile/');
				exit();
			}
		}else{
			// redirect ke halaman
			header('Location: ' . APP_PATH . '/home/dashboard/');
			exit();
		}
	}

}
?>