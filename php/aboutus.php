<?php
include('connection.php');
session_start();
global $conn;
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/s.css">
    <style>
        pre{
            margin-top:6%;
            margin-left:10%;
            font-size: 17pt;
            font-family: sitka banner;
            //font-weight: bold;
            color:white;
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
            <li><div class="navitem"><a href="php/viewproductsbuyer.php?visited=19">Fertilisers</a></div></li>
    <li><div class="navitem"><a href="viewproductsbuyer.php?visited=20">Manures</a></div></li>
    <li><div class="navitem"><a href="viewproductsbuyer.php?visited=17">Seeds</a></div></li>
        </ul></li>
        <li><div class="navitem"><a href="weather.php">Weather</a></div></li>
        <li><div class="navitem"><a href="enquiry.php">Enquiry</a></div></li>
        <li><div class="navitem"><a href="viewrentproducts.php">Rent</a></div></li>
       <li><div class="navitem"><a href="aboutus.php">About Us</div></li>
       <li><a href="../userpage.php"><div class="user-photo"><img src="../images/user.jpg"></div></a></li>';
    ?>
      </ul></div>
      
        <pre><h1>ABOUT US</h1>              We, Ritu Mathew ,Sreeni Narayanan, Mohammed Nabeel ,
              the students of Mahatma Gandhi University College of Engineering Thodupuzha 
              have developed this web application to meet all the a-z needs of farmers.
              
              My father is a farmer.So i knew the difficulties faced by him.
              In this application a farmer can sell their products, can buy products directly from registered sellers 
              which includes equipments, seeds, pesticides, manures,fertilizers and many more..
             
             We have tried our level best to meet all the requirements of farmers.
              If any further details are needed feel free to ask us in the feedback session......</pre>
          </div>
      </body>
    </html>