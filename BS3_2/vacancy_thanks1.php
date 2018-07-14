<?php
session_start();
 $company_name="";
	 $contact_name= "";
	 $contact_no="";
	 $email_id="";
	 
	 if ($_SERVER["REQUEST_METHOD"] == "GET") {
		 
		  if (empty($_POST["job_role"])) {
    $nameErr = "role is required";
  } else {
    $job_role=test_input($_GET["job_role"]);
  }
   if (empty($_POST["job_desc"])) {
    $nameErr = "description is required";
  } else {
	$job_desc=test_input($_GET["job_desc"]);
  }
   if (empty($_POST["job_vacancy"])) {
    $nameErr = "vacancy is required";
  } else {
	$job_vacancy=test_input($_GET["job_vacancy"]);
  }
   if (empty($_POST["name"])) {
    $nameErr = "date is required";
  } else {
	$job_date=test_input($_GET["job_date"]);
  }
  
  
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

$user=$_SESSION["username"];
$pass=$_SESSION["password"];
$servername = "localhost";
	$uname = "root";
	$pwd = "";
	$dbname = "team7";
	$conn=new mysqli($servername ,$uname,$pwd,$dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "select * from corporate_login where user_name='$user' and password='$pass'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
	
	 while($row = $result->fetch_assoc()) {
        $company_name=$row["company_name"];
		$contact_name= $row["contact_name"];
		 $contact_no=$row["contact_no"];
		 	 $email_id=$row["email_id"];
    }
	}
	/*echo $user;
	echo $pass;
	echo $company_name;
	echo $contact_name;
	echo  $contact_no;
	echo $email_id;
	*/
	$sql = "INSERT INTO vacancies VALUES ('$company_name', '$contact_name', '$contact_no','$email_id','$job_role','$job_desc','$job_vacancy','$job_date')";

if (mysqli_query($conn, $sql)) {
   // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

echo "Your request has been submitted!";
?>
<!--
<html>
<body>
<a href="">Back to home</a>
</body>
</html>-->