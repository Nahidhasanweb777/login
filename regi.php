<?php
       include_once'script.php';
     
    ?>

<div class="container mt-5 " style=" font">
    <div class="row">
        <div class="col-md -3"></div>
        <div class="col-md-6 bg-info">
        <div class="heading display-4 text-center">Registration Form</div>
        <!-- form start -->
        <form action="loginfunction.php" method="get">
            <div class="row">
            <div class="col-md-6">
                
                <div class="mb-3 mt-3">
                  <label for="First-Name" class="form-label">Profile Picture:</label>
                 <input type="file" class="form-control" id="Profile" placeholder="Enter First-Name" name="profile" required>
                </div>
             </div>  
            
            <div class="col-md-6">
                
                    <div class="mb-3 mt-3">
                      <label for="First-Name" class="form-label">First-Name:</label>
                     <input type="text" class="form-control" id="First-Name" placeholder="Enter First-Name" name="fName" required>
                    </div>
                 </div>
                <div class="col-md-6">
                   <div class="mb-3 mt-3">
                     <label for="Last-Name" class="form-label">Last-Name:</label>
                     <input type="text" class="form-control" id="Last-Name" placeholder="Enter Last-Name" name="LName" required>
                    </div>
                </div>
            </div>
       
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3 mt-3">
                      <label for="Birth of Date" class="form-label">Birth of Date:</label>
                     <input type="date" class="form-control" id="Birth of Date" placeholder="Enter Birth of Date" name="bdate" required>
                    </div>
                 </div>
                <div class="col-md-6">
                   <div class="mb-3 mt-3">
                     <label for="Gender" class="form-label">Gender:</label>
                     <br>
                     

                     <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="gender" id="fmale" value="Female" required>
                              <label class="form-check-label" for="inlineRadio1">Female</label>
                     </div>
                     <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="Male">
                             <label class="form-check-label" for="inlineRadio2">Male</label>
                      </div>

                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3 mt-3">
                      <label for="email" class="form-label">Email:</label>
                     <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" required>
                    </div>
                 </div>
                 
                <div class="col-md-6">
                   <div class="mb-3 mt-3">
                     <label for="Password" class="form-label">Password:</label>
                     <input type="Password"  class="form-control" id="Password" placeholder="Enter Password" name="Password" required>
                        <?php

                        if(isset($_REQUEST['passLength']))
                        {
                            ?>
                            <div class="alert alert-denger">
                                       <p class="text-danger"> Enter at least eight number of password</p>
                            </div>
                           <?php 
                        }

                        ?>

                    </div>
                </div>
            </div>
            
        
  <div class="form-check mb-3">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> Remember me
    </label>
  </div>
 
      <button type="submit" name="submit" class="btn btn-primary mb-3 ">Submit</button>
     
      <div class="alert alert-success">
  <strong>Already have an account!</strong> You should <a href="login.php" class="alert-link">Click to login</a>.

      </div>
  
  

  
</form>

        </div>
        <div class="col-md-3"></div>
    </div>
</div>    




