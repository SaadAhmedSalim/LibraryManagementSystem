<!DOCTYPE html>
<html>
<head>
	<title>Library Management System</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<style >
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
  <li ><a href="index.php">Register</a></li>
</ul>

	<h2><span style="color: white"><marquee behavior="scroll" direction="left"
           onmouseover="this.stop();"
           onmouseout="this.start();"><b>This is library Management System. Library opens at 8:00 AM and close at 8:00 PM</b></marquee></span></h2><br><br>
	
		<div class="col-md-4" id="side_bar">
			<h4>Library Timing</h4>
		        <h5>- Opening Timing: 8:00 AM</h5>
				<h5>- Closing Timing: 8:00 PM</h5>
				<h5>- (Sunday off)</h5>
			<br>
			<h4>What we provide ?</h4>
		        <p>Full furniture,  Free Wi-fi,  News Papers,  Discussion Room,  RO Water,  Peacefull Environment</p>
		</div>	

		<div class="form" >
			
			<form  action="" method="post">
                <center ><h3 >Login</h3></center><br>
				<div class="">
					<label for="name">Email ID:</label>
					<input type="text" name="email"  placeholder="Enter Email">
				</div>

				<div class="">
					<label for="name">Password:</label>
					<input type="password" name="password" placeholder="Enter Password">
				</div>

				<button type="submit" name="login" >Login</button>
				<span class="psw">Forgot <a href="#">password?</a></span>
			</form>

			<?php
				session_start();
				if(isset($_POST['login'])){
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"library");
					$query = "select * from users where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
								$_SESSION['name'] = $row['name'];
								$_SESSION['email'] = $row['email'];
								$_SESSION['id'] = $row['id'];
								header("Location:user_dashboard.php");
							}
							else{
								?>
								<br><br><center><span class="alert-danger">Wrong Password</span></center>
								<?php
							}
						}
					}
				}
			?>
	</div>
	


</body>

</html>