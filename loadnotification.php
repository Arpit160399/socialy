<?php
	
	session_start();
    require 'dataconnetion.php';
	$id = $_SESSION['id'];
	$sql="SELECT notification.act,notification.postid,users.firstname,users.lastname FROM `notification`,users WHERE notification.userid=".$id." AND users.userid=notification.friendid ORDER BY notification.date DESC";
	
	$result= $conn->query($sql);
	if($result->num_rows >0)
	{
		while($a = $result->fetch_assoc())
		{
			echo "<p><b>".$a['firstname']."".$a['lastname']."</b> shared an post to you</p>";
			echo "<hr>";
		}
	}
?>