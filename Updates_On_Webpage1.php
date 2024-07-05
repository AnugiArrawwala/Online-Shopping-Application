<?php

include 'connect1.php';


?>

<!DOCTYPE html>
<html>
<head>
	<title>Updates_On_webpage</title>
	<style>
	body
	{
		background-color:#cccccc;
	}
	/*Navigation bar*/
	.NaviBar
	{
		list-style-type: none;
		width: 220px;
		overflow: auto;
		padding: 0;
		background-color: #0C2D48;
		text-align: center;
	}
	
	/*Buttons*/
	.List
	{
		font-size: 14px;
		padding: 0;
		border: none;
		background: none;
		color:white;
		background-color: #0C2D48;
		display: inline;
		padding: 15px;
		text-decoration: none;

	}
	
	/*NaviBar hover*/
	.NaviBar button:hover
	{
		background-color: #0C2D48;
		transition: all .6s ease;
	}
	
	.NaviBar a:hover
	{
		background-color: #145DA0;
		transition: all .6s ease;
		text-decoration: none;
	}
	
	/*search bar*/
	.SearchBar
	{
		font-size: 12px;
		margin-top: 5px;
		margin-left: 0;
		padding: 5px;
		border: 1px solid #ccc;
		border-radius: 30px;
		outline: none;
	}
	
	/*navigation links*/
	.options
	{
		font-size: 12px;
		color: #626566;
		text-decoration: none;
	}
	
	.space
	{
		margin-left: 100px;
	}
	
	/*place elements*/
	.flex-container
	{
		display: flex;
		flex-direction: row;
	}
	
	.header
	{
		text-align: left;
	}
	
	.backbutton
	{
		margin-top: -110px;
	}
	
	.backbutton a{
		text-decoration: none;
		color:#626566;
	}
	
	.backbutton button
	{
		background-color: #cccccc;
		border: 2px solid #626566;
		color: #626566;
		border-radius: 30px;
		font-size: 15px;
		font-weight: bold;
	}
	
	.backbutton h2
	{
		color: #0C2D48;
		margin-top: -26px;
		margin-left: 35px;
	}
	
	.men_s_button
	{
		color: #000000;
		font-size:20px;
		background-color: #808080;
		border: none;
		width: 300px;
		height: 100px; 
		border-radius: 50px 50px 50px 50px;
		margin-top: 20px;
		box-shadow: 0px 10px 40px rgba(0, 0, 0, 0.3);
	}
	
	.men_s_button:hover
	{
		background-color: #899499;
		transition: all .5s ease;
		box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.7);
	}
	
	.men_s_button a
	{
		color: white;
		text-decoration: none;
	}
	
	.women_s_button
	{
		color: #000000;
		font-size:20px;
		background-color: #808080;
		border: none;
		width: 300px;
		height: 100px; 
		border-radius: 50px 50px 50px 50px;
		box-shadow: 0px 10px 40px rgba(0, 0, 0, 0.3);
		margin-top: 30px;
	}
	
	.women_s_button:hover
	{
		background-color: #899499;
		transition: all .5s ease;
		box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.7);
	}
	
	.women_s_button a
	{
		color: white;
		text-decoration: none;
	}
	
	.accessories_s_button
	{
		color: #000000;
		font-size:20px;
		background-color: #808080;
		border: none;
		width: 300px;
		height: 100px; 
		border-radius: 50px 50px 50px 50px;
		margin-top: 30px;
		box-shadow: 00px 10px 40px rgba(0, 0, 0, 0.3);
	}
	
	.accessories_s_button:hover
	{
		background-color: #899499;
		transition: all .5s ease;
		box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.7);
	}
	
	.accessories_s_button a
	{
		color: white;
		text-decoration: none;
	}
	
	.price_update_buttons
	{
		margin-top: -70px;
		height: 500px;
		width: 300px;
		padding: 10px 20px;
		
	}
	
	.stock_header
	{
		text-align: center;
		font-size: 30px;
	}

	.table,th,td
	{
		border: 2px solid black;
		border-collapse: collapse

	}

	.btn-primary
	{
		background-color:#2832c2;
		color: black;
		border-radius: 15px;
		border-color: #2832c2;
	}
	.btn-danger
	{
		background-color:#e3242b;
		color: black;
		border-radius: 15px;
		border-color: #e3242b;
	}

</style>    
</head>
<body>	

<div class="header">
	<img src="project-logo4 (2).png" alt="AZ-EE's" width="100px" height="100px"><br>
	<div class="space">
	<a href="Home page.html" class="options">View Site |</a>
	<a href="login.html" class="options"> Sign out</a>
	</div>
</div>

<div class="flex-container">
	
	<div class="NaviBar">
		<input class = "SearchBar" type="text" placeholder=" Search" name="search">
		<hr>
		<button class="List"><a href="dashboard.html" class="List">Dashboard</a></button><br>
		<button class="List"><a href="update webpage.html" class="List">Update Web page</a></button><br>
		<button class="List"><a href="manage registrations.html" class="List">Manage registrations</a></button><br>
		<button class="List"><a href="manage advertistments.html" class="List">Manage advertistments</a></button><br>
		<button class="List"><a href="maintain feedback.html" class="List">Maintain feedback</a></button><br>
		<button class="List"><a href="manage FAQ.html" class="List">Manage FAQ</a></button><br>
		<button class="List"><a href="event calender.html" class="List">Event calender</a></button><br>
		<button class="List"><a href="settings.html" class="List">Settings</a></button><br>
		
	</div>
  
	<div class="backbutton">
		<button><a href="Update Webpage1.php"><</a></button>
		<h2>Stock/Price Update</h2>
	</div>
	
	
        <div>
			<table class="table">
					<thead>
						<tr>
							<th scope="col">Item ID</th>
							<th scope="col">item Name</th>
							<th scope="col">Item Category</th>
							<th scope="col">Price</th>
							<th scope="col">Quantity</th>
							<th scope="col">Item Description</th>
							<th scope="col">Item Image</th>
							<th scope="col">Operation</th>
						</tr>
				    </thead>
					<tbody>
					
						<?php
							
							$sql="select * from `crud`";
							$result=mysqli_query($con,$sql);
								if($result)
								{
									while($row=mysqli_fetch_assoc($result))
									{
										$id=$row['id'];
										$item_name=$row['item_name'];
										$item_category=$row['item_category'];
										$price=$row['price'];
										$quantity=$row['quantity'];
										$item_description=$row['item_description'];
										$item_image=$row['item_image']; 
											
											echo'<tr>
													 <th scope="row">'.$id.'</th>
													 <td>'.$item_name.'</td>
													 <td>'.$item_category.'</td>
													 <td>'.$price.'</td>
													 <td>'.$quantity.'</td>
													 <td>'.$item_description.'</td>
													 <td>'.$item_image.'</td>
													 <td>
														 <button class="btn-primary"><a href="update1.php? updateid='.$id.' " >Update</a></button>
														 <button class="btn-danger"><a href="delete.php? deleteid='.$id.' " >Delete</a></button>
													 </td>
												 </tr>';	 
									}
										
								}
						
						?>
	
				  </tbody>
            </table>
        </div>    
</div>          
</body>
</html>