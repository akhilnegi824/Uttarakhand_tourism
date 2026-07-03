<?php
// Database Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'uttarakhand_tourism');        // Change to your DB username
define('DB_PASS', 'Akhil@2004');            // Change to your DB password
define('DB_NAME', 'uttarakhand_tourism');

$conn = new mysqli("localhost", "uttarakhand_tourism", "Akhil@2004", "uttarakhand_tourism");

if ($conn->connect_error) {
    // For production, log the error instead of displaying it
    die("Connection failed. Please try again later.");
}

$conn->set_charset("utf8mb4");
?>
