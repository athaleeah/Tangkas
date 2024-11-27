<?php 
class data_model{
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
    public function getAllDataTangkas(){
        $result = $this->db->query("select * from tbl_data_laporan;");  //salah petik 
        $this->db->db_close(); // Close dabase connection
        
        if($result->num_rows > 0){
            // convert to associative array
            $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $row;
        }else{
            return []; // empty array
        }
    }
		//FAST REPORT
    public function createDataNewReport($data){
		// set time zone
		date_default_timezone_set('Asia/Makassar');
		
		// get data, buat nama sembarang bukan sesuai tabel, = 'name' di view
		session_start();
		
        
		//$id_tbl_users = '1'; 					// dari tabel users , relation!!
        $fullname = $_SESSION ['full_name'];
		$tbl_id_users = $_SESSION ['id'];	 // PAKAI SESSION UNTUK PANGGIL DATA DARI TABEL USERS
		
		$id_laporan = uniqid();
		//  dari tabel users, bukan report!!
        $judul = $data['input-judul'];               		 // sama dengan tabel history
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
		$emergency = "Manual";
		
		//echo "DATA YANG SUDAH MASUK KE MODEL: \n<br>";
		
		// sql query
        $sql = "INSERT INTO `tbl_data_laporan`(`id_laporan`,`tbl_id_users`,`full_name`, `judul`, `deskripsi_pengaduan`, `longitude`,  
										`latitude`, `lokasi`, `tanggal_kejadian`, `waktu_kejadian`, `lapor_pihak_terkait`, 
										`path_bukti_foto`, `status_pelapor`, `tanggal_melapor`, `status_laporan`,`emergency`) 
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
		echo $sql;
        if ($this->db->query($sql)===TRUE){
            return true;
        } else {
            return false;
        }
    }
        
    public function deleteDataLecturer ($id){
        $sql = "DELETE from tbl_lecturer WHERE id = $id";
        if($this->db->query($sql)===TRUE){
            return true;
        } else {
            return false;
        }
    }

    public function updateDataLecturer($data){
        $id = $data['lec_id_update'];
        $name = $data['lec_name_update'];
        $email = $data['lec_email_update'];
        $phone = $data['lec_phone_update'];
        $sql = "UPDATE tbl_lecturer SET name='$name', email='$email', phone='$phone' WHERE id='$id'";
        if ($this->db->query($sql)===TRUE){
            return true;
        } else {
            return false;
        }
    }
	
	public function get_data_laporan(){
        $result = $this->db->query("SELECT * FROM `tbl_data_laporan`;");
        $this->db->db_close(); // Close dabase connection
        
        if($result->num_rows > 0){
            // convert to associative array
            $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $row;
        }else{
            return []; // empty array
        }
    }
}
?>