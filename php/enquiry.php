<?php
include('connection.php');
session_start();
global $conn;
?>
<html>
<head>
            <link rel="stylesheet" type="text/css" href="../css/index.css">
       <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
     <script type="text/javascript">
    
    $(document).ready(function(){
    var makescrollbottom = function(){
        $("div.chatlogs").scrollTop($("div.chatlogs").prop("scrollHeight"));
    }
    makescrollbottom();
});
   </script> 
    <style> 
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
        
    .chatbox{
    margin-left: 70%;
    width: 350px;
    min-width: 100px;
    height: 500px;
    background: #928c8c7a;
    margin-top: 130px;
    box-shadow: 0 0 #ccc;
}
        .friend .chat-message{
    background: #989898;
            overflow: hidden;
}
.self .chat-message{
    background: #444444;
overflow: hidden;
    order: -1;
}
        .chat-form button {
    background: #b7b7b7;
    padding: 5px 15px;
    font-size: 15px;
    color: #fff;
    border: none;
    margin: 0 10px;
    border-radius: 5px;
    box-shadow: 0 3px 0 #d6d6d6;
    cursor: pointer;
    -webkit-transition: background .2s ease;
}
    </style>
    </head>
<body class="background">
  <div class="container-fluid layer">
      <img src="../logo.png">
      <div class="navbar">
          <?php
        if(!isset($_SESSION['USERTYPE']))
         echo ' <ul><li><div class="navitem"><a href=index.php">Home</div></li>
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
        <li><div class="navitem"><a href="enquiry.php">Enquiry</a></div></li>
        <li><div class="navitem"><a href="viewrentproducts.php">Rent</a></div></li>
       <li><div class="navitem"><a href="aboutus.php">About Us</div></li>
       <li><a href="../userpage.php"><div class="user-photo"><img src="../images/user.jpg"></div></a></li>';
          ?></ul></div>
           
    
    
    
    <div class="chatbox">
                <div class="chatlogs">
                    
                                    
                    
                  
    
    
    <?php
	$sql = "SELECT * FROM `enquiry` WHERE e_uid=".$_SESSION['USERID'];
   $result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result)>0) 
	{
      
            while($row=mysqli_fetch_row($result))
            { 
                $question=$row[1];
                $answer=$row[2];
                    echo '
                    <div class="chat friend">
                        <div class="user-photo"></div>
                            <p class="chat-message">'.$question.'</p>
                        
                        </div>';
                if($answer!="")
                {
                       echo'  <div class="chat self">
                             <div class="user-photo"></div>
                            <p class="chat-message">'.$answer.'</p>
                        
                        </div>';
                }
              }
            }?>  
                    
                    
                    
                      </div>
              <div class="chat-form">
                  
             <form method="post" action="send.php" class="row" >
                 <table>
                     <tr>
                     <td style="width:100%"><textarea name="chat"></textarea>
                     </td>
                  <td>
                      <button type="submit" name="submit" class="s1" onclick="makescrollbottom();">send</button>
                         </td> </tr>
                 </table></form> 
              </div>
              </div>   
                    
          </div>
   
</body>    
</html>