<?php
include('connection.php');  
global $conn;
 $cname= $_POST['companyname'];
 $caddress= $_POST['companyaddress'];
 $state= $_POST['state'];
$licenseno= $_POST['licenseno'];
$product= $_POST['producttype'];
 $email= $_POST['email'];
 $phone= $_POST['mobile'];
$image=$_POST['image'];
$usertype= $_POST['usertype'];
 $username= $_POST['username'];
 $password= $_POST['password'];
$ppassword= $_POST['pwd']; 


if($password != $ppassword)
{
    echo "passwords donot match";
}
else{
  $sql = "INSERT INTO `userdata_seller`(`us_cname`, `us_caddress`, `us_state`, `us_licenseno`, `us_ptype`, `us_email`, `us_phone`, `us_image`) VALUES ('".$cname."','".$caddress."','".$state."','".$licenseno."','".$product."','".$email."','".$phone."','".$image."')";
			
        if(mysqli_query($conn,$sql))
        {
 header('Location:../index.PHP');
     }     
else
    echo "Record not Added Succesfullyyyy!!";

$id=0;
$sql3 = "SELECT max(`us_id`) FROM `userdata_seller`";
    $result = mysqli_query($conn, $sql3);
    $row=mysqli_fetch_row($result);
        $id=$row[0];
echo "value==".$id;   
    
    
$sql2 = "INSERT INTO `usersdata_login`(`ul_usertype`, `ul_username`, `ul_password`,`ul_regid`) VALUES ('".$usertype."','".$username."','".$password."',".$id.")";
			
        if(mysqli_query($conn,$sql2))
        {
  header('Location:../index.PHP');
     }     
else
    echo "Record not Added Succesfully!!";
}
?>