<?php
class mobile extends Controller{
	
	public function __construct(){  

	}

	public function login(){ 
		//var_dump($_POST);
		$inputrole = $_POST['input-role'];
		$inputemail = $_POST['Input-email'];
		$inputpassword = $_POST['input-password'];
		 
		// 1.  PANGGIL MODEL
		$data_login = $this->logic("mobile_model")->check_login_process($inputrole,$inputemail,$inputpassword);
		
		// Konversi data_login ke JSON Standard Format
		header('Content-Type: application/json'); 
		echo json_encode($data_login);
		 
	}

	// handle regist mobile anggota reguler
	public function regis() {
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				
				// check status login in database
				$status = $this->logic("mobile_model")->createDataNewUser($_POST);
				
				if ($status === "Duplicate user") {
					echo "DUPLICATE USER";
					
				} else if ($status) {
					echo "REGISTER SUCCESS";
					
				} else {
					echo "REGISTER FAILED";
				} 
			}
		} catch (Exception $e) {
			echo "REGISTER FAILED";
		}
	}
	
	public function fastreport() {
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				
				// check status login in database
				$status = $this->logic("mobile_model")->check_fastreport_process($_POST);
				
				if ($status === true) {
					echo "FASTREPORT SUCCESS";
					
				} 
				if ($status === false) {
					echo "FASTREPORT FAILED";
					
				}
			}else {
				// Jika bukan metode POST, kirimkan respons metode tidak diizinkan
				echo "INVALID REQUEST METHOD";
			}
	
		} catch (Exception $e) {
			echo "FASTREPORT FAILED";
		}
	}
	
	public function report() {
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				// Pengecekan apakah input kosong
				if (empty($_POST['fullname']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['gender']) || empty($_POST['phone'])) {
					
					echo "READ REPORTING FAILED";
				}
				
				// check status login in database
				$status = $this->logic("mobile_model")->insertDataReport($_POST);
				
				if ($status) {
					echo "REGISTER SUCCESS";
					
				} else {
					echo "REGISTER FAILED";
				} 
			}
		} catch (Exception $e) {
			echo "REGISTER FAILED";
		}
	}
	

	public function updateProfile(){ 
		//var_dump($_POST);
		
		$id = $_POST['id'];
		
		$name = $_POST['user_name'];
		$phone = $_POST["user_phone"];
		$email = $_POST["user_email"]; 
		$address = $_POST["user_address"]; 
		$gender = $_POST["user_gender"]; 
		$nik = $_POST["user_nik"];
		
		if($this->logic("mobile_model")->updateTheProfileUsers($id, $name, $phone, $email, $address, $gender, $nik)){
			
			echo "SUCCESS UPDATE";
		} else {
			echo  "FAILED UPDATE";
		}
	}
	

	public function changePassword() {
    // Pastikan *request* menggunakan metode POST
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$userId = $_POST['id'];
			$oldPass = $_POST['old_password'];
			$newPass = $_POST['new_password'];
			$confirmPass = $_POST['confirm_password'];
			
			
			// Cek apakah password lama cocok
			if ($newPass !== $confirmPass) {
				echo 'PASSWORD MUST BE THE SAME';
			}else{
				
				// Panggil model untuk ganti password
				$isPasswordChanged = $this->logic("mobile_model")->changePassword_model($userId, $oldPass, $newPass, $confirmPass);
				
				if ($isPasswordChanged) {
					// Password berhasil diubah
					echo "CHANGE PASSWORD SUCCESS";
				} else {
					// Gagal mengubah password, pesan kesalahan akan diberikan dari model
					echo "CHANGE PASSWORD FAILED";
				}
			}
		} else {
			// Jika bukan metode POST, kirimkan respons metode tidak diizinkan
			echo "INVALID REQUEST METHOD";
		}
	}
	
	//public function get_emergency_report(){
	//	$result = $this->db->query("SELECT * FROM tbl_emergencybutton");
	//	$this->db->db_close(); // Close database connection
	//	
	//	if($result->num_rows > 0){
	//		// convert to associative array
	//		$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
	//		
	//		return $row; // associative array
	//	}else{
	//		return []; // empty array 
	//	}
	//}
	
	
	public function emergencyButton() {
		//var_dump($_POST);
		
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$longitude = $_POST['input-longitude'];             					 
				$latitude = $_POST['input-latitude'];    

				$my_location = preg_replace("/[^a-zA-Z0-9\s,]/", "", $this->get_auto_location($latitude, $longitude));
		
				// Step 2: Now attempt to save the data to the database
				$status = $this->logic("mobile_model")->emergency($_POST, $my_location);
		
				if ($status === "SUCCESS REPORT") {
					echo "EMERGENCY SUCCESS";
					
					// Step 1: Send the notification first
					$this->checkNewReportAndSendNotifMobile($_POST, $my_location);
				
				} else {
					echo "EMERGENCY FAILED";
				}
			} else {
				echo "INVALID REQUEST METHOD";
			}
		} catch (Exception $e) {
			echo "EMERGENCY FAILED";
		}
	}
	
	public function sendTextWA() {
		//var_dump($_POST);
		
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				
				$message = "Warning , Anda memasuki daerah rawan kekerasan seksual.";
				$no_hp = $_POST['no-hp'];

				// Kirim pesan hanya ke instansi yang sesuai
				$target = $no_hp;

					if ($target) {
						// Inisiasi CURL untuk kirim pesan
						$curl = curl_init();
						curl_setopt_array($curl, array(
							CURLOPT_URL => 'https://api.fonnte.com/send',
							CURLOPT_RETURNTRANSFER => true,
							CURLOPT_ENCODING => '',
							CURLOPT_MAXREDIRS => 10,
							CURLOPT_TIMEOUT => 0,
							CURLOPT_FOLLOWLOCATION => true,
							CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
							CURLOPT_CUSTOMREQUEST => 'POST',
							CURLOPT_POSTFIELDS => array(
								'target' => $target,
								'message' => $message,
								'delay' => '2',
								'countryCode' => '62', // optional
							),
							CURLOPT_HTTPHEADER => array(
								'Authorization: tjcqKkfuN5YmWRQKX83s' // Ganti TOKEN dengan token yang sebenarnya
							),
						));

						$response = curl_exec($curl);
						curl_close($curl);

						// Output response for debugging (optional)
						// echo "Message sent to $target: $response\n";
					}
				
				
				
				
				
			} else {
				echo "INVALID REQUEST METHOD";
			}
		} catch (Exception $e) {
			echo "FAILED";
		}
	}

	public function get_auto_location($latitude, $longitude) {
		//echo $latitude;
		//echo $longitude;
		
		// URL Nominatim API untuk reverse geocoding
		$url = "https://nominatim.openstreetmap.org/reverse?format=json&lat=$latitude&lon=$longitude&zoom=18&addressdetails=1";

		// Inisialisasi CURL
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64)");

		// Eksekusi CURL dan ambil respons
		$response = curl_exec($ch);

		// Tutup CURL
		curl_close($ch);

		// Pastikan respons tidak gagal
		if ($response === false) {
			return "Unable to fetch location.";
		}

		// Dekode JSON
		$data = json_decode($response, true);

		// Cek apakah ada hasil alamat
		if (isset($data['address'])) {
			return $data['display_name']; // Alamat lengkap
		} else {
			return "Location not found.";
		}
	}

	public function checkNewReportAndSendNotifMobile($data,$my_real_location) {
		// Ekstrak user info dan buat pesan untuk dikirim
	   $userInfo = 
				
				"Nama: " . $data['input-fullname'] . "\n" .
				"Email: " . $data['input-email'] . "\n" .
				"Gender: " . $data['input-gender'] . "\n" .
				"NIK: " . $data['input-nik'] . "\n" .
				"No HP: " . $data['input-phone-number'] . "\n" .
				"Alamat: " . $data['input-alamat-user'];

		$message = "Ada laporan kekerasan seksual:\n\n" . $userInfo . "\n\n" .
				   "Lokasi kejadian:\n" .
				   "Longitude: " . $data['input-longitude'] . "\n" .
				   "Latitude: " . $data['input-latitude'] . "\n" .
				   "Deskripsi Lokasi: " . $my_real_location.
				   "Map: https://www.google.com/maps/dir/?api=1&destination=" . $data['input-latitude'].",".$data['input-longitude'];


		// Kirim pesan hanya ke instansi yang sesuai
		$target = '120363334970180552@g.us,120363361778184235@g.us';

			if ($target) {
				// Inisiasi CURL untuk kirim pesan
				$curl = curl_init();
				curl_setopt_array($curl, array(
					CURLOPT_URL => 'https://api.fonnte.com/send',
					CURLOPT_RETURNTRANSFER => true,
					CURLOPT_ENCODING => '',
					CURLOPT_MAXREDIRS => 10,
					CURLOPT_TIMEOUT => 0,
					CURLOPT_FOLLOWLOCATION => true,
					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					CURLOPT_CUSTOMREQUEST => 'POST',
					CURLOPT_POSTFIELDS => array(
						'target' => $target,
						'message' => $message,
						'delay' => '2',
						'countryCode' => '62', // optional
					),
					CURLOPT_HTTPHEADER => array(
						'Authorization: tjcqKkfuN5YmWRQKX83s' // Ganti TOKEN dengan token yang sebenarnya
					),
				));

				$response = curl_exec($curl);
				curl_close($curl);

				// Output response for debugging (optional)
				// echo "Message sent to $target: $response\n";
			}
	}


	public function userHistory() {
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				// Pengecekan apakah input kosong
				if (empty($_POST['full_name'])) {
					
					echo "HISTORY FAILED";
				}
				
				// check status login in database
				$status = $this->logic("mobile_model")->get_data_Userhistory($_POST);
				
				header('Content-Type: application/json'); 
				echo json_encode($status);
					
			}
		} catch (Exception $e) {
			echo "HISTORY FAILED";
		}
	}
	
	//public function deleteHistory() {
	//	try {
	//		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	//			// Pengecekan apakah input kosong
	//			if (empty($_POST['id_laporan'])) {
	//				
	//				echo " DELETE LAPORAN FAILED";
	//			}
	//			$id_laporan = $_POST['id_laporan'];
	//
	//			// check status login in database
	//			$status = $this->logic("mobile_model")->get_data_DeleteHistory($_POST);
	//			
	//			if ($status) {
	//				echo "DELETE LAPORAN SUCCESS";
	//				
	//			} else {
	//				echo "DELETE LAPORAN FAILED";
	//			} 
	//		}
	//	} catch (Exception $e) {
	//		echo "DELETE LAPORAN FAILED";
	//	}
	//}
	
	public function deleteHistory(){
		//var_dump($_POST);
		
		// get data post
		//$id_laporan = $_POST['id_laporan'];
		if($this->logic("mobile_model")->get_data_DeleteHistory($id_laporan) == true){
			echo "DELETE LAPORAN SUCCESS";
		}else{
			echo "DELETE LAPORAN FAILED";

		}
	}
	
	
	public function deleteHistoryUser() {
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				// Pengecekan apakah input kosong
				$id_laporan = $_POST['id_laporan'];
				
				// check status login in database
				$status = $this->logic("mobile_model")->get_data_DeleteHistory($id_laporan);
				
				
				if ($status) {
					echo "DELETE SUCCESS";
					
				} else {
					echo "DELETE FAILED";
				} 
			}
		} catch (Exception $e) {
			echo "DELETE FAILED";
		}
	}
	
	
	public function insert_button_emergency() {
		try {
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				
				// check status login in database
				$status = $this->logic("mobile_model")->emergency($_POST);
				
				if ($status === true) {
					echo "FASTREPORT SUCCESS";
					
				} 
				if ($status === false) {
					echo "FASTREPORT FAILED";
					
				}
			}else {
				// Jika bukan metode POST, kirimkan respons metode tidak diizinkan
				echo "INVALID REQUEST METHOD";
			}
	
		} catch (Exception $e) {
			echo "FASTREPORT FAILED";
		}
	}
	
	public function usergeofence() { 
		try {
			
				// check status login in database
				$status = $this->logic("mobile_model")->get_data_geofence();
				
				header('Content-Type: application/json'); 
				echo json_encode($status);
					
			
		} catch (Exception $e) {
			echo "HISTORY FAILED";
		}
	}



	
	
	
	
}

?>