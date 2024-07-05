var chart1 = document.getElementById(myChart1);
var graph1 = new chart(chart1)
	{
	const xValues = ["Jan","Feb","March","April","May","June","July","Sep","Oct","Nov","Dec"];
	const yValues = [10,12,12,15,15,15,18,20,25,25,29];

	new Chart("myChart1", 
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
	}
var chart2 = document.getElementById(myChart2)