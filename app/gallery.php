<!DOCTYPE html>
<html>
<head>
<title>Pariwisata Pemalang</title> 
<!-- For-Mobile-Apps-and-Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fortune Estates Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, SmartPhone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps-and-Meta-Tags -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">  
<link rel="stylesheet" href="css/lightbox.css">   
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<!-- //js --> 
<!-- web-fonts -->  
<link href='//fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts -->
<!-- pop-up-box -->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	    <script>
			$(document).ready(function() {
				$('.popup-top-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
				});																							
			}); 
		</script>
<!--//pop-up-box -->
<?php

$a="-6.8616539";
$b="109.3792951";
$c="abcde"; 

?>
<style>
      #map-canvas {
        width: 500px;
        height: 200px;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoSxsJM0u4JhI-68BpC7cankbxR_Cfgjc"></script>
    <script>
     
    var markers = [
      ['<?php echo $c ?>', <?php echo $a ?>, <?php echo $b ?>]
    ];
 
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }     
        var map = new google.maps.Map(mapCanvas, mapOptions)
 
    var infowindow = new google.maps.InfoWindow(), marker, i;
    var bounds = new google.maps.LatLngBounds(); // diluar looping
    for (i = 0; i < markers.length; i++) {  
    pos = new google.maps.LatLng(markers[i][1], markers[i][2]);
    bounds.extend(pos); // di dalam looping
    marker = new google.maps.Marker({
        position: pos,
        map: map
    });
    google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
            infowindow.setContent(markers[i][0]);
            infowindow.open(map, marker);
        }
    })(marker, i));
    map.fitBounds(bounds); // setelah looping
    }
 
      }
 
 
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>
<?php 
include 'layout-nav.php';
 ?> 
		<div class="content-wrap">
			<div class="header"> 
				<div class="menu-icon">   
					<button class="menu-button" id="open-button">O</button>
				</div>
				<div class="logo">
					<h2><a href="main.html">FE</a></h2>
				</div>
				<div class="login">
					<a href="#small-dialog" class="sign-in popup-top-anim"><span class="glyphicon glyphicon-user"></span></a> 
					<!-- modal -->
					<div id="small-dialog" class="mfp-hide">
						<div class="login-modal"> 	
							<div class="booking-info">
								<h3><a href="main.html">Fortune Estates</a></h3>
							</div>
							<div class="login-form">
								<form action="#" method="post">
									<div class="styled-input">
										<input type="text" name="Username" required=""/>
										<label>Username</label>
										<span></span>
									</div>
									<div class="styled-input">
										<input type="password" name="Password" required=""> 
										<label>Password</label>
										<span></span>
									</div> 
									<div class="wthree-text"> 
										<ul> 
											<li>
												<input type="checkbox" id="brand" value="">
												<label for="brand"><span></span> Remember me ?</label>  
											</li>
											<li> <a href="#">Forgot password?</a> </li>
										</ul>
										<div class="clear"> </div>
									</div> 
									<input type="submit" value="Sign In">		
								</form>
								<p>Don’t have an account ?<a href="#small-dialog1" class="sign-in popup-top-anim"> Sign Up</a></p>
							</div> 
						</div>
					</div>
					<!-- //modal --> 
					<!-- modal-two -->
					<div id="small-dialog1" class="mfp-hide">
						<div class="login-modal">  
							<div class="booking-info">
								<h3><a href="main.html">Fortune Estates</a></h3>
							</div>
							<div class="login-form signup-form">
								<form action="#" method="post">
									<div class="styled-input">
										<input type="text" name="Username" required=""/>
										<label>Username</label>
										<span></span>
									</div>
									<div class="styled-input">
										<input type="text" name="email" required=""/>
										<label>Email</label>
										<span></span>
									</div>
									<div class="styled-input">
										<input type="password" name="Password" required=""> 
										<label>Password</label>
										<span></span>
									</div>  
									<div class="wthree-text"> 
										<input type="checkbox" id="brand1" value="">
										<label for="brand1"><span></span>I accept the terms of use</label> 
									</div>
									<input type="submit" value="Sign Up">		
								</form> 
							</div> 
						</div>
					</div>
					<!-- //modal-two --> 
				</div> 
				<div class="clearfix"> </div>
			</div>
			<div class="content"> 
				<!-- banner -->
				<div class="banner about-banner"> 
					<div class="banner-img">  
						<h3>Gallery</h3>   
					</div> 
				</div>
				<!-- //banner -->

				<div class="w3agile properties">   
					<div class="properties-img properties-img-single">
						<img src="images/3.jpg" alt="">
						<div class="view-caption">
							<h4><span class="glyphicon glyphicon-map-marker"></span> Broome St, Canada, USA </h4>  
						</div> 
					</div>
					<div class="w3ls-details">   
						<h4>Property Description</h4> 
						<p class="agile-text">Lorem Ipsum has been industry's dummy text ever standard remember when your team is playing. Sed porta magna vitae nisl lacinia orbi malesuada sollic itudin . </p>
						<div class="w3ls-text">
							<h4>Property Details</h4>  
							<p><b>Price :</b> $1500 k </p>
							<p><b>Area :</b> 2,145 sq.ft </p>
							<p><b>Bed Rooms :</b> 3 </p>
							<p><b>Bath Rooms :</b> 2 </p>
						</div>
					</div>
					<div class="w3ls-features">   
						<h3 class="w3ls-title">Property Features</h3> 
						<ul> 
							<li><span class="glyphicon glyphicon-ok"> </span> School </li>
							<li><span class="glyphicon glyphicon-ok"> </span> Fireplace</li>
							<li><span class="glyphicon glyphicon-ok"> </span> Wine Cellar</li>
							<li><span class="glyphicon glyphicon-ok"> </span> Gym</li>
							<li><span class="glyphicon glyphicon-ok"> </span> Storm Windows</li>
							<li><span class="glyphicon glyphicon-ok"> </span> Storm Windows</li>
							<li><span class="glyphicon glyphicon-ok"> </span> Pet Allowed</li>
						</ul>
					</div>
												
			</div>

				<!-- gallery -->
				<div class="w3agile gallery"> 
					<h3 class="w3ls-title">Our Gallery</h3> 
					<div class="gallery-row"> 
						<div class="gallery-grids">
							<div class="w3ls-hover">
								<a href="images/g1.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley">
									<img src="images/g1.jpg" class="img-responsive zoom-img" alt=""/>
									<div class="view-caption">
										<h5>View+</h5> 
									</div>
								</a>
							</div>
						</div>
						<div class="gallery-grids">
							<div class="w3ls-hover">
								<a href="images/g2.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley">
									<img src="images/g2.jpg" class="img-responsive zoom-img" alt=""/>
									<div class="view-caption">
										<h5>View+</h5> 
									</div>
								</a>
							</div>
						</div>
						<div class="gallery-grids">
							<div class="w3ls-hover">
								<a href="images/g3.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley">
									<img src="images/g3.jpg" class="img-responsive zoom-img" alt=""/>
									<div class="view-caption">
										<h5>View+</h5> 
									</div>
								</a>
							</div>
						</div>
						<div class="gallery-grids">
							<div class="w3ls-hover">
								<a href="images/g4.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley">
									<img src="images/g4.jpg" class="img-responsive zoom-img" alt=""/>
									<div class="view-caption">
										<h5>View+</h5> 
									</div>
								</a>
							</div>
						</div>
						<div class="gallery-grids">
							<div class="w3ls-hover">
								<a href="images/g5.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley">
									<img src="images/g5.jpg" class="img-responsive zoom-img" alt=""/>
									<div class="view-caption">
										<h5>View+</h5> 
									</div>
								</a>
							</div>
						</div>
						<div class="gallery-grids">
							<div class="w3ls-hover">
								<a href="images/g6.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley">
									<img src="images/g6.jpg" class="img-responsive zoom-img" alt=""/>
									<div class="view-caption">
										<h5>View+</h5> 
									</div>
								</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<!--  light box js -->
					<script src="js/lightbox-plus-jquery.min.js"> </script> 
					<!-- //light box js-->  

					

				</div>
				<!-- //gallery -->  
				<div class="w3agile gallery">
					<h3 class="w3ls-title">Maps</h3>
					<div id="map-canvas" align="center"></div>
				</div>
			
				
				 
			</div>
		</div>
	</div> 
	<!-- menu-js -->
	<script src="js/classie.js"></script>
	<script src="js/main.js"></script>
	<!-- //menu-js -->
	<!-- pop-up-box -->
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<script>
		$(document).ready(function() {
			$('.popup-top-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});																							
		}); 
	</script>
	<!--//pop-up-box -->
	<!-- nicescroll-js -->
	<script src="js/jquery.nicescroll.min.js"></script> 
	<script>
		$(document).ready(function() {
	  
			var nice = $("html").niceScroll();  // The document page (body)
		
			$("#div1").html($("#div1").html()+' '+nice.version);
		
			$("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#00F",boxzoom:true}); // First scrollable DIV
		});
	</script>
	<!-- //nicescroll-js -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>