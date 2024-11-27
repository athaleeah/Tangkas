<?php
class history_user extends Controller {

    // Constructor
    public function __construct() {
        // You can initialize anything you need here
    }

    // Method to display the report page 
    public function history_user(){
    $arr_title['title'] = "History Page";

    session_start();
    $data = $this->logic("history_model")->get_data_Userhistory();
    
    // Prepare data to pass to the view
    $arr_data['datareport'] = $data;
    $arr_data['datalogin'] = $_SESSION;

		// Ambil pesan sukses dari session, jika ada, dan hapus setelah ditampilkan
		
		// Display page and send data
		$this->display('template/header', $arr_title);
		$this->display('template/sidebar', $_SESSION);
		$this->display("document/history_user", $arr_data);
		$this->display('template/footer'); 
	}


    // Method to insert new data
    public function insert() { 
        // Insert new report data and redirect accordingly
        if ($this->logic("history_model")->insertHistoryData() == true) {
            header('Location: ' . APP_PATH . '/history/history');
            exit;
        }
    }

    // Method to update data
    public function update() {
        // Debugging - Displays POST data
        // var_dump($_POST);

        // Update report data and redirect accordingly
        if ($this->logic("history_model")->updateHistoryData($_POST) == true) {
            header('Location: ' . APP_PATH . '/history/history');
            exit;
        } else {
            header('Location: ' . APP_PATH . '/history/history');
            exit;
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
	
	public function deleteHistoryUser1() {
        // Debugging - Displays POST data
         //var_dump($_POST);

        // Retrieve the ID of the data to be deleted
        $id_laporan = $_POST['dreport_id'];

        // Delete report data and redirect accordingly
        if ($this->logic("mobile_model")->get_data_DeleteHistory($id_laporan) == true) {
            header('Location: ' . APP_PATH . '/history_user/history_user');
            exit;
        } else {
            header('Location: ' . APP_PATH . '/history_user/history_user');
            exit;
        }
    }
	
} 
?>
