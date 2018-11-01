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
<link rel="stylesheet" href="css/homestyle.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 </head>

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
        <li class="nav-item  ">
          <a class="nav-link " href="home.php"><img src= "css/home.png" height="23" width="23"> Home <span class="sr-only ">(current)</span></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="# " id="message" data-container="body" data-toggle="popover" data-content="
	         <div style='width = '60''>
	<h6>by user</h6>
		 <h7>hi</h7>
	<hr>
	
	<h6>by user</h6>
		<h7>bye</h7>
		</div>

		          
			          " data-html="true" title="messages" data-placement="bottom" ><img src= "css/message.png" height="23" width="23"> Messages</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="# "  data-container="body" id="notification" data-toggle="popover" data-content="<div>
	           " title="Notification" data-placement="bottom" data-html="true"><img src= "css/notification.png" height="23" width="23"> Notification</a>
        </li>
      </ul>
      <div class="navbar-nav nav-item ">
        <a class=" nav-link" href="Logout.php">
        <img src="<?php echo $_SESSION['file'];?>" alt="" class="avtar" height="30" width="30"> <?php echo" ". $_SESSION["firstname"]?> ,Logout
      </a>
      </div>
    </div>
  </nav>


</body>
</html>
