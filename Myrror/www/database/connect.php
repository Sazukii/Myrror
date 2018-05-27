<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbnaam = "myrror";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbnaam);

// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
echo "Connected successfully";
?>