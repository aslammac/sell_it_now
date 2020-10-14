<?php
include('connection.php');  
global $conn;
session_start();
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/s.css"/>
    <style>
        input,button{
                background-color: chartreuse;
                color: black;
                font-family: sans-serif;
                font-weight: bold;
                
                cursor: pointer;
               
            }
         .row1 input,button{
                margin-top:50px;
                background-color:#d2d2d2;
                color: black;
                font-family: sans-serif;
                font-weight: bold;
                 float:right;
                margin-right: 60px;
                cursor: pointer;
             font-size: 10pt;
            }
            .row1{
                height:250px;
            }
        .rows{
            margin-top: -60px;
        }
            .product{
                   
                border-spacing: 5px;
                float: left;
                color: black;
                 width: 20%;
                height: 20%;
                    
                }
        .container,img{
            padding-top: 10px;
        }
            .container{
                padding-left: 15px;
                margin-top: 30px;
               // text-align: center;
                float: left;
                margin-left: 10px;
                width: 23%;
                height: 29%;
                 background-color: white;
               
            }
            .center{
               // padding-top: 10px;
              margin-left: 180px;
                margin-top:30px;
                text-align: left;
             width: 200px;
                color:black;
                font-weight: bold;
                font-size: 10pt;
                font-family: sans-serif;
        }
          .user-photo img{
           margin-top: -5%;
    margin-left: 50%;
    width: 50px;
    height: 50px;
    //background: white;
    border-radius: 50%;
   // display: flex;
    //flex-flow: row wrap;
}
        </style> 
    </head>
<body class="background">
  <div class="layer">
      <img src="../logo.png">
      <div class="navbar">
          <?php
        if(!isset($_SESSION['USERTYPE']))
         echo ' <ul><li><div class="navitem"><a href="../index.php">Home</a></div></li>
              <li><div class="navitem"><a href="#">Shop</a></div>
    <ul>
    <li><div class="navitem"><a href="viewproductsbuyer.php?visited=16">Equipments</a></div></li>
    <li><div class="navitem"><a href="viewproductsbuyer.php?visited=18">Pesticides</a></div></li>
            <li><div class="navitem"><a href="viewproductsbuyer.php?visited=19">Fertilisers</a></div></li>
    <li><div class="navitem"><a href="viewproductsbuyer.php?visited=20">Manures</a></div></li>
    <li><div class="navitem"><a href="viewproductsbuyer.php?visited=17">Seeds</a></div></li>
        </ul></li>
        <li><div class="navitem"><a href="weather.php">Weather</a></div></li>
       <li><div class="navitem"><a href="aboutus.php">About Us</a></div></li>
       <li><div class="navitem"><a href="../login.php">Login</a></div></li>';
           else
               
          echo '<ul style="margin-left:-15%"><li><div class="navitem"><a href="../index.php">Home</a></div></li>
              <li><div class="navitem"><a href="#">Shop</a></div>
    <ul>
    <li><div class="navitem"><a href="viewproductsbuyer.php?visited=16">Equipments</a></div></li>
    <li><div class="navitem"><a href="viewproductsbuyer.php?visited=18">Pesticides</a></div></li>
            <li><div class="navitem"><a href="viewproductsbuyer.php?visited=19">Fertilisers</a></div></li>
    <li><div class="navitem"><a href="viewproductsbuyer.php?visited=20">Manures</a></div></li>
    <li><div class="navitem"><a href="viewproductsbuyer.php?visited=17">Seeds</a></div></li>
        </ul></li>
        <li><div class="navitem"><a href="weather.php">Weather</a></div></li>
        <li><div class="navitem"><a href="product.php">Sell</a></div></li>
        <li><div class="navitem"><a href="viewrentproducts.php">Rent</a></div></li>
       <li><div class="navitem"><a href="aboutus.php">About Us</a></div></li>
       <li><a href="../userpage.php"><div class="user-photo"><img src="../images/user.jpg"></div></a></li>';
    ?>
          
      </ul></div>
    <div class="row1">
    <a href="rentform.php"><input type="button" value="ADD YOUR PRODUCT"></a></div>
    <div class="rows">
    <?php
	$sql = "SELECT * FROM `rent` WHERE r_uid=".$_SESSION['USERID'];
   $result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result)>0) 
	{
      
            while($row=mysqli_fetch_row($result))
            { 
                $name=$row[1];
                $brand=$row[2];
                $available=$row[5];
                 $price=$row[4];
                    echo '<div class="container"><div class="product">
                    <img src="../images/'.$row[11].'" height="150px" width="150px">
                    <div class="center">
                      <p style="font-size:20pt;font-weight:bold;">'.$name.'</p>
                       Brand: '.$brand.'<br>
                     Available Days:<br> '.$available.'<br>
                      Rent/Day: '.$price.'<br><br>
                <input type="button" value="Edit Details">
                    </div></div></div>';
            }
	 
    }?></div>
    </body>
</html>