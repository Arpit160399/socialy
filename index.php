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
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
  <link  rel="stylesheet" href="css/login.css">
</head>

<body>

  <div class="row">
    <div class="col padding-0 ">
      <div class="row padding-0 ">
        <div class="col padding-0 backgroundimg">
        </div>
      </div>
      <div class="row sectiondivide padding-0">
        <div class="col padding-0">
          <h2>
             hello
             </h2>
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
        <input class="input" type="text" name="username" placeholder="username"><br>
        <input class="input" type="password" name="password" placeholder="password"><br>
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
