<?php
?>
<html>
<head>
<title>login</title>
<link rel="stylesheet" type="text/css" href="css/st.css">
</head>
<body>
<img class="background" src="frr.jpg"></img>
<div class="row">
<div class="columns">
<pre>
       <b>The history of the land
	     is etched in the faces
	        of the farmers who till it...</b>
</pre>
</div>
<div class="columnr">
<div style="height:550px" class="columnt">
<form name="registration" action="php/userdata_farmerdatabase.php" method="POST">
<div class="columnq">
<h1 style="margin-left:20px">Sign up now</h1>
</div>
<table class="p2">
<tr>
<td>First Name:</td><td><input  id="p" type="text" style="width:176px" name="firstname" placeholder="first name"></td></tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr><td>Last Name:</td><td><input   id="p" type="text" style="width:176px" name="lastname" placeholder="last name"></td></tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr><td>Gender      :</td><td><input   id="p" type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="other">Other</td></tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr><td>Address:</td><td><textarea rows="2" cols="7" name="address" placeholder="address" resize:"none"></textarea></td></tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr><td>State:</td>
<td><select   id="p" name="state" style="width:176px">
<option>ANDHRA PRADESH</option>
<option>ARUNACHAL PRADESH</option>
<option>ASSAM</option>
<option>BIHAR</option>
<option>CHHATTISGARH</option>
<option>GOA</option>
<option>GUJARAT</option>
<option>HARYANA</option>
<option>HIMACHAL PRADESH</option>
<option>JAMMU & KASHMIR</option>
<option>JHARKHAND</option>
<option>KARNATAKA</option>
<option>KERALA</option>
<option>MADHYA PRADESH</option>
<option>MAHARASHTRA</option>
<option>MANIPUR</option>
<option>MEGHALAYA</option>
<option>MIZORAM</option>
<option>NAGALAND</option>
<option>ODISHA</option>
<option>PUNJAB</option>
<option>RAJASTHAN</option>
<option>SIKKIM</option>
<option>TAMIL NADU</option>
<option>TELANGANA</option>
<option>TRIPURA</option>
<option>UTTARAKHAND</option>
<option>UTTAR PRADESH</option>
<option>WEST BENGAL</option>
</select></td></tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr><td>User-Type:</td>
<td><select   id="p" name="usertype" style="width:176px">
<option>FARMER</option>
<option>BUYER</option>
<option>SELLER</option>
 </select></td></tr>   
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>   
<tr><td> E-mail:</td><td><input id="p" type="email" style="width:176px" name="email" placeholder="E-mail"></td></tr>
 <tr></tr><tr></tr><tr></tr> <tr></tr><tr></tr>
 <tr><td> phone:</td><td><input id="p" type="text" style="width:176px" name="phone" value="+91" placeholder="mobile"></td></tr>
  <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
    <tr>
    <td>Profile Picture:</td><td><input type="file" name="image" placeholder="image" id="p" style="width:176px"></td>       
    </tr>
 <tr><td> username:</td><td><input id="p" type="text" style="width:176px" name="username" placeholder="username"></td></tr>
  <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
 <tr><td> password:</td><td><input id="p" type="password" style="width:176px" name="password" placeholder="password"></td></tr>
   <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
 <tr><td></td><td><input id="p" type="password" style="width:176px" name="pwd" placeholder="confirm password"></td></tr>
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