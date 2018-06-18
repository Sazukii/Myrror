<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbnaam = "myrror";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbnaam);

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . $conn->connect_error);
}
echo "Connected successfully";
?>