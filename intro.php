<title>E-learning|E-journals</title>
<?php
include 'head.php';
include 'db/connection.php';
include 'redirect.php';
?>
<body>
<?php
include 'sidenav.php';

$level = "all";
$sql  = mysqli_query($con, "SELECT * FROM materials where for_level = '$level' ");

?>
  
<div class="container">
  <div align="center" style="margin-bottom: 40px;"><h2>Brief Introduction to E-learning</h2></div>
  <hr>
  	<h5 style="opacity: 0.4" align="center">Computer Science Department</h5>
  	<br>
  	<div class="row">
  	<div class="col s3" style="margin-right:">
  		<img src="img/schoologo.jpg">
  	</div>
  	<div class="col s9">
  		<p style="text-align: justify;">E-learning (or Distance Education) is a recognized educational practice that supports a flexible model of access to knowledge, enabling education and training numerically larger audience than what is traditional education models can effectively support (Som Naidu, 2006). As the years go by, ways of learning is changing modified and adapted to suit the trends and the requirements of the era. "The success of Web 2.0 inspired e-learning to evolve into e-learning 2.0, which exploits the collective intelligence to achieve education-centric user" (Huang Shiu, 2011).</p>
  	</div>	
  	</div>
  	<div class="row">
  		<p style="text-align: justify;">Teachers are still necessary for students and always will be, but the fact that e-learning is now widespread and very helpful for students cannot be overlooked. Therefore e-learning is being changing modified and adapted as expected. The distances are no longer any an obstacle to someone who want to study any science up to a point. Nevertheless in some cases the use of e-learning requires some initiation/training in order to achieve familiarization on these. As any product or service, thus e-learning acquired some standards which consist of some specific criteria in order to ensure quality of service and customer satisfaction. Apart from the criteria that must be met by each e-learning platform to ensure quality, some issues of a new kind of e-learning named Adaptive Learning will be discussed, which attempts to reduce some disadvantages of the classic e-learning models.</p>
  	</div>
  	
  </div>
</div>  
<?php
	include 'footer.php';
?>
