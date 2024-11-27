<?php
$con = new mysqli('localhost', 'root', 'Tangkas12354', 'db_tangkas');
// $con = new mysqli('localhost', 'root', 'password', 'database_name');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} else {
    //echo "Connection successful";
}
?>