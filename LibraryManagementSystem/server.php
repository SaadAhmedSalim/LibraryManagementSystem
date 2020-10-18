<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

$connection = mysqli_connect($servername, $username, $password, $dbname);

if (!$connection) {
	echo "Connection failed";
	} else {
		echo "Connected Successfully!";
	}

?>