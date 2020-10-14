<?php
include('connection.php');  
global $conn;
 $ppname= $_POST['productname'];
 $ppcategory= $_POST['productcategory'];
$ppprice= $_POST['productprice'];
$ppdprice= $_POST['discountedprice'];
$ppoff= $_POST['off'];
 $ppmname= $_POST['manufacturername'];
 $ppmaddress= $_POST['manufactureraddress'];
 $pppaytype= $_POST['paymenttype'];
 $ppdescription= $_POST['description'];
 $ppimage= $_POST['image'];


$sql = "INSERT INTO `productpurchase`(`pp_name`, `pp_category`, `pp_price`, `pp_discountedprice`, `pp_off`, `pp_manufacturername`, `pp_manufactureraddress`, `pp_deliverytype`, `pp_description`, `pp_image`) VALUES  ('".$ppname."','".$ppcategory."','".$ppprice."','".$ppdprice."','".$ppoff."','".$ppmname."','".$ppmaddress."', '".$pppaytype."','".$ppdescription."','".$ppimage."')";
			
        if(mysqli_query($conn,$sql))
        {
     header('Location:../index.PHP');
     }     
else
    echo "Record not Added Succesfully!!";
    ?>