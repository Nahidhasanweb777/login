
<?php
$del = $_REQUEST['ID'];

if(isset($del)){
$sql ="DELETE FROM user WHERE ID = $del";
include_once'db_connection.php';
$result = mysqli_query($conn,$sql);
if($result){
  header("location:_userlist.php?delete=Data has been deteted.");
}
  
}


?>