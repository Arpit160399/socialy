<?php
session_start();
require "dataconnetion.php";
$text = $_POST['comment'];
$postid = $_POST['postid'];
$userid = $_SESSION['id']; 

  try {
  if($smt = $conn->prepare("insert into comments values(NULL,?,?,?)")  )
{
  $smt->bind_param('sss',$userid,$postid,$text);
  $smt->execute();
header("location:Home.php");

}
  } catch (\Exception $e) {
}

?>
