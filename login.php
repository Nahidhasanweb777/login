<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <?php 
       include_once'script.php';
    ?>
</head>
<body>
<div class="container mt-5  ">
    <div class="row">
        <div class="col-md -3"></div>
        <div class="col-md-6 bg-info">

        <form action="#">
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
  </div>
  <div class="form-check mb-3">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary mb-3 ">Submit</button>
</form>

        </div>
        <div class="col-md-3"></div>
    </div>
</div>    


</body>
</html>

