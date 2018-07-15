<?php
$con = mysqli_connect("localhost", "root", "Vo0xFlDeauPqbeY5", "team7");
$count = 0;

if (!$con)
	{
	die("ERROR: Could not connect. " . mysqli_connect_error());
	}

$i = 1;
session_start();
$username=$_SESSION["username"];
if (isset($_POST["submit"]))
	{
	while ($i <= 10)
		{
		if (!empty($_POST['qid' . $i]))
			{
			$qid = $_POST['qid' . $i];
			$ans = $_POST['ans' . $i];
			$sector=$_POST['sector'];
			$paper=$_POST['paperid'];
			$sql = "select * from sample_paper where qid=". $qid ."";
			if ($res = mysqli_query($con, $sql))
				{
				if (mysqli_num_rows($res) > 0)
					{
					while ($row = mysqli_fetch_array($res))
						{
						$dans = $row['answer'];echo $dans;
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
				 
			$sql2 = "insert into sampletest_answer(userid,qid,answer,actual_ans,marks,sector,paperno) values('123','$qid','$ans','$dans','$marks','$sector','$paper')";
			$result = mysqli_query($con, $sql2);
			if ($result)
				{
				echo "yes";
				}
			  else
				{
				echo "no";
				}
				
				

			
			}
			$i = $i + 1;
		}
		
	}
	header('Location: ./results.php');
?>