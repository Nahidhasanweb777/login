
    <?php 
       include_once'script.php';

    ?>

<div class="container mt-5  ">
    <div class="row">
        <div class="col-md -3"></div>
        <div class="col-md-6 bg-info">

        <form action="login.php" method="post">
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="log_email">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="log_pass">
  </div>
  <div class="form-check mb-3">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary mb-3 " name ="login">Login</button>
</form>

        </div>
        <div class="col-md-3"></div>
    </div>
</div>    

<?php

if(isset($_REQUEST['login'])){

include_once'db_connection.php';

  $log_email=$_REQUEST['log_email'];

  $log_pass=$_REQUEST['log_pass'];

  $hash_format = "$2y$07$"; //code 07 is how much time need to genarate 
  $salt = "vbnhjkloyesadfyhju22$"; // salt is mix with hash_farmate then genarat
  $conC = $hash_format . $salt;
  $log_pass = crypt($log_pass,$conC);
 


  $sql="select * from user where EMAIL='$log_email' AND PASSWORD='$log_pass'";
  
 // $result1=mysql_query($sql);

  $result1 = mysqli_query($conn, $sql);
//   $fetchdatas = mysqli_fetch_assoc($result1);
  
$row_count = mysqli_num_rows($result1);
   
if ($row_count){
  echo "login successfull";
  
}
else{
  echo "login faild";
}

  

  
      
}


?>
