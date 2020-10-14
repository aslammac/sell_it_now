
<!DOCTYPE html>
<html>
<head>
<title>Real Estate : Sell it Now</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
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
    <script src="js/tabs.js"></script>
	
<script type="text/javascript">
$(document).ready(function () {    
var elem=$('#container ul');      
	$('#viewcontrols a').on('click',function(e) {
		if ($(this).hasClass('gridview')) {
			elem.fadeOut(1000, function () {
				$('#container ul').removeClass('list').addClass('grid');
				$('#viewcontrols').removeClass('view-controls-list').addClass('view-controls-grid');
				$('#viewcontrols .gridview').addClass('active');
				$('#viewcontrols .listview').removeClass('active');
				elem.fadeIn(1000);
			});						
		}
		else if($(this).hasClass('listview')) {
			elem.fadeOut(1000, function () {
				$('#container ul').removeClass('grid').addClass('list');
				$('#viewcontrols').removeClass('view-controls-grid').addClass('view-controls-list');
				$('#viewcontrols .gridview').removeClass('active');
				$('#viewcontrols .listview').addClass('active');
				elem.fadeIn(1000);
			});									
		}
	});
});
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
	<div class="">
	  <div class="container">    
			
	  </div>
	</div>
	<!-- Real estates -->
	<div class="total-ads main-grid-border">
		<div class="container">
			<div class="select-box">
				<div class="select-city-for-local-ads ads-list">
					<label>Select your city to see local ads</label>
						<select>
												<optgroup label="Popular Cities">
													<option selected style="display:none;color:#eee;">Entire India</option>
														<option>Calicut</option>
														<option>Thrissur</option>
														<option>Malappuram</option>
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
												</optgroup>
			            </select>
				</div>
				<div class="browse-category ads-list">
					<label>Browse Categories</label>
					<select class="selectpicker show-tick" data-live-search="true">
						<option data-tokens="Real Estate">Real Estate</option>
					  <option data-tokens="Electronics & Appliances">Electronics & Appliances</option>
						<option data-tokens="Vehicles">Vehicles</option>
					  
					</select>
				</div>
			
				<div class="search-product ads-list">
					<label>Search for a specific product</label>
					<div class="search">
						<div id="custom-search-input">
						<div class="input-group">
							<input type="text" class="form-control input-lg" placeholder="Flat" />
							<span class="input-group-btn">
								<button class="btn btn-info btn-lg" type="button">
									<i class="glyphicon glyphicon-search"></i>
								</button>
							</span>
						</div>
					</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<ol class="breadcrumb" style="margin-bottom: 5px;">
			  <li><a href="index.html">Home</a></li>
			  <li><a href="categories.html">Categories</a></li>
			  <li class="active">Real Estate</li>
			</ol>
			<div class="ads-grid">
				<div class="side-bar col-md-3">
					<div class="search-hotel">
					<h3 class="sear-head">Name contains</h3>
					<form>
						<input type="text" value="Product name..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Product name...';}" required="">
						<input type="submit" value=" ">
					</form>
				</div>
				
				<div class="range">
					<h3 class="sear-head">Price range</h3>
							<ul class="dropdown-menu6">
								<li>
									                
									<div id="slider-range"></div>							
										<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
									</li>			
							</ul>
							<!---->
							<script type="text/javascript" src="js/jquery-ui.js"></script>
							<script type='text/javascript'>//<![CDATA[ 
							$(window).load(function(){
							 $( "#slider-range" ).slider({
										range: true,
										min: 0,
										max: 9000,
											values: [ 2000, 600000 ],
										slide: function( event, ui ) {  $( "#amount" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
										}
							 });
							$( "#amount" ).val( "₹" + $( "#slider-range" ).slider( "values", 0 ) + " - ₹" + $( "#slider-range" ).slider( "values", 1 ) );
									});//]]>  
								

							</script>
							
				</div>
				<div class="brand-select">
					<h3 class="sear-head">Category</h3>
					  <select class="selectpicker" data-live-search="">
					  <option data-tokens="All">All</option>
					  <option data-tokens="Rent">Rent</option>
					  <option data-tokens="Sale">Sale</option>
					</select>
				</div>
				<div class="featured-ads">
					<h2 class="sear-head fer">Featured Ads</h2>
					<div class="featured-ad">
						<a href="single.html">
							<div class="featured-ad-left">
								<img src="images/f1.jpg" title="ad image" alt="" />
							</div>
							<div class="featured-ad-right">
								<h4>Nexus 4</h4>
								<p>4500</p>
							</div>
							<div class="clearfix"></div>
						</a>
					</div>
					<div class="featured-ad">
						<a href="single.html">
							<div class="featured-ad-left">
								<img src="images/f2.jpg" title="ad image" alt="" />
							</div>
							<div class="featured-ad-right">
								<h4>Xtrial</h4>
								<p>10L</p>
							</div>
							<div class="clearfix"></div>
						</a>
					</div>
					<div class="featured-ad">
						<a href="single.html">
							<div class="featured-ad-left">
								<img src="images/f3.jpg" title="ad image" alt="" />
							</div>
							<div class="featured-ad-right">
								<h4>Moto G5</h4>
								<p>8500</p>
							</div>
							<div class="clearfix"></div>
						</a>
					</div>
							<div class="clearfix"></div>
						</a>
					</div>
					<div class="clearfix"></div>
				</div>
				</div>
				<div class="ads-display col-md-9">
					<div class="wrapper">					
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					  <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
						<li role="presentation" class="active">
						  <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
							<span class="text">All Ads</span>
						  </a>
						</li>
						<li role="presentation" class="next">
						  <a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
							<span class="text">Ads with Photos</span>
						  </a>
						</li>
					  </ul>
					  <div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
						   <div>
												<div id="container">
								<div class="view-controls-list" id="viewcontrols">
									<label>view :</label>
									<a class="gridview"><i class="glyphicon glyphicon-th"></i></a>
									<a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
								</div>
								<div class="sort">
								   <div class="sort-by">
										<label>Sort By : </label>
										<select>
														<option value="">Most recent</option>
														<option value="">Price: Rs Low to High</option>
														<option value="">Price: Rs High to Low</option>
										</select>
									   </div>
									 </div>
								<div class="clearfix"></div>
							<ul class="list">
								<a href="single.html">
									<li>
									<img src="images/r1.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">Flat</h5>
									<span class="adprice">₹50L</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:55</span>
									<span class="cityname">Cochin</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/r2.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">House</h5>
									<span class="adprice">₹2CR</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:45</span>
									<span class="cityname">calicut</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
									<a href="single.html">
									<li>
									<img src="images/r1.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">Flat</h5>
									<span class="adprice">₹50L</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:55</span>
									<span class="cityname">Cochin</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/r2.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">House</h5>
									<span class="adprice">₹2CR</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:45</span>
									<span class="cityname">calicut</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
									<a href="single.html">
									<li>
									<img src="images/r1.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">Flat</h5>
									<span class="adprice">₹50L</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:55</span>
									<span class="cityname">Cochin</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/r2.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">House</h5>
									<span class="adprice">₹2CR</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:45</span>
									<span class="cityname">calicut</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/r7.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">On the other hand, we denounce with righteous dislike men</h5>
									<span class="adprice">$290</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:20</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
									<a href="single.html">
									<li>
									<img src="images/r1.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">Flat</h5>
									<span class="adprice">₹50L</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:55</span>
									<span class="cityname">Cochin</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/r2.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">House</h5>
									<span class="adprice">₹2CR</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:45</span>
									<span class="cityname">calicut</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
									<a href="single.html">
									<li>
									<img src="images/r1.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">Flat</h5>
									<span class="adprice">₹50L</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:55</span>
									<span class="cityname">Cochin</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/r2.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">House</h5>
									<span class="adprice">₹2CR</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:45</span>
									<span class="cityname">calicut</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/r13.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">looked up one of the more obscure Latin words</h5>
									<span class="adprice">$599</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:02</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								<div class="clearfix"></div>
								</a>
							</ul>
						</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
						 <div>
												<div id="container">
								<div class="view-controls-list" id="viewcontrols">
									<label>view :</label>
									<a class="gridview"><i class="glyphicon glyphicon-th"></i></a>
									<a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
								</div>
								<div class="sort">
								   <div class="sort-by">
										<label>Sort By : </label>
										<select>
														<option value="">Most recent</option>
														<option value="">Price: Rs Low to High</option>
														<option value="">Price: Rs High to Low</option>
										</select>
									   </div>
									 </div>
								<div class="clearfix"></div>
							<ul class="list">
								<a href="single.html">
									<li>
									<img src="images/r1.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">Flat</h5>
									<span class="adprice">₹50L</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:55</span>
									<span class="cityname">Cochin</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/r2.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">House</h5>
									<span class="adprice">₹2CR</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:45</span>
									<span class="cityname">calicut</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
									<a href="single.html">
									<li>
									<img src="images/r1.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">Flat</h5>
									<span class="adprice">₹50L</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:55</span>
									<span class="cityname">Cochin</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/r2.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">House</h5>
									<span class="adprice">₹2CR</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:45</span>
									<span class="cityname">calicut</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
									<a href="single.html">
									<li>
									<img src="images/r1.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">Flat</h5>
									<span class="adprice">₹50L</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:55</span>
									<span class="cityname">Cochin</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/r2.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">House</h5>
									<span class="adprice">₹2CR</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:45</span>
									<span class="cityname">calicut</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/r7.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">On the other hand, we denounce with righteous dislike men</h5>
									<span class="adprice">$290</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:20</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
									<a href="single.html">
									<li>
									<img src="images/r1.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">Flat</h5>
									<span class="adprice">₹50L</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:55</span>
									<span class="cityname">Cochin</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/r2.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">House</h5>
									<span class="adprice">₹2CR</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:45</span>
									<span class="cityname">calicut</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
									<a href="single.html">
									<li>
									<img src="images/r1.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">Flat</h5>
									<span class="adprice">₹50L</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:55</span>
									<span class="cityname">Cochin</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/r2.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">House</h5>
									<span class="adprice">₹2CR</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:45</span>
									<span class="cityname">calicut</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/r13.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">looked up one of the more obscure Latin words</h5>
									<span class="adprice">$599</span>
									<p class="catpath">Real Estate » PG & Roommates</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:02</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								<div class="clearfix"></div>
								</a>
							</ul>
						</div>
							</div>
						</div>
						<ul class="pagination pagination-sm">
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">6</a></li>
							<li><a href="#">7</a></li>
							<li><a href="#">8</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					  </div>
					</div>
				</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>	
	</div>
	<!-- // Real estates -->
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