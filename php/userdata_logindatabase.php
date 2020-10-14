<?php
include('connection.php');  
global $conn;
 $usertype= $_POST['usertype'];
 $username= $_POST['username'];
 $password= $_POST['pssword'];
  $sql = "INSERT INTO `usersdata_login`(`ul_usertype`, `ul_username`, `ul_password`) VALUES ('".$usertype."','".$username."','".$password."')";
			
        if(mysqli_query($conn,$sql))
        {
    header('Location:../index.PHP');
     }     
else
    echo "Record not Added Succesfullyyyy!!";

?>