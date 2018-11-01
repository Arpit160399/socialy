<?php
session_start();
require 'dataconnetion.php';
$id = $_SESSION['id'];
$postid = $_REQUEST['postid'];
$action = $_REQUEST['act'];
if($action == 1)
{
	$sql = "INSERT INTO `Like` VALUES(".$id.",".$postid.",true)";
	
	echo "<a onclick='like(".$postid.",0)'><img  id='icon'src= 'css/like2.svg' height='23' width='23'></a>";
}else{
	
	$sql = "DELETE FROM `Like` WHERE postid = ".$postid." AND userid=".$id;
	echo "<a onclick='like( ".$postid.",1)'><img  id='icon' src= 'css/like.svg' height='23' width='23'></a>";
}

if ($conn->query($sql) === TRUE) {
    
} else {
    echo $conn->error;
}


?>