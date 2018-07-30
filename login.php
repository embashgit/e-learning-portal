<?php 
include 'db/connection.php';
include 'test_input.php';

session_start();
if (isset($_POST['submit'])){
	
	$reg_no		=	test_input($_POST['reg_no']);
	$password = test_input($_POST['password']);

	$login = mysqli_query($con, "SELECT * FROM `users` WHERE reg_no = '$reg_no' AND password = '$password' ") or die(mysqli_error($con));
	
	$row = mysqli_fetch_array($login);
	$count = mysqli_num_rows($login);
	if($count==1){

		if (strpos($reg_no, 'csc') !== false){

		$_SESSION['name'] = $row['fname'];
		$_SESSION['level'] = $row['level'];
		$_SESSION['logged'] = $row['fname'];
		echo '<script>alert("Logged in Successfully");window.location = "user_dash.php";</script>';	
		}else{
			echo '<script>alert("Sorry!! C.S student Only")</script>';	
		}
	}else{
		echo '<script>alert("Sorry!! Invalid username and password!");window.location = "index.php";</script>';
	}
	
}else{

	die("Failed to Login");
}
?>

