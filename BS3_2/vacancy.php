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
function validateForm() {
    var x = document.forms["myForm"]["job_role"].value;
    if (x == "") {
        alert("job role must be filled out");
        return false;
    }
	var x = document.forms["myForm"]["job_desc"].value;
    if (x == "") {
        alert("job description must be filled out");
        return false;
    }
	var x = document.forms["myForm"]["job_vacancy"].value;
    if (x == "") {
        alert("job vacancy must be filled out");
        return false;
    }
	var x = document.forms["myForm"]["job_date"].value;
    if (x == "") {
        alert("job date must be filled out");
        return false;
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
              <form name="myForm" action="vacancy_thanks.php" onsubmit = "return validateForm()" >
Job Role: <input type="text" name="job_role" method="get"><br><br>
Job Description: <textarea rows="4" cols="50" name="job_desc"></textarea><br><br>
No of vacancies: <input type="number" name="job_vacancy"><br><br>
Last date to apply: <input type="date" name="job_date"><br><br>
<input type="submit" value="UPDATE VACANCY"><br><br>
</form>
                      

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