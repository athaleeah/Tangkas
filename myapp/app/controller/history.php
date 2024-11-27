<?php
class history extends Controller {

    // Constructor
    public function __construct() {
        // You can initialize anything you need here
    }

    // Method to display the report page 
    public function history(){
		// Associative Arrays (arrays with keys)
		$arr_title['title'] = "History Page";
		
		session_start();
		$data = $this->logic("history_model")->get_data_history();
		
		 // Prepare data to pass to the view
        $arr_data['datareport'] = $data;
        $arr_data['datalogin'] = $_SESSION;

		
		// Display page and send data
		$this->display('template/header', $arr_title);
		$this->display('template/sidebar', $_SESSION);
		$this->display("document/history", $arr_data); // jika diatas datahistory = $data, jangan lupa passing sebagai $arrdata buka session
		//				folder view / file
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

    // Method to delete data
    public function delete() {
        // Debugging - Displays POST data
        // var_dump($_POST);

        // Retrieve the ID of the data to be deleted
        $id = $_POST['dreport_id'];

        // Delete report data and redirect accordingly
        if ($this->logic("datareport_model")->deleteReportUsers($id) == true) {
            header('Location: ' . APP_PATH . '/report/report');
            exit;
        } else {
            header('Location: ' . APP_PATH . '/report/report');
            exit;
        }
    }
}
?>
