<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bassunnahe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if  ($conn->connect_error){
        die("connection failed: ". $conn->connect_error);
}
?>