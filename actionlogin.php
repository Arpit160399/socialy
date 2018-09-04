<?php
session_start();
 require 'dataconnetion.php';
 $username = $_POST["username"];
 $password = $_POST["password"];


try {
  $sql = "select * from users";
  $result = $conn->query($sql);
   if ($result->num_rows > 0)
   {
      while ($row = $result->fetch_assoc()) {
        if($username == $row["username"] && $password == $row["password"])
        {

            $_SESSION['id'] = $row["userid"];
            $_SESSION['username'] = $row["username"];
            $_SESSION['firstname'] = $row['firstname'];
            $_SESSION['lastname'] = $row['lastname'];
            $_SESSION["city"] = $row["city"];
            $_SESSION["date"] = $row["DOB"];
            $_SESSION["sex"] = $row["sex"];
 if(isset($_SESSION['id']))
 {
            header("location:Home.php");
          }
        }else {
          echo "worrng pass";
        }
      }
   }else {
     echo "not found";
   }
} catch (\Exception $e) {
  echo "error in connection";
}



 ?>
