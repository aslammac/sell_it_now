<?php
session_start();
include('connection.php');  
global $conn;
 $fdbk= $_POST['chat'];
 $UID= $_SESSION['USERID'];
$sql = "INSERT INTO `enquiry`(`e_question`, `e_uid`, `e_date`) VALUES ('".$fdbk."',".$UID.",'".date('y/m/d')."')";	
        if(mysqli_query($conn,$sql))
 header('Location:enquiry.php');
else
    echo "Record not Added Succesfully!!";
    ?>