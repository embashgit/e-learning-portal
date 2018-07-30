<title>E-learning|E-journals</title>
<?php
include 'head.php';
include 'db/connection.php';
include 'redirect.php';
?>
<body>
<?php
include 'sidenav.php';

$vid = "video";
$sql  = mysqli_query($con, "SELECT * FROM materials where category = '$vid' ");

?>
  
<div class="container">
  <div align="center" style="margin-bottom: 40px;"><h2>C.S Videos Lectures</h2></div>
  <hr>
  	<h5 style="opacity: 0.4" align="center">Computer Science Department</h5>
  	<br>
    <div class="row">
    <?php while($row = mysqli_fetch_array($sql)) { ?>
        <div class="col s4" name="video">
          <h5><?php echo $row['name'] ?></h5>
        <video width="300" height="300" controls>

        <source src="<?php echo $row['path'] ?>" type="video/mp4"/>
        </video> 
        </div> 
     <?php } ?>  
    </div>
  	
  </div>  
<?php
	include 'footer.php';
?>
