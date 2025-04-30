<?php
// Database connection file for Kadoma Town Council website

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kadoma_town_council";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
