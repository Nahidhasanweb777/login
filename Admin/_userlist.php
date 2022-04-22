
<!-- Check box working processs -->
<?php
if(isset($_REQUEST['delete_MData'])){
     $chk_data =$_REQUEST['check_data'];
     $all_chk_data = implode(",",$chk_data); ###convert array to string
      
     $sql ="DELETE FROM user WHERE ID in ($all_chk_data)"; ## where we using string that's why we use 'in' 
include_once'db_connection.php';
$result = mysqli_query($conn,$sql);
if($result){
  header("location:_userlist.php?delete=Data has been deteted.");
}
}

?>



<?php
include_once'script.php';

require_once 'db_connection.php';
if(isset($_REQUEST['search_box']))
{
  $search_value= $_REQUEST['search_box'];
  $sql1 = "SELECT * FROM `user` WHERE `FIRST_NAME` LIKE '%$search_value%'";
  
  $userlist =mysqli_query($conn,$sql1);



$userlist =mysqli_query($conn,$sql1);

$count = mysqli_num_rows($userlist); //it's count number row in a table 
if($count>0){
//if we use $row = mysqli_fetch_row() then show data useing index number
//if we use $row = mysqli_fetch_assoc() then show data useing key name 
?>

<div class="container mt-3">
  <h2 class="text-center text-danger mb-5">User information</h2>
  <div class="row">
    <div class="col-md-4">
  <a class="btn btn-success" href="_userlist.php">Reload</a>
  </div>
    <div class="col-md-4"></div>
    <div class="col-md-4">
  <form  class="d-flex" action ="" methods="" >
     <input type="text" class="form-control me-2" name="search_box" placeholder="Search by name">
     <input type= "submit" class="btn btn-success" name="submit">
  </form>
  </div>
</div>

<?php   


?>


  <?php

  //comeback after deleted
  if(isset($_REQUEST['delete']))  {
     ?>
         <div class="alert alert-success">
           <p class="text-danger"> Data has been deteted</p>
        </div>
      
      <?php  
       }
       ?> 
   <form action="" methods="post">     
  <table class="table table-striped">
    <thead class="bg-success">
      <tr>
      <th>Profile Picture</th>
        <th>ID</th>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>DATE OF BIRTH</th>
        <th>GENDER</th>
        <th>EMAIL</th>
       
        <th>ACTION</th>
        <th><input type="submit" class="btn btn-danger" name="delete_MData" value="Delete Mark Data"></th>
      </tr>
    </thead>
    <tbody>

    

<?php
while ($row = mysqli_fetch_assoc($userlist)){
    // echo "<pre>";
    // print_r($row);
    // echo "</pre>";
    // echo "<br>";
####################################
   // echo "{$row['ID']}"; it's work 100%
   //$store = $row['ID'];
  //echo $store; it's also work
   // echo "$row['ID']"; do not work

  
 //declear into new variable
 

   $db_id = $row['ID'];
   $db_profile = $row['profile'] ;
   $db_FirstName = $row['FIRST_NAME'];
   $db_LastName = $row['LAST_NAME'];
   $db_Birth_of_date = $row['BIRTH_OF_DATE'];
   $db_gender = $row['GENDER'];
   $db_email = $row['EMAIL'];
  // $db_Password = $row['PASSWORD'];
?>
     <tr >
        <td><?php  echo $db_id ?> </td>
        <td>
        <img width="50px" height="50px" src= "uploads/<?php echo $db_profile; ?>" class="rounded-circle">
        </td>
        <td><?php  echo $db_FirstName ?></td>
        <td><?php  echo $db_LastName ?></td>
        <td><?php  echo $db_Birth_of_date ?></td>
        <td><?php  echo $db_gender ?></td>
        <td><?php  echo $db_email?></td>
        
        <td><a href="_update.php?editID=<?php echo $db_id ?>">Edit </a>||<a href="_delete.php?ID=<?php echo $db_id ?>"> Delete</a></td>
        <td><center><input type="checkbox" name="check_data[]" value="<?php echo $db_id ?>"></center></td>
      </tr>


<?php
}
?>

</tbody>
  </table>
<form>
<?php

}
else{}
}



else{
  
  $sql1 = "SELECT * FROM `user` ";
  
  $userlist =mysqli_query($conn,$sql1);



$userlist =mysqli_query($conn,$sql1);

$count = mysqli_num_rows($userlist); //it's count number row in a table 
if($count>0){
//if we use $row = mysqli_fetch_row() then show data useing index number
//if we use $row = mysqli_fetch_assoc() then show data useing key name 
?>

<div class="container mt-3">
  <h2 class="text-center text-danger mb-5">User information</h2>
  <div class="row">
    <div class="col-md-4">
  <a class="btn btn-success" href="_userlist.php">Reload</a>
  </div>
    <div class="col-md-4"></div>
    <div class="col-md-4">
  <form  class="d-flex" action ="" methods="" >
     <input type="text" class="form-control me-2" name="search_box" placeholder="Search by name">
     <input type= "submit" class="btn btn-success" name="submit">
  </form>
  </div>
</div>

<?php   


?>


  <?php

  //comeback after deleted
  if(isset($_REQUEST['delete']))  {
     ?>
         <div class="alert alert-success">
           <p class="text-danger"> Data has been deteted</p>
        </div>
      
      <?php  
       }
       ?> 
  <form action="" methods="post">     
  <table class="table table-striped">
    <thead class="bg-success">
      <tr>
      <th>Profile Picture</th>
        <th>ID</th>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>DATE OF BIRTH</th>
        <th>GENDER</th>
        <th>EMAIL</th>
       
        <th>ACTION</th>
        <th><input type="submit" class="btn btn-danger" name="delete_MData" value="Delete Mark Data"></th>
      </tr>
    </thead>
    <tbody>

    

<?php
while ($row = mysqli_fetch_assoc($userlist)){
    // echo "<pre>";
    // print_r($row);
    // echo "</pre>";
    // echo "<br>";
####################################
   // echo "{$row['ID']}"; it's work 100%
   //$store = $row['ID'];
  //echo $store; it's also work
   // echo "$row['ID']"; do not work

  
 //declear into new variable
 

   $db_id = $row['ID'];
   $db_profile = $row['profile'] ;
   $db_FirstName = $row['FIRST_NAME'];
   $db_LastName = $row['LAST_NAME'];
   $db_Birth_of_date = $row['BIRTH_OF_DATE'];
   $db_gender = $row['GENDER'];
   $db_email = $row['EMAIL'];
  // $db_Password = $row['PASSWORD'];
?>
     <tr >
        <td><?php  echo $db_id ?> </td>
        <td>
        <img width="50px" height="50px" src= "uploads/<?php echo $db_profile; ?>" class="rounded-circle">
        </td>
        <td><?php  echo $db_FirstName ?></td>
        <td><?php  echo $db_LastName ?></td>
        <td><?php  echo $db_Birth_of_date ?></td>
        <td><?php  echo $db_gender ?></td>
        <td><?php  echo $db_email?></td>
        
        <td><a href="_update.php?editID=<?php echo $db_id ?>">Edit </a>||<a href="_delete.php?ID=<?php echo $db_id ?>"> Delete</a></td>
        <td><center><input type="checkbox" name="check_data[]" value="<?php echo $db_id ?>"></center></td>
      </tr>


<?php
}
?>

</tbody>
  </table>
</form>
<?php

}
else{
    echo"Database has no data";
}


}
     ?>


