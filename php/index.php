<?php
include('php/connection.php');
session_start();
global $conn;
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/s.css">
    
    <style>
        pre{
            margin-top:15%;
            margin-left:10%;
            font-size: 25pt;
            font-family: sitka banner;
            font-weight: bold;
            color: #e7e7e7;
        }
        p a{
            color:white;
           margin-left:30%;
            font-size: 30pt;
            color: #26f152;
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
    
<body class="container background" >
  <div class="layer">
      <img src="logo.png">
      <div class="navbar">
          <?php
        if(!isset($_SESSION['USERTYPE']))
         echo ' <ul><li><div class="navitem"><a href="index.php">Home</div></li>
              <li><div class="navitem"><a href="#">Shop</a></div>
    <ul>
    <li><div class="navitem"><a href="php/viewproductsbuyer.php?visited=16">Equipments</a></div></li>
    <li><div class="navitem"><a href="php/viewproductsbuyer.php?visited=18">Pesticides</a></div></li>
            <li><div class="navitem"><a href="php/viewproductsbuyer.php?visited=19">Fertilisers</a></div></li>
    <li><div class="navitem"><a href="php/viewproductsbuyer.php?visited=20">Manures</a></div></li>
    <li><div class="navitem"><a href="php/viewproductsbuyer.php?visited=17">Seeds</a></div></li>
        </ul></li>
        <li><div class="navitem"><a href="php/weather.php">Weather</a></div></li>
       <li><div class="navitem"><a href="php/aboutus.php">About Us</div></li>
       <li><div class="navitem"><a href="login.php">Login</a></div></li>';
           else
               
          echo '<ul style="margin-left:-15%"><li><div class="navitem"><a href="index.php">Home</div></li>
              <li><div class="navitem"><a href="#">Shop</a></div>
    <ul>
    <li><div class="navitem"><a href="php/viewproductsbuyer.php?visited=16">Equipments</a></div></li>
    <li><div class="navitem"><a href="php/viewproductsbuyer.php?visited=18">Pesticides</a></div></li>
            <li><div class="navitem"><a href="php/viewproductsbuyer.php?visited=19">Fertilisers</a></div></li>
    <li><div class="navitem"><a href="php/viewproductsbuyer.php?visited=20">Manures</a></div></li>
    <li><div class="navitem"><a href="php/viewproductsbuyer.php?visited=17">Seeds</a></div></li>
        </ul></li>
        <li><div class="navitem"><a href="php/weather.php">Weather</a></div></li>
        <li><div class="navitem"><a href="php/enquiry.php">Enquiry</a></div></li>
        <li><div class="navitem"><a href="php/viewrentproducts.php">Rent</a></div></li>
       <li><div class="navitem"><a href="php/aboutus.php">About Us</div></li>
       <li><a href="userpage.php"><div class="user-photo"><img src="images/farmer/user.png"></div></a></li>';
    ?>
      </ul></div>
      <pre><b>It Is Only The Farmer  
	Who Faithfully Plants Seeds In The Spring, 	
		Who Reaps a Harvest In The Autumn....</b></pre>
      <p><a href="php/product.php">please see our range of products</a></p>
    </div> 
    </body>
</html>