<html>
<body>
<?php
$con = mysqli_connect("localhost", "root", "Vo0xFlDeauPqbeY5", "team7");
$count = 0;

if (!$con)
	{
	die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	session_start();
$username=$_SESSION["username"];
$uid="123";$result=0;$eligible=0;$resultper=0;
$sql = "select * from sampletest_answer where userid='123'";
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
		
?>				
<center><h1>THANK YOU !FOR TAKING TEST</h1></center>
<center>YOUR MOCKTEST RESULTS ARE :<br></center>
<center><input type="text" name="result" value="<?php echo $result; ?>" ></center>
</body>
</html>