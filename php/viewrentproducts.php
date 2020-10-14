<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
                margin-left: 60%;
                cursor: pointer;
             font-size: 10pt;
            }
            .row1{
                height:250px;
            }
        .rows{
            margin-top: 210px;
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
        
        
        
        .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
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
        <li><div class="navitem"><a href="enquiry.php">Enquiry</a></div></li>
        <li><div class="navitem"><a href="viewrentproducts.php">Rent</a></div></li>
       <li><div class="navitem"><a href="aboutus.php">About Us</a></div></li>
       <li><a href="../userpage.php"><div class="user-photo"><img src="../images/user.jpg"></div></a></li>';
    ?>
          
      </ul></div>
    <div class="rows">
    <?php
        $i=1;
	$sql = "SELECT * FROM `rent`";
   $result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result)>0) 
	{
      
            while($row=mysqli_fetch_row($result))
            { 
                $name=$row[1];
                $brand=$row[2];
                  $price=$row[4];
                $available=$row[5];
               $img=$row[11];
                    echo '<div class="container"><div class="product">
                    <img src="../images/'.$img.'" height="150px" width="150px">
                    <div class="center">
                      <p style="font-size:20pt;font-weight:bold;">'.$name.'</p>
                       Brand: '.$brand.'<br>
                     Available Days:<br> '.$available.'<br>
                      Rent/Day: '.$price.'<br><br>
                <input type="button" id="myBtn'.$i.'" onclick="btnclik(this.id);" value="View Details" >
                    </div></div></div>';
                
              echo '  <!-- The Modal -->
<div id="myModal'.$i.'" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
     <img src="../images/'.$img.'" height="150px" width="150px">
    <p>Some text in the Modal..</p>
  </div>

</div>';
$i++;
            }
	 
    }?></div>
    
    
    
    <script>
// Get the modal
        
        function btnclik(val)
        {
            console.log(val);
            // alert(val);   
            var i=val.substr(val.length-1);
            
            console.log(i);
     
var modal = document.getElementById('myModal'+i);
  var btn = document.getElementById('myBtn'+i);          
     modal.style.display = "block";  
  
            //var modal = document.getElementById('myModal');

// Get the button that opens the modal
//var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
//btn.onclick = function() {
  //  modal.style.display = "block";
//}

// When the user clicks on <span> (x), close the modal
/*            
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
*/
//}

        }
        
        
        span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }

}

</script>

    </body>
</html>