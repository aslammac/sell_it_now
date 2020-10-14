<?php
session_start();
include('connection.php');  
global $conn;
 $pname= $_POST['productname'];
 $bname= $_POST['brandname'];
 $ptype= $_POST['producttype'];
$prate= $_POST['rate'];
$pdays= $_POST['days'];
 $address= $_POST['address'];
 $phone= $_POST['phone'];
 $email= $_POST['email'];
 $plocation= $_POST['location'];
$pimage= $_POST['image'];
 $pdescription= $_POST['description'];
    $UID= $_SESSION['USERID'];

if($pname!=NULL)
{
  $sql = "INSERT INTO `rent`(`r_pname`, `r_pbrand`, `r_ptype`, `r_rate/day`, `r_daysforrent`, `r_address`, `r_contactno`, `r_email`, `r_location`, `r_description`, `r_image`, `r_uid`) VALUES  ('". $pname."','".$bname."','".$ptype."','".$prate."','".$pdays."','".$address."','".$phone."','".$email."','".$plocation."','".$pdescription."','".$pimage."',".$UID.")";
    
        if(mysqli_query($conn,$sql))
        {
     header('Location:../index.PHP');
     }     
else
    echo "Record not Added Succesfully!!";

}else
{
    echo"empty field";
}
?>