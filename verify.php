<?php
$con = mysqli_connect("localhost", "root", "", "cfg");
$count = 0;

if (!$con)
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
			$sql2 = "insert into student_answer(qid,answer,actual_ans,marks,type) values('$qid','$ans','$dans','$marks','mocktest')";
			$result = mysqli_query($con, $sql2);
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
	$sid="123"
	$sql3= "select * from student_answer where sid=" . $sid . "";
	if ($res3 = mysqli_query($con, $sql3))
		{
				if (mysqli_num_rows($res3) > 0)
					{
					while ($row = mysqli_fetch_array($res3))
						{
						$marks = $row['marks'];
						if($marks==1)
						{
							$count=$count+1;
						}
					}
				}
?>