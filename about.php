<?php 
	session_start();
require 'dataconnetion.php';
$job = $_POST["job"];
$hobbies = $_POST["hobbies"];
$id = $_SESSION['id'];

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
/*
if ($_FILES["file"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
*/
$target_file = compress($_FILES['file']['tmp_name'], $target_file,60);
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
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
         
 if($smt = $conn->prepare("insert into about values(?,?,?,?)"))
  {
    $smt->bind_param("ssss",$id,$target_file,$job,$hobbies);
    $smt->execute();
    header("location:profile.php");
  }else
  {     
  
  echo "error".$e->getmessage();
   }

        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    
  } 
   }else
   {
 
try {
	 if($smt = $conn->prepare("insert into about values(?,null,?,?)"))
      {
       $smt->bind_param("sss",$id,$job,$hobbies);
       $smt->execute();
       
       
          header("location:profile.php");
       }else
       {
	       throw("statment wrong");
       }
  }
catch(PDOException $e)
 {
  echo "error".$e->getmessage();
   }
   }
   
   
   
   
   
   
   
   
   
   
   function compress($source, $destination, $quality) {

    $info = getimagesize($source);

    if ($info['mime'] == 'image/jpeg') 
        $image = imagecreatefromjpeg($source);

    elseif ($info['mime'] == 'image/gif') 
        $image = imagecreatefromgif($source);

    elseif ($info['mime'] == 'image/png') 
        $image = imagecreatefrompng($source);

    imagejpeg($image, $destination, $quality);

    return $destination;
}
?>