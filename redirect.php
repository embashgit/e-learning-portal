<?php
session_start();
if(empty($_SESSION['logged'])){
	echo '<script>alert("Sorry!! You need to log in first");window.location = "index.php";</script>';
}

?>