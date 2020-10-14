
<!DOCTYPE html>
<html>
<head>
<title>Faq : sell it Now</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
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
		<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
    <script src="js/easyResponsiveTabs.js"></script>
</head>
<body>
	<nav class="navbar navbar-default" >
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" >
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
				
       
	<li>
	
      <form class="navbar-form navbar-left">
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
	<!-- Faq -->
	<div class="faq main-grid-border">
		<div class="container">
			<h2 class="head">Faqs</h2>
			<dl class="faq-list">
				<dt class="faq-list_h">
				<h4 class="marker">Q?</h4>
				<h5 class="marker_head">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium?</h5>
				</dt>
				<dd>
				<h4 class="marker1">A.</h4>
				<p class="m_13">Vestibulum ante ipsum primis in faucibus orci luctus et trices posuere cubilia Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit magnandrerit sit amet tincidunt ac viverra sed nulla. Donec porta diam eu massa. Quisque diam lorem interdum vapibus ac scelerisque vitae pede. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum auctorulvinar. Proin ullamcorper urna et tibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet consectetuer adipiscing elit. Pellentese sed dolor. Aliquam congue fermentum nisl. Mauris accumsan nullael diam. Sed in lacus ut enim adipiscing aliquet.</p>
				</dd>
				<dt class="faq-list_h">
				<h4 class="marker">Q?</h4>
				<h5 class="marker_head">But I must explain to you how all this mistaken idea of denouncing?</h5>
				</dt>
				<dd>
				<h4 class="marker">A.</h4>
				<p class="m_13">Aenean auctor wisi et urna. Aliquarat volutpat. Duis ac turpis. Integer rutrum ante eu lacusVestibulum libero nisl porta vel scelerisque eget malesuada at neque. Vivamus eget nibh. Etiamcursus leo vel metus. Nulla facilisi. Aenean nec eros.</p>
				</dd>
				<dt class="faq-list_h">
				<h4 class="marker">Q?</h4>
				<h5 class="marker_head">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis ?</h5>
				</dt>
				<dd>
				<h4 class="marker">A.</h4>
				<p class="m_13">Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio gravida atcursus nec luctus a lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor dapibus eget elementum vel cursus eleifend elit.</p>
				</dd>
				<dt class="faq-list_h">
				<h4 class="marker">Q?</h4>
				<h5 class="marker_head">On the other hand, we denounce with righteous indignation and dislike ?</h5>
				</dt>
				<dd>
				<h4 class="marker">A.</h4>
				<p class="m_13">Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum auctorulvinar. Proin ullamcorper urna et tibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet consectetuer adipiscing elit. Pellentese sed dolor. Aliquam congue fermentum nisl. Mauris accumsan nullael diam. Sed in lacus ut enim adipiscing aliquet. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum auctorulvinar. Proin ullamcorper urna et tibulum iaculis lacinia est.</p>
				</dd>
				<dt class="faq-list_h">
				<h4 class="marker">Q?</h4>
				<h5 class="marker_head">Lorem ipsum dolor sit amet, consectetur adipiscing elit,?</h5>
				</dt>
				<dd>
				<h4 class="marker">A.</h4>
				<p class="m_13">Vestibulum ante ipsum primis in faucibus orci luctus et trices posuere cubilia Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit magnandrerit sit amet tincidunt ac viverra sed nulla. Donec porta diam eu massa. Quisque diam lorem interdum vapibus ac scelerisque vitae pede. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum auctorulvinar. Proin ullamcorper urna et tibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet consectetuer adipiscing elit. Pellentese sed dolor. Aliquam congue fermentum nisl. Mauris accumsan nullael diam. Sed in lacus ut enim adipiscing aliquet.</p>
				</dd>
				<dt class="faq-list_h">
				<h4 class="marker">Q?</h4>
				<h5 class="marker_head">It is a long established fact that a reader will be distracted?</h5>
				</dt>
				<dd>
				<h4 class="marker">A.</h4>
				<p class="m_13">Aenean auctor wisi et urna. Aliquarat volutpat. Duis ac turpis. Integer rutrum ante eu lacusVestibulum libero nisl porta vel scelerisque eget malesuada at neque. Vivamus eget nibh. Etiamcursus leo vel metus. Nulla facilisi. Aenean nec eros.</p>
				</dd>
				<dt class="faq-list_h">
				<h4 class="marker">Q?</h4>
				<h5 class="marker_head">If you are going to use a passage of Lorem Ipsum?</h5>
				</dt>
				<dd>
				<h4 class="marker">A.</h4>
				<p class="m_13 last_2">Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio gravida atcursus nec luctus a lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor dapibus eget elementum vel cursus eleifend elit.</p>
				</dd>
          </dl>

		</div>	
	</div>
	<!-- // Faq -->
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