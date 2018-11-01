<?php

 require 'dataconnetion.php';
 $username = $_POST["username"];
 $password = $_POST["password"];


try {
  $sql = "select * from users where username = '".$username."'";
  $result = $conn->query($sql);
   if ($result->num_rows > 0)
   {
      while ($row = $result->fetch_assoc())
       {
        if( $password == $row["password"])
        {
           session_start();
            $_SESSION['id'] = $row["userid"];
            $_SESSION['username'] = $row["username"];
            $_SESSION['firstname'] = $row['firstname'];
            $_SESSION['lastname'] = $row['lastname'];
            $_SESSION["city"] = $row["city"];
            $_SESSION["date"] = $row["DOB"];
            $_SESSION["sex"] = $row["sex"];
            $sql2 = "select * from about  where userid =".$_SESSION['id'];
	 
	       $result2 = $conn->query($sql2);
           if ($result2->num_rows > 0)
            {
              while ($a = $result2->fetch_assoc())
              { 
	             $_SESSION['file'] = $a['file'];
	             $_SESSION['job'] = $a['job'];
	             $_SESSION['hobbies'] = $a['hobbies'];
              }
            }
              if(isset($_SESSION['id']))
               {
            header("location:Home.php");
                   }
        }else 
         {
	         require('index.php');
	        echo "<script>myFunction('wrong pass')</script>";
           
        }
      }
   }else {
            require('index.php');
	        echo "<script>myFunction('user not found')</script>";
   }
} catch (\Exception $e) {
  echo "error in connection";
}



 ?>
