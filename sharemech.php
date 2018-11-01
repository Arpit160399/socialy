<?php
	 require 'dataconnetion.php';
	session_start();

$userid = $_SESSION['id'];
$sharedid = $_REQUEST['id'];
$post = $_REQUEST['post']; 
	
	$sql = "INSERT INTO notification VALUES(".$sharedid.",".$post.",3,CURRENT_TIMESTAMP,".$userid.")";
	if($conn->query($sql))
	{
	echo "<button class='button'>shared</button>";
	}
?>