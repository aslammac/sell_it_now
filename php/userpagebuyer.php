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
            margin-top:0%;
            margin-left:25%;
            font-size: 20pt;
            font-family: sitka banner;
            font-weight: bold;
            color: #e7e7e7;
        }
        p a{
            color:white;
           margin-left:30%;
            font-size: 20pt;
            color: #26f152;
        }
       ul{
    list-style: none;
    font-family: sans-serif;
           margin-left: 30%;
           
}
ul li{
   margin-top: 2%;
   // height: 40px;
    //background-color: black;
    opacity: 8;
    line-height: 30px;
    font-size: 20pt;
    float: left;
}
ul li a{
    width:200px;
    text-decoration: none;
    color: white;
    display: block;
     text-align: center;
    
    }
ul li a:hover{
   background-color: lawngreen;
    border-radius: 5px;
}
        .userdata{
            background-color: #00000094;
            background-size: cover;
            background-repeat: repeat-y;
            height:55%;
             position: relative;
             top: 80px;
             left: 0;
             right: 0;
             bottom: 0;
             z-index: -1;
        }
       .user-photo img{
           margin-top: -5%;
    margin-left: 10%;
    width: 200px;
    height: 200px;
    //background: white;
    border-radius: 50%;
   // display: flex;
    //flex-flow: row wrap;
}
        </style>
    </head>
    
<body class="background">
  <div class="layer">
      <a href="index.php"><img src="logo.png"></a>
    <pre><b>It Is Only The Farmer  
	Who Faithfully Plants Seeds In The Spring, 	
		Who Reaps a Harvest In The Autumn....</b></pre>
      <div class="userdata">
          <div class="user-photo"><img src="images/user.jpg"></div>
          <?php
        if(isset($_SESSION['USERTYPE']))
         echo ' <ul><li><a href="php/products.php">Products</a></li><br><br><br>
        <li><a href="php/aboutus.php">My Feedbacks</a></li><br><br><br>
        <li><a href="newpwd.php">Change Password</a></li><br><br><br>
       <li><a href="php/logout.php">Logout</a></li></ul>';
          ?></div></div>
    </body>
</html>