<head>
   <!-- Site made with Mobirise Website Builder v4.3.0, https://mobirise.com -->
  <title>social</title>

   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script> -->
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/formpage.css">
 </head>
  <body>
	  

    <div class="box">
      <h1>Socialy</h1>
      <h3>sign up</h3>
   <form   id="form" action="about.php" method="post" enctype="multipart/form-data"><br>
	  
        <img id="avtar" src="css/face2.png"  height="190" width="150" style="background-color: #ffffff; border-radius:9px; margin-left: 75;">
 <i class="fa fa-camera" id="cam" style="position: absolute ; margin-top: 171; margin-left: -24"></i><span class="name"></span>
	   <input type="file" onchange="readURL(this)" name="file" style="display: none">
	   <input type="text" placeholder="Job" name="job">
	   <input type="text" placeholder="hobbies" name="hobbies">
    
    <button  type="submit" name="createuser" style="margin-top: 10" >done</button>
   </form>
    </div>
 <div class="logo ">
 <img src="css/5621.png" height="100" width="100">
</div>
<script>	$('#cam').click(function () {
  $('input[type="file"]').trigger('click');
});

 function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#avtar').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
           </script>  
           </body>
  </html>

