<?php 
session_start();
	unset($_SESSION['un']);
echo '<script>alert("You have been Logged Out Successfully! !");window.location="login.php";</script>';
session_destroy();		
?>

