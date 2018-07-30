<!DOCTYPE html>
<?php
include 'db/connection.php';
?>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>E-learning|sign up</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<?php
include 'db/connection.php';
?>
<body>
   <?php
   include 'sidenav.php';
   ?>
 
<div class="container">
  <div align="center" style="margin-bottom: 40px;"><h2>Create E-learning Account</h2></div>
  <hr>

<div class="row">
    <form class="col s12" id="reg-form" method="POST" action="">
      <div class="row">
        <div class="input-field col s6">
          <input id="fname" type="text" name="fname" class="validate" required>
          <label for="fname">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="lname" type="text" name="lname" class="validate" required >
          <label for="lname">Last Name</label>
        </div>
      </div>
      
        <div class="input-field col s6">
          <input id="level" type="text" name="level" class="validate" required>
          <label for="level" >Enter your level</label>
        </div>
      
        <div class="input-field col s6">
          <input id="reg_no" name="reg_no" type="text" class="validate" required>
          <label for="reg_no">Reg no.</label>
        </div>
        <div class="input-field col s6">
          <input id="email" name="email" type="email" class="validate" required>
          <label for="email">Email</label>
        </div>
      
      
      <div class="row">
        <div class="input-field col s6">
          <input id="password" type="password" name="password" class="validate" minlength="6" required>
          <label for="password">Password</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s6">
          <button class="btn btn-large btn-register waves-effect waves-light" id="submit" type="submit" name="submit" required>Register
          </button>
        </div>
      </div>
    </form>
  </div>
  <script type="text/javascript">
       $(document).ready(function() {
    $('select').material_select();
  });
  </script>
</div>
<?php
 include 'footer.php';
 ?>

 <?php 
session_start();
 if(isset($_POST['submit'])) {

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$level = $_POST['level'];
$reg_no = $_POST['reg_no'];
$email = $_POST['email'];
$password = $_POST['password'];


if (empty($fname)||empty($lname)||empty($reg_no)||empty($level)||empty($email)||empty($password)) {

  echo '<script>alert("ONE OR MORE FIELDS ARE EMPTY");window.location = "signup.php";</script>';
}else{      
    
      if ( mysqli_query($con, "INSERT INTO `users` (`fname`, `lname`, `level`,`reg_no`, `email`,`password`) VALUES('$fname', '$lname', '$level','$reg_no', '$email', '$password') ")) {

        echo '<script>alert("REGISTERED SUCCESSFULLY");window.location = "index.php";</script>';
      }else{
        echo '<script>alert("FAILED TO REGISTER");</script>'; 
     }

}


 }

 ?>