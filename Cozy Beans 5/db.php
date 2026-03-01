<?php
$host = "127.0.0.1:3307";   
$user = "root";
$pass = "";
$db   = "cozy_beans"; 

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
