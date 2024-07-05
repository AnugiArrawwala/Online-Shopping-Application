<?php

	include 'connect1.php';
		if(isset($_GET['deleteid']))
		{
			$id=$_GET['deleteid'];
			
			$sql="delete from `crud` where id=$id";
			$result=mysqli_query($con,$sql);
				if($result)
				{
					//echo "Deleted successfully";
					header('location:Updates_On_Webpage1.php');
				}
				else
				{
					die(mysqli_error($con));
				}
		}

?>