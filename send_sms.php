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

$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=xxx&Password=xxxxx&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=xxxxx"),true);
if ($json["status"]==="success") {
    echo $json["msg"];
    //your code when send success
}else{
    echo $json["msg"];
    //your code when not send
}

}
	
}
?>

