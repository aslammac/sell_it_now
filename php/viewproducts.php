<?php
include('connection.php');  
global $conn;
$visited= $_GET['visited'];
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
            .row1{
                height:250px;
            }
        .rows{
            margin-top: 250px;
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
                height: 28%;
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
       <li><div class="navitem"><a href="aboutus.php">About Us</div></li>
       <li><div class="navitem"><a href="../login.php">Login</a></div></li>';
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
        <li><div class="navitem"><a href="product.php">Sell</a></div></li>
        <li><div class="navitem"><a href="rentform.php">Rent</a></div></li>
       <li><div class="navitem"><a href="aboutus.php">About Us</div></li>
       <li><a href="../userpage.php"><div class="user-photo"><img src="../images/user.jpg"></div></a></li>';
    ?>
      </ul></div>
    <div class="rows">
    <?php
	$sql = "SELECT * FROM `sellproduct` WHERE `p_category`=".$visited;
   $result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result)>0) 
	{
      
            while($row=mysqli_fetch_row($result))
            { 
                $name=$row[1];
                $price=$row[4];
                $quantity=$row[3];
                    echo '<div class="container"><div class="product">
                    <img src="../images/'.$row[11].'" height="150px" width="150px">
                    <div class="center">
                      <p style="font-size:20pt;font-weight:bold;">'.$name.'</p>
                       Price: '.$price.'<br>
                     Available Quantity:<br> '.$quantity.'<br><br>
               <a href="viewdetails.php"><input type="button" value="view details"></a>
                    </div></div></div>';
            }
	 
    }?></div>
    </body>
</html>