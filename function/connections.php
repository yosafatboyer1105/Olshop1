<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "olshop1";

// db connections 
$connections = mysqli_connect($server, $username, $password, $database) or die ("failed to connect to DB");
?>