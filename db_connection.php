<?php
$servername = "localhost";
$username = "root";  // default username for MySQL in XAMPP
$password = "";      // default password is empty for XAMPP
$dbname = "inventory_db";  // database name you created

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
