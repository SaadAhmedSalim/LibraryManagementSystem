<?php include('server.php') ?>

<!DOCTYPE html>

<html>

<head>

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link href="https://fonts.googleapis.com/css2?family=Galada&family=Mukta:wght@300;700&display=swap"
      rel="stylesheet"/>

     <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>Login</title>

</head>

<body>
<style>
	.bg-img {
	background-image: url("b1.jpg");
	background-position: fixed;
	background-repeat: no-repeat;
	min-height: 600px;
	margin-top: 0;
}

	
	

</style>
<!-- Sign Up Starts-->
<div class="bg-img">
				
	<form method="post" action="login.php">
		<div class="header"><h2>Login</h2>
		</div>
		  	    <div class="input-group">
			<label for="username">User Name or Email</label>
			<input type="text" id="username" name="username" required="">
		</div>

		
		<div class="input-group">
			<label for="password">Password</label>
			<input type="password" id="password" name="password" required="">
		</div>
		
		<div class="input-group">
			<button type="submit" name="login" class="loginbtn">Login</button>
		</div>

 		<div class="container signin">
   			<p>Don't have an account? <a href="signup.php">Sign Up</a>.</p>
 		</div>
	</form>
	</div>

<!-- Sign Up Ends -->


<footer id="main-footer">
  <p>&copy; <i>Saad Ahmed Salim</i></p>
</footer>

</body>

</html>