<!DOCTYPE html>
<html>
<head>
	<title>Update webpage</title>
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
	
	.update_webpage_buttons
	{
		color: #000000;
		font-size:20px;
		background-color: #808080;
		border: none;
		width: 250px;
		height: 150px; 
		border-radius: 50px 50px 50px 50px;
		box-shadow: 10px 10px 40px rgba(0, 0, 0, 0.5);
		
	}
	
	.update_webpage_buttons:hover
	{
		background-color: #899499;
		transition: all .5s ease;
		box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.7);
	}
	
	
	.New_Arrival_Updates
	{
		margin-top: 200px;
	}
	
	.New_Arrival_Updates a
	{
		color: white;
		text-decoration: none;
	}
	
	.Stock_Price_updates a
	{
		color: white;
		text-decoration: none;
	} 
	
	.Stock_Price_updates
	{
		margin-right: 20px;
	}
	
	.Updates_on_webpage
	{
		margin-top: 200px;
	}
	
	.Updates_on_webpage a
	{
		color: white;
		text-decoration: none;
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
	
	.new_arrival_updates
	{
		border: 2px solid #F00;
	}

	.notification_bell
	{
		border: none;
		border-radius: 25px;
		margin-right: 10px;
		margin-top: -100px;		
	}
	
	.notification_bell:hover
	{
		background-color: #cccccc;
		transition: all .5s ease;
	}
	
	.notification_bell_border
	{
		border: none;
		border-radius: 20px;
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
		<button><a href="dashboard.html"><</a></button>
		<h2>Update Webpage</h2>
	</div>
	
	<div class="New_Arrival_Updates">
		<button class="update_webpage_buttons"><a href="user1.php">New Arrival Updates</a></button>
	</div>
	
	<div class="Stock_Price_updates">
		<button class="update_webpage_buttons"><a href="Updates_On_Webpage1.php">Stock/Price Update</a></button>
	</div>
	
	<div class="Updates_on_webpage">
		<button class="update_webpage_buttons"><a href="dashboard.html">Updates on Webpage</a></button>
	</div>
	
	<div class="notification_button">
		<button class="notification_bell"><a href="maintain feedback.html"></a><img src="download (11).png" alt="notification_bell" width="40px" height="40px" class="notification_bell_border"></button>
	</div>
	
</div>

</body>
</html>