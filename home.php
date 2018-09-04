<?php
session_start();
require 'dataconnetion.php';
include 'cardview/data.php';
?>

<html>
<!DOCTYPE html>

<head>
  <!-- Site made with Mobirise Website Builder v4.3.0, https://mobirise.com -->
  <title>social</title>

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/homestyle.css">
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
        <li class="nav-item active ">
          <a class="nav-link " href="# "><img src= "css/home.png" height="23" width="23"> Home <span class="sr-only ">(current)</span></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="# "><img src= "css/message.png" height="23" width="23"> messages</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="# " ><img src= "css/notification.png" height="23" width="23"> Notification</a>
        </li>
      </ul>
      <div class="navbar-nav nav-item ">
        <a class=" nav-link" href="Logout.php">
        <img src="css/man.png" alt="" class="avtar" height="30" width="30"> Logout
      </a>
      </div>
    </div>
  </nav>







  <!-- main part-->
  <div class="row palce ">
    <!-- userporfile part  -->
    <div class="col-3 menu padding-0">
        <img src="css/coverimg.png" alt="" height="254" width="345">
      <div class="align  padding-0">

        <a href="#" ><img src="css/man.png"  class="avtar" height="40" width="40"> <h4> <?php  if(isset($_SESSION['id']))
        {
          echo $_SESSION["firstname"].$_SESSION["lastname"];
        }?></h4>  </a><br>
          <button class="menubutton"type="button" name="button">profile </button><br>
          <button class="menubutton"ype="button" name="button">find friends</button><br>
          <button class="menubutton"type="button" name="button">setting</button><br>
     </div>
    </div>
    <div class="col scroll padding-0 " style="overflow : auto">
    <!--  post part -->
      <div class="row ">
        <div class="col ">
          <form class="inputarea" action="post.php" method="post">
     <textarea id="newpost" name="newpost"></textarea>
     <button id="postbutton" type="submit" name="post">post</button><br>

           </form>
        </div>
      </div>

      <!-- feeds part -->
      <div class="row " style="padding-top :20">
        <div class="col feeds ">
          <?php
          $sql = "select * from post  order by date desc ";
       try {
          $result = $conn->query($sql);
           if ($result->num_rows > 0)
            {
              while ($a = $result->fetch_assoc())
              {
              $_COOKIE['data'] = $a;
              $sql1 = " select firstname, lastname from users where userid =".$a['userid'];

             $result1 = $conn->query($sql1);
             while ($row = $result1->fetch_assoc()){
               $_COOKIE['postinfo'] = $row;
              include 'card.php';  // code...
           }
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
      <h2> <img src="css/boy.png" height="30" width="30" alt="">  Aman</h2>
           <p style=" margin-left: 60;color:#edededed;">offline</p>
    </div>
    </div>
  </div>













</body>
</html>
