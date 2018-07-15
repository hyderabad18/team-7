<?php
session_start();
// $con = mysqli_connect("localhost", "root", "", "cfg");
include("../assets/connection.php");
$count = 0;
$username=$_SESSION["username"];
if (!$conn)
	{
	die("ERROR: Could not connect. " . mysqli_connect_error());
	}

$i = 1;

if (isset($_POST["submit"]))
	{
	while ($i <= 5)
		{
		if (!empty($_POST['qid' . $i]))
			{
			$qid = $_POST['qid' . $i];
			$ans = $_POST['ans' . $i];
			$sql = "select * from questions where qid=" . $qid . "";
			if ($res = mysqli_query($con, $sql))
				{
				if (mysqli_num_rows($res) > 0)
					{
					while ($row = mysqli_fetch_array($res))
						{
						$dans = $row['ans'];
						}
					}
				}
                 if($ans==$dans)
				 {
					 
					 $marks=1;
				 }
				 else
				 {
					 $marks=0;
				 }
			$sql2 = "insert into student_answer(userid,qid,answer,actual_ans,marks,type,level) values('$username','$qid','$ans','$dans','$marks','mocktest','level1')";
			$result = mysqli_query($conn, $sql2);
			if ($result)
				{
				echo "Account Successfully Created";
				}
			  else
				{
				//echo "no";
				}
				
				

			
			}
			$i = $i + 1;
		}
		
	}
	$userid="123";$count=0;$marks=0;
	$sql3= "select * from student_answer where userid=" . $username . "";
	if ($res3 = mysqli_query($conn, $sql3))
		{
			if (mysqli_num_rows($res3) > 0)
					{
					while ($row = mysqli_fetch_array($res3))
					{$level=$row['level'];
						$marks = $row['marks'];
						if($marks==1 && $level==1)
						{
							$count=$count+1;
						}
						
					}
	             }
		}
		if($count>=2)
		{
			header('Location: exam2.php');
		}
		else
		{
			header('Location: exam3.php');
		}
?>