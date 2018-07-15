<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {
//Better to construct options first and then pass it as a parameter
var options = {
	title: {
		text: "Test Progress"
	},
	animationEnabled: true,
	exportEnabled: true,
	data: [
	{
		type: "spline", //change it to line, area, column, pie, etc
		dataPoints: [
			{ x: 1, y: 40 },
			{ x: 2, y: 45 },
			{ x: 3, y: 60},
			{ x: 4, y: 60 },
			{ x: 5, y: 50},
			{ x: 6, y: 65 },
			{ x: 7, y: 70},
			{ x: 8, y: 70 },
			{ x: 9, y: 65 },
			{ x: 10,y: 75}
		]
	}
	]
};
$("#chartContainer").CanvasJSChart(options);
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
</body>
</html>


