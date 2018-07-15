<?php require("./assets/connection.php");
?>
<?php


?>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
<?php require("./dashboard_components/sidebar.php"); ?>
    <!-- ------------------wrapper---------------- -->
    <?php require("./dashboard_components/mainpanel.php") ;
 
      echo '
	  <form action="carrier_graph.php" method="post">
	 Enter name: <input type="text" name="name">
	 <input type="submit">
	 </form>
	 ';
	 $data=array();
	 /*
	  if(isset($_POST["name"])){
		  $sql = "CREATE TABLE temp (
date VARCHAR(30) ,
count VARCHAR(30)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
*/
		  $name=$_POST["name"];
	  $sql="select * from feedback where name='$name'";
	$result = $conn->query($sql);
                                    if ($result->num_rows > 0) {                                  
									

                                      while($row = $result->fetch_assoc())
                                      { 
											$x=$row["feedback"];
											$y=$row["date"];
											$count= substr_count($x,"good");
											$sql = "INSERT INTO temp VALUES ('$y', '$count')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
									  
                                       }//while 
                                  }//if
								  
								  
					$data=mysqli_query($conn,"SELECT * FROM temp");
							

 ?>
<script>
var myData=[<?php 
while($info=mysqli_fetch_array($data))
    echo $info['date'].','; /* We use the concatenation operator '.' to add comma delimiters after each data value. */
?>];
<?php
$data=mysqli_query($conn,"SELECT * FROM temp");
?>
var myLabels=[<?php 
while($info=mysqli_fetch_array($data))
    echo '"'.$info['count'].'",'; /* The concatenation operator '.' is used here to create string values from our database names. */
?>];
console.log(myData);
console.log(myLabels);
</script>
	
<?php


						
								  
	  
	  
    ?>
	<script>
	window.onload=function(){
zingchart.render({
    id:"myChart",
    width:"100%",
    height:400,
    data:{
    "type":"bar",
    "title":{
        "text":"Data Pulled from MySQL Database"
    },
    "scale-x":{
        "labels":myLabels
    },
    "series":[
        {
            "values":myData
        }
]
}
});
};</script>
								

        <!-- footer startsand ends in require -->
        <?php require("./dashboard_components/footer.php") ?>


    </div>
</div>


</body>

        <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
