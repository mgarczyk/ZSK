<?php
session_start();
require_once("../connect.php");
if(!empty($_POST["name"]) && !empty($_POST["surname"]) && !empty($_POST["birthday"])){
  $name = $_POST["name"];
  $surname = $_POST["surname"];
  $birthday = $_POST["birthday"];
  $query = "INSERT INTO  user (name, surname, birthday) VALUES ('$name', '$surname', '$birthday');";
  $result = mysqli_query($conn, $query);
}else{
  $_SESSION["message"]  = "Wypełnij pola";
}
header("location: ../index.php");
 ?>
