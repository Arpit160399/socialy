 <?php
	 session_start();
require 'dataconnetion.php';
          
          $sql = "SELECT post.file,post.textinfo,post.POSTid,post.date, users.firstname,users.lastname,post.userid FROM post INNER JOIN users ON post.userid = users.userid WHERE post.userid = (SELECT userid FROM friends WHERE friendsid = ".$_SESSION['id'].") OR post.userid = ".$_SESSION['id']." order by date DESC";
       try {
          $result = $conn->query($sql);
           if ($result->num_rows > 0)
            {
              while ($a = $result->fetch_assoc())
              {
              $_COOKIE['data'] = $a;
              include 'card.php';  // code...
           }
         }

        
        } catch (\Exception $e) {

        }

?>
