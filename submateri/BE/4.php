<?php
include('../../function.php');
$listSubMateri = readSubMateriBE4();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>EduSite</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="../../css/bootstrap.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="../../css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="../../css/style.css" />
	<link type="text/css" rel="stylesheet" href="../../css/collapsibles-style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>

	<!-- Header -->
	<header id="header">
		<div class="container">

			<div class="navbar-header">
				<!-- Logo -->
				<div class="navbar-brand">
					<a class="logo" href="../../index.php">
						<img src="../../img/logo.png" alt="logo">
					</a>
				</div>
				<!-- /Logo -->

				<!-- Mobile toggle -->
				<button class="navbar-toggle">
					<span></span>
				</button>
				<!-- /Mobile toggle -->
			</div>

			<!-- Navigation -->
			<nav id="nav">
				<ul class="main-menu nav navbar-nav navbar-right">
					<li><a href="../../index.php">Home</a></li>
					<li><a href="../../about.php">Tentang Kami</a></li>
					<li><a href="../../pembelajaran.php">Pembelajaran</a></li>
				</ul>
			</nav>
			<!-- /Navigation -->

		</div>
	</header>
	<!-- /Header -->

	<!-- Hero-area -->
	<div class="hero-area section">
 
		<!-- Backgound Image -->
		<div class="bg-image bg-parallax overlay" style="background-image:url(../../img/bg-page.png)"></div>
		<!-- /Backgound Image -->

		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center">
					<ul class="hero-area-tree">
						<li><a href="../../index.php">Home</a></li>
						<li><a href="../../pembelajaran.php">Pembelajaran</a></li>
						<li><a href="../../materi/BE.php">Back End</a></li>
						<li>Rust</li>
					</ul>
					<h1 class="white-text">Rust</h1>

				</div>
			</div>
		</div>

	</div>
	<!-- /Hero-area -->

	<!-- Blog -->
	<div id="blog" class="section">

		<!-- container -->
		<div class="container">

			<!-- row -->
			<div class="row">

				<!-- main blog -->
				<div id="main" class="col-md-9">

					<!-- blog post -->
					<div class="blog-post">
						<?php
						foreach ($listSubMateri as $submateri) {
						?>
							<button type="button" class="collapsible"><?= $submateri['nama_sub_materi'] ?></button>
							<div class="content">
								<p><a href="<?= $submateri['sumber_materi'] ?>"><?= $submateri['nama_sub_materi'] ?></a></p>
							</div>
						<?php
						}
						?>
					</div>
					<!-- /blog post --> 

				</div>
				<!-- /main blog -->


			</div>
			<!-- row -->

		</div>
		<!-- container -->

	</div>
	<!-- /Blog -->

	<!-- Footer -->
	<footer id="footer" class="section">

		<!-- container -->
		<div class="container">

			<!-- row -->
			<div class="row">

				<!-- footer logo -->
				<div class="col-md-6">
					<div class="footer-logo">
						<a class="logo" href="../../index.php">
							<img src="../../img/logo.png" alt="logo">
						</a>
					</div>
				</div>
				<!-- footer logo -->

			</div>
			<!-- /row -->

			<!-- row -->
			<div id="bottom-footer" class="row">

				<!-- social -->
				<div class="col-md-4 col-md-push-8">
					<ul class="footer-social">
						<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
				<!-- /social -->

				<!-- copyright -->
				<div class="col-md-8 col-md-pull-4">
					<div class="footer-copyright">
						<span>&copy; Copyright 2023. All Rights Reserved. </span>
					</div>
				</div>
				<!-- /copyright -->

			</div>
			<!-- row -->

		</div>
		<!-- /container -->

	</footer>
	<!-- /Footer -->

	<!-- preloader -->
	<div id='preloader'>
		<div class='preloader'></div>
	</div>
	<!-- /preloader -->


	<!-- jQuery Plugins -->
	<script type="text/javascript" src="../../js/jquery.min.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../../js/main.js"></script>
	<script type="text/javascript" src="../../js/collapsibles.js"></script>

</body>

</html>