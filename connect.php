<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

// Create connection
$connect = new mysqli($servername, $username, $password, $database);
// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
// Perform your database operations here

// Close the connection
// $connect->close();

?>