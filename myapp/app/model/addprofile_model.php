<?php 
class addprofile_model extends Controller{
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
    public function get_data_addprofile(){
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

    	
    public function createDataNewUserProfile ($data){
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
		$foto = $data['input-foto'];
		
	
		// Check if user with same full name and email already exists
		$check_sql = "SELECT * FROM `tbl_users` WHERE `full_name` = '$fullname' AND `email` = '$email'";
		$result = $this->db->query($check_sql);
	
		if ($result->num_rows > 0) {
			// User with same full name and email already exists, return error message
			return 'Duplicate user: Full name and email already exist in the database.';
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


        
// Add a closing brace here


	// update data user
    public function updateDataProfile($data){
        $id = $data['user_id'];
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
            return true;
        } else {
            return false;
        }
    }
	
	
	
	//PENYEBAB EROR PAGE TIDAK MUNCUL USER LIST AND PROFILE
	 public function deleteDataProfile($id){
         $sql = "DELETE from tbl_users WHERE id = '$id';";
         if($this->db->query($sql)===TRUE){
             return true;
         } else {
             return false;
         }
     }
}





?>
	
	
  
