<?php
?>
<html>
<head>
<title>login</title>
<link rel="stylesheet" type="text/css" href="css/s.css"/>
    <style>
        pre{
            margin-top:15%;
            margin-left:5%;
            font-size: 25pt;
            font-family: sitka banner;
            font-weight: bold;
            color: #f1f1f1;
        }
        img{float:left;
            margin-left: 3px;
            margin-top: 2%;
        }
      .columnt{
            margin-left: 75%;
            margin-top: -15%;
        }
        ul li a{
            color:lawngreen;
        }
</style>
</head>
<body class="background">
  <div class="layer">
      <img src="logo.png">
<div class="row">
<pre><b>It is only the farmer  
	who faithfully plants seeds in the Spring, 	
		who reaps a harvest in the Autumn....</b></pre>
<div class="columnr">
<div class="columnt">
<form name="login" method="POST" action="php/connectivity.php">
<div class="columnq">
<h1 style="font-size:35px;color:white;padding-left:15px">Sign In</h1>
</div>
<input type="text" id="p" name="username" placeholder="username"><br><br>
<input type="password" id="p" name="password" placeholder="password"><br><br>
<input style="background-color:#afbdd9" id="p" type="submit" name="submit" value="login">
<input style="background-color:#afbdd9" id="p" type="reset" name="submit" value="reset"><br>
</form>
<br><ul><li><a style="margin-top:-20%; font-size:10pt; width:200px;" href="#">create new account??</a>
    <ul>
    <li><a style="font-size:12px;padding-left:40px;" href="signupfarmerform.php">FARMER</a></li>
    <li><a style="font-size:12px;padding-left:40px;" href="signupsellerform.php">SELLER</a></li>
    <li><a style="font-size:12px;padding-left:40px;" href="signupbuyerform.php">BUYER</a></li>
    </ul></li></ul>
</div>
</div>
</div>
</div>
</body>
</html>