<?php

$servername = "localhost";
$username = "root";
$password = ""; // Leave the password field empty
$db = "onlineshop";

// Create connection
$con = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
