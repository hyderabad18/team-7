
<?php

include '../assets/connection.php';       

$i1 = $_POST['company_name'];
$i2 = $_POST['org_desc'];
$i4 = $_POST['contact_no'];
$i3 = $_POST['contact_person_name'];
$i6 = $_POST['user_name'];
$i5 = $_POST['email_id'];
$i7 = $_POST['password'];
    
    $sql="INSERT INTO corporate_login ( `company_name`, `org_desc`, `contact_name`,`contact_no`,`user_name`,`email_id`,`password`) VALUES ('$i1','$i2','$i3','$i4','$i5','$i6','$i7')";
  
    
    if ($conn->query($sql)) 
		{
    echo "New record created successfully";
    header('Location: ../dashboard.php');
	// unset($_POST['go']);
	 // header("location:../login_forms/");
	
		}
	else 
		{
    echo "did't insert";
		$msg = "Failed to upload image";
        }
    
?>

<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        name : <input type="text" name="name"/><br/>
       mail:  <input type="text" name="mail"/><br/>
        image:<input type="file" name="image"/><br/>
        password: <input type="pwd" name="pwd"/><br/>
        date : <input type="date" name="date"/><br/>
        <input type="submit" value="go" name="go"/>
    </form>
</body>
</html> -->















