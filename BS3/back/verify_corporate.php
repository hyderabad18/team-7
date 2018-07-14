
<!DOCTYPE html>
<html>
<body>
<?php
include '../assets/connection.php';                                  

$name = $_POST['Username'];
$pwd = $_POST['Password'];
// $decrypt = md5($pwd);
    $sql="SELECT * FROM `corporate_login` WHERE  `user_name` like '$name' and `password` LIKE '$pwd' ";
    

    $result=$conn->query($sql);
    if ($result->num_rows > 0) {
        ?>
        <table>
        <?php
        while($row = $result->fetch_assoc())
        { 
        ?>
        <tr>
                <td>name</td><td><input type=text name=t1 id=t1 value=<?php echo $row['user_name'];?> ></td>
        </tr>
        <tr>
                <td>mail</td><td><input type=text name=t2 id=t2  value=<?php echo $row["password"];?>></td>
        </tr>
        <tr>
                <td>password</td><td><input type=text name=t8 id=t8 value=<?php echo $row["email"];?>></td>
        </tr>

        <?php }//while 
        ?>
        
        </table>
        <script>
            alert("success");
        </script>
        <?php
session_start();
$_SESSION["username"]=$name;
$_SESSION["password"]=$pwd;
        header('Location: ../dashboard.php');
    }//if
    else
    echo "entered in 0 rows";
?>

</body>
</html>