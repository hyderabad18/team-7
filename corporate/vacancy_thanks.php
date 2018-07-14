<?php
$job_role=$_GET["job_role"];
$job_desc=$_GET["job_desc"];
$job_vacancy=$_GET["job_vacancy"];
$job_date=$_GET["job_date"];

$servername = "localhost";
	$uname = "root";
	$pwd = "";
	$dbname = "code_for_good";
	$conn=new mysqli($servername ,$uname,$pwd,$dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "INSERT INTO vacancies VALUES ('Hello', 'Hi', '32323232','ar@gm.co','$job_role','$job_desc','$job_vacancy','$job_date')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

echo "Your request has been submitted!";
?>
<html>
<body>
<a href="">Back to home</a>
</body>
</html>