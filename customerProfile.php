

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

	<div class="profileinfo">
		<img src="images/user-icon.png" alt="User Icon" width="120px" height="120px">
		
		<p>Username<br>
		Customer Email<br>
		</p>
		
	</div>
	
	<div class="vertical-line"></div>
	
	<div>
	
	<form class="Form" method="post">
	<h2>My Profile</h2>
	<label for="Username">Username</label>
	<input type = "text" placeholder=" Username" id="username" name="username" required><br><br>
	<label for="Email">Email Address</label>
	<input type = "text" placeholder=" Email" id="email" name="email" required><br><br>
	<label for="FirstName">First Name</label>
	<input type = "text" placeholder=" First Name" id="firstname" name="firstname" required><br><br>
	<label for="LastName">Last Name</label>
	<input type = "text" placeholder=" Last Name" id="lastname" name="lastname" required><br><br>
	
	<label for="Address">Address</label>
	<input type = "text" placeholder=" Line 1" id="address1" name="address1" required><br><br>
	<input type = "text" placeholder=" Line 2" id="address2" name="address2" required><br><br>
	
	<input class = "Submit" type = "submit" value = "Delete Account">
	<input class = "Submit" type = "submit" name="submit" value = "Update">
	</form>
	
	</div>
	
</div>
</body>
</html>