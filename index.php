<?php
session_start();
if(isset($_SESSION["id"]))
{
  header("location:Home.php");
}

?>
<html>
<!DOCTYPE html>

<head>
  <!-- Site made with Mobirise Website Builder v4.3.0, https://mobirise.com -->
  <title>social</title>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link  rel="stylesheet" href="css/login.css">
</head>
<script>
function myFunction(a) {
    alert(a);
}
</script>

<body>

  <div class="row">
    <div class="col padding-0 ">
      <div class="row padding-0 ">
        <div class="col padding-0 backgroundimg">
        </div>
      </div>
      <div class="row sectiondivide padding-0">
        <div class="col padding-0">

             <div style="align-content: center; padding-left: 130; padding-top : 20" >
              <img src="css/face1.png" height="50" width="50">
              <img src="css/face2.png" height="50" width="50">
              <img src="css/face3.png" height="50" width="50">
              <img src="css/face4.png" height="50" width="50">
              <img src="css/face5.png" height="50" width="50">
              <b style="font-size : 16; margin-left : 10 "> They Are In Socialy! Are You</b>
              <hr style=" border : 0.3px solid #d2d2d2 ; width : 500">
            </div>
            <div style="margin-left : 120">
              <img src="css/face6.png" height="70" width="70" >
              <div style="margin-top:-75; margin-left: 80">
              <b >sombody</b><b style="color: #adadad;font-size:12"> @sombody</b>
              <p style="color:#adadad ; font-size:12 "> connected with my friends <b style="color :#000000">@friends1</b> and <b style="color : #000000">@friends2</b> in  <b style="color : #000000"> @socialy</b>
            <br>  it's<b style="color : #000000"> #Socialytime</b> </p>
            </div>
            </div>
           <hr style=" border : 0.3px solid #d2d2d2 ; margin-top: 50; width : 700">
           <div style="color:#adadad ;font-size:12; margin-left:40">
             <p style="word-spacing: 80">  About      Help      Terms         Privacy         Brand        Media
               <br>       Dev       ©2018 Socialy
</p>
           </div>
        </div>
      </div>
    </div>


    <div class="col padding-0 headerbackground">
      <header>
        welcome to Socialy
        <h3>
        time be socialy connected with world and friends
         </h3>
      </header>
      <form class="" action="actionlogin.php" method="post">
        <input class="input" type="text" name="username" placeholder="Username"><br>
        <input class="input" type="password" name="password" placeholder="Password"><br>
        <button class="button" type="submit" name="sign in">sign in</button>
      </form>
      <div class="divier">
        <hr class="left"> OR
        <hr class=" right">
      </div>
       <form class="" action="newuser.php" method="post">
        <input class="input" type="text" name="firstname" placeholder="FirstName"><br>
        <button class="signup" name="namesender" type="submit" > sign up for Socialy</button>
      </form>
    </div>
  </div>

</body>

</html>
