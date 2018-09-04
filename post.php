<?php
require 'dataconnetion.php';
$textinfo = $_POST["newpost"];
$userid = $_SESSION['id'];
try {
  if($smt = $conn->prepare("insert into post values(?,NULL,CURRENT_TIMESTAMP,NULL,?)"))
  {
    $smt->bind_param("ss",$textinfo,$userid);
    $smt->execute();
    header("location:Home.php");
  }
} catch (\Exception $e) {

}
?>
