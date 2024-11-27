<?php
class emergencyButton extends Controller {

    // Constructor
    public function __construct() {
        // You can initialize anything you need here
    }

    // Method to display the report page
    public function report() {
        // Debugging - Displays POST data
        var_dump($_POST); 

        // Set the page title
        $arr_title['title'] = "Report Page";

        // Start session and retrieve data
        session_start();
        $data = $this->logic("datareport_model")->get_data_report();

        // Prepare data to pass to the view
        $arr_data['datareport'] = $data;
        $arr_data['datalogin'] = $_SESSION;

        // Render the view components
        $this->display('template/header', $arr_title);
        $this->display('template/sidebar', $_SESSION);
        $this->display('document/report', $arr_data);  // Passing $arr_data instead of $_SESSION
        $this->display('template/footer');
    }

    // Method to insert new data
    public function insert() {
        // Insert new report data and redirect accordingly
        if ($this->logic("datareport_model")->insertDataReport() == true) {
            header('Location: ' . APP_PATH . '/report/report');
            exit;
        }
    }

    // Method to update data
    public function update() {
        // Debugging - Displays POST data
        // var_dump($_POST);

        // Update report data and redirect accordingly
        if ($this->logic("datareport_model")->updateReportUsers($_POST) == true) {
            header('Location: ' . APP_PATH . '/report/report');
            exit;
        } else {
            header('Location: ' . APP_PATH . '/report/report');
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
