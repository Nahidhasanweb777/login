<?php
 
 
 $fName  = $_REQUEST['fName'];
 $lname = $_REQUEST['LName'];
 $bdate = $_REQUEST['bdate'];
 $gender = $_REQUEST['gender'];
 $email = $_REQUEST['email'];
 $Password = $_REQUEST['Password'];
 $profile =$_FILES['Profile'];
 //$conPassword = $_REQUEST['conPassword'];

 $passCound = strlen($Password);



 if (($passCound >= 8 ) == false)
 {
    //echo " not ok";
    header("location:regi.php?passLength=Enter at least 8 number of password.");
  
 }
 else{
    // echo " ok";
 $hash_format = "$2y$07$"; //code 07 is how much time need to genarate 
 $salt = "vbnhjkloyesadfyhju22$"; // salt is mix with hash_farmate then genarat
 $conC = $hash_format . $salt;
 $Password = crypt($Password,$conC);


 if(isset($_REQUEST['submit']))
 {
    include_once'db_connection.php';

    $query = " INSERT INTO  user ( FIRST_NAME, LAST_NAME, BIRTH_OF_DATE, GENDER, EMAIL, PASSWORD, Profile) ";
    $query .= "values('$fName','$lname','$bdate','$gender','$email','$Password','Profile' )";

    $result = mysqli_query($conn,$query);
    
    if(!$result)
    {
        die("not success");
    }
    else{
      header("location:login.php");
    }

 }


 }

//  INSERT INTO `user`(`ID`, `FIRST_NAME`, `LAST_NAME`, `BIRTH_OF_DATE`, `GENDER`, `EMAIL`, `PASSWORD`)
//   VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])
// Password make link:
// https://www.php.net/manual/en/function.crypt.php


 
?>