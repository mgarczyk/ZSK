<?php
session_start();
require_once("../connect.php");
if(!empty($_POST["name"]) && !empty($_POST["surname"]) && !empty($_POST["birthday"])){
  $name = $_POST["name"];
  $surname = $_POST["surname"];
  $birthday = $_POST["birthday"];
  $id = $_POST["id"];
  $query = "UPDATE user SET name = '$name', surname = '$surname', birthday = '$birthday' WHERE id = $id;";
  $result = mysqli_query($conn, $query);
}else{
  $_SESSION["message"]  = "Wypełnij pola";
}
header("location: ../index.php");
 ?>
