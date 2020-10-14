<?php
include('connection.php');  
global $conn;
 $username= $_POST['username'];
 $password= $_POST['password'];
 $rpassword= $_POST['pwd'];
if($password != $rpassword)
{
    echo "passwords donot match";
}else{
$sql = "UPDATE `usersdata_login` SET `ul_password`='$password' WHERE `ul_username`='$username'";
			
        if(mysqli_query($conn,$sql))
        {
 header('Location:../userpage.PHP');
     }     
else
    echo "Record not Added Succesfully!!";
}
?>