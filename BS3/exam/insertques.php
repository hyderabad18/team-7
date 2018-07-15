<?php
//$servername = "localhost";
//$username = "username";
//$password = "";
//$dbname = "cfg";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
//  $conn=mysqli_connect('localhost','root','','cfg');
include("../assets/connection.php");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql ="INSERT INTO  questions(qid,question,optiona,optionb,optionc,optiond,ans,type,level) VALUES ('15', 'An institute organised a fete and 1/5 of the girls and 1/8 of the boys participated in the same. What fraction of the total number of students took part in the fete ?', '2/13','13/40','data insufficient','none','a','verbal','level3')";

$result = mysqli_query($conn, $sql);
			if ($result)
			{
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>