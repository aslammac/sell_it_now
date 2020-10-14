<?php
session_start();
include('connection.php');  
global $conn;
 $fdbk= $_POST['feedback'];
 $UID= $_SESSION['USERID'];

$sql = "INSERT INTO `feedback`(`f_postedby`, `f_date`, `f_feedback`) VALUES (".$UID.",'".date('y/m/d')."','".$fdbk."')";
			
        if(mysqli_query($conn,$sql))
        {
 header('Location:../index.PHP');
     }     
else
    echo "Record not Added Succesfully!!";
    
?>