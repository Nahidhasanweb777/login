<?php
include_once'script.php';

require_once 'db_connection.php';

$sql1 = "SELECT * FROM user";

$userlist =mysqli_query($conn,$sql1);

$count = mysqli_num_rows($userlist); //it's count number row in a table 
if($count>0){
//if we use $row = mysqli_fetch_row() then show data useing index number
//if we use $row = mysqli_fetch_assoc() then show data useing key name 
?>

<div class="container mt-3">
  <h2 class="text-center  mb-5">User information</h2>
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
  <table class="table table-striped">
    <thead style="background:green;">
      <tr>
      <th>Profile Picture</th>
        <th>ID</th>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>DATE OF BIRTH</th>
        <th>GENDER</th>
        <th>EMAIL</th>
       
        <th>ACTION</th>
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
 $Profile = $row[name] 
 $db_id = $row['ID'];
   $db_FirstName = $row['FIRST_NAME'];
   $db_LastName = $row['LAST_NAME'];
   $db_Birth_of_date = $row['BIRTH_OF_DATE'];
   $db_gender = $row['GENDER'];
   $db_email = $row['EMAIL'];
  // $db_Password = $row['PASSWORD'];
?>
     <tr>
        <td><?php  echo $db_id ?> </td>
        <td><?php  echo $db_FirstName ?></td>
        <td><?php  echo $db_LastName ?></td>
        <td><?php  echo $db_Birth_of_date ?></td>
        <td><?php  echo $db_gender ?></td>
        <td><?php  echo $db_email?></td>
        
        <td><a href="_update.php?editID=<?php echo $db_id ?>">Edit </a>||<a href="_delete.php?ID=<?php echo $db_id ?>"> Delete</a></td>
      </tr>


<?php
}
?>

</tbody>
  </table>

<?php

}
else{
    echo"Database has no data";
}


     ?>