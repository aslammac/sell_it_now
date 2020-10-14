<?php
include('connection.php');  
global $conn;
 $cname= $_POST['companyname'];
 $caddress= $_POST['companyaddress'];
 $state= $_POST['state'];
$licenseno= $_POST['licenseno'];
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
$sql = "INSERT INTO `userdata_buyer`(`ub_cname`, `ub_caddress`, `ub_state`, `ub_licenseno`, `ub_email`, `ub_phone`, `ub_image`) VALUES ('".$cname."','".$caddress."','".$state."','".$licenseno."','".$email."','".$phone."','".$image."')";
			
        if(mysqli_query($conn,$sql))
        {
 header('Location:../index.PHP');
     }     
else
    echo "Record not Added Succesfully!!";
    
    
    
  $id=0;
$sql3 = "SELECT max(`ub_id`)FROM `userdata_buyer`";
    $result = mysqli_query($conn, $sql3);
	
    
 		$row=mysqli_fetch_row($result);
        $id=$row[0];
echo "value==".$id;   
    
    
$sql2 = "INSERT INTO `usersdata_login`(`ul_usertype`, `ul_username`, `ul_password`, `ul_regid`) VALUES ('".$usertype."','".$username."','".$password."',".$id.")";
			
        if(mysqli_query($conn,$sql2))
        {
     header('Location:../index.PHP');
     }     
else
    echo "Record not Added Succesfully!!";
}
?>dth:176px" name="days" placeholder="days for rent"></td></tr>
  <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
    <tr><td>Address:</td><td><textarea rows="2" cols="7" name="address" placeholder="address"></textarea></td></tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
 <tr><td> Contact No:</td><td><input id="p" type="text" style="width:176px" name="phone" value="+91" placeholder="contact no."></td></tr>
  <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
    <tr><td> E-mail:</td><td><input id="p" type="email" style="width:176px" name="email" placeholder="E-mail"></td></tr>
 <tr></tr><tr></tr><tr></tr> <tr></tr><tr></tr>
 <tr><td>Location</td><td><input id="p" type="text" style="width:176px" name="location" placeholder="location"></td></tr>
   <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
     <tr>
                    <td>Description:</td><td><textarea cols="20" rows="5" style="resize:none" name="description" id="p" style="width:176px"></textarea></td>        
    </tr> <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
    <tr>
        <td>Image:</td><td><input type="file" name="image" placeholder="image" id="p" style="width:176px"></td>       
    </tr>
    <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
</table>
    <a href="index.php"><input type="submit" style="background-color:darkgrey;margin-left:180px" value="submit"></a>

</form>
</div>
</div>
</div>
</body>
</div>
</html>