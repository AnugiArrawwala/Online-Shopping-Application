<?php
include 'connect.php';

if(isset($_GET['deleteid']))
{
	$id=$_GET['deleteid'];
	
	$sql="delete from `customer_data` where id=$id";
	$result=mysqli_query($con,$sql);

	if($result)
	{
		header('location: createAccount.php');
	}
	else
	{
		die(mysqli_error($con));
	}
}

?>