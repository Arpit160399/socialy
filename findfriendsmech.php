

<?php
	  require 'dataconnetion.php';
	session_start();
	
	$currentsuser = $_SESSION['id']; 
	
	$name = $_REQUEST['name'];

	
	
	$SQL = "SELECT users.userid,users.username,users.firstname,users.lastname,about.file from users LEFT JOIN about ON users.userid=about.userid where  users.userid <>".$currentsuser." and (concat(firstname,' ',lastname) like '".$name."%' or username like '".$name."%')";
	$SQL3 = "SELECT * FROM friends WHERE friendsID =".$currentsuser;
	$result = $conn->query($SQL);
	if($result->num_rows > 0)
	{
		$SQL2 = "select * from request where senderid = ".$currentsuser;
	    
		while($a = $result->fetch_assoc())
		
		{
			$_COOKIE['tempName'] = $a['userid'];
			$flag = true;
			echo"<div class='listview'>";
			echo"<img src='".$a['file']."' weight=50 height=50 class='profile'>";
			echo "<a onclick='profile(".$a['userid'].")' ><h6 class='name'>".$a['firstname']." ".$a['lastname']."</h6></a>";
			echo "<p class='subtitle'>@".$a['username']."</p>";
			echo "<div id='request".$a['userid']."'>";
			$result2=$conn->query($SQL3);
			if($result2->num_rows > 0)
			{
				while($c= $result2->fetch_assoc())
				{
					if($c['userID'] == $a['userid'])
					{      
						if($flag)
						{echo "<button class='button'>following</button>";
						$flag = false;
					     }
					}
					
				}
				
			}
			
			$result1 = $conn->query($SQL2);
	         if($result1->num_rows > 0)
	         {
		       
		         
	        while($b = $result1->fetch_assoc())
	        { 
		        
		        if($b['toid']==$a['userid'] )
			  {
				         if($flag)
				         { 
					        
					        echo"<button class='button' >Request sended</button>";
				            $flag = false;
			       }
			   }	
			  			 
		  }
		
		}else
			{
			    if ($flag)
			    {
				   
				   echo "<button class='button' style='background-color:#48d0ec; color:#ffffff' onclick='sentRequest(".$a['userid'].")'>follow</button>";
				$flag = false;
				}
			}
			

		if($flag)
			{
			
				
				   echo "<button class='button' style='background-color:#48d0ec; color:#ffffff' onclick='sentRequest(".$a['userid'].")'>follow</button>";

			}
			

					
			echo "</div>";
			   echo "</div>";
			}
		
	}else{
		echo "no record found";
	}
	
?>
