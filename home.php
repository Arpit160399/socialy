<?php
session_start();
require 'dataconnetion.php';
include 'cardview/data.php';
?>

<html>
<!DOCTYPE html>

<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Site made with Mobirise Website Builder v4.3.0, https://mobirise.com -->
  <title>social</title>

<!--
 <script src="popover.js" charset="utf-8">
</script>
-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet"/>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<script src="popover.js"></script>

<link rel="stylesheet" href="css/homestyle.css">
 </head>
 <script>
	
 </script>

<body>
	
  <!--  navigation bar part  -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top " style=" background-color: #48d0ec ">
    <a class="navbar-brand brand " href="# ">
<h1><img src="css/sociallogo.png " width="50" height="50"> Socialy</h1></a>
    <button class="navbar-toggler " type="button " data-toggle="collapse " data-target="#navbarSupportedContent " aria-controls="navbarSupportedContent " aria-expanded="false " aria-label="Toggle navigation ">
    <span class="navbar-toggler-icon "></span>
  </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent ">
      <ul class="navbar-nav mr-auto " id="menu">
        <li class="nav-item active ">
          <a class="nav-link " href="# "><img src= "css/home.png" height="23" width="23"> Home <span class="sr-only ">(current)</span></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="# " id="message" data-container="body" data-toggle="popover" data-content="
	         
	<h6>by user</h6>
		 <h7>hi</h7>
	<hr>
	
	<h6>by user</h6>
		<h7>bye</h7>
		</div>

		          
			          " data-html="true" title="messages" data-placement="bottom" ><img src= "css/message.png" height="23" width="23"> messages</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " onclick="requestwindow()"  data-container="body" id="notification" data-toggle="popover" data-content="<div id=info> 
	          </div>
	           " title="Notification" data-placement="bottom" data-html="true"><img src= "css/notification.png" height="23" width="23"> Notification</a>
        </li>
      </ul>
      <div class="navbar-nav nav-item ">
        <a class=" nav-link" href="Logout.php">
        <img src="<?php echo $_SESSION['file'];?>" alt="" class="avtar" height="30" width="30"> <?php echo $_SESSION["firstname"]?>, Logout
      </a>
      </div>
    </div>
  </nav>







  <!-- main part-->
  <div class="row palce ">
    <!-- userporfile part  -->
    <div class="col-3 menu padding-0">
        <img src="css/coverimg.png" alt="" height="250" width="347">
      <div class="align  padding-0">
         <div id ="back">
        <img id="profile"src="<?php echo $_SESSION['file'];?>"  class="avtar" height="50" width="50" >
        <div id="textprofile">
          <a href="profile.php" > <b style="color : #ffffff; "> <?php  if(isset($_SESSION['id']))    {
              echo $_SESSION["firstname"]." ".$_SESSION["lastname"];
            }?></b>
             </a><br>
          <a href="#"style="color : #ffffff ;font-size:12; margin-left : 4"><b>edit info</b></a>

</div>
</div>
<a href="#" style="color:#bdbdbdbd">Post</a>
<a href="#"style="color :#bdbdbdbd;margin:0 ; margin-bottom: 00 ;margin-left:50">Followers</a>
<a href="#"style="color :#bdbdbdbd;margin:0 ;margin-left:50">Following</a>
<hr style=" border: 0.5px solid #edededed; width: 1;height:70 ;margin:0 ;margin-top:-30; margin-left:57">
<hr style=" border: 0.5px solid #edededed; width: 1;height:70; margin:0;margin-top:-70; margin-left:185">
<div style="margin-top:-35">
<b style="font-size: 24 ;color:#bdbdbdbd; margin-left: 15;"><?php 
	 $sql = "select COUNT(POSTid) from post  where userid =".$_SESSION['id'];
	 
	 $result = $conn->query($sql);
           if ($result->num_rows > 0)
            {
              while ($a = $result->fetch_assoc())
              { 
	             echo $a['COUNT(POSTid)'];
              }
               }
?></b>
<b style="font-size: 24;color:#bdbdbdbd; margin-left: 75;"><?php 
	 $sql = "select COUNT(friendsID) from friends  where userID =".$_SESSION['id'];
	 
	 $result = $conn->query($sql);
           if ($result->num_rows > 0)
            {
              while ($a = $result->fetch_assoc())
              { 
	             echo $a['COUNT(friendsID)'];
              }
               }?></b>

<b style="font-size: 24;color:#bdbdbdbd; margin-left: 100;">
               <?php 
	 $sql = "select COUNT(userID) from friends  where friendsID =".$_SESSION['id'];
	 
	 $result = $conn->query($sql);
           if ($result->num_rows > 0)
            {
              while ($a = $result->fetch_assoc())
              { 
	             echo $a['COUNT(userID)'];
              }
               }?>

</b>
</div>
      <h2  style="color:#bdbdbdbd; margin-top :20 ; font-size:24">Notification</h2><img src="css/notification.png" height="20" width="20">
     <hr style="margin: 0;margin-left: -20; margin-right: -20;margin-top:-20 ";>

<div id="notificationshow">
<h2>no notification now</h2>
</div>
         <a href="profile.php"> <button class="menubutton"type="button"  name="button" data-toggle="popover">profile </button></a><br>
         <a href="findfriends.php"> <button class="menubutton"type="button" name="button">find friends</button></a><br>

          <button class="menubutton"type="button" name="button">setting</button><br>
     </div>
    </div>
    <div class="col scroll padding-0 " id='feed'>
	    
	    
	    
	    
	    
    <!--  post part -->
      <div class="row ">
        <div class="col ">
          <form class="inputarea"  enctype="multipart/form-data" action="post.php" method="post">
     <textarea id="newpost" name="newpost"></textarea>
     <div class="element">
   <i class="fa fa-camera" id="cam"></i>  <span class="name"></span>
          <input type="file" name="file" id="file" >
          </div>
     <button id="postbutton" type="submit" name="post">post</button><br>

           </form>
        </div>
      </div>




      <!-- feeds part -->
      <div class="row " style="padding-top :80;    padding-left: 20px;
    padding-right: 20px;">
        <div class="col feeds " id='feeds'>
          <?php
          $sql = "SELECT post.file,post.textinfo,post.POSTid,post.date, users.firstname,users.lastname,post.userid FROM post INNER JOIN users ON post.userid = users.userid WHERE post.userid = (SELECT userid FROM friends WHERE friendsid = ".$_SESSION['id'].") OR post.userid = ".$_SESSION['id']." order by date DESC";
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





    <!--  chating part   -->
    <div class="col-3 chats padding-0" >
      <div id="chatheader">
        <h1 style="font-size : 25; margin-left: 20; margin-top: 5">  Chats(0)<h1>
          <hr style=" border : 0.7px solid #edededed ; width :500">
          <div style=" margin-top: -20; margin-left:20">
           <h6  style="color: grey" > <img class="avtar"  src="css/boy.png" height="40" width="40" alt="" style="border: 2px solid #ffffff;background-color: white ;">  Aman</h6>
           <p style=" margin-top: -15;  font-size: 12 ;margin-left: 45;color:grey;">offline</p>
    </div>
    </div>
  </div>

</div>




<script>
	
	
function requestwindow()
 {
	 var http = new XMLHttpRequest();
			http.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					document.getElementById('info').innerHTML = this.responseText;
				}
				
			   };
			   http.open('GET',"loadnotification.php", true)
			 http.send();
	 
	 
}

	
	$('#feed').scroll(function() {
		var ht = $('#feed').scrollTop()
    if(ht <= 0) {
       var	httpx = new XMLHttpRequest();
			httpx.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200)
			{
				document.getElementById('feeds').innerHTML =  this.responseText;
			}
		};
	  httpx.open('GET',"feedsaction.php",true);
	  httpx.send();
    }
});
	 	$('#cam').click(function () {
  $('input[type="file"]').trigger('click');
});

$('input[type="file"]').on('change', function() {
  var val = $(this).val();
  $(this).siblings('span').text(val);
})

	
// $("[data-toggle=popover]").each(function(i, obj) {
	$(function(){

$( '[data-toggle="popover"]').popover()

});
 function profile(str)
	 {
 	window.location = "http://localhost/socialy/profile.php?id=" + encodeURIComponent(str);
 	}
</script>

</body>
</html>
