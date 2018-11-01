<html>
		<script>
		function ShareName(str,id)
	{
		if(str.length < 3)
		{
			document.getElementById('list').innerHTML = '';
			return;
		}else
		{
			var http = new XMLHttpRequest();
			http.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					document.getElementById('list'+id).innerHTML = this.responseText;
				}
				
			   };
			   http.open('GET',"share.php?name=" +str+"&post="+id, true)
			   http.send();
			}
		
 }
 function shareitem(id,post)
  {
	 var http = new XMLHttpRequest();
			http.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					document.getElementById('rep'+id).innerHTML = this.responseText;
				}
				
			   };
			   http.open('GET',"sharemech.php?id="+id+"&post="+post, true)
			   http.send();
			
 }
 	function profile(str)
	 {
 	window.location = "http://localhost/socialy/profile.php?id=" + encodeURIComponent(str);
 	}

	</script>
<head>
  <?php
  require 'dataconnetion.php';
   $a = $_COOKIE['data'];
    $is = $a["POSTid"];
  $sql2 = "SELECT * FROM `Like` WHERE userid =".$_SESSION['id']." AND postid =".$is;
  $result2 = $conn->query($sql2);
         if($result2 ->num_rows > 0)
         {

         while ($r = $result2->fetch_assoc())
         {
	         $flag=$r['like'];
	         
         }
}else
{
	$flag = 0;
}
$sql5 = "select * from about  where userid =".$a['userid'];
	 
	 $result5 = $conn->query($sql5);
           if ($result5->num_rows > 0)
            {
              while ($b = $result5->fetch_assoc())
              { 
	             $img = $b['file'];
	             
              }
            }

  ?>
  
<link rel="stylesheet" href="css/homestyle.css">
</head>
<body>
<script>
	function like(id,act)
	{
		
		var	httpx = new XMLHttpRequest();
			httpx.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200)
			{
				document.getElementById('like'+id).innerHTML =  this.responseText;
			}
		};
	  httpx.open('GET',"like.php?postid="+id+"&act="+act,true);
	  httpx.send();
	
}
</script>
<div class="card padding-0 " id="feedscards">
<div class="card-body">
<a onclick="profile(<?php echo $a['userid'];?>)"><h5 class="card-title"><img  src="<?php echo $img;?>"  class="avtar" height="30" width="30"> <?php echo $a['firstname']." ".$a['lastname']; ?>
</h5></a>

<p class="card-text">
<?php
  echo $a["textinfo"];
 
?></p>
<div style="align-content: center">
<?php
	if(isset($a['file']))
	{
		echo "<img style='display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%' src='".$a['file']."' height='auto' weight='auto' >";
	}
?>
</div>
</div>


<div class="card-footer interaction">
<a href="#"data-toggle="modal" data-target="#share<?php echo $is;?>"><img id="icon"src= "css/share.svg" height="23" width="23"></a>
<a href="#" data-toggle="modal" data-target="#commentmodle<?php echo $is; ?>"><img id="icon"src= "css/comment.svg" height="23" width="23">
</a>
<div  style="display: inline" id='like<?php echo $is;?>'>
<?php
	if($flag == 1)
	{
		
		echo "<a onclick='like( ".$is.",0)'><img  id='icon' src= 'css/like2.svg' height='23' width='23'></a>";
		
	}else
	{
echo "<a onclick='like( ".$is.",1)'><img  id='icon' src= 'css/like.svg' height='23' width='23'></a>";
     }
?>
</div>
</div>
</div>

<div  id="commentmodle<?php echo $is; ?>" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">COMMENTS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>

          <?php

          $sql3 = "select comments.text,users.firstname,users.lastname,users.userid from comments , users where POSTid =".$is." and comments.userid=users.userid";

         $result3 = $conn->query($sql3);
         if($result3 ->num_rows > 0)
         {

         while ($r = $result3->fetch_assoc())
         {

         $sql4 = "select * from about  where userid =".$r['userid'];
	 
	        $result4 = $conn->query($sql4);
           if ($result4->num_rows > 0)
            {
              while ($c = $result4->fetch_assoc())
              { 
	             $pic = $c['file'];
	             
              }
            }

            echo "<hr>";
                echo "<h5>";
              echo "<img src='".$pic."' class='avtar' height='30' width='30'> ";
             
               echo $r['firstname']." ".$r['lastname'];
               echo "</h5>";
              echo "<p>".$r['text']."</p>";
             
              echo "<hr>";
              
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
          <button type="submit" class="btn btn-primary">comment</button>

        </form>

      </div>
    </div>
  </div>
</div>

<div  id="share<?php echo $is;?>" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document" style="">
    <div class="modal-content" style="width: 790;    margin-left: -107px;">
      <div class="modal-header">
        <h5 class="modal-title" style="font-size: 23;margin-left: 315 ; color: grey">Find Friends</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>  
        <div style="margin-left:20;margin-top: 30;margin-right: 20">
		        <form action="" method="post">
		        <input id="" type="text" name="friends_name" onkeyup="ShareName(this.value,<?php echo $is;?>)" placeholder="frinends" style="width: 750; text-align: center">
		      </form>
		        <hr>
		     </div>   
             <div class="modal-body" >
	         
	             <div id="list<?php echo $is;?>" style="margin-left: 29px;
    margin-right: -20px">
		             </div>
	        </div>
	        </div>
	        </div>
	        </div>













</body>
</html>
