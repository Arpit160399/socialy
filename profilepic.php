
<?php
	require 'dataconnetion.php';
	session_start();
	$id = $_SESSION['id'];
	
	
	
	
	
	$sql = "select * from about where userid=".$id;
	
	$result = $conn->query($sql);
	if($result->num_rows > 0)
	{
		$flag=true;
		while($a = $result->fetch_assoc())
		{
			$flag=true;
			$d = $a['file'];
			if(isset($d))
			{
				unlink($d);
			} 
			
		}		
		
	}else{
		$flag = false;
	}
	
	
$imageFileType = strtolower(pathinfo($_FILES["file"]["name"],PATHINFO_EXTENSION));



if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg"
|| $imageFileType == "gif")
{
$target_dir = "profile/";
$target_file = $target_dir.$id."0".round(microtime(true))." .".pathinfo($_FILES["file"]["name"],PATHINFO_EXTENSION);
$uploadOk = 1;

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["file"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} 
else 
 {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) 
    {
        echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
        
         if($flag)
         {
	         $sql1="update about set file ='".$target_file."' where userid = ".$id;
	         
	         
         }
         else
         {
	         $sql1="insert into about values(".$id.",'".$target_file."',NUll,NULL)";
	         
	         
         }
        if($conn->query($sql1) === TRUE)
           {
        header("location:profile.php");
          }
  else
  
  {     
  
  echo "error".$conn->error;
   }

        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    
  } 
   }
    ?>