<!DOCTYPE html>
<html>
<head>
	<title>Library Management System</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
  		body{
			font-size: 120%;
			background-image: url('b1.jpg');
		}
  		#side_bar{
	  			background-color: #b3ffff;
	  			padding: 50px;
	  			opacity: 0.5;
	  			width: 300px;
	  			height: 450px;
  		        }
		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #2eb8b8;
		   }
		li {
		  float: left;
		}

		li a {
		  display: block;
		  color: black;
		  text-align: center;
		  padding: 12px 50px;
		  text-decoration: none;
		}

		li a:hover:not(.active) {
		  background-color: #196767;
		}
		form {
			position: absolute;
			top: 100px;
			left: 600px;
			width: 30%;
			margin: 70px auto;
			background: linear-gradient(to bottom, #ccffff 0%, #ffffff 100%);
			opacity: 0.95;
			border: 1px solid #b0c4de;
			border-radius: 10px 10px 10px 10px;
			padding: 40px;
		}
		input[type=text], input[type=password] {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  box-sizing: border-box;
		}
		button {
		  background-color: #2eb8b8;
		  color: white;
		  padding: 14px 20px;
		  margin: 8px 0;
		  border: none;
		  cursor: pointer;
		  width: 100%;
		}

		button:hover {
		  opacity: 0.8;
		}

	</style>

</head>
<body>
	<ul >
	  <li ><a href="index.php">Admin Login</a></li>
	  <li ><a href="index.php">User Login</a></li>
	</ul>
	
<h2><span style="color: white"><marquee behavior="scroll" direction="left"
           onmouseover="this.stop();"
           onmouseout="this.start();"><b>This is library Management System. Library opens at 8:00 AM and close at 8:00 PM</b></marquee></span></h2><br>
	<div class="row">
		<div class="col-md-4" id="side_bar">
			<h4>Library Timing</h4>
		        <h5>- Opening Timing: 8:00 AM</h5>
				<h5>- Closing Timing: 8:00 PM</h5>
				<h5>- (Sunday off)</h5>
			<br>
			<h4>What we provide ?</h4>
		        <p>Full furniture,  Free Wi-fi,  News Papers,  Discussion Room,  RO Water,  Peacefull Environment</p>
		</div>
		<br>
		<div class="col-md-8" id="main_content">
			<br>
			<form name="LoginForms" action="" method="post" onsubmit="return validateForm();">
				<center><h3>User Registration Form</h3></center>
				<div class="form-group">
					
					<label id="usernameError">Full Name:</label>
					<input type="text" name="name" class="form-control" placeholder="Full Name">
				</div>

				<div class="form-group">
					<label id="emailError">Email:</label>
					<input type="text" name="email" class="form-control" placeholder="Email">
				</div>

				<div class="form-group">
					<label id="passwordError">Password:</label>
					<input type="text" name="password" class="form-control" placeholder="Password">
				</div>

				<div class="form-group">
					<label id="contactError">Contact No:</label>
					<input type="text" name="mobile" class="form-control" placeholder="Contract no">
				</div>

				<div class="form-group">
					<label>Address:</label>
					<textarea rows="3" cols="20" class="form-control" name="address" placeholder="Address"></textarea>
				</div>

				<button type="submit" class="btn btn-primary">Register</button>
			</form>
	</div>
	</div>
</body>
<script type="text/javascript">
    function validateForm() {
  
        var username = document.forms["LoginForms"]["name"].value;
        var password = document.forms["LoginForms"]["password"].value;
        var email = document.forms["LoginForms"]["email"].value;
        var contact_no = document.forms["LoginForms"]["mobile"].value;
        var flag = true;

  if (username == "") {
    document.getElementById('usernameError').innerHTML = "Username is empty";
    flag = false;
  } else {
    if(!/^[a-zA-Z ]+$/.test(username)){
      document.getElementById('usernameError').innerHTML = "Only letters allowed";
      flag = false;
    }
  
  }

  if (password ==""){
    document.getElementById('passwordError').innerHTML = "Password can't be blank";
    flag = false;

  }
  else {
    if(!/^[A-Z0-9#?!@$%^&*-]+$/.test(password)){
      document.getElementById('paswordError').innerHTML = "*Only upper case and numbers allowed and  special letters allowed ";
      flag = false;
    }
  
  }
   if (email ==""){
    document.getElementById('emailError').innerHTML = "Email can't be blank";
    flag = false;

  }

   if (email ==""){
    document.getElementById('contactError').innerHTML = "contact number can't be blank";
    flag = false;

  }

  return flag;

}
  </script>
</html>
