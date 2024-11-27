<?php 
class mobile_model{
    private $db;
     
    public function __construct(){
        // create object from database class
        $this->db = new Database;

        // check status
        //if($this->db==false){
            //echo "<script>console.log('Connection failed.');</script>";
        //}else{
           // echo "<script>console.log('Connection successfully.');</script>";
        //}
    }

	//GET LOGIN UNTUK API FROM MOBILE
	public function check_login_process($role, $email, $password){
		$result = $this->db->query("SELECT * FROM tbl_users WHERE role= '$role' AND email= '$email' AND password= '$password'");
		$this->db->db_close(); // Close database connection
		
		if($result->num_rows > 0){
			// convert to associative array
			$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
			
			return $row; // associative array
		}else{
			return []; // empty array 
		}
	}
	
	
	//REGIS
	public function createDataNewUser ($data){
		// set time zone
		date_default_timezone_set('Asia/Jakarta');

		// get data dari VIEW , lihat 'name' nya ,bukan id. input-role dll
		$id = uniqid();
		$role = $data['input-role'];
		$fullname = $data['input-fullname'];
		$address = $data['input-address'];
		$email = $data['input-email'];
		$gender = $data['input-gender'];
		$nik = $data['input-nik'];
		$phone = $data['input-phone-number'];
		$pass1 = $data['input-password'];
		$pass2 = $data['input-retype-password'];
		$created_at = date("Y-m-d h:i:sa");

		// Check if user with same full name and email already exists
		$check_sql = "SELECT * FROM `tbl_users` WHERE `full_name` = '$fullname' AND `email` = '$email'";
		$result = $this->db->query($check_sql);

		if ($result->num_rows > 0) {
			// User with same full name and email already exists, return error message
			return 'Duplicate user';
		} else {
			// sql query (INPUT DATA BARU dari view DI TABEL DENGAN SQL)			// sesuai database kolom
			$sql = "INSERT INTO `tbl_users`(`id`, `role`, `username`, `full_name`, `email`, `gender`, 
											`nik`, `no_hp`, `alamat`, `profile_pict`, `password`, `created_at`)  
							VALUES ('$id',
									'$role',
									'$fullname',
									'$fullname',
									'$email',
									'$gender',
									'$nik',
									'$phone',
									'$address',
									'',
									'$pass1',
									'$created_at');";

			// jika data yang masuk sesuai kolom = simpan
			if ($this->db->query($sql) === TRUE) {
				return true;
			} else {
				return false;
			}
		}
	}
	
	

	public function check_fastreport_process ($data){
		// set time zone
		date_default_timezone_set('Asia/Jakarta');
		
		//session_start();
		//$fullname = $_SESSION ['full_name'];
		//$tbl_id_users = $_SESSION ['id'];  
		 
		$fullname = $data['input-fullname'];
		$tbl_id_users = $data['input-id-users'];
		$id_laporan = uniqid();
		$judul = $data['input-judul'];                
		$deskripsi = $data['input-deskripsi'];           
		$longitude = $data['input-longitude'];             					 
		$latitude = $data['input-latitude'];             					
		$lokasi = $data['input-lokasi-bencana'];              					
		$tanggal = $data['tanggal-kejadian'];           
		$waktu = $data['waktu-kejadian'];               	 
		$lapor_pihak_terkait = $data['input-lapor-pihak'];      
		$foto = $data['input-foto'];                	
		$status = $data['input-status-pelapor'];		
		$tanggal_melapor = date("Y-m-d h:i:sa");   
		$status_laporan = "Belum Selesai";
		$emergency = "No";

		// Insert new report
		$sql = "INSERT INTO `tbl_data_laporan`(`id_laporan`,`tbl_id_users`,`full_name`, `judul`, `deskripsi_pengaduan`, `longitude` ,`latitude` , 
											 `lokasi`, `tanggal_kejadian`, `waktu_kejadian`, `lapor_pihak_terkait`, 
											`path_bukti_foto`, `status_pelapor`, `tanggal_melapor`,`status_laporan`,`emergency`) 
					VALUES ('$id_laporan',
							'$tbl_id_users',
							'$fullname',
							'$judul',
							'$deskripsi',
							'$longitude',
							'$latitude',
							'$lokasi',
							'$tanggal',
							'$waktu',
							'$lapor_pihak_terkait',
							'$foto',
							'$status',
							'$tanggal_melapor',
							'$status_laporan',
							'$emergency'
							)";
		if ($this->db->query($sql)===TRUE){
			return true;
		} else { 
			return false;
		}
	}
////$sql = "INSERT INTO `tbl_data_laporan`(`id_laporan`,`tbl_id_users`,`full_name`, `judul`, `deskripsi_pengaduan`, `longitude`,  
//											`latitude`, `lokasi`, `tanggal_kejadian`, `waktu_kejadian`, `lapor_pihak_terkait`, 
//											`path_bukti_foto`, `status_pelapor`, `tanggal_melapor`) 
//					VALUES ('$id_laporan',
//							'$tbl_id_users',
//							'$fullname',
//							'$judul',
//							'$deskripsi',
//							'$longitude',
//							'$latitude',
//							'$lokasi',
//							'$tanggal',
//							'$waktu',
//							'$lapor_pihak_terkait',
//							'$foto',
//							'$status',
//							'$tanggal_melapor'
//							)";
//
//
	
	//UPDATE PROFILE
	public function updateTheProfileUsers($POST) {
        
		
		$id = $_POST['id'];
		
		$name = $_POST['user_name'];//inagatinikeyharussamadenganpostmankey
		$phone = $_POST["user_phone"];
		$email = $_POST["user_email"];
		$address = $_POST["user_address"];
		$gender = $_POST["user_gender"];
		$nik = $_POST["user_nik"];

        $sql = "UPDATE tbl_users SET  full_name='$name', email='$email', gender='$gender', 
											nik='$nik', no_hp='$phone', alamat='$address'
											WHERE id='$id';";
											
		//echo $sql;									 
											
        if ($this->db->query($sql)===TRUE){
			
            return "SUCCESS UPDATE";
        } else {
            return "FAILED UPDATE";
        }
    }
	
	

	
	//EMERGENCY
	public function emergency($data, $my_real_location){
		date_default_timezone_set('Asia/Makassar');
		
		//session_start();
		//$fullname = $_SESSION ['full_name'];
		//$tbl_id_users = $_SESSION ['id'];  
		 
		$fullname = $data['input-fullname'];
		$tbl_id_users = $data['input-id-users'];
		$id_laporan = uniqid();
		$judul = "EMERGENCY REPORT";                
		$deskripsi = "";          
		$longitude = $data['input-longitude'];             					 
		$latitude = $data['input-latitude'];    

		$lokasi = $my_real_location;   
		
		$tanggal = date("D M d Y H:i:s") . " GMT+0800";        
		$waktu = date("D M d Y H:i:s") . " GMT+0800";               	 
		$lapor_pihak_terkait ="";      
		$foto = "";               	
		$status = "";		
		$tanggal_melapor = date("Y-m-d h:i:sa");   
		$status_laporan = "Belum Selesai";
		$emergency = "Yes";
		
		
		$sql = "INSERT INTO tbl_data_laporan(id_laporan,tbl_id_users,full_name, judul, deskripsi_pengaduan, longitude ,latitude , 
											 lokasi, tanggal_kejadian, waktu_kejadian, lapor_pihak_terkait, 
											path_bukti_foto, status_pelapor, tanggal_melapor,status_laporan,emergency)  
							VALUES ('$id_laporan',
									'$tbl_id_users',
									'$fullname',
									'$judul',
									'$deskripsi',
									'$longitude',
									'$latitude',
									'$lokasi',
									'$tanggal',
									'$waktu',
									'$lapor_pihak_terkait',
									'$foto',
									'$status',
									'$tanggal_melapor',
									'$status_laporan',
									'$emergency'
									)";
									
			//echo $sql;
		
			// jika data yang masuk sesuai kolom = simpan
			if ($this->db->query($sql) === TRUE) {
				return "SUCCESS REPORT";
			} else {
				return "FAILED REPORT";
			}
	}


		
		
	public function changePassword_model($userId, $oldPass, $newPass, $confirmPass) {
		// Update password di database
		$sqlUpdate = "UPDATE tbl_users SET password = '$newPass' WHERE id = '$userId'";
		
		if ($this->db->query($sqlUpdate) === TRUE) {
			return true; // Password berhasil diubah
		} else {
			
			return false;
		}
	}

		
	public function get_data_Userhistory() {
		session_start(); // Perbaiki: tambahkan tanda kurung
	
		// Ambil nama lengkap dari session
		//$nama = $_POST['full_name'];
		//$judul = $_POST['judul-laporan'];
		$id_users = $_POST['tbl_id_users'];
	
		// Pastikan nama lengkap ditangani dengan benar dalam query
		$result = $this->db->query("SELECT * FROM tbl_data_laporan WHERE tbl_id_users = '$id_users'"); // Perbaiki: gunakan $full_name
	
		// Pastikan koneksi database ditutup setelah query
		$this->db->db_close(); // Close database connection
	
		if ($result && $result->num_rows > 0) {
			// Convert to associative array
			$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $row;
		} else {
			return []; // Return empty array jika tidak ada hasil
		}
	}
	
	public function get_data_DeleteHistory($id_laporan) {
		session_start(); // Perbaiki: tambahkan tanda kurung
 
		// Pastikan nama lengkap ditangani dengan benar dalam query
		$result = $this->db->query("DELETE FROM tbl_data_laporan WHERE id_laporan = '$id_laporan'"); // Perbaiki: gunakan $full_name
 		$this->db->db_close(); // Close database connection

		if($result){
            return true;
        } else {
            return false;
        }
	}
	
	
	public function get_data_geofence() {
    // Query untuk mengambil data longitude dan latitude dari semua laporan
    $result = $this->db->query("SELECT `id_laporan`, `judul`, `longitude`, `latitude`, `lokasi`, `tanggal_kejadian`, `waktu_kejadian` FROM `tbl_data_laporan` ;");
    $this->db->db_close();

    if ($result && $result->num_rows > 0) {
        // Mengonversi hasil query menjadi array asosiatif 
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return []; // Return empty array jika tidak ada hasil
    }
}


}
?>