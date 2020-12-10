<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"library");
	$book_name = "";
	$author = "";
	$book_no = "";
	$query = "SELECT book_name,book_author,book_no FROM issued_books WHERE student_id = $_SESSION[id] AND status = 1";
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
		  <style type="text/css">
  		#side_bar{
  			background-color: whitesmoke;
  			padding: 50px;
  			width: 300px;
  			height: 450px;
  		}
  	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Library Management System</a>
			</div>
			<font style="color: blue"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
			<font style="color: blue"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></span></font>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="view_profile.php">View Profile</a>
						<a class="dropdown-item" href="edit_profile.php"> Edit Profile</a>
						<a class="dropdown-item" href="change_password.php">Change Password</a>
					</div>
				</li>
				<li class="nav-item"><a class="nav-link" href="../logout.php">Logout</a></li>
			</ul>
		</div>
	</nav>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
	<div class="container-fluid">
		<ul class="nav navbar-nav navbar-center">
			<li class="nav-item">
				<a href="user_dashboard.php" class="nav-link">Dashboard</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">Book</a>
				<div class="dropdown-menu">
					<a href="" class="dropdown-item">Search Books</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">Category</a>
				<div class="dropdown-menu">
					<a href="" class="dropdown-item">Search Category</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">Author</a>
				<div class="dropdown-menu">
					<a href="" class="dropdown-item">Search Author</a>
				</div>
			</li>
		</ul>
	</div>
</nav>

<span><marquee>This is library Management System. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<form>
			<table class="table-bordered" width="500px" style="text-align: center">
				<tr>
					<th>Book Name:</th>
					<th>Book Author:</th>
					<th>Book Number:</th>
				</tr>
				<?php
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						$book_name = $row['book_name'];
						$author = $row['book_author'];
						$book_no = $row['book_no'];
				?>
						<tr>
							<td><?php echo $book_name;?></td>
							<td><?php echo $author;?></td>
							<td><?php echo $book_no;?></td>
						</tr>
						<?php
					}
				?>
			</table>
		</form>
	</div>
	</div>

</body>
</html>
