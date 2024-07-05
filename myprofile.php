<!DOCTYPE html>
<html>
<head>
	<title>Create Account - AZ-EE's</title>
	<style>
	body
	{
		background-color:#cccccc;
	}
	</style>
	<link rel="stylesheet" href="stylesCA.css">
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

<form class="Form">
	<h2>CREATE ACCOUNT</h2>
	<input type = "text" placeholder="Username" id="username" name="username" required><br><br>
	<input type = "text" placeholder="Email" id="email" name="email" required><br><br>
	<input type = "password" placeholder="Password" id="password" name="password" onkeyup='passConfirm();'required><br><br>
	<input type = "password" placeholder="Confirm Password" id="confirmpassword" name="confirmpassword" onkeyup='passConfirm();' required><br>
	<span class="Password" id="Message"></span><br><br>
	<input class = "Submit" type = "submit" value = "Sign Up">
</form>

</body>
</html>