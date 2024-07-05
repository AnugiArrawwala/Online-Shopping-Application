<?php
include'connect.php';

if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$email=$_POST['email'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$address1=$_POST['address1'];
	$address2=$_POST['address2'];
	
	$sql="insert into `customer_data` ( username, email, firstname, lastname, address1, address2)
	values('$username', '$email', '$firstname','$lastname', '$address1', '$address2')";
	
	$result=mysqli_query($con,$sql);
	if(!$result)
	{
		die(mysqli_error($con));
	}

	// Assuming you have inserted the user data successfully, store the user's ID in the session
    $id = mysqli_insert_id($con);
	$_SESSION['id'] = $id;
}

	// Check if the user is logged in
	if(isset($_SESSION['id'])) {
		// Retrieve the user's ID from the session
		$id = $_SESSION['id'];

		// Retrieve the user's details from the database
		$sql = "SELECT username, email, firstname, lastname, address1, address2 FROM customer_data WHERE id = $id";
		$result = mysqli_query($con, $sql);

		if($result && mysqli_num_rows($result) > 0) {
			// Fetch the user's profile data from the result
			$row = mysqli_fetch_assoc($result);

			// Store the profile data in variables
			$username = $row['username'];
			$email = $row['email'];
			$firstname = $row['firstname'];
			$lastname = $row['lastname'];
			$address1 = $row['address1'];
			$address2 = $row['address2'];
		} else {
			// User profile not found in the database
			// Handle the error or redirect the user to an appropriate page
			 echo "Error: " . mysqli_error($con);
		}
	} else {
		// User is not logged in
		// Redirect the user to the login page or handle unauthorized access
		
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
	<style>
	body
	{
		background-color:#cccccc;
		font-family: Sans-serif;
	}
	</style>
	<link rel="stylesheet" href="stylesMP.css">
</head>
<body>
	<img class="logo" src="images/project-logo4.png" alt="AZ-EE's" width="150px" height="150px">
	<script src="javaScript.js"></script>
	
	<div class="NaviBar">
		<button class="List"><a href="home.html" class="List">HOME</a></button>
		<button class="List"><a href="womens.html" class="List">WOMEN'S</a></button>
		<button class="List"><a href="mens.html" class="List">MEN'S</a></button>
		<button class="List"><a href="latest.html" class="List">SHOP LATEST</a></button>
		<button class="List"><a href="giftcards.html" class="List">GIFT CARDS</a></button>
		<button class="List"><a href="accessories.html" class="List">ACCESSORIES</a></button>
		<input class = "SearchBar" type="text" placeholder=" Search" name="search">
		
		<br/>
	</div>
<div class="flex-container">

<div>
	
	<form class="Form" style="margin-left: 400px;" method="post">
	<h2>My Profile</h2>

	<label for="FirstName">First Name:</label>
	<input style="margin-left: 54px;" type = "text" placeholder=" First Name" id="firstname" name="firstname" required><br><br>
	<label for="LastName">Last Name:</label>
	<input style="margin-left: 54px;" type = "text" placeholder=" Last Name" id="lastname" name="lastname" required><br><br>
	<label for="Username">Username:</label>
	<input style="margin-left: 60px;" type = "text" placeholder=" Username" id="username" name="username" required><br><br>
	<label for="Email">Email Address:</label>
	<input style="margin-left: 32px;" type = "text" placeholder=" Email" id="email" name="email" required><br><br>
	<label for="Address">Address:</label>
	<input style="margin-left: 75px;" type = "text" placeholder=" Line 1" id="address1" name="address1" required><br><br>
	<input style="margin-left: 160px;" type = "text" placeholder=" Line 2" id="address2" name="address2" required><br><br>
	
	</form>
	
</div>
</div>

</body>
</html>