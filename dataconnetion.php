<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "social";

try {
  // Create connection
  $conn = new mysqli($servername, $username, $password,$db);

} catch (\Exception $e) {

}

// Check connection
if ($conn->connect_error) {
 die("Connection failed: " .$conn->connect_error);
}
?>
