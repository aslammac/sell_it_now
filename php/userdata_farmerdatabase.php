<?php
include('connection.php');  
global $conn;
 $fname= $_POST['firstname'];
 $lname= $_POST['lastname'];
 $gender= $_POST['gender'];
 $address= $_POST['address'];
 $state= $_POST['state'];
 $email= $_POST['email'];
$image= $_POST['image'];
 $phone= $_POST['phone'];
$usertype= $_POST['usertype'];
 $username= $_POST['username'];
 $password= $_POST['password'];
$ppassword= $_POST['pwd'];
 /*$image=$_FILES["fileToUpload"]["name"];
         if(!$image)
    $image=$_POST['farmerimage']; 

insert();


function insert()
{
    
    global $target_dir;
    $target_dir = "images/farmer/";*/
if($password != $ppassword)
{
    echo "passwords donot match";
}
else{
  $sql = "INSERT INTO `userdata_farmer`(`uf_fname`, `uf_lname`, `uf_gender`, `uf_address`, `uf_state`, `uf_email`, `uf_phone`, `uf_image`) VALUES ('".$fname."','".$lname."','".$gender."','".$address."','".$state."','".$email."','".$phone."','user.png')";
			
        if(mysqli_query($conn,$sql))
        {
            /*if (!empty($_FILES["fileToUpload"]["name"])) 
              upload(); */ 
            
            
     header('Location:../index.PHP');
     }     
else
    echo "Record not Added Succesfully!!";

$id=0;
$sql3 = "SELECT max(`uf_id`) FROM `userdata_farmer`";
    $result = mysqli_query($conn, $sql3);
	$row=mysqli_fetch_row($result);
        $id=$row[0];
echo "value==".$id;   
    
    
$sql2 = "INSERT INTO `usersdata_login`(`ul_usertype`, `ul_username`, `ul_password`, `ul_regid`) VALUES  ('".$usertype."','".$username."','".$password."',".$id.")";
			
			
        if(mysqli_query($conn,$sql2))
        {
     header('Location:../index.PHP');
     }     
else
    echo "Record not Added Succesfully!!";
}

?>






function upload()
{
global  $target_dir;  
    global $location;
   
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      //  echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
      //  echo "File is not an image.";
          echo "<script> alert('File is not an image.'); document.location='$location';</script>";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
   // echo "Sorry, file already exists.";
      echo "<script> alert('Sorry, file already exists.'); document.location='$location';</script>";
    $uploadOk = 1;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 1500000) {
    //echo "Sorry, your file is too large.";
      echo "<script> alert('Sorry, your file is too large.'); document.location='$location';</script>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
     echo "<script> alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.'); document.location='$location';</script>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    //echo "Sorry, your file was not uploaded.";
      echo "<script> alert('Sorry, your file was not uploaded.'); document.location='$location';</script>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
         echo "<script> alert('The file uploaded.'); document.location='$location';</script>";
    } else {
       // echo "Sorry, there was an error uploading your file.";
         echo "<script> alert('Sorry, there was an error uploading your file.'); document.location='$location';</script>";
    }
}
}


?>