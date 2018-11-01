<?php
	session_start();
	require 'dataconnetion.php';
	$toid = $_REQUEST['tempid'];
	$currentuser = $_SESSION['id'];
	
	$sql = "INSERT INTO request VALUES(".$currentuser.",".$toid.",CURRENT_TIMESTAMP)";
		if($conn->query($sql) == true)
	{
		echo "<button class='button'>request sended</button>";
	} 
	
	
?>