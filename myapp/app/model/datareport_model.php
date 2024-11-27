<?php
class datareport_model {
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
    public function get_data_report() {
        $result = $this->db->query("SELECT * FROM `tbl_data_laporan`;");
        $this->db->db_close(); // Close database connection

        if ($result->num_rows > 0) {
            // Convert result to associative array
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            return []; // Return empty array if no data
        }
    }

    // Function to insert new report data
    public function insertDataReport($data) {
		date_default_timezone_set('Asia/Jakarta');
		
		session_start();
	
		// Cek jika variabel sesi sudah diset			//called as $data in view
		$fullname = $_SESSION['full_name'];
		$tbl_id_users = $_SESSION['id'];
		$phone = $_SESSION['no_hp'];
		$email = $_SESSION['email'];
		$address = $_SESSION['alamat'];
		$gender = $_SESSION['gender'];
		$nik = $_SESSION['nik'];
	
		// Pastikan semua data yang diperlukan tersedia
	//	if (empty($fullname) || empty($tbl_id_users) || empty($email) || empty($address) || empty($gender)) {
	//		// Anda bisa mengembalikan false atau mengatur pesan kesalahan sesuai kebutuhan 
	//		return false;
	//	}
	
		$id_laporan = uniqid();
		$judul = $data['input-judul'];
		$deskripsi = $data['input-deskripsi'];
		//$longitude = $data['input-longitude'];
		//$latitude = $data['input-latitude'];
		$lokasi = $data['input-lokasi-bencana'];
		$tanggal = $data['tanggal-kejadian'];
		$waktu = $data['waktu-kejadian'];
		$lapor_pihak_terkait = $data['input-lapor-pihak'];
		$foto = $data['path_bukti_foto']; // Path to the photo 
		$status = $data['input-status-pelapor'];
		$tanggal_melapor = date("Y-m-d H:i:s"); // Correct time format 
		$status_laporan = "Di Proses";
	
		// SQL query to insert new report
		$sql = "INSERT INTO `tbl_data_laporan`(`id_laporan`, `tbl_id_users`, `full_name`, `judul`, `deskripsi_pengaduan`, 
												`longitude`, `latitude`, `lokasi`, `tanggal_kejadian`, `waktu_kejadian`, 
												`lapor_pihak_terkait`, `path_bukti_foto`, `status_pelapor`, `tanggal_melapor`, `status_laporan`) 
									VALUES ('$id_laporan', '$tbl_id_users', '$fullname', '$judul', '$deskripsi',
											'$lokasi', '$tanggal', '$waktu', '$lapor_pihak_terkait', '$foto', 
											'$status', '$tanggal_melapor', '$status_laporan')";
	
		if ($this->db->query($sql) === TRUE) {
			return true;
		} else {
			return false;
		 }
	}


    // Function to update report data
    public function updateReportUsers($data) {
        $id = $data['report_id'];
        $judul = $data["report_judul"];
        $description = $data["report_desc"];
        //$longitude = $data["report_longitude"];
        //$latitude = $data["report_latitude"];
        $lokasi = $data["report_lokasi"];
        $tanggal = $data["report_tanggal"];
        $waktu = $data["report_waktu"];
        $lapor = $data["report_lapor"];
        $foto = $data["report_foto"];
        $status = $data["report_status"];
		$status_laporan = $data["report_status_laporan"];


        // SQL query to update the report
        $sql = "UPDATE tbl_data_laporan SET judul='$judul', deskripsi_pengaduan='$description', 
											 lokasi='$lokasi', tanggal_kejadian='$tanggal', 
											waktu_kejadian='$waktu', lapor_pihak_terkait='$lapor', path_bukti_foto='$foto', 
											status_pelapor='$status', status_laporan = '$status_laporan'
										WHERE id_laporan='$id';";

        if ($this->db->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        } 
    }

    // Function to delete a report
    public function deleteReportUsers($id) {
        $sql = "DELETE FROM tbl_data_laporan WHERE id_laporan = '$id';";

        if ($this->db->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
}
