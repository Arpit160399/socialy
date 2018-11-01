<?php
	session_start();
	require 'dataconnetion.php';
	$action = $_REQUEST['act'];
	$senderid = $_REQUEST['tempid'];
	
	$currentuser = $_SESSION['id'];
	if($action==1)
	{
		$sql = "insert into friends values(".$currentuser.",".$senderid.")";
		$sql1 = "DELETE FROM request WHERE senderid = ".$senderid." and toid = ".$currentuser;
		if($conn->query($sql) == true)
		{
			if($conn->query($sql1) == true)
			{
				
				echo "";
				
			}
			
			
		}
		
		
	}else
	{
	      $sql1 = "DELETE FROM request WHERE senderid =".$senderid." and toid =".$currentuser;
             if($conn->query($sql1) == true)
			{
				
				echo "";
				
			}else{ 
    echo "ERROR: Could not able to execute ". $conn->error; 
}
		
		
		
	}

?>