<?php
class history_model {
    private $db;

    public function __construct() {
        // create object from database class
        $this->db = new Database;

        // check database connection status
        if ($this->db == false) {
            // Handle connection failure
        }
    }

    // Function to get all reports from the database
    public function get_data_history() {
         $result = $this->db->query("SELECT * FROM tbl_data_laporan WHERE status_laporan = 'Selesai';");  //salah petik 
        $this->db->db_close(); // Close dabase connection
        
        if($result->num_rows > 0){
            // convert to associative array
            $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $row;
        }else{
            return []; // empty array
        }
    }
	
	public function get_data_Userhistory() {
		session_start(); // Perbaiki: tambahkan tanda kurung

		// Ambil nama lengkap dari session
		$full_name = $_SESSION['full_name'];

		// Pastikan nama lengkap ditangani dengan benar dalam query
		$result = $this->db->query("SELECT * FROM tbl_data_laporan WHERE full_name = '$full_name'"); // Perbaiki: gunakan $full_name

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


    // Function to insert new report data
    public function insertHistoryData($data) {
		// set time zone
		date_default_timezone_set('Asia/Jakarta');
		
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
		$emergency = "No";
		
		
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


    // Function to update report data
    public function updateHistoryData($data) { 
	
        $id_history = $data['history_id'];
        $judul = $data["history_judul"];
        $deskripsi = $data["history_deskripsi"];
        $longitude = $data["history_longitude"];
        $latitude = $data["history_latitude"];
        $lokasi = $data["history_lokasi"];
        $tanggal = $data["history_tanggal"];
        $waktu = $data["history_waktu"];
        $lapor = $data["history_lapor"];
        $foto = $data["history_foto"];
        $status_pelapor = $data["history_status_pelapor"];
		$keterangan = $data['history_keterangan'];
		$status_laporan = $data["history_status_laporan"];
		$tanggal_melapor = $data["history_tanggal_melapor"];
        // SQL query to update the report
        $sql = "UPDATE tbl_history SET judul='$judul',
											deskripsi_pengaduan='$deskripsi', 
											longitude='$longitude',
											latitude='$latitude',
											lokasi='$lokasi', 
											tanggal_kejadian='$tanggal', 
											waktu_kejadian='$waktu',
											lapor_pihak_terkait='$lapor',
											path_bukti_foto='$foto', 
											status_pelapor='$status_pelapor',
											keterangan_laporan ='$keterangan',
											status_laporan ='$status_laporan',
											tanggal_melapor='$tanggal_melapor'
											WHERE id_history='$id_history';";

        if ($this->db->query($sql) === TRUE) {
            return true;
        } else {
            return false;
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

  
}

?>