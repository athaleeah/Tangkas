<?php
session_start();
if (!isset($_SESSION["username"]) || !isset($_SESSION["role"]) || $_SESSION["role"] != "test") {
    header("Location: https://tangkas.web.id/index.php/");
}

