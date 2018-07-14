﻿
<!DOCTYPE html>
<html>
<head>
<title>Credit Login / Register Form a Responsive Widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Credit Login / Register Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<!-- //web font -->
</head>
<body>
<h1></h1>
<!-- selct option here -->
<?php
session_start();
unset($_SESSION["role"]);
$_SESSION["role"]="corporate";

include("./forms-redirect.php");
?>
<!-- select options ends here -->

<div class="main-agileits">
<!--form-stars-here-->
		<div class="form-w3-agile">
			<h2>Login form for Corporate</h2>
			<form action="../back/verify_corporate.php" method="post">
				<div class="form-sub-w3">
					<input type="text" name="Username" placeholder="Customer username " required="" />
					<div class="icon-w3">
						<i class="fa fa-user" aria-hidden="true"></i>
					</div>
				</div>
				<div class="form-sub-w3">
					<input type="password" name="Password" placeholder="Password" required="" />
				<div class="icon-w3">
					<i class="fa fa-unlock-alt" aria-hidden="true"></i>
				</div>
				</div>
				<p class="p-bottom-w3ls">Are you new to this website?<a class="w3_play_icon1" href="#small-dialog1">  Register here</a></p>
				
				<div class="submit-w3l">
					<input type="submit" value="Login">
				</div>
			</form>
		</div>
<!--//form-ends-here-->
</div>
<div id="small-dialog1" class="mfp-hide">
					<div class="contact-form1">
										<div class="contact-w3-agileits">
										<h3>Register Form</h3>
											<form action="../back/insert_corporate.php" method="post">
												<div class="form-sub-w3ls">
													<input placeholder="company name"  type="text" required="" name="company_name">
													
												</div>
												<div class="form-sub-w3ls">
													<input placeholder="Organization desc." class="mail" type="text" required="" name="org_desc">
													
												</div>
												<div class="form-sub-w3ls">
													<input placeholder="Contact Person Name"  type="contact_name" required="" name="contact_person_name">
												
												</div>
												<div class="form-sub-w3ls">
													<input placeholder="Phone Number"  type="contact_no" required="" name="contact_no">
												
												</div>
												<div class="form-sub-w3ls">
													<input placeholder="Email-Id"  type="user_name" required="" name="user_name">
													
												</div>
												<div class="form-sub-w3ls">
													<input placeholder="Username"  type="text" required="" name="email_id">
													
												</div>
												<div class="form-sub-w3ls">
													<input placeholder="Password"  type="password" required="" name="password">
													
												</div>
											</div>
											<div class="login-check">
								 			 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><p>I Accept Terms & Conditions</p></label>
											</div>
										<div class="submit-w3l">
											<input type="submit" value="Register">
										</div>
										</form>
					</div>	
				</div>
<!-- copyright -->
	<div class="copyright w3-agile">
		<p> © 2017 Credit Login / Register Form . All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
	</div>
	<!-- //copyright --> 
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- pop-up-box -->  
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box -->
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>
</body>
</html>