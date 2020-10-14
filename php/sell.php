.column{
padding-top:20px;
float:left;
background-color:white;
width:24.55%;
height:40%;
border-color:#90868633;
border-style:solid;
border-bottom:none;
border-right:none;
}
.column1{
background-color:blue;
width:100%;
height:10%;
color:white;
}  
.column2{
padding-top:20px;
float:left;
background-color:white;
width:24.55%;
height:40%;
border-color:#90868633;
border-style:solid;
border-bottom:none;
}
.column3{
padding-top:20px;
float:left;
background-color:white;
width:24.55%;
height:40%;
border-color:#90868633;
border-style:solid;
border-right:none;
}
.column4{
padding-top:20px;
float:left;
background-color:white;
width:24.55%;
height:40%;
border-color:#90868633;
border-style:solid;
}
.t1{
padding-top:20px;
padding-left:30px;
color:black;
}
  
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
     <tr>
                    <td>Category:</td>
                     <td><select name="productcategory"  id="p" style="width:176px">
                        <option>select category</option>
                          <?php
global $conn;
	$sql = "SELECT * FROM `category` WHERE `c_type`='farmer'";

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
                    <td>Quantity:</td><td><input type="text" name="productquantity" placeholder="product quantity" id="p" style="width:176px"></td>        
                </tr>
      <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                 <tr>
                    <td>Product Price:</td><td><input type="text" name="productprice" value="Rs " id="p" style="width:176px"></td>        
                </tr>
    <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr><td>State:</td>
<td><select id="p" name="state" style="width:176px">
    <option>-select state-</option>
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
    <tr><td>District:</td>
                    <td><select id="p" name="district" style="width:176px">
                    <option>-select district-</option>
                    <option>ALAPPUZHA</option>
                    <option>ERNAKULAM</option>
                    <option>IDUKKI</option>
                    <option>KANNUR</option>
                    <option>KASARGOD</option>
                    <option>KOLLAM</option>
                    <option>KOTTAYAM</option>
                    <option>KOZHIKODE</option>
                    <option>MALAPPURAM</option>
                    <option>PALAKKAD</option>
                    <option>THIRUVANANTHAPURAM</option>
                    <option>THRISSUR</option>
                    <option>WAYANAD</option>
                    </select></td></tr>
    <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr> 
     <tr>
        <td>Location:</td><td><input id="p" style="width:176px" type="text" name="location" placeholder="location"></td>        
     </tr>  
      <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr> 
     <tr>
        <td>Name:</td><td><input id="p" style="width:176px" type="text" name="name" placeholder="enter your name"></td>        
     </tr> 
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>  
<tr><td> E-mail:</td><td><input id="p" type="email" style="width:176px" name="email" placeholder="E-mail"></td></tr>
 <tr></tr><tr></tr><tr></tr> <tr></tr><tr></tr>
 <tr><td> phone:</td><td><input id="p" type="text" style="width:176px" name="mobile" value="+91" placeholder="mobile"></td></tr>
 <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
    <tr>
                    <td>Description:</td><td><textarea cols="20" rows="5" style="resize:none" name="description" id="p" style="width:176px"></textarea></td>        
    </tr> <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
    <tr>
        <td>Image:</td><td><input type="file" name="image" placeholder="image" id="p" style="width:176px"></td>       
    </tr>
</table>
              <br> <input style="margin-left:200px" type="submit" value="continue">
        </form>
    </div>
    </body>
</html>