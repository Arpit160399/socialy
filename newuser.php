<?php
 $frist = $_POST["firstname"];
 ?>
 <html>
 <!DOCTYPE html>

 <head>
   <!-- Site made with Mobirise Website Builder v4.3.0, https://mobirise.com -->
  <title>social</title>
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/formpage.css">
 </head>
  <body>
    <div class="box">
      <h1>Socialy</h1>
      <h3>sign up</h3>
   <form   action="createuser.php" method="post"><br>
    <input class="" type="text" name="fristname" placeholder="Frist Name" value="<?php echo$frist;?>"><br>
    <input type="text" name="lastname" placeholder=" Last Name"><br>
    <input type="text" name="username" placeholder=" User Name"><br>
    <input type="password" name="password" id="password" placeholder="password"><br>
     <select name="sex">
      <option value="male" >male</option>
      <option value="female" >female</option>
      <option value="other" >other</option>
    </select><br>
    <input id="city"type="text" name="city" placeholder="city"><br>
    <div class="date">
      <input id="datepicker1" type="date" name=""  placeholder="Date of birth">
      <div id = "set">
      <script>$(function () {
                 $('#datepicker1').datepicker({
		uiLibrary:"bootstrap4"
	                 });
             });
           </script>
         </dir>
         </div>
       </div>
    <button type="submit" name="createuser">Create</button>
   </form>
 </div>
 <div class="logo ">
 <img src="css/5621.png" height="100" width="100">
</div>
  </body>
  </html>
