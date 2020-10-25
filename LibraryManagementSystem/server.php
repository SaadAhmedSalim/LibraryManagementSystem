<?php

	session_start();
// For database connection need this variable
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "library";

	$connection = mysqli_connect($servername, $username, $password, $dbname);

// checking the connection is ok or not
/*
if (!$connection) {
	echo "Connection failed";
	} else {
		echo "Connected Successfully!";
	}
*/

// taking variables 
	$name = "";
	$username = "";
	$email = "";
	$gender = "";
	$birthday = "";
	$password = "";
	$c_password = ""; 

/*
	$name = $_POST['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$birthday = $_POST['birthday'];
	$password = $_POST['password'];
	$c_password = $_POST['c_password']; 
*/
	$errors = array();


// Alawys button er name e jeta thakbe sheta isset post e likhba.
// if the register button is clicked
	if(isset($_POST['register'])) {

		$name = mysqli_real_escape_string($connection,$_POST['name']);
		$username = mysqli_real_escape_string($connection,$_POST['username']);
		$email = mysqli_real_escape_string($connection,$_POST['email']);
		$gender = mysqli_real_escape_string($connection,$_POST['gender']);
		$birthday = mysqli_real_escape_string($connection,$_POST['birthday']);
		$password = mysqli_real_escape_string($connection,$_POST['password']);
		$c_password = mysqli_real_escape_string($connection,$_POST['c_password']);


		//Ensure that forms fields are filled properly

		if (empty($name)) {
			array_push($errors, "Name is Required"); //add error when null found
		}

		if (empty($username)) {
			array_push($errors, "User Name is Required"); //add error when null found
		}

		if (empty($email)) {
			array_push($errors, "Email is Required"); //add error when null found
		}

		if (empty($gender)) {
			array_push($errors, "Gender is Required"); //add error when null found
		}

		if (empty($password)) {
			array_push($errors, "Password is Required"); //add error when null found
		}
		
		/*
		// check database for existing user with same username or email

		$user_check_query = "SELECT* from user WHERE pusername = '$username' OR pemail = '$email' LIMIT 1";
		$results = mysqli_query($connection, $user_check_query);
		$user = mysqli_fetch_assoc($results);

		// if user exists

		if ($user) {
			if ($user['username'] === $username) {
				array_push($errors, "User Name Already Exists!");
			}
		if ($user['email'] === $email) {
				array_push($errors, "Email Already Exists!");
			}
		}

		*/

		// if there are no errors , save user to database

		if (count($errors) == 0) {
			//$password = md5($password); // encrypt password before storing

			$sql = "INSERT INTO user (pname, pusername, pemail, pgender, pbirth, password) 
								VALUES ('$name','$username','$email','$gender','$birthday','$password')";

			mysqli_query($connection, $sql);

			/*
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are logged in now.";
			header("location: home.php");
			*/

			if ($password==$c_password) {
				$connection->query($sql);
				echo '<script>alert("Registered Successfully");window.location="login.php";</script>';
			} else {
				echo '<script>alert("Password does not match !");window.location="signup.php";</script>';
			}
		}

		
	}


	if (isset($_POST['login'])) {

  		$username = mysqli_real_escape_string($connection, $_POST['username']);
  		$password = mysqli_real_escape_string($connection, $_POST['password']);

  		if (empty($username)) {array_push($errors, "Username is required"); }
  		if (empty($password)) {array_push($errors, "Password is required"); }


  		if (count($errors) == 0) {
    
    		$query = "SELECT * FROM user WHERE pusername = '$username' OR pemail = '$email' AND password = '$password'";
    		$results = mysqli_query($connection, $query);

    		if (mysqli_num_rows($results)) {

      			$_SESSION['username'] = $username;
      			$_SESSION['success'] = "Successfully Logged In";
      			header("location: home.php");
    		}else {
    			echo "<script>
						alert('You are not authenticated!');
					</script>";
				}
	 	 }

	}


	$bookname = "";
	$isbn = "";
	$cat = "";
			



	if(isset($_POST['addbook'])){
			
		$bookname = mysqli_real_escape_string($connection,$_POST['name']);
		$isbn = mysqli_real_escape_string($connection,$_POST['isbn']);
		$cat = mysqli_real_escape_string($connection,$_POST['category']);
		//$image = $_FILES['image']['name'];
		//$temp = "product_images/".$image;
		//move_uploaded_file($_FILES['image']['name'], $temp);

				    /* PROFILE UPLOAD   
  				$pic=$_FILES['profile']['name'];
  				$target = "profile_upload/".$pic;
  				move_uploaded_file($_FILES['profile']['tmp_name'], $target);
  				*/


				//Ensure that forms fields are filled properly

		if (empty($bookname)) {
				array_push($errors, "Book Name is Required"); //add error when null found
			}
		if (empty($isbn)) {
				array_push($errors, "Book ISBN is Required"); //add error when null found
			}
		if (empty($cat)) {
				array_push($errors, "Category is Required"); //add error when null found
			}
		
		if (count($errors) == 0) {
				$query="INSERT INTO book (book_name, book_isbn, category) 
								VALUES('$bookname','$isbn','$cat')";

				$result = mysqli_query($connection, $query);

/*
					if($result == true){
							echo '<script>alert("Book has been entered");</script>';
						}
						else{
							echo '<script>alert("Something went wrong!");</script>';
						} */
			}
		}






?>