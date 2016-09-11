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
<!-- Peta -->
<?php
include 'koneksi/koneksi.php';
$id=$_GET['id'];
$data=mysql_fetch_array(mysql_query("select * from wisata where id='$id'"));
$a=$data['lat'];
$b=$data['lng'];
$c=$data['nama_objek']; 

?>
<style>
      #map-canvas {
        width: 100%;
        height: 200px;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdsOFdymPCbCdu7chj0LJECKuum2SuQ8Y"></script>
    <script>
   

    var markers = [
      ['<?php echo $c ?>', <?php echo $a ?>, <?php echo $b ?>]
    ];
 
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          zoom: 8,

  mapTypeId: 'satellite'
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
include 'layout-sidebar.php';
include 'layout-modal.php';

 ?>

	 
				<div class="clearfix"> </div>
			</div>
			<div class="content"> 
				<!-- banner -->
				<div class="banner about-banner"> 
					<div class="banner-detail">  
						<h3>Pariwisata Kota Pemalang</h3>   
					</div> 
				</div>
				<!-- //banner -->

				<div class="w3agile properties">   
					<div class="properties-img properties-img-single">
						<img src="<?php echo $data['gambar'] ?>" alt="">
						<div class="view-caption">
							<h4><span class="glyphicon glyphicon-map-marker"></span> Broome St, Canada, USA </h4>  
						</div> 
					</div>
					<div class="w3ls-details">   
						<h4>Deskripsi</h4> 
						<p class="agile-text"><?php echo $data['deskripsi'] ?> </p>
						
					</div>
					<div class="w3ls-features">   
						<h3 class="w3ls-title">Detail</h3> 
						<ul> 
						<?php 
						$detail=mysql_query("select * from detail_objek where id_objek='$id'");
						while ($load_detail=mysql_fetch_array($detail)) {
							
						
						 ?>
							<li><span class="glyphicon glyphicon-ok"> </span> <?php echo $load_detail['detail_objek'] ?> </li>
						<?php 
					    }
						 ?>
						</ul>
					</div>
												
			</div>
				<!-- gallery -->
				<div class="w3agile gallery"> 
					<h3 class="w3ls-title">Foto Gallery</h3> 
					<div class="gallery-row"> 
					<?php 
					$gallery=mysql_query("select * from gallery where id_objek='$id'");
					while ($load_gallery=mysql_fetch_array($gallery)) {
						
					
					 ?>
						<div class="gallery-grids">
							<div class="w3ls-hover">
								<a href="<?php echo $load_gallery['foto'] ?>" data-lightbox="example-set" data-title="<?php echo $load_gallery['title'] ?>">
									<img src="<?php echo $load_gallery['foto'] ?>" class="img-responsive zoom-img" alt=""/>
									<div class="view-caption">
										<h5>View+</h5> 
									</div>
								</a>
							</div>
						</div>

						<?php 
					  }
						 ?>
						<!-- <div class="gallery-grids">
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
						</div> -->
						<div class="clearfix"> </div>
					</div>
					<!--  light box js -->
					<script src="js/lightbox-plus-jquery.min.js"> </script> 
					<!-- //light box js-->  
				</div>
				<!-- //gallery -->  
				
				<!-- Peta -->
				<div class="w3agile gallery">
					<h3 class="w3ls-title">Peta</h3>
					<div id="map-canvas" ><br><br></div>
					<br><br><br><br>
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