<?php
// $servername = "localhost";
// $username = "nahid";
// $password = "1234";


// Create connection
$conn = mysqli_connect('localhost', 'nahid', '1234','nahid');

// Check connection
if (!$conn) {
  die("Connection failed. " . mysqli_error($conn));
}
echo "Connected successfully";
?>