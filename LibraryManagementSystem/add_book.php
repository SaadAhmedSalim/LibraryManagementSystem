<?php include('server.php') ?>

<?php
if(!$_SESSION['username']){
	echo "
		<script>
		window.location.href='login.php';
		</script>
	";
}
?> 

<!DOCTYPE html>
<head>
  
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>
	<nav class="navbar">
  			<div class="container-fluid">
   				 <div class="navbar-header">
    				  <a class="navbar-brand" href="#">Library</a>
    			 </div>
				    <ul class="nav navbar-nav">
				      <li class="active"><a href="home.php">Home</a></li>
				      <li><a href="add_book.php">Add Book</a></li>
				      <li><a href="delete_book.php">Delete Book</a></li>
				      <li><a href="update_book.php">Update Book</a></li>
				      <li><a href="add_member.php">Add Member</a></li>
				      <li><a href="delete_member.php">Delete Member</a></li>
				      <li><a href="update_member.php">Update Member</a></li>
				      <li><a href="book_store.php">Book Details</a></li>
				      <li><a href="members.php">Member Details</a></li>    
				    </ul>	
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
    </ul>
  </div>
</nav>

<div class="admin-area"><h1>Add A Book</h1>
</div>

<form action="add_book.php" method="post">

	<?php include('errors.php'); ?>

			<div class="form-group">
			<label>Enter Book Name:</label>
			<input class="form-control" name="name" id="name" value="<?php echo $name; ?>" type="text"/>
			</div>
			<div class="form-group">
			<label>Enter Book ISBN :</label>
			<input class="form-control" name="isbn" type="text"/>
			</div>
			<div class="form-group">
			<label>Enter Book Category :</label>
			<input class="form-control" name="category" type="text"/>
			</div>
		<!--
			<div class="form-group">
			<label>Enter Book image :</label>
			<input class="form-control" name="image" type="file" value="Enter an image"/>
			</div>
		-->

			<input type="submit" name="addbook" class="btn btn-danger"/>
		</form>

		
</body>
</html>