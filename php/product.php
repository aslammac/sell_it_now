<?php 
include('connection.php');
	global $conn;
session_start();
?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="../css/s.css">
        <style>
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
                height:50px;
            }
            .row2{
                margin-top: 210px;
            }
            .product{
                margin-top: 30px;
                float: left;
               padding-left: 70px; 
                padding-top: 10px;
              //box-shadow: 5px 5px grey;
            }
            .container{
                position:relative;
                text-align: center;
                //border-style:solid;
                 box-shadow: 5px 5px 5px grey;
                }
            .center{
               margin-top: 100px;
                margin-left: 5px;
                padding-top: 4px;
                width:98%;
                background-color: #5f58587a;
                position: absolute;
                top: 50%
                text-align: center;
                transform: (-50%, -50%);
                color:white;
                font-weight: bold;
                font-size: 15pt;
                font-family: sans-serif;
                   border-color: chartreuse;
                border-width: thick;
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
         echo ' <ul><li><div class="navitem"><a href="../index.php">Home</div></li>
              <li><div class="navitem"><a href="#">Shop</a></div>
    <ul>
    <li><div class="navitem"><a href="viewproductsbuyer.php?visited=16">Equipments</a></div></li>
    <li><div class="navitem"><a href="viewproductsbuyer.php?visited=18">Pesticides</a></div></li>
            <li><div class="navitem"><a href="viewproductsbuyer.php?visited=19">Fertilisers</a></div></li>
    <li><div class="navitem"><a href="viewproductsbuyer.php?visited=20">Manures</a></div></li>
    <li><div class="navitem"><a href="viewproductsbuyer.php?visited=17">Seeds</a></div></li>
        </ul></li>
        <li><div class="navitem"><a href="weather.php">Weather</a></div></li>
       <li><div class="navitem"><a href=/aboutus.php">About Us</div></li>
       <li><div class="navitem"><a href="login.php">Login</a></div></li>';
           else
               
          echo '<ul style="margin-left:-15%"><li><div class="navitem"><a href="../index.php">Home</div></li>
              <li><div class="navitem"><a href="#">Shop</a></div>
    <ul>
    <li><div class="navitem"><a href="viewproductsbuyer.php?visited=16">Equipments</a></div></li>
    <li><div class="navitem"><a href="viewproductsbuyer.php?visited=18">Pesticides</a></div></li>
            <li><div class="navitem"><a href="viewproductsbuyer.php?visited=19">Fertilisers</a></div></li>
    <li><div class="navitem"><a href="viewproductsbuyer.php?visited=20">Manures</a></div></li>
    <li><div class="navitem"><a href="viewproductsbuyer.php?visited=17">Seeds</a></div></li>
        </ul></li>
        <li><div class="navitem"><a href="weather.php">Weather</a></div></li>
        <li><div class="navitem"><a href="enquiry.php">Enquiry</a></div></li>
        <li><div class="navitem"><a href="rentform.php">Rent</a></div></li>
       <li><div class="navitem"><a href="aboutus.php">About Us</div></li>
       <li><a href="../userpage.php"><div class="user-photo"><img src="../images/user.jpg"></div></a></li>';
    ?>
      </ul></div>
    <div class="row2">
        <?php

	$sql = "SELECT * FROM `category` WHERE `c_type`='farmer' LIMIT 8";

	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result)>0) 
	{
            while($row=mysqli_fetch_row($result))
            {$id=$row[0];
             $name=$row[2];
                    echo '<div class="product">
                    <div class="container">
                      <a href="viewproducts.php?visited='.$id.'"><img src="../images/'.$row[3].'" height="170px" width="250px"></a>
                      <div class="center">
                      '.$name.'
                      </div>
                   </div>
                     </div>';
            }
	 
} ?>
        </div>
    </body>
</html>