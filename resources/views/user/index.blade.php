<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>EndGam - Gaming Magazine Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="EndGam Gaming Magazine Template">
	<meta name="keywords" content="endGam,gGaming, magazine, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="user/img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="user/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="user/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="user/css/slicknav.min.css"/>
	<link rel="stylesheet" href="user/css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="user/css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="user/css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	{{-- <div id="preloder">
		<div class="loader"></div>
	</div> --}}

	<!-- Header section -->
	<header class="header-section">
		<div class="header-warp">
			<div class="header-social d-flex justify-content-end">
				<p>Follow us:</p>
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-behance"></i></a>
			</div>
			<div class="header-bar-warp d-flex">
				<!-- site logo -->
				<a href="home.html" class="site-logo">
					<img src="./user/img/logo.png" alt="">
				</a>
				<nav class="top-nav-area w-100">
					<div class="user-panel">
						<a href="">Login</a> / <a href="">Register</a>
					</div>
					<!-- Menu -->
					<ul class="main-menu primary-menu">
						<li><a href="http://127.0.0.1:8000/home">Home</a></li>
						<li><a href="http://127.0.0.1:8000/games">Games</a>
							<ul class="sub-menu">
								<li><a href="http://127.0.0.1:8000/game_single">Game Singel</a></li>
							</ul>
						</li>
						<li><a href="review.html">Reviews</a></li>
						<li><a href="blog.html">News</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	
	<section class="hero-section overflow-hidden">
		<div class="hero-slider owl-carousel">

			@foreach ($slide as $sl)
				
			<div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="./user/img/slider-bg-1.jpg" >
				<div class="container">
					
						<div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">
							<div class="carousel-inner">
							  <div class="carousel-item active">
								<img class="d-block w-100" style="width:100% ; height:550px; padding-bottom:30px" src="./user/img/semi1.jpg" alt="">
							  </div>
							  <div class="carousel-item">
								<img class="d-block w-100" style="width:100% ; height:550px; padding-bottom:30px" src="./user/img/semi2.jpg" alt="">
							  </div>
							  <div class="carousel-item">
								<img class="d-block w-100" style="width:100% ; height:550px; padding-bottom:30px" src="./user/img/semi3.jpg" alt="">
							  </div>
							</div>
							
						  </div>
					
					<a href="#" class="site-btn">Read More   <img src="./user/img/icons/double-arrow.png" alt="#"/></a>
				</div>
			</div>
				@endforeach
		</div>
	</section>
	


	<!-- Intro section -->
	<section class="intro-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="intro-text-box text-box text-white">
						<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
						<h3>The best online game is out now!</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida....</p>
						<a href="#" class="read-more">Read More  <img src="user/img/icons/double-arrow.png" alt="#"/></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-text-box text-box text-white">
						<div class="top-meta">11.11.18  /  in <a href="">Playstation</a></div>
						<h3>Top 5 best games in november</h3>
						<p>Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum  labore suspendisse ultrices gravida....</p>
						<a href="#" class="read-more">Read More  <img src="user/img/icons/double-arrow.png" alt="#"/></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-text-box text-box text-white">
						<div class="top-meta">11.11.18  /  in <a href="">Reviews</a></div>
						<h3>Get this game at a promo price</h3>
						<p>Sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida ncididunt ut labore ....</p>
						<a href="#" class="read-more">Read More  <img src="user/img/icons/double-arrow.png" alt="#"/></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end -->


	<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7">
					<div class="section-title text-white">
						<h2>Latest News</h2>
					</div>
					<ul class="blog-filter">
						<li><a href="#">Racing</a></li>
						<li><a href="#">Shooters</a></li>
						<li><a href="#">Strategy</a></li>
						<li><a href="#">Online</a></li>
					</ul>
					<!-- Blog item -->
					<div class="blog-item">
						<div class="blog-thumb">
							<img src="https://cdn.akamai.steamstatic.com/steam/apps/828900/capsule_616x353.jpg?t=1667437598" alt="">
						</div>
						<div class="blog-text text-box text-white">
							<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
							<h3>The stillness of the wind	</h3>
							<p>A peaceful game about life and loss. One after another, the inhabitants of the once lively village left for the city. Everyone except Talma. As her life draws to a close, she maintains a simple, solitary lifestyle, tending to her house, her land, and her goats.	</p>
							<a href="#" class="read-more">Read More  <img src="user/img/icons/double-arrow.png" alt="#"/></a>
						</div>
					</div>
					<!-- Blog item -->
					<div class="blog-item">
						<div class="blog-thumb">
							<img src="https://images.gog-statics.com/b55fc72410714d3b10a866de04462ad02a2f6ad86ae36eb27360d897a2402d1d.jpg" alt="">
						</div>
						<div class="blog-text text-box text-white">
							<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
							<h3>What Remains of Edith Finch	</h3>
							<p>What Remains of Edith Finch is a collection of strange tales about a family in Washington state. As Edith, you’ll explore the colossal Finch house, searching for stories as she explores her family history and tries to figure out why she's the last one in her family left alive. Each story you find lets you experience the life of a new family member on the day of their death.	</p>
							<a href="#" class="read-more">Read More  <img src="user/img/icons/double-arrow.png" alt="#"/></a>
						</div>
					</div>
					<!-- Blog item -->
					<div class="blog-item">
						<div class="blog-thumb">
							<img src="https://upload.wikimedia.org/wikipedia/en/e/e6/Florence_Preview_Image.jpg" alt="">
						</div>
						<div class="blog-text text-box text-white">
							<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
							<h3>Florence	</h3>
							<p>Florence Yeoh feels a little... stuck. Her life is an endless routine of work, sleep, and spending too much time on social media. Then one day, she meets a cello player named Krish who changes everything about how she sees the world and herself.	</p>
							<a href="#" class="read-more">Read More  <img src="user/img/icons/double-arrow.png" alt="#"/></a>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-5 sidebar">
					<div id="stickySidebar">
						<div class="widget-item">
							<h4 class="widget-title">Trending</h4>
							<div class="trending-widget">
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="./user/img/blog-widget/1.jpg" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
										<h5>The best online game is out now!</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="./user/img/blog-widget/2.jpg" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
										<h5>The best online game is out now!</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="./user/img/blog-widget/3.jpg" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
										<h5>The best online game is out now!</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="./user/img/blog-widget/4.jpg" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
										<h5>The best online game is out now!</h5>
									</div>
								</div>
							</div>
						</div>
						<div class="widget-item">
							<div class="categories-widget">
								<h4 class="widget-title">categories</h4>
								<ul>
									<li><a href="">Games</a></li>
									<li><a href="">Gaming Tips & Tricks</a></li>
									<li><a href="">Online Games</a></li>
									<li><a href="">Team Games</a></li>
									<li><a href="">Community</a></li>
									<li><a href="">Uncategorized</a></li>
								</ul>
							</div>
						</div>
						<div class="widget-item">
						<a href="#" class="add">
							<img src="./user/img/add.jpg" alt="">
						</a>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->


	<!-- Intro section -->
	<section class="intro-video-section set-bg d-flex align-items-end " data-setbg="./user/img/promo-bg.jpg">
		<a href="https://www.youtube.com/watch?v=zLESu_aChMU" class="video-play-btn video-popup"><img src="user/img/icons/solid-right-arrow.png" alt="#"></a>
		<div class="container">
			<div class="video-text">
				<h2>Promo video of the game</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
			</div>
		</div>
	</section>
	<!-- Intro section end -->


	<!-- Featured section -->
	<section class="featured-section">
		<div class="featured-bg set-bg" data-setbg="user/img/featured-bg.jpg" style="background-image: url(&quot;user/img/featured-bg.jpg&quot;);"></div>
		<div class="featured-box">
			<div class="text-box">
				<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
				<h3>The game you’ve been waiting  for is out now</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquamet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vestibulum posuere porttitor justo id pellentesque. Proin id lacus feugiat, posuere erat sit amet, commodo ipsum. Donec pellentesque vestibulum metus...</p>
				<a href="#" class="read-more">Read More  <img src="user/img/icons/double-arrow.png" alt="#"/></a>
			</div>
		</div>
	</section>
	<!-- Featured section end-->



	<!-- Newsletter section -->
	<section class="newsletter-section">
		<div class="container">
			<h2>Subscribe to our newsletter</h2>
			<form class="newsletter-form">
				<input type="text" placeholder="ENTER YOUR E-MAIL">
				<button class="site-btn">subscribe  <img src="user/img/icons/double-arrow.png" alt="#"/></button>
			</form>
		</div>
	</section>
	<!-- Newsletter section end -->


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="footer-left-pic">
				<img src="user/img/footer-left-pic.png" alt="">
			</div>
			<div class="footer-right-pic">
				<img src="user/img/footer-right-pic.png" alt="">
			</div>
			<a href="#" class="footer-logo">
				<img src="./user/img/logo.png" alt="">
			</a>
			<ul class="main-menu footer-menu">
				<li><a href="">Home</a></li>
				<li><a href="">Games</a></li>
				<li><a href="">Reviews</a></li>
				<li><a href="">News</a></li>
				<li><a href="">Contact</a></li>
			</ul>
			<div class="footer-social d-flex justify-content-center">
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-behance"></i></a>
			</div>
			<div class="copyright"><a href="">Colorlib</a> 2018 @ All rights reserved</div>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="user/js/jquery-3.2.1.min.js"></script>
	<script src="user/js/bootstrap.min.js"></script>
	<script src="user/js/jquery.slicknav.min.js"></script>
	<script src="user/js/owl.carousel.min.js"></script>
	<script src="user/js/jquery.sticky-sidebar.min.js"></script>
	<script src="user/js/jquery.magnific-popup.min.js"></script>
	<script src="user/js/main.js"></script>

	</body>
</html>
