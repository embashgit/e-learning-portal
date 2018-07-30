<title>E-learning|account</title>
<?php
include 'head.php';
include 'db/connection.php';
include 'redirect.php';
?>
<body>
<?php
include 'sidenav.php';

$for_level = $_SESSION['level'];

$sql  = mysqli_query($con, "SELECT * FROM materials where for_level = '$for_level' ");

?>
 
<div class="container">
  <div align="center" style="margin-bottom: 40px;"><h2>User Account</h2></div>
  <hr>
  <div class="row">
  	<h5 style="opacity: 0.4" align="center">Books and Journals available for level <span><?php echo $for_level ?></span></h5>
  	<br>
  	<?php while($row = mysqli_fetch_array($sql)) { ?>

  		<div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title"><?php echo $row['name']?> </span>
          <p><?php echo $row['description'] ?></p>
        </div>
        <div class="card-action">
          <a href="#">download <?php echo $row['name']; ?></a>
        </div>
      </div>
	</div>

   	<?php } ?>
		

  </div>
</div>  
<?php
	include 'footer.php';
?>
