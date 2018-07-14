<?php 
	$servername = "localhost";
	$uname = "root";
	$pwd = "";
	$dbname = "cfg_prac";
	$conn=new mysqli($servername ,$uname,$pwd,$dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

?>



