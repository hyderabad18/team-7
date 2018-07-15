<?php
if(isset($_POST["submit"]))
{

	$index=$_POST["index"];
	
		$name=$_POST['name'];
	$number=$_POST['number'];
	$feedback=$_POST['feedback'];
	echo $name[$index];
	echo $number[$index];
	echo $feedback[$index];
	if(isset($number)&&isset($feedback))
{
$mobile=$number;
$message=$feedback;
echo $message;
echo $mobile;

$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=9100812912&Password=arshia123&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=arshiBnGy1fRZladOuA7Ye26FWw"),true);
if ($json["status"]==="success") {
    echo $json["msg"];
	
	// header('Location: ./dashboard.php');
}else{
    echo $json["msg"];
    //your code when not send
}

}
	
}
?>

