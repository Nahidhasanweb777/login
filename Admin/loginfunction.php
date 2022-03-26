<?php
 
 
 $fName  = $_REQUEST['fName'];
 $lname = $_REQUEST['LName'];
 $bdate = $_REQUEST['bdate'];
 $gender = $_REQUEST['gender'];
 $email = $_REQUEST['email'];
 $Password = $_REQUEST['Password'];
 $Cpassword = $_REQUEST['Cpassword'];

$pname = $_FILES['profile']['name'];
//$pname = $pro['name'];
$ptmp_name = $_FILES['profile']['tmp_name'];
//$psize = $pro['size'];
//$psize1 =floor($psize/1000);

// echo $psize1."kb";
// echo $pname;
//$Profilename = $Profile1['name'];
//  echo $fName ;
//  var_dump($pro);
 //$conPassword = $_REQUEST['conPassword'];

//$pname_change = uniqid().".png";
if(!empty($pname)){
  // $loc = "uploads/";
   //move_uploaded_file($ptmp_name,$loc."profile.jpg");
  if( move_uploaded_file($ptmp_name,"uploads/".$pname)){
    // header("location:_userlist.php");
  }
   //echo"file ok";
}
else{
   $pname = "p_demo.png";
}
 $passCound = strlen($Password);



 if (($passCound >= 8 ) == false)
 {
    //echo " not ok";
    header("location:regi.php?passLength=Enter at least 8 number of password.");
  
 }
 elseif(($Password == $Cpassword) == false){
   header("location:regi.php?notsame= confirm password does not match");
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

    $query = " INSERT INTO  user ( FIRST_NAME, LAST_NAME, BIRTH_OF_DATE, GENDER, EMAIL, PASSWORD, profile) ";
    $query .= "values('$fName','$lname','$bdate','$gender','$email','$Password','$pname' )";

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