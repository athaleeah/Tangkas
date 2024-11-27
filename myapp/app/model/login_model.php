<?php 
class login_model{
    private $db;
     
    public function __construct(){
        // create object from database class
        $this->db = new Database;

        // check status
        if($this->db==false){
            echo "<script>console.log('Connection failed.');</script>";
        }else{
            echo "<script>console.log('Connection successfully.');</script>";
        }
    }
	
	//BACA DATA DISIMPAN JADI ARRAY (sudah punya list data di tabel users)
    public function getAllDataTangkas(){
        $result = $this->db->query("select * from tbl_users;");
        $this->db->db_close(); // Close dabase connection
        
        if($result->num_rows > 0){
            // convert to associative array
            $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $row;
        }else{
            return []; // empty array
        }
    }
//BUAT DATA BARU DI TABEL DENGAN AMBIL DARI INPUT USER
    public function createDataNewUser($data){
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
								
		//echo $sql;
		// jika data yang masuk sesuai kolom = simpan
        if ($this->db->query($sql)===TRUE){
            return true;
        } else {
            return false;
        }
    }
        

	//USERLIST
	public function get_data_users(){
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
	
	//LOGIN PROCESS
	public function check_login_process($role, $email, $password){
		$result = $this->db->query("SELECT * FROM `tbl_users` WHERE `role`= '$role' AND `email`= '$email' AND `password`= '$password'");
		$this->db->db_close(); // Close database connection
		
		if($result->num_rows > 0){
			// convert to associative array
			$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
			
			return $row; // associative array
		}else{
			return []; // empty array
		}
	}
	
}
?>