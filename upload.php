<!DOCTYPE html>
<?php

?>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>E-learning|upload</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<?php
include 'db/connection.php';
include 'redirect.php';
?>
<body>

<?php
include 'sidenav.php';
?>

 
<div class="container">
  <div align="center" style="margin-bottom: 40px;"><h2>Upload E-Materials</h2></div>
  <hr>


    <form class="col s12" id="reg-form" enctype="multipart/form-data" method="POST" action="">
      <div class="row">
        <div class="input-field col s6">
          <input id="myfile" type="file" name="myfile" class="validate" required>
        </div>
      	<div class="input-field col s6">
          <input id="doc_name" type="text" name="doc_name" class="validate" required >
          <label for="doc_name">Document name:</label>
        </div>
      	
      </div>
      <div class="row">
      	<div class="input-field col s6">
          <input id="for_level" type="text" name="for_level" class="validate" required >
          <label for="for_level">To be Use  by level:</label>
        </div>
      <div class="input-field col s6">
          <input id="level" type="text" name="category" class="validate" required>
          <label for="level" >category</label>
        </div>
      </div>
        

        <div class="row">
       	 <div class="input-field col s6">
          <input id="email" name="description" type="text" class="validate" required>
          <label for="email">description</label>
        </div>
       	 <div align="right" class="input-field col s6">
          <button class="btn btn-large btn-register waves-effect waves-light" id="submit" type="submit" name="submit" required>Submit
          </button>
        </div>
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

 if(isset($_POST['submit'])) {

$name 		= $_FILES['myfile']['name'];
$tmp_name 	=$_FILES['myfile']['tmp_name'];
$doc_name 	= $_POST['doc_name'];
$for_level 	= $_POST['for_level'];
$description = $_POST['description'];
$category 	= $_POST['category'];

if (empty($for_level)||empty($description)||empty($category)){

  echo '<script>alert("ONE OR MORE FIELDS ARE EMPTY");window.location = "upload.php";</script>';
}else{      
    	$location = "uploads/$name";
    	move_uploaded_file($tmp_name, $location);
      if ( mysqli_query($con, "INSERT INTO `materials` (`name`, `for_level`,`path`, `description`,`category`) VALUES('$doc_name', '$for_level','$location', '$description','$category') ")) {

        echo '<script>alert("E-MATERIAL UPLOADED SUCCESSFULLY");window.location = "upload.php";</script>';
      }else{
        echo '<script>alert("FAILED TO UPLOAD");</script>'; 
     }

}


 }

 ?>
