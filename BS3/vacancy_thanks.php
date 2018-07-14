<?php
session_start();
 $company_name="";
	 $contact_name= "";
	 $contact_no="";
	 $email_id="";
$job_role=$_GET["job_role"];
$job_desc=$_GET["job_desc"];
$job_vacancy=$_GET["job_vacancy"];
$job_date=$_GET["job_date"];
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