<?php
session_start();
require 'dataconnetion.php';
$username = $_POST["username"];
$password = $_POST["password"];
$DOB = date("y-m-d",strtotime($_POST["date"]));
$city = $_POST["city"];
$sex = $_POST["sex"];
$Frist =  $_POST["fristname"];
$last = $_POST["lastname"];
try {
 if($smt = $conn->prepare("insert into users values('',?,?,?,?,?,?,?)")){
  $smt->bind_param("sssssss",$username,$password,$sex,$city,$Frist,$last,$DOB);
  $smt->execute();
    header("location:index.php");
  }
}
catch(PDOException $e)
 {
  echo "error".$e->getmessage();
   }

   $conn = null;
?>
