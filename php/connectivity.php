<?php 
session_start();
include('connection.php');
	global $conn;

	$sql = "SELECT * FROM `usersdata_login` where `ul_username` ='".$_POST['username']."' AND `ul_password`='".$_POST['password']."'";

	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result)>0) 
	{
 		$row=mysqli_fetch_row($result);
        $_SESSION['USERTYPE']=$row[1];
        $_SESSION['USERID']=$row[4];
        echo 'userid='. $_SESSION['USERID'];
        if($_SESSION['USERTYPE']=='FARMER')
        {
        header('Location:../userpage.PHP');
        }
         if($_SESSION['USERTYPE']=='SELLER')
        {
        header('Location:../userpageseller.PHP');
        }
         if($_SESSION['USERTYPE']=='BUYER')
        {
        header('Location:../userpagebuyer.PHP');
        }
        
	 
} 
	else 
	{
   
		echo "<script> alert('Log-In Failed'); 
		document.location='../login.php';
		</script>";

	}
		mysqli_close($conn);

 

?>

