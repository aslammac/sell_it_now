value<?php
include('connection.php');
?>
<html>
    <head>
<title>add your product</title>
        <link rel="stylesheet" type="text/css" href="../css/st.css">
</head>
    <body>
<img class="background" src="../images/frr.jpg"></img>
<div class="row">
<div class="columns">
<pre>
       <b>The history of the land
	     is etched in the faces
	        of the farmers who till it...</b>
</pre>
</div>
<div class="columnr">
<div style="height:560px" class="columnt">
        <form name="sell" action="buyerproductdatabase.php" method="POST">
            <div class="columnq">
<h1 style="margin-left:20px">add your product</h1>
</div>
<table class="p2">
<tr>
     <td>Product Name:</td><td><input  id="p" type="text" style="width:176px" name="productname" placeholder="product name"></td>      
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
     <tr>
                    <td>Category:</td>
                     <td><select name="productcategory"  id="p" style="width:176px">
                        <option>select category</option>
                          <?php
global $conn;
	$sql = "SELECT * FROM `category` WHERE `c_type`='seller'";

	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result)>0) 
	{
            while($row=mysqli_fetch_row($result))
            {
                    echo  '<option value="'.$row[0].'">'.$row[2].'</option>';
                    
            }
	 
} ?>
                       
                     </select></td>       
    </tr>   
      <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                 <tr>
                    <td>Product Price:</td><td><input type="text" value="Rs " placeholder="product price" id="p" style="width:176px"></td>        
                </tr>
     <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                 <tr>
                    <td>Discounted Price:</td><td><input type="text" value="Rs " placeholder="dicounted price" id="p" style="width:176px"></td>        
                </tr>
     <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                 <tr>
                    <td>Off Percentage:</td><td><input type="text" name="off" placeholder="off percentage" id="p" style="width:176px"></td>        
                </tr>
      <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr> 
     <tr>
        <td>Manufacturer Name:</td><td><input id="p" style="width:176px" type="text" name="manufacturername" placeholder="manufacturer name"></td>        
     </tr>  <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
    <tr>
                    <td>Manufacturer Address:</td><td><textarea cols="20" rows="5" style="resize:none" name="manufactureraddress" id="p" placeholder="address" style="width:176px"></textarea></td>        
    </tr>
    <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr><td>Payment Type:</td>
<td><select   id="p" name="paymenttype" style="width:176px">
<option>-PAYMENT TYPE-</option>
    <option>CASH ON DELIVERY</option>
  <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
    <tr>
                    <td>Description:</td><td><textarea cols="20" rows="5" style="resize:none" name="description" id="p" style="width:176px"></textarea></td>        
    </tr>
     <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
    <tr>
        <td>Image:</td><td><input type="file" name="image" placeholder="image" id="p" style="width:176px"></td>        
    </tr>
</table>
              <br> <input style="margin-left:200px" type="submit" value="continue">
        </form>
    </div>
    </body>
</html>