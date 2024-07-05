<?php

include 'connect.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Manage Registrations</title>
	<style>
	body
	{
		background-color:#cccccc;
	}
	</style>
	<link rel="stylesheet" href="stylesMR2.css">
	
</head>
<body>	

<div class="header">
	<img src="images/project-logo4.png" alt="AZ-EE's" width="100px" height="100px"><br>
	<div class="space">
	<a href="Home page.html" class="options">View Site |</a>
	<a href="login.html" class="options"> Sign out</a>
	</div>
</div>

<div class="flex-container">
	
	<div class="NaviBar">
		<input class = "SearchBar" type="text" placeholder=" Search" name="search">
		<hr>
		<button class="List"><a href="homepage-sAdmin.html" class="List">Dashboard</a></button><br>
		<button class="List"><a href="update webpage.html" class="List">Update Web page</a></button><br>
		<button class="List"><a href="manage registrations.html" class="List">Manage registrations</a></button><br>
		<button class="List"><a href="manage advertistments.html" class="List">Manage advertistments</a></button><br>
		<button class="List"><a href="maintain feedback.html" class="List">Maintain feedback</a></button><br>
		<button class="List"><a href="manage FAQ.html" class="List">Manage FAQ</a></button><br>
		<button class="List"><a href="event calender.html" class="List">Event calender</a></button><br>
		<button class="List"><a href="settings.html" class="List">Settings</a></button><br>
		
	</div>
  
	<div class="backbutton">
		<button><a href="homepage-sAdmin.html"><</a></button>
		<h2>Manage Registrations</h2>
	</div>
	
	<div>
		<table class="table_1">
		<thead>
			<tr>
				<th scope="col" style="width: 100%">User ID</th>
				<th scope="col" style="width: 100%">Username</th>
				<th scope="col" style="width: 100%">Email</th>
				<th scope="col" style="width: 100%">First Name</th>
				<th scope="col" style="width: 100%">Last Name</th>
				<th scope="col" style="width: 100%">Operation</th>
			</tr>
		</thead>
			<?php

			$sql="Select * from `customer_data`";
			$result=mysqli_query($con,$sql);

			if($result)
			{
				while($row=mysqli_fetch_assoc($result))
				{
					$id=$row['id'];
					$username=$row['username'];
					$email=$row['email'];
					$firstname=$row['firstname'];
					$lastname=$row['lastname'];
				
					echo '<tr>
					<th scope="row" >'.$id.'</th>
					<td>'.$username.'</td>
					<td>'.$email.'</td>
					<td>'.$firstname.'</td>
					<td>'.$lastname.'</td>
					
					<td>
					<button><a href="delete.php?deleteid='.$id.'">Delete</a></button>
	
					</td>

					</tr>';
				}
			}
			
			?>	
			
		</table>
	</div>
	
	<div class="dropdown">
		<button class="dropbtn">
		<div></div>
		<div></div>
		<div></div>
			
		</button>
		<div class="dropdown-content">
			<a href="internal.php">Sign Out</a>
			<a href="myProfile.php">My Profile</a>
			<a href="Home page.html">View Site</a>    
        </div>
	</div>
	
</div>

</body>
</html>