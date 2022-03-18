<?php
require_once'script.php';
require_once'db_connection.php';

if(isset($_REQUEST['editID']))
{
  $editID1 = $_REQUEST['editID'];

 $get_info = "SELECT * FROM user WHERE Id = $editID1";
 $select_info = mysqli_query($conn,$get_info);
?>
<div class="container mt-3">
  <h2 class="text-center  mb-5">Update your information</h2>
  
  <form action="_update.php" method="post">
    <div class="row">

<?php 
 //$edit = "UPDATE `user` SET WHERE `ID` =  $edit";
while($row = mysqli_fetch_assoc($select_info)){
//declear into new variable
$db_FirstName = $row['FIRST_NAME'];
$db_LastName = $row['LAST_NAME'];
$db_Birth_of_date = $row['BIRTH_OF_DATE'];
$db_gender = $row['GENDER'];
$db_email = $row['EMAIL'];
$db_pro = $row['profile'].['name'];
?>

<div class="row">
<div class="col">

        <label class="form-label">First Name </label>
        <input type="file" class="form-control"  value="<?php echo $db_pro ?>">
      </div>
      </div>
<div class="col">

        <label class="form-label">First Name </label>
        <input type="text" class="form-control" placeholder="FirstName" name="FirstName" value="<?php echo $db_FirstName;?>">
      </div>
      <div class="col">
      <label class="form-label">Last Name </label>
        <input type="text" class="form-control" placeholder="LastName" name="lastName" value="<?php echo $db_LastName;?>">
      </div>
      <div class="col">
      <label class="form-label">Date of Birth </label>
        <input type="text" class="form-control" placeholder="Date of Birth" name="Date_Of_Birth" value="<?php echo $db_Birth_of_date;?>">
      </div>
      <div class="col">
      <label class="form-label">Gender </label>
        <input type="text" class="form-control" placeholder="Gender" name="gender"value="<?php echo $db_gender; ?>">
      </div>
      <div class="col">
      <label class="form-label">Email </label>
        <input type="text" class="form-control" placeholder="email" name="email"value="<?php echo $db_email; ?>">
      </div>
      <div class="col mt-4">
      <label class="form-label mt-1"></label>
      <input type="hidden"   name="hiddenid" value="<?php echo $editID1;?>">
       <input type="Submit"  class="form-control btn-info" name="Update" value="Update">
      </div>
        

<?php
}
}
?>



    </div>
  </form>

  <?php
if(isset($_REQUEST['Dataupdate']))
{
$Updatemassage = $_REQUEST['Dataupdate'];
if($Updatemassage){


?>
<div class="alert alert-denger">
  <p class="text-danger"> <?php echo "data updated";?></p>
</div>
<?php
}
}
?>
</div>

<?php
if(isset($_REQUEST['Update']))
{
$Update = $_REQUEST['Update'];
$db_hiddenid = $_REQUEST['hiddenid'];
$db_FirstName = $_REQUEST['FirstName'];
$db_LastName = $_REQUEST['lastName'];
$db_Birth_of_date = $_REQUEST['Date_Of_Birth'];
$db_gender = $_REQUEST['gender'];
$db_email = $_REQUEST['email'];

 $update_info = " UPDATE `user` SET `FIRST_NAME` = '$db_FirstName', `LAST_NAME` = '$db_LastName', `BIRTH_OF_DATE` = '$db_Birth_of_date', `GENDER` = '$db_gender', `EMAIL` = '$db_email' WHERE `ID` = '$db_hiddenid' ";
 require_once'db_connection.php';
  $select_info = mysqli_query($conn,$update_info);
  if($select_info){
    
    header("location:_userlist.php?Dataupdate=Data has been deteted.");
  }
  else{
  
  echo "update not ok";
}

}

?>