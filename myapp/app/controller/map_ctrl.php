
<?php
class map_ctrl extends Controller {

    // Constructor
    public function __construct() {
        // You can initialize anything you need here
    }

    // Method to display the report page
	public function map(){
		// Associative Arrays (arrays with keys)
		$arr_title['title'] = "Map Page";
	
        // Prepare data to pass to the view
        
     
		
		session_start();
		$arr_data['datalogin'] = $_SESSION;
		// Display page and send data
		$this->display('template/header', $arr_title);
		$this->display('template/sidebar', $_SESSION);
		$this->display("risklevels/map", $arr_data); 
		//				folder view / file
		$this->display('template/footer');
		
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
}
?>

