<?php
// $con = mysqli_connect("localhost", "root", "", "cfg");
include("../assets/connection.php");
$count = 0;

if (!$conn)
	{
	die("ERROR: Could not connect. " . mysqli_connect_error());
	}

$i = 6;

if (isset($_POST["submit"]))
	{
	while ($i <= 10)
		{
		if (!empty($_POST['qid' . $i]))
			{
			$qid = $_POST['qid' . $i];
			$ans = $_POST['ans' . $i];
			$sql = "select * from questions where qid=" . $qid . "";
			if ($res = mysqli_query($conn, $sql))
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
			$sql2 = "insert into student_answer(userid,qid,answer,actual_ans,marks,type,level) values('123','$qid','$ans','$dans','$marks','mocktest','level2')";
			$result = mysqli_query($conn, $sql2);
			if ($result)
				{
			      echo "yes";
				}
			  else
				{
				//echo "no";
				}
				
				

			
			}
			$i = $i + 1;
		}
		
	}
	header('Location: eligible.php');
	
?>