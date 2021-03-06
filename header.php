<?php 
//session_start();
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Royale Courier Service</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta charset="utf-8" />
	<meta name="keywords" content="Shipping Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script> 
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	 <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	 <link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Rubik:400,500,700,900" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">

</head>

<body>
	<!-- header -->
	

	<section class="w3layouts-header py-2">
		<div class="container">
			  <!-- header -->
        <header>
                <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">

                    <h3>
                        <a class="navbar-brand" href="index.html">
                         Royale Courier                        </a>                    </h3>
                    <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-lg-auto text-center">
                            <li class="nav-item mr-3">
                                <a class="nav-link" href="index.html">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item mr-3">
                                <a class="nav-link" href="about.html">about</a>
                            </li>
							 <li class="nav-item active mr-3">
                                <a class="nav-link" href="services.html">Services</a>
                            </li>
                            <li class="nav-item  mr-3">
                                <a class="nav-link" href="works.html">How it works</a>
                            </li>
                            <li class="nav-item mr-3">
                                <a class="nav-link" href="contact.html">contact</a>
                            </li>
                            <li class="nav-item">
                               	<i class="fas fa-phone pr-2"></i>CALL US 1-677-124-44227
                            </li>
                        </ul>
                    </div>

                </nav>
        </header>
        <!-- //header -->

		</div>
	</section>
	<!-- //header -->
	<section class="banner-1">
	</section>
			<!-- banner bottom -->
		
		<!-- //banner bottom -->

<!-- smooth-shipping -->



<?php
if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'admin-role') {
?>






<!-- //smooth-shipping -->
<!-- distance -->


<!--
<section class="distance-w3 py-md-5">
		<div class="container py-4 mt-2">
			<div class="row">
				<div class="col-md-8 distance-agile-left">
					<h4 class="mt-2">The Safest Distance Between Two Points.</h4>
				</div>
				<div class="col-md-4 distance-agile-right">
					<a href="contact.html">call us 5-367-123-4567</a>
				</div>
			</div>
         </div>
</section>
<!-- //distance -->
	<!-- footer -->
<footer>
	<section class="footer py-md-5">
		<div class="container py-4 mt-2">
		<div class="row footer_inner_info_w3ls_agileits">
			<div class="col-md-3 footer-left">
				<h2><a href="index.html"> Royale Courier</a></h2>
				<p class="mb-3 mt-3">Our licensed and insured riders treat each package with utmost care and constantly deliver with safety in mind. Our 100% successful delivery target ensures that items are never lost or stolen.</p>
				<ul class="social-nav footer-social social two">
					<li>
						<a href="#">
							<i class="fab fa-facebook-f" aria-hidden="true"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-twitter" aria-hidden="true"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-instagram" aria-hidden="true"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-pinterest" aria-hidden="true"></i>
						</a>
					</li>
				</ul>
			</div>
			
					<div class="col-md-2 sign-gd">
						<h4>Useful Links</h4>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="services.html">Services</a></li>
							<li><a href="works.html">How it works</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
					<div class="col-md-4 sign-gd flickr-post">
						<h4>Packages</span></h4>
						<ul>
							<li><a href="#"><img src="images/g1.jpg" alt=" " class="img-fluid" /></a></li>
							<li><a href="#"><img src="images/g2.jpg" alt=" " class="img-fluid" /></a></li>
							<li><a href="#"><img src="images/g3.jpg" alt=" " class="img-fluid" /></a></li>
							<li><a href="#"><img src="images/g4.jpg" alt=" " class="img-fluid" /></a></li>
							<li><a href="#"><img src="images/g5.jpg" alt=" " class="img-fluid" /></a></li>
							<li><a href="#"><img src="images/g6.jpg" alt=" " class="img-fluid" /></a></li>
							<li><a href="#"><img src="images/g7.jpg" alt=" " class="img-fluid" /></a></li>
							<li><a href="#"><img src="images/g8.jpg" alt=" " class="img-fluid" /></a></li>
							<li><a href="#"><img src="images/g9.jpg" alt=" " class="img-fluid" /></a></li>
						</ul>
					</div>
					<div class="col-md-3 sign-gd-two">
						<h4>Contact Information</h4>
						<div class="address">
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Phone Number</h6>
									<p>+1 234 567 8901</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Email Address</h6>
									<p>Email :<a href="mailto:royalecourier@aol.com"> royalecourier@aol.com</a></p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-map-marker" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Location</h6>
									<p>1234k Avenue,Block-4,New York City.

									</p>
								</div>
								
							</div>
						</div>
					</div>
		</div>
	</div>
	</section>
	<p class="copy-right py-3">&copy 2019 Shipping. All rights reserved </p>
	<!-- //footer -->
</footer>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Shipping</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="images/g1.jpg" class="img-fluid" alt="" />
						<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. </p>
					</div>
				</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<?php 
}
?>


<!-- //Modal -->
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js-->
	<!-- start-smooth-scrolling -->
	<script  src="js/move-top.js"></script>
	<script  src="js/easing.js"></script>
	<script> 
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script> 
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<script  src="js/SmoothScroll.min.js"></script>
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	 <script src="js/bootstrap.js"></script>
</body>

</html>



