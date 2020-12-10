<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"library");
	$password = "";
	$query = "select * from admins where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while($row = mysqli_fetch_assoc($query_run)){
		$password = $row['password'];
	}
	if($password == $_POST['old_password']){
		$query = "UPDATE admins SET password = '$_POST[new_password]' WHERE email = '$_SESSION[email]'";
		$query_run = mysqli_query($connection,$query);
	}
	?>
<script type="text/javascript">
	alert("Updated successfully...");
	window.location.href = "admin_dashboard.php";
</script>
