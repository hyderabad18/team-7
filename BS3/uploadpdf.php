
<?php
include './assets/connection.php';	


if(isset($_POST['go'])){
  
    $image = $_FILES['image']['name'];	
    
    $sql="insert into material (`pdf_file`) values ('$image')";
  
    $target = "materials/".basename($_FILES['image']['name']);	
    if ($conn->query($sql) === TRUE and  move_uploaded_file($_FILES['image']['tmp_name'], $target)) 
		{
    echo "New record created successfully";
		$msg = "Image uploaded successfully";
	unset($_POST['go']);
	 header("location:./icons.php");
	
		}
	else 
		{
    echo "did't insert";
		$msg = "Failed to upload image";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        image:<input type="file" name="image"/><br/>
        <input type="submit" value="go" name="go"/>
    </form>
</body>
</html>