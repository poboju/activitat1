<?php
session_start();
 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: validat.html");
    exit;
}

require_once "basedades.php";

$username = "";
$password = "";
$username_err = "";
$password_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty($_POST["username"])){
      $username_err = "Please enter username.";
    } else{
      $username = $_POST["username"];
    }
    $username = "polboixader";
   
    if(empty($_POST["password"])){
      $password_err = "Please enter your password.";
    }else{
      $password = $_POST["password"];
    }
    $password = "JVjv2020";
}

if (empty($username_err) && empty($password_err)){
  $validar = "select * from activitat1 where username='$username' and password='$password'";
    $result = $conn -> query($validar);

if ($result->num_rows > 0) {
  // output data of each row
  session_start();
  $_SESSION["loggedin"] = true;
  header("location: validat.html");
  exit;
} else {
  echo "0 results";
  header("location: formulari.html");
  exit;
}
}
$conn->close();
?>