<!doctype html>
<?php require("./assets/connection.php"); ?>
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

      
	  
	  
	  $sql="select * from feedback";
	$result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        ?>
                                  
    
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    
                                    	<th>Name</th>
                                    	<th>Phone</th>
                                    	<th>Feedback</th>
                                    	<th></th>
                                    </thead>
                                    <tbody>
									
									

                                    <?php
                                    $k=0;
                                      while($row = $result->fetch_assoc())
                                      { 
                                      ?>
									  <form action="send_sms.php" method="post">
                                      <tr>
									  <input type="hidden" name="index" value="<?php echo $k;?>">
                                       <td><input type="text" value="<?php echo $row['name'];?>" name="name" readonly></td> 							
									   <td><input type="text" value="<?php echo $row['number'];?>" name="number" readonly></td>                                     
                                      <td><input type="text" value="<?php echo $row['feedback'];?>" name="feedback"></td>									  
                                      <td><input type="submit" name="submit"></td>                        
                                      </tr> 
									  </form>
									  <?php
									  $k++;
                                       }//while 
                                  }//if
                                  ?> 
                                    </tbody>
                                </table>

								

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
