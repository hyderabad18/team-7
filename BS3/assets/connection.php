<?php 
	
	
	$servername = "localhost";
	$uname = "root";
	$pwd = "Vo0xFlDeauPqbeY5";
	$dbname = "team7";
	$conn=new mysqli($servername ,$uname,$pwd,$dbname);
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
    } 
    else{
        // echo "conneced successfully";
    }
?>