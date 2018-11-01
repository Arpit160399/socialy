<?php
session_start();
require 'dataconnetion.php';
$username = $_POST["username"];
$password = $_POST["password"];
$city = $_POST["city"];
$Frist =  $_POST["fristname"];
$sex = $_POST["sex"];
$last = $_POST["lastname"];

$DOB = date("y-m-d",strtotime($_POST["date"]));
 
try {
	 if($smt = $conn->prepare("insert into users values(?,?,?,?,null,?,?,?)"))
      {
       $smt->bind_param("sssssss",$username,$password,$sex,$city,$Frist,$last,$DOB);
       $smt->execute();
       
       
       $sql = "SELECT * FROM `users` WHERE username ='".$username."'";
       $result = $conn->query($sql);
       if($result->num_rows > 0)
       {
	      while($a = $result->fetch_assoc())
	      {
		      $_SESSION['id'] = $a['userid'];
		      $_SESSION['id'] = $a["userid"];
            $_SESSION['username'] = $a["username"];
            $_SESSION['firstname'] = $a['firstname'];
            $_SESSION['lastname'] = $a['lastname'];
            $_SESSION["city"] = $a["city"];
            $_SESSION["date"] = $a["DOB"];
            $_SESSION["sex"] = $a["sex"];
  
           header("location:next.php");
        }
       
         }
       }else
       {
	       throw("statment wrong");
       }
  }
catch(PDOException $e)
 {
  echo "error".$e->getmessage();
   }


?>
