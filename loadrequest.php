<?php
	session_start();
	require 'dataconnetion.php';
	$currentuser = $_SESSION['id'];
	$sql="SELECT u.firstname,u.lastname,r.senderid FROM users u,request r where r.toid=".$currentuser." and u.userid=r.senderid ORDER by date";
	$result = $conn->query($sql) ;
	if ($result->num_rows >0)
	{
		while($a = $result->fetch_assoc())
		{   echo "<div class='requests' id='requests".$a['senderid']."'>";
			echo "<img src=jajjajajajaj.jpg height=40 width=40 class='profile'>";
			echo "<a onclick='profile(".$a['senderid'].")'><h6 class='subname'>".$a['firstname']." ".$a['lastname']."</h6></a>";
			echo "<div class='left'>";
			echo "<button onclick='actionRequest(1,".$a['senderid'].")' class='button1'>accept</button>";
			echo "<button onclick='actionRequest(0,".$a['senderid'].")' class='button1' style=' background-color:#ffffff; color: grey; border: 2px solid #edededed'>decline</button>";
			echo "</div>";
			echo "</div>";
		}
		
		
	}
?>