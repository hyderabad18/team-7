<html>
<head>
	<title>Eligibility</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
	  .container{
		background: linear-gradient(45deg,white,darkgrey);
	  }
	  </style>
</head>
<body>


<div class="container">		
<center><h1>THANK YOU !FOR TAKING TEST</h1></center>
<center>YOUR MOCKTEST RESULTS ARE :<br></center>
<center><input type="text" name="result" value="<?php echo $result; ?>" ></center>
<?php
if($eligible==1)
{
?>
<form action="" method="POST">
<center>YOUR ARE ELIGIBLE FOR OUR CIRCULUM!:<br></center>
<center><input type="submit" name="cir" value="Start your training!" ></center>
 </form>
<?php 
}
else
{
?>
<center>SORRY !YOUR ARE NOT ELIGIBLE FOR OUR CIRCULUM.TRY BETTER NEXT TIME!:<br></center>
<?php  
}
?>
</div>
</body>
</html>