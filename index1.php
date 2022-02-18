<?php
 
 
 $fName  = $_REQUEST['fName'];
 $lname = $_REQUEST['LName'];
 $email = $_REQUEST['email'];
 $Password = $_REQUEST['Password'];
 $passCound = strlen($Password);



 if (($passCound >= 8 ) == false)
 {
    echo " not ok";
    header("location: regi.php?passLength=Enter at least 8 number of password.");
  
 }
 else{
     echo " ok";
 $hash_format = "$2y$07$"; //code 07 is how much time need to genarate 
 $salt = "vbnhjkloyesadfyhju22$"; // salt is mix with hash_farmate then genarat
 $conC = $hash_format . $salt;
 echo crypt($Password,$conC);

 }
// Password make link:
// https://www.php.net/manual/en/function.crypt.php

 
?>