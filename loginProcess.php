<?php

// initializing variables
session_start();


$email = $_POST['email'];
$password = $_POST['password'];
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'sliit');

// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
}
if (empty($password)) {
    array_push($errors, "Password is required");
}

if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE `email`='$email' AND `password` ='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
      $_SESSION['success'] = "You are now logged in";
  	  header('location: paymentManagement.php');
  	}else {
  		
        array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>