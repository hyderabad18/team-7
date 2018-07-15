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
	  body {
		background: linear-gradient(45deg,cyan,deepskyblue);
	  }
	  input{
		background: linear-gradient(45deg,cyan,deepskyblue);
	  }
	  .sec{
		  border:1px solid;
		  box-shadow:10px 5px;
		  padding-top:5rem;
		  padding-bottom:5rem;
		  background: linear-gradient(45deg,deepskyblue,cyan);
		  animate:0.5s;
	  }
	  </style>
	</head>
<body>
<?php
$con = mysqli_connect("localhost", "root", "Vo0xFlDeauPqbeY5", "team7");
$count = 0;

if (!$con)
	{
	die("ERROR: Could not connect. " . mysqli_connect_error());
	}
$uid="123";$result=0;$eligible=0;$resultper=0;
$sql = "select * from student_answer where userid=" . $uid . "";
			if ($res = mysqli_query($con, $sql))
				{
				   if (mysqli_num_rows($res) > 0)
					{
					while ($row = mysqli_fetch_array($res))
						{
						$marks = $row['marks'];
						 if($marks==1)
						 {
							 $result=$result+1;
						}
					}
				}
				}
		$resultper=$resultper*10;
		if($result>=5)
		{$eligible=1;
		}
		else
		{$eligible=0;
		}
?>		
<div class="container-fluid">
<div class="sec"><center><h1><b>THANK YOU FOR TAKING THE TEST!</b></h1></center></div>
<br>
<div class="sec"><center>YOUR MOCKTEST RESULTS ARE :<br></center>
<br>
<center><input type="text" name="result" value="<?php echo $result; ?>" ></center></div>
<?php
if($eligible==1)
{
?>
<form action="../curriculum_bs3/dashboard.php" method="POST">
<div class="sec"><center>YOUR ARE ELIGIBLE FOR OUR CIRCULUM!:<br></center>
<br>
<center><input type="submit" name="cir" value="Start your training!" ></center><div>
 </form>
<?php 
}
else
{
?>
<div class="sec"><center>SORRY !YOUR ARE NOT ELIGIBLE FOR OUR CIRCULUM.TRY BETTER NEXT TIME!:<br></center></div>
<?php  
}
?>
</div>
</body>
</html>