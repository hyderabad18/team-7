<html>
<form action="filters.php" method="post">
Deaf<input type="radio" value="deaf" name="disability"><br>
Blind<input type="radio" value="blind" name="disability"><br>
<!--Both<input type="radio" value="blind" name="disability"><br>-->
Software<input type="radio" value="software" name="sector"><br>
Hospitality<input type="radio" value="hospitality" name="sector"><br>
<!--Both<input type="radio" value="" name="sector"><br>-->
Marks<input type="number" value="marks" name="marks"><br>
<input type="submit" value="SUBMIT" name="submit">
</form>
</html>
<?php
if(isset($_POST["submit"]))
{
	$servername = "localhost";
	$uname = "root";
	$pwd = "";
	$dbname = "code_for_good";
	$conn=new mysqli($servername ,$uname,$pwd,$dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	$marks=isset($_POST["marks"])?$_POST["marks"]:0; 
	$disability=isset($_POST["disability"])?$_POST["disability"]:'%';
	$sector=isset($_POST["sector"])?$_POST["sector"]:'%';
	$sql="select * from student_details where avg>='$marks' and disability like '$disability' and sector like '$sector'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["name"]." ". $row["disability"]. " " . $row["sector"]. " " . $row["avg"]. "<br>";
    }
} else {
    echo "0 results";
}
	
	}
?>