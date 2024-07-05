<!DOCTYPE html>
<html>
<head>
	<title>Home Page-System Admin</title>
	<style>
	body
	{
		background-color:#cccccc;
	}
	</style>
	<link rel="stylesheet" href="stylesSA.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
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
		<button class="List"><a href="homepageSA.php" class="List">Dashboard</a></button><br>
		<button class="List"><a href="Update Webpage1.php" class="List">Update Web page</a></button><br>
		<button class="List"><a href="displayCD.php" class="List">Manage registrations</a></button><br>
		<button class="List"><a href="manage advertistments.html" class="List">Manage advertistments</button></a><br>
		<button class="List"><a href="maintain feedback.html" class="List">Maintain feedback</a></button><br>
		<button class="List"><a href="manage FAQ.html" class="List">Manage FAQ</a></button><br>
		<button class="List"><a href="event calender.html" class="List">Event calender</a></button><br>
		<button class="List"><a href="settings.html" class="List">Settings</a></button><br>
		
	</div>
  
	<div class="backbutton">
		<button><a href="homepage-sAdmin.html"><</a></button>
		<h2>Dashboard</h2>
	</div>
	
	<div class="graph">
	<h3><u>Sales</u></h3>
	<h5>(Income)</h5>
	<h6>(In Rs millions)</h6>
	
	<canvas id="myChart"></canvas>
	<script>
	const xValues = ["Jan","Feb","March","April","May","June","July","Sep","Oct","Nov","Dec"];
	const yValues = [10,12,12,15,15,15,18,20,25,25,29];

	new Chart("myChart", 
	{
	  type: "line",
	  data: 
	  {
		labels: xValues,
		datasets:
		[{
		  fill: false,
		  lineTension: 0,
		  backgroundColor: "rgba(0,0,255,1.0)",
		  borderColor: "rgba(0,0,255,0.1)",
		  data: yValues
		}]
	  },
	  options: 
	  {
		legend: {display: false},
		scales: 
		{
		  yAxes: [{ticks: {min: 5, max:30}}],
		}
	  }
	});
	</script>
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