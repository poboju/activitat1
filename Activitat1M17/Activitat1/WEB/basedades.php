<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "M17";

$conn = mysqli_connect($host, $user, $pass, $db);

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
 
