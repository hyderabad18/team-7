<?php
require("./assets/connection.php"); 
if(isset($_POST["submit"]))
{
	$name=$_POST["name"];
	$number=$_POST["number"];
	$feedback=$_POST["feedback"];
	
	$sql="insert into feedback values ('$name','$number','$feedback')";
	if (mysqli_query($conn, $sql)) {
  echo '<script>alert("Thanks for feedback")</script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
	
}
?>