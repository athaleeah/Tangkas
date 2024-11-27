<?php 
class daerah_model extends Controller{
	private $db;
     
    public function __construct(){
        // create object from database class
        $this->db = new Database;

        // check status
        if($this->db==false){
            //echo "<script>console.log('Connection failed.');</script>";
        }else{
            //echo "<script>console.log('Connection successfully.');</script>"; 
        }
    }
	
	//AMBIL DATA TABEL UNTUK TERBACA DI USERL LIST , NAMA FUNGSI GET DATA USERS , CEK CONTROLLER USER --
    public function get_data_profile(){
        $result = $this->db->query("SELECT * FROM `tbl_users`;");
        $this->db->db_close(); // Close dabase connection
        
        if($result->num_rows > 0){
            // convert to associative array
            $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $row;
        }else{
            return []; // empty array
        }
    }

    	
    public function insertDataProfile($data){
    $id = uniqid();
	$role = $data['input-role'];
    $fullname = $data['input-fullname'];
    $address = $data['input-address'];
    $email = $data['input-email'];
	$gender = $data['input-gender'];
	$nik = $data['input-nik']; 
	$phone = $data['input-phone-number'];
	$foto = $data['profile-pict'];
	$pass1 = $data['input-password'];
	$pass2 = $data['input-retype-password'];
	$created_at = date("Y-m-d h:i:sa");
	
	
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
							'$foto',
							'$pass1',
							'$created_at')";
	if ($this->db->query($sql)===TRUE){
        return true;
    } else {
        return false;
    }
} // Add a closing brace here


// Function to update report data
    public function updateProfileUsers($data) {
        session_start();
		$id = $_SESSION['id'];
		
		$name = $data["user_name"];
		$phone = $data["user_phone"];
		$email = $data["user_email"];
		$address = $data["user_address"];
		$gender = $data["user_gender"];
		$nik = $data["user_nik"];

        $sql = "UPDATE tbl_users SET  full_name='$name', email='$email', gender='$gender', 
											nik='$nik', no_hp='$phone', alamat='$address'
											WHERE id='$id';";
											
		echo $sql;									
											
        if ($this->db->query($sql)===TRUE){
			
			$_SESSION['full_name'] = $name;
			$_SESSION['email'] = $email;
			$_SESSION['gender'] = $gender;
			$_SESSION['no_hp'] = $phone;
			$_SESSION['alamat'] = $address;
			$_SESSION['nik'] = $nik;
			
            return true;
        } else {
            return false;
        }
    } 
	
	  public function updateUsersPass($data) {
    session_start();
    $id = $_SESSION['id'];

    // Mengambil password lama dari session (atau bisa juga dari input form)
    $oldPassword = $data['old_password'];
    $newPassword = $data['new_password'];

    // Fetch password lama dari database
    $result = $this->db->query("SELECT password FROM tbl_users WHERE id='$id'");
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $currentPasswordHash = $row['password'];

        // Verifikasi apakah password lama sesuai
        if (password_verify($oldPassword, $currentPasswordHash)) {
            // Hash password baru
            $newPasswordHash = password_hash($newPassword, PASSWORD_DEFAULT);

            // Update password di database
            $sql = "UPDATE tbl_users SET password='$newPasswordHash' WHERE id='$id'";

            if ($this->db->query($sql) === TRUE) {
                // Update password di session
                $_SESSION['password'] = $newPasswordHash;
                return true;
            } else {
                return false;
            }
        } else {
            // Jika password lama salah
            return "Password lama salah";
        }
    } else {
        // Jika user tidak ditemukan
        return "User tidak ditemukan";
    }
}



	public function insertDataPassword($data){
		session_start();
	
		$id = $_SESSION['id'];
		$pass1 = $_SESSION['current_password'];
		
		$sql = "INSERT INTO `tbl_users`(
										 `password`)  
									VALUES (
											'$pass1')";
		if ($this->db->query($sql)===TRUE){
			return true;
		} else {
			return false;
		} 
	} // Add a closing brace here
	
	
   
   public function changePassword_model($data) { 
		session_start();

		// Ambil ID user dari session
		$id = $_SESSION['id'];

		// Ambil data dari form
		$oldPass = $_POST['old_password'];
		$newPass = $_POST['new_password'];
		$retypePass = $_POST['confirm_password'];

		// Query untuk mengambil password lama dari database
		$sql = "SELECT password FROM tbl_users WHERE id='$id'";
		$result = $this->db->query($sql);

		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			$currentPassInDb = $row['password'];

			// Cek apakah password lama yang diinput cocok dengan yang ada di database
			if ($currentPassInDb === $oldPass) {
				
				// Cek apakah password baru sama dengan konfirmasi password
				if ($newPass === $retypePass) {
					
					// Update password di database
					$sqlUpdate = "UPDATE tbl_users SET password='$newPass' WHERE id='$id'";

					if ($this->db->query($sqlUpdate) === TRUE) {
						// Update session password
						$_SESSION['password'] = $newPass;
						echo "Password has been successfully updated!";
						return true;
					} else {
						echo "Error updating password: " . $this->db->error;
						return false;
					}
				} else {
					echo "New password and confirmation password do not match.";
					return false;
				}
			} else {
				echo "The current password is incorrect.";
				return false;
			}
		} else {
			echo "User not found.";
			return false;
		}

   }
	

}

?>
	
	
  
