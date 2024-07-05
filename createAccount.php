<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    $sql = "INSERT INTO `customer_data` (username, email, password, confirmpassword)
            VALUES ('$username', '$email', '$password', '$confirmpassword')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        session_start();
        $_SESSION['id'] = mysqli_insert_id($con); // Assuming $id is the unique identifier for the newly created account

        // Redirect the user to their profile page
        header("Location: customerProfile.php");
        exit();
    } else {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Account - AZ-EE's</title>
    <style>
        body {
            background-color: #cccccc;
        }
    </style>
    <link rel="stylesheet" href="stylesCA.css">
</head>
<body>
<img class="logo" src="images/project-logo4.png" alt="AZ-EE's" width="150px" height="150px">
<div class="NaviBar">
    <button class="List"><a href="home.html" class="List">HOME</a></button>
    <button class="List"><a href="womens.html" class="List">WOMEN'S</a></button>
    <button class="List"><a href="mens.html" class="List">MEN'S</a></button>
    <button class="List"><a href="latest.html" class="List">SHOP LATEST</a></button>
    <button class="List"><a href="giftcards.html" class="List">GIFT CARDS</a></button>
    <button class="List"><a href="accessories.html" class="List">ACCESSORIES</a></button>
    <input class="SearchBar" type="text" placeholder=" Search" name="search">

    <br/>
</div>

<form class="Form" method="post" action="createAccount.php">
    <h2>CREATE ACCOUNT</h2>
    <!--Form Inputs-->
    <input type="text" placeholder="Username" id="username" name="username" autocomplete="off" required><br><br>
    <input type="text" placeholder="Email" id="email" name="email" autocomplete="off" required><br><br>
    <input type="password" placeholder="Password" id="password" name="password" onkeyup='passConfirm();' required><br><br>
    <input type="password" placeholder="Confirm Password" id="confirmpassword" name="confirmpassword"
           onkeyup='passConfirm();' required><br>
    <span class="Password" id="Message"></span><br><br>
    <input class="Submit" type="submit"  name="submit" onclick="validate();"  value="Sign Up">

</form>

<script>
var passConfirm = function()
{
	if(document.getElementById("password").value == 
	document.getElementById("confirmpassword").value)
	{
		document.getElementById("Message").style.color = "Green";
		document.getElementById("Message").innerHTML = "Passwords match!";
	}
	else
	{
		document.getElementById("Message").style.color = "Red";
		document.getElementById("Message").innerHTML = "Passwords do not match!";
	}
	
}

function validate() {
  
    alert("Form submitted!");
    return true;
}
</script>

</body>
</html>
