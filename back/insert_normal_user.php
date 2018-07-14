
<?php

include 'connections.php';	


    $i1=$_POST['user_name'];
    $i2=$_POST['email'];
    
    $i8=$_POST['password'];		
    $quest = $_POST['question'];
    $ans = $_POST['answer'];
    $i9 = md5($i8); 
    
    
    $sql="INSERT INTO `normal_user`( `user_name`, `email`, `password`,`security_quest`,`security_ans`) VALUES ('$i1','$i2','$i9','$quest','$ans')";
  
    
    if ($conn->query($sql)) 
		{
    echo "New record created successfully";
		
	// unset($_POST['go']);
	 header("location:../login_forms/");
	
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















