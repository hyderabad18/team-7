<?php require("./assets/connection.php"); ?>


<!doctype html>
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
	<script>
function showHint(str) {
    
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                
            }
        };
        xmlhttp.open("GET", "gethint.php" + str, true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>

<div class="wrapper">
    <?php require("./dashboard_components/sidebar.php"); ?>
    <!-- ------------------wrapper---------------- -->
    <?php require("./dashboard_components/mainpanel.php") ?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Complete vacancy list</h4>

                            </div>

                                <?php                        
                                    $sql="select * from vacancies ";
                                    $result=$conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        ?>
                                  
    
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Organization Name</th>                                
                                    	<th>Role</th>
										<th>Description</th>
										<th>Vacancies</th>
										<th>Last Date to Apply</th>
                                        
                                    </thead>
                                    <tbody>
                                    <?php
                                    
                                      while($row = $result->fetch_assoc())
                                      { 
                                      ?>
                                      <tr>
                                       <td><?php echo $row['org_name'];?> </td>                                       
                                       <td><?php echo $row['role'];?> </td>
									    <td><?php echo $row['descr'];?> </td> 
										<td><?php echo $row['vacancies'];?> </td>
										<td><?php echo $row['date'];?> </td>
                                    
                                      </tr> 
                                      <?php }//while 
                                  }//if
                                  ?> 
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Apply Filter to find suitable candidates</h4>
                           <form action="mapping.php" method="post">
Deaf<input type="radio" value="deaf" name="disability">
Blind<input type="radio" value="blind" name="disability">
<!--Both<input type="radio" value="blind" name="disability"><br>-->
Software<input type="radio" value="software" name="sector">
Hospitality<input type="radio" value="hospitality" name="sector">
<!--Both<input type="radio" value="" name="sector"><br>-->
Marks> <input type="number" value="marks" name="marks"><br>
<input type="submit" value="SUBMIT" name="submit">
</form>
                            </div>

                                <?php           
                         $marks=isset($_POST["marks"])?$_POST["marks"]:0; 
	$disability=isset($_POST["disability"])?$_POST["disability"]:'%';
	$sector=isset($_POST["sector"])?$_POST["sector"]:'%';
	$sql="select * from student_login where marks>='$marks' and disability like '$disability' and sector like '$sector'";
	$result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        ?>
                                  
    
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    
                                    	<th>Name</th>
                                    	<th>Disability</th>
                                    	<th>Sector</th>
                                    	<th>Marks</th>
                                        <th>Companies eligible</th>
                                    </thead>
                                    <tbody>
									
									

                                    <?php
                                    
                                      while($row = $result->fetch_assoc())
                                      { 
                                      ?>
                                      <tr>
                                       <td><?php echo $row['name'];?> </td> 
                                      <td><?php echo $row['disability'];?> </td>
                                      <td><?php echo $row['sector'];?> </td>
                                      <td><?php echo $row['marks'];?> </td>                        
                                      <td><input type="text" ></td>
                                      </tr> 
                                      <?php }//while 
                                  }//if
                                  ?> 
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>




</div>
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
