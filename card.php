</html>
<head>
  <?php
  require 'dataconnetion.php';
   $a = $_COOKIE['data'];
   $b =$_COOKIE['postinfo'];

  ?>
  <!-- Site made with Mobirise Website Builder v4.3.0, https://mobirise.com -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/homestyle.css">
</head>
<body>
<div class="card padding-0 " id="feedscards">
<div class="card-body">
<h5 class="card-title"><img src="css/man.png"  class="avtar" height="30" width="30"> <?php echo $b['firstname'].$b['lastname']; ?>
</h5>
<p class="card-text">
<?php
  $postitems = new data($a["POSTid"],$a["userid"]);
  echo $a["textinfo"];
  $is = $postitems->id;
?></p>
</div>
<div class="card-footer interaction">
<a href="#"><img id="icon"src= "css/share.svg" height="23" width="23"></a>
<a href="#" data-toggle="modal" data-target="#commentmodle<?php echo$postitems->id; ?>"><img id = "icon"src= "css/comment.svg" height="23" width="23">
</a>
<a href="#"><img  id="icon"src= "css/like.svg" height="23" width="23"></a>
</div>
</div>

<div  id="commentmodle<?php echo$postitems->id; ?>" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">comment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>

          <?php

          $sql3 = "select * from comments where POSTid =".$is;

         $result3 = $conn->query($sql3);
         if($result3 ->num_rows > 0)
         {

         while ($r = $result3->fetch_assoc())
         {

           $stmt = "select * from users where userid =".$r['userid'];

              $result4 = $conn->query($stmt);
              while ($a = $result4->fetch_assoc())
              { echo "<hr>";
                echo "<h5>";
              echo "<img src='css/man.png' class='avtar' height='30' width='30'> ";
                echo $a['firstname'].$a['lastname'];
                echo "</h5>";
              echo "<p>".$r['text']."</p>";
              echo "<hr>";
              }
          }

          }else {
            echo "no result found for post";
          }
          ?>
</p>
      </div>
      <div class="modal-footer">
        <form class="" action="comment.php" method="post">
          <input type="number" name="postid" value="<?php echo $is; ?>" hidden="true">
          <input type="text" name="comment" placeholder="comment">
          <button type="submit" class="btn btn-primary">Save changes</button>

        </form>

      </div>
    </div>
  </div>
</div>

</body>
</html>
