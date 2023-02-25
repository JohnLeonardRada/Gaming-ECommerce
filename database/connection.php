<?php 

$host = "localhost";
$username = "root";
$password = "";
$dname = "ecommerce";

// Create a Connection to the MySQL Server
$conn = mysqli_connect($host, $username, $password, $dname);

// Check the Connection
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

?>