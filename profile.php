<?php
session_start();
require 'dataconnetion.php';
if(isset($_REQUEST['id'] ))
{
	$id=$_REQUEST['id'];
}else
{
$id =$_SESSION['id'];
}
$sql = "select * from users where userid = ".$id;
$result = $conn->query($sql);
if($result->num_rows >0)
{
	
	while($a = $result->fetch_assoc())
	{
		
		
		$first = $a['firstname'];
		$last = $a['lastname'];
		$city = $a['city'];
		$DOB = $a['DOB'];
		$sex = $a['sex'];
		$username = $a['username'];
	}
}
$sql1 = "select COUNT(friendsID) from friends  where userID =".$id;
	 
	 $result1 = $conn->query($sql1);
           if ($result1->num_rows > 0)
            {
              while ($a = $result1->fetch_assoc())
              { 
	             $follwer = $a['COUNT(friendsID)'];
              }
               }

 $sql2 = "select COUNT(userID) from friends  where friendsID =".$id;
	 
	 $result2 = $conn->query($sql2);
           if ($result2->num_rows > 0)
            {
              while ($a = $result2->fetch_assoc())
              { 
	             $follwing= $a['COUNT(userID)'];
              }
               }

 $sql3 = "select COUNT(POSTid) from post  where userid =".$id;
	 
	 $result3 = $conn->query($sql3);
           if ($result3->num_rows > 0)
            {
              while ($a = $result3->fetch_assoc())
              { 
	             $post= $a['COUNT(POSTid)'];
              }
               }

$sql6 = "select * from about  where userid =".$id;
	 
	 $result6 = $conn->query($sql6);
           if ($result6->num_rows > 0)
            {
              while ($a = $result6->fetch_assoc())
              { 
	             $img = $a['file'];
	             $job = $a['job'];
	             $hobbies = $a['hobbies'];
              }
            }
?>
<html>
<!DOCTYPE html>

<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Site made with Mobirise Website Builder v4.3.0, https://mobirise.com -->
  <title>social</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet"/>

<link rel="stylesheet" href="css/profile.css">
<script>
	</script>

 </head>
 
 <body >
<?php
	require('navbar.php');
	?>
	<div class="container-fluid ">
		<img src="css/coverimg.png" width="1370" height="800" style="margin-left: -20">
		   <div class="overlay">
			
			<div>
				<h4 class="profilename"><?php echo $first." ".$last;?></h4>
				<h5  class="profilename" style="font-weight: 200; font-size: 18;margin-top: 0">@<?php echo $username;?></h4>
								</div>
						<div class="adjustment2">
							<h6 class="numb "><?php echo $post;?></h6>
									<h6 class="numb "><?php echo $follwer; ?></h6>
									<h6 class="numb "><?php echo $follwing; ?></h6>
									
									
							</div>
						<div class="adjustment1">
									<h6 class="title">post</h6>
									<h6 class="title">follower</h6>
									<h6 class="title">following</h6>
					</div>
                    <div class="buttonpois">
	                    <?php
		                    $flag = true;
		                    if($id != $_SESSION['id'])
		                    {
	                   echo " <button class='button' >Message</button><br>";
	                   $sql5 = "select friendsID from friends  where  userID=".$id;
	 
	 $result5 = $conn->query($sql5);
           if ($result5->num_rows > 0)
            {
              while ($a = $result5->fetch_assoc())
              { 
	             if($_SESSION['id'] == $a['friendsID'])
	             {
		             if($flag)
		             {
			             echo "<button  class='button'>Following</button>";
			             $flag=false ;
			             
		             }
		             
	             }
              }
               }       if($flag)
	                   {echo "<button  class='button' style='background-color: #48d0ec; color: white'>Follow</button> ";
	                    }}
	                    ?> 
	                    </div> 
			</div>
			
			
			<div class="row">
				<div class="col">
					<div class="about">
					
						<img src="<?php if(isset($img)){echo $img;}else{echo "css/man.png";} ?>"  class="avtarprofile" height="160" width="160" >
								<i class="fa fa-camera" data-toggle="modal" data-target="#upload" id="cam"  style="position: absolute ; margin-top: 23; margin-left: -93 ; font-size: 20"></i><span class="name"></span>
						<div class="textsection">
						<img src="css/about.svg" height="23" width="23"><b> About <?php echo $first;?></b>
						<hr style="margin-top: 7">
						<p style="margin-top: -6; "class="subtext">hahhaahsahshahshahshah</p>
							<img src="css/placeholder-filled-point.svg"  height="20" width="20" style="opacity: 0.5"><b class="subtext">   <?php echo $city;?></b><br>
<img  src="css/calendar.svg" height="20" width="20" style="margin-top: 12"><b class="subtext" style="position: absolute; top : 192"><?php echo $DOB;?></b><br>
<img src="css/male-and-female.svg" height="20" width="20" style="margin-top: 12"><b  class="subtext"style="position: absolute; top:222"><?php echo $sex;?></b><br>
							<a  style="color: black"href="#"><img src="css/frame-landscape.svg" height="23" width="23" style="margin-top: 30"><b style="position: absolute; top: 277 ;left: 95">Photos</b></a> <a style=" color:#ededed;position: absolute;  top :277;left: 250"href="#">More ></a>
							<hr>
							<div >
								<div class="row">
									<div class="col" style="padding: 5">
								<img src="css/250949-P4L7OU-528.jpg" height="60" width="80">
								</div>
																	<div class="col" style="padding: 5">
								<img src="css/250949-P4L7OU-528.jpg" height="60" width="80">
								</div>
									<div class="col" style="padding: 5">
								<img src="css/250949-P4L7OU-528.jpg" height="60" width="80">
								</div>

								
								</div>
								<div class="row" style="margin-top: 10">
	                            
	                            <div class="col" style="padding: 5">
								<img src="css/250949-P4L7OU-528.jpg" height="60" width="80">
								</div>
								<div class="col" style="padding: 5">
								<img src="css/250949-P4L7OU-528.jpg" height="60" width="80">
								</div>
								<div class="col" style="padding: 5">
								<img src="css/250949-P4L7OU-528.jpg" height="60" width="80">
								</div>
								
								</div>
								
								</div>
								<img src="css/add-a-contact-on-phone-interface-symbol-of-a-user-with-a-plus-sign.svg" height="23"width="23" style="margin-top: 20;"><b style="position: absolute; top: 504; left: 93">Follower You Know</b>
								<hr>
								<div style="height: 50">
									</div>
						</div>
						</div>
					</div>
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 <div class="col-6 scroll padding-0 ">
   <div class="row ">
        <div class="col " style="margin-top: -5">
          <form class="inputarea" action="post.php" method="post">
     <textarea id="newpost" name="newpost" placeholder="Start The Post....."></textarea>
     <button id="postbutton" type="submit" name="post" >post</button><br>

           </form>
        </div>
      </div>
        <div class="row " style="padding-top :70">
        <div class="col feeds ">
          <?php
          $sql = "SELECT post.file,post.textinfo,post.POSTid,post.date,users.firstname,users.lastname,users.userid FROM post,users WHERE users.userid=post.userid and post.userid= ".$id." order by date DESC";
       try {
          $result = $conn->query($sql);
           if ($result->num_rows > 0)
            {
              while ($a = $result->fetch_assoc())
              {
              $_COOKIE['data'] = $a;
             
              include 'card.php';  // code...
           
         }

        }
        } catch (\Exception $e) {

        }

?>
         </div>
      </div>


         </div>
         <div class="col" style="padding-left: 0; padding-right: 0 ;background-color: #E3ECE7;">
							<h6 style="color: gray; font-size: 23;  margin-top: 30">Following</h6>
							<hr>
							<div class="following scroll" >
							<?php	$sql4 = "select f.friendsID,u.Firstname,u.lastname,u.username from friends f,users u  where f.friendsID = ".$id." and u.userid=f.userID";
	 
	                $result4 = $conn->query($sql4);
           if ($result4->num_rows > 0)
            {
              while ($a = $result4->fetch_assoc())
              { 
	            echo "<div class='view'>";
	            echo "<img id ='avtar' scr='aadad.jpg' style='border-radius: 50%' height='40' width='40'>";
	            echo " <button type='button' class='close' aria-label='Close' id='close'><span aria-hidden='true'>&times;</span></button>";

	            echo "<h6 style='margin-top:-40;margin-left:45'>".$a['Firstname']." ".$a['lastname']."</h6>";
	            echo "<p style='margin-left:45;color:cdcdcd;margin-top:-10'>@".$a['username']."</p> ";
	            echo "</div>";
              }
               }
?>
								
								</div>
							</div>
				</div>
			
			
			
			
			
			
			<div  id="upload" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document" style="">
    <div class="modal-content" style="width: 590">
      <div class="modal-header">
        <h5 class="modal-title" ; color:"grey">upload</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div> 
                      <form action="profilepic.php" method="post" enctype="multipart/form-data">
 <button  type="submit" name="createuser" style="margin-top:30;margin-left: 510;background-color: #48d0ec; border-radius: 8px; height: 40; width: 70 ; color: #ffffff" >done</button>
        <div style="margin-left:20;margin-top: 30;margin-right: 20">
		       
		        <hr>
		     </div>   
             <div class="modal-body" id="list">
		                <img id="at" src="#"  height="230" width="190" style="background-color: #ffffff; border-radius:9px; margin-left: 178;">
 <i class="fa fa-camera" id="camb" style="position: absolute ; margin-top: 198; margin-left: -34"></i><span class="name"></span>
  <input type="file" onchange="readURL(this)" name="file" style="display: none">
		        
		        </form>
		                 	        
		             </div>
	        </div>
	        </div>
	        </div>
	        

			
			
			
			
			
			
			
			
		</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<script>
		$('#camb').click(function () {
  $('input[type="file"]').trigger('click');
});

		function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#at').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

	$(function(){

$( '[data-toggle="popover"]').popover()

});
</script>

	
	</body>
</html>	