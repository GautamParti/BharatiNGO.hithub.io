<?php
  $success=false;
$danger=false; //will show error

  if($_SERVER["REQUEST_METHOD"]=="POST"){
 
    include 'partials/db_connect.php';
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $exists=false;
    if(($password==$cpassword) && $exists==false){
      $sql="INSERT INTO `username`.`username` (`username`,`password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
      $result=mysqli_query($conn,$sql);
      if($result){
         $success=true;
         $_SESSION['signin']=true;
         $signin=true;
      }else{
        $danger="password don't match";
      }
    }
  }
?> 

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style12.css">
    <title>signup</title>
  </head>
  <body>
    
     <?php
    if($success){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!  </strong>Your account is created , now login.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
   </div> ';
    }
    if($danger){
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>error </strong>passwords dont match
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
     </div> ';
      }
   ?> 
    <?php require 'partials/_nav.php' ?>
    <!-- <h1>Sign Up to our website</h1>
    <form action="/loginsystem/signup.php" method="post">
  <div class="form-group" >
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" >
    
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" >
  </div>
  
  <div class="form-group">
    <label for="cpassword">Confirmed Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword" >
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    -->
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>