<?php
session_start();
require 'dataconnetion.php';
?>
<html>
<!DOCTYPE html>

<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Site made with Mobirise Website Builder v4.3.0, https://mobirise.com -->
  <title>social</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="css/friends.css">
<script>
	function showName(str)
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
					document.getElementById('list').innerHTML = this.responseText;
				}
				
			   };
			   http.open('GET',"findfriendsmech.php?name=" + str, true)
			   http.send();
			}
		
 }
 	function profile(str)
	 {
 	window.location = "http://localhost/socialy/profile.php?id=" + encodeURIComponent(str);
 	}
</script>

 </head>
 <body >
<?php
	require('navbar.php');
	?>
	<div class="container" style="margin-top: 95">
		<div class="row justify-content-md-center">
			<div class="col">
				<div class="request">
					<h5 style="text-align: center ;color: #edededed ; font-size: 30; padding-top: 10" >Request</h5>
					<hr>
                     	<div id='load'>
	                     	</div>			
				  </div>
				</div>
		
		     <div class="col-8">
			     <div class="friendslist "style="overflow : auto;" >
					<h5 style="text-align: center; color: #edededed ; font-size: 30;; padding-top: 10" > Find Friends </h5>
					<hr>
				<form action="" method="post">
					<input type="text" name="friendsname"  placeholder="Friends Name" onkeyup="showName(this.value)">
				</form>
				<div class="cardlist scroll" id='list'>
					
				</div>
				
			
				
				  </div>
			  </div>
		
		   </div>
		</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<script>
	$(function(){

$( '[data-toggle="popover"]').popover()

});

function sentRequest(id)
	{
		
		var	httpx = new XMLHttpRequest();
			httpx.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200)
			{
				document.getElementById('request'+id).innerHTML =  this.responseText;
			}
		};
	  httpx.open('GET',"requestsent.php?tempid="+id,true);
	  httpx.send();
	
}
var myvar = setInterval(requestwindow, 1000);
function requestwindow()
 {
	 var http = new XMLHttpRequest();
			http.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					document.getElementById('load').innerHTML = this.responseText;
				}
				
			   };
			   http.open('GET',"loadrequest.php", true)
			 http.send();
	 
	 
}

function actionRequest(act,id)
	{
		
		var	httpx = new XMLHttpRequest();
			httpx.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200)
			{
				document.getElementById('requests'+id).innerHTML =  this.responseText;
			}
		};
	  httpx.open('GET',"requestaccept.php?tempid="+id+"&act="+act,true);
	  httpx.send();
	
}


</script>

	
	</body>
</html>	