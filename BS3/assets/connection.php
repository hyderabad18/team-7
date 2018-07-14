<?php 
	
	
	$servername = "localhost";
	$uname = "root";
	$pwd = "";
	$dbname = "team7";
	$conn=new mysqli($servername ,$uname,$pwd,$dbname);
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
    } 
    else{
        // echo "conneced successfully";
    }
?>