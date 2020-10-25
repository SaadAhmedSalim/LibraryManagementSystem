<?php include('server.php'); ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link href="https://fonts.googleapis.com/css2?family=Galada&family=Mukta:wght@300;700&display=swap"
      rel="stylesheet"/>

     <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>Sign Up</title>

</head>

<body>
	<!-- <img src="b1.jpg"> -->


<!-- Sign Up Starts-->
	


	

	<form method="post" action="signup.php">
		<!-- Display validation errors here -->
		<div class="header">

		<h2>Sign Up</h2>
		</div>
		<?php include('errors.php'); ?>

		<div class="input-group">
			<label for="name">Name</label>
			<input type="text" placeholder="Enter Your Name" id="name" name="name" value="<?php echo $name; ?>">
		</div>

		<div class="input-group">
			<label for="username">User Name</label>
			<input type="text" placeholder="Unique Username" id="username" name="username" value="<?php echo $username; ?>">
		</div>

		<div class="input-group">
			<label for="email">Email</label>
			<input type="text" placeholder="Enter Email" id="email" name="email" value="<?php echo $email; ?>">
		</div>

		<div>
			<label for="gender">Gender</label>
				<input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="female">Female
		</div>

		<div class="input-group">
			<label for="birthday">Date of Birth</label>
			<input type="text" placeholder="(DD/MM/YYYY)" id="birthday" name="birthday">
		</div>

		<div class="input-group">
			<label for="password">Password</label>
			<input type="password" id="password" name="password">
		</div>

		<div class="input-group">
			<label for="c_password">Confirm Password</label>
			<input type="password" id="c_password" name="c_password">
		</div>

		<hr>

   			<p class="para">By Creating An Account You Agree to Our <a href="Terms&Privacy.php">Terms & Privacy</a>.</p>
   		

		<div class="input-group">
			<button type="submit" name="register" class="registerbtn">Sign Up</button>
		</div>

 		<div class="container signin">
   			<p>Already have an account? <a href="login.php">Sign in</a>.</p>
 		</div>
	</form>
	
<!-- Sign Up Ends -->


<footer id="main-footer" class="main-footer">
  <p>&copy; <i>Saad Ahmed Salim</i></p>
</footer>

</body>

</html>