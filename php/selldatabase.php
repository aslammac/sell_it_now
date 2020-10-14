<?php
include('connection.php');  
global $conn;
 $pname= $_POST['productname'];
 $pcategory= $_POST['productcategory'];
 $pquantity= $_POST['productquantity'];
$pprice= $_POST['productprice'];
 $pstate= $_POST['state'];
 $pdistrict= $_POST['district'];
$plocation= $_POST['location'];
$name= $_POST['name'];
$pemail= $_POST['email'];
$pphone= $_POST['mobile'];
 $pimage= $_POST['image'];
 $pdescription= $_POST['description'];
 $UID= $_SESSION['USERID'];
$sql = "INSERT INTO `sellproduct`(`p_name`, `p_category`, `p_quantity`, `p_price`, `p_state`, `p_district`, `p_location`, `name`, `p_email`, `p_phone`, `p_image`, `p_description`, `r_uid`) VALUES  ('".$pname."','".$pcategory."','".$pquantity."','".$pprice."','".$pstate."','".$pdistrict."','".$plocation."', '".$name."','".$pemail."','".$pphone."','".$pimage."','".$pdescription."',".$UID.")";
			
        if(mysqli_query($conn,$sql))
        {
      header('Location:product.php');
     }     
else
    echo "Record not Added Succesfully!!";
    