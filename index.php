<?php
$servername="localhost";
$username="root";
$password="";
$dbname="sellitnow";
$conn=mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
{
    //echo "connection established";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Home : Sell it Now</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->	
<!-- js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- js -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link href="css/jquery.uls.css" rel="stylesheet"/>
<link href="css/jquery.uls.grid.css" rel="stylesheet"/>
<link href="css/jquery.uls.lcd.css" rel="stylesheet"/>
<!-- Source -->
<script src="js/jquery.uls.data.js"></script>
<script src="js/jquery.uls.data.utils.js"></script>
<script src="js/jquery.uls.lcd.js"></script>
<script src="js/jquery.uls.languagefilter.js"></script>
<script src="js/jquery.uls.regionfilter.js"></script>
<script src="js/jquery.uls.core.js"></script>
<script>
			$( document ).ready( function() {
				$( '.uls-trigger' ).uls( {
					onSelect : function( language ) {
						var languageName = $.uls.data.getAutonym( language );
						$( '.uls-trigger' ).text( languageName );
					},
					quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
				} );
			} );
		</script>
</head>
<body>
	
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <div class="logo">
			  <h1><a href="index.html"><span>Sell</span><strong>IT</strong><span style="font-family: 'Ubuntu Condensed', sans-serif">Now</span></a></h1>
	  </div>
    </div>
	 
		
	<!-- Large modal -->
		
    <!-- Collect the nav links, forms, and other content for toggling -->

      <ul class="nav navbar-nav navbar-right">
        <li>	<div class="selectregion">
			
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
					aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										&times;</button>
									<h4 class="modal-title" id="myModalLabel">
										Please Choose Your Location</h4>
								</div>
								<div class="modal-body">
									 <form class="form-horizontal" role="form">
										<div class="form-group">
											<select id="basic2" class="show-tick form-control" multiple>
												<optgroup label="Popular Cities">
													<option selected style="display:none;color:#eee;">Select City</option>
													<option>Thodupuzha</option>
													<option>malappuram</option>
												
												</optgroup>
												<optgroup label="More Cities">
													<optgroup label="Kerala">
														<option>Kochi</option>
														<option>Calicut</option>
														<option>Thrissur</option>
														<option>Malappuram</option>
														<option>Kannoor</option>
													</optgroup>
													<optgroup label="Tamilnadu">
														<option>Chennai</option>
														<option>Madurai</option>
													</optgroup>
													
												</optgroup>
											</select>
										</div>
								  </form>    
								</div>
							</div>
						</div>
					</div>
		  <script>
				$('#myModal').modal('');
				</script>
			</div>
</li>
		<button type="button" class="btn btn-default navbar-btn" data-toggle="modal" data-target="#myModal">Location</button>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="login.html">Login</a></li>
            <li><a href="register.html">Register</a></li>
           </li>
        
           </li>
          </ul>
        </li>
	<li>
	
      <form class="navbar-form navbar-left">
		   <a class="btn btn-default" href="post-ad.html" role="button" style="background-color: cadetblue">Post Ad</a>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	<div class="header">
		<div class="container">
			
		</div>
</div>
</div>
	<div class="">
	  <div class="container">    
		
		  <br>
		  
		  <div class="work-section">
			<div class="container">
				<h2 class="head">How It Works</h2>
					<div class="work-section-head text-center">
						<p>Fast, easy and free to post an ad and you will find, what you are looking for.</p>
					</div>
					<div class="work-section-grids text-center">
						<div class="col-md-3 work-section-grid">
							<i class="fa fa-pencil-square-o"></i>
							<h4>Post an Ad</h4>
							<p></p>
							<span class="arrow1"><img src="images/arrow1.png" alt="" /></span>
						</div>
						<div class="col-md-3 work-section-grid">
							<i class="fa fa-eye"></i>
							<h4>Find an item</h4>
							<p></p>
							<span class="arrow2"><img src="images/arrow2.png" alt="" /></span>
						</div>
						<div class="col-md-3 work-section-grid">
							<i class="fa fa-phone"></i>
							<h4>contact the seller</h4>
							<p></p>
							<span class="arrow1"><img src="images/arrow1.png" alt="" /></span>
						</div>
						<div class="col-md-3 work-section-grid">
							<i class="fa fa-money"></i>
							<h4>make transactions</h4>
							<p></p>
						</div>
						<div class="clearfix"></div>
						<a class="work" href="#">Get start Now</a>
					</div>
				</div>
		</div>	

	  </div>
	</div>

		</div>
			<div class="mobile-app">
				<div class="container">
					<div class="col-md-5 app-left">
							<!-- content-starts-here -->
		<div class="content">
			
			<div class="clearfix"></div>
			<div class="categories">
				<div class="container">
					<h1 align="center" style="color: azure"><strong>Categories</strong></h1>
					<div class="col-md-1 focus-grid">
						<a href="categories.html">						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="categories.html">						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="categories.html#parentVerticalTab12">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-laptop"></i></div>
									<h4 class="clrchg"> Electronics & Appliances</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="categories.html#parentVerticalTab2">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-car"></i></div>
									<h4 class="clrchg">Vehicles</h4>
								</div>
							</div>
						</a>
					</div>	
						<div class="col-md-2 focus-grid">
						<a href="categories.html#parentVerticalTab3">
							<div class="focus-border">
							  <div class="focus-layout">
								<div class="focus-image"><i class="fa fa-home"></i></div>
									<h4 class="clrchg">Real Estate</h4>
							  </div>
							</div>
						</a>
					</div>
				  <div class="col-md-2 focus-grid">
						<a href="categories.html#parentVerticalTab5">						</a>
				  </div>
					<div class="col-md-2 focus-grid">
						<a href="categories.html#parentVerticalTab6">						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="categories.html#parentVerticalTab8">						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="categories.html#parentVerticalTab11">						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="categories.html#parentVerticalTab12">						</a>
					</div>
</div>
				<br><br><br>
			</div>
					</div>
<div class="clearfix"></div>
				</div>
			</div>
		</div>
		
			<div class="trending-ads">
				<h1 align="center">Trending ads</h1>
				<br><br>
				<div class="container">
				<!-- slider -->
				<div class="trend-ads">
<ul id="flexiselDemo3">
			<li>
									<div class="col-md-3 biseller-column">
										<a href="single.html">
											<img src="images/p1.jpg"/>
											<span class="price">&#8377; 12000</span>
										</a> 
										<div class="ad-info">
											<h5>Samsung S5</h5>
											<span>1 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.html">
											<img src="images/p2.jpg"/>
											<span class="price">&#8377; 6000</span>
										</a> 
										<div class="ad-info">
											<h5>Moto G2</h5>
											<span>3 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.html">
											<img src="images/p3.jpg"/>
											<span class="price">&#8377; 4500</span>
										</a> 
										<div class="ad-info">
											<h5>Lumia 520</h5>
											<span>8 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.html">
											<img src="images/p4.jpg"/>
											<span class="price">&#8377; 3500</span>
										</a> 
										<div class="ad-info">
											<h5>Blackberry Bold</h5>
											<span>19 hour ago</span>
										</div>
									</div>
		  </li>
								<li>
									<div class="col-md-3 biseller-column">
										<a href="single.html">
											<img src="images/p5.jpg"/>
											<span class="price">&#8377; 850000</span>
										</a> 
										<div class="ad-info">
											<h5>Volvo</h5>
											<span>1 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.html">
											<img src="images/p6.jpg"/>
											<span class="price">&#8377; 900000</span>
										</a> 
										<div class="ad-info">
											<h5>Nissan X-Trial</h5>
											<span>1 day ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.html">
											<img src="images/p7.jpg"/>
											<span class="price">&#8377; 700000</span>
										</a> 
										<div class="ad-info">
											<h5>Volvo V3</h5>
											<span>9 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.html">
											<img src="images/p8.jpg"/>
											<span class="price">&#8377; 70L</span>
										</a> 
										<div class="ad-info">
											<h5>BMW X1</h5>
											<span>3 hour ago</span>
										</div>
									</div>
								</li>
								
								</li>
				  </ul>
				  <script type="text/javascript">
						 $(window).load(function() {
							$("#flexiselDemo3").flexisel({
								visibleItems:1,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 5000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems:1
									}, 
									landscape: { 
										changePoint:640,
										visibleItems:1
									},
									tablet: { 
										changePoint:768,
										visibleItems:1
									}
								}
							});
							
						});
					   </script>
			      <script type="text/javascript" src="js/jquery.flexisel.js"></script>
				  </div>   
			</div>
			<!-- //slider -->				
	
		<!--footer section start-->		
<footer>
			<div class="footer-top">
				<div class="container">
					<div class="foo-grids">
						<div class="col-md-3 footer-grid">
							<h4 class="footer-head">Who We Are</h4>
							<p>We are the new developers to build the products the simplify the shopping and <br> easily identify the product from the particular lacation and the requirements</p>
						</div>
					  <div class="col-md-3 footer-grid">
						<h4 class="footer-head">Help</h4>
						  <ul>
														
							  <li><a href="faq.html">Faq</a></li>
							  <li><a href="feedback.html">Feedback</a></li>
							  <li><a href="contact.html">Contact</a></li>
						
						  </ul>
						</div>
					  <div class="col-md-3 footer-grid">
						<h4 class="footer-head">Information</h4>
						  <ul>
							  
						    <li><a href="terms.html">Terms of Use</a></li>
							  <li><a href="popular-search.html">Popular searches</a></li>	
							  <li><a href="privacy.html">Privacy Policy</a></li>	
						  </ul>
						</div>
						<div class="col-md-3 footer-grid">
							<h4 class="footer-head">Contact Us</h4>
							<span class="hq">Our Address</span>
							<address>
								<ul class="location">
									<li><span class="glyphicon glyphicon-map-marker"></span></li>
									<li>MGUCE MUTTOM</li>
									<div class="clearfix"></div>
								</ul>	
								<ul class="location">
									<li><span class="glyphicon glyphicon-earphone"></span></li>
									<li>+91 9744770288</li>
									<div class="clearfix"></div>
								</ul>	
								<ul class="location">
									<li><span class="glyphicon glyphicon-envelope"></span></li>
									<li><a href="mailto:info@example.com">mail@sellitnow.com</a></li>
									<div class="clearfix"></div>
								</ul>						
							</address>
						</div>
						<div class="clearfix"></div>
					</div>						
				</div>	
			</div>	
			<div class="footer-bottom text-center">
			<div class="container">
				<div class="footer-logo">
					<a href="index.html"><span>Sell</span><strong>IT</strong><span style="font-family: 'Ubuntu Condensed', sans-serif">Now</span></a>
				</div>
				<div class="footer-social-icons">
					<ul>
						<li><a class="facebook" href="#"><span>Facebook</span></a></li>
						<li><a class="twitter" href="#"><span>Twitter</span></a></li>
						<li><a class="flickr" href="#"><span>Flickr</span></a></li>
						<li><a class="googleplus" href="#"><span>Google+</span></a></li>
						<li><a class="dribbble" href="#"><span>Dribbble</span></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		</footer>
        <!--footer section end-->
</body>
</html>