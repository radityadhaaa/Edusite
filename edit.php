<?php
include("function.php");
$sub_materi = readSubMateri();

if (isset($_GET['id_sub_materi'])) {
	$id = ($_GET["id_sub_materi"]);
	$result = readQuery('sub_materi', 'id_sub_materi', $id);
	$data = mysqli_fetch_assoc($result);
	$sub_materi = readSubMateri();
	if (!count($data)) {
		echo "<script>alert('Data tidak ditemukan pada database');window.location='admin.php';</script>";
	}
} else {
	echo "<script>alert('Masukkan data id.');window.location='admin.php';</script>";
}

if (isset($_POST['btn-edit-menu'])) {

	// jalankan query tambah record baru
	$isAddSucceed = updateSubMateri($_POST);
	if ($isAddSucceed > 0) {
		// jika penambahan sukses, tampilkan alert
		echo "
          <script>
              alert('Data Berhasil di update');
              document.location.href = 'admin.php';
          </script>
      ";
	} else {
		echo "
          <script>
          alert('Tidak Ada Data yang diperbarui !');
          document.location.href = 'admin.php';
          </script>
          ";
	}
}
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
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">


	<!-- Font Awesome Icon -->
	<link href="bootstrap-icons/bootstrap-icons.css" rel="stylesheet">


	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>

	<!-- Header -->
	<header id="header" class="transparent-nav">
		<div class="container">

			<div class="navbar-header">
				<!-- Logo -->
				<div class="navbar-brand">
					<a class="logo" href="index.php">
						<img src="./img/logo-alt.png" alt="logo">
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
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">Tentang Kami</a></li>
					<li><a href="pembelajaran.php">Pembelajaran</a></li>
				</ul>
			</nav>
			<!-- /Navigation -->

		</div>
	</header>
	<!-- /Header -->

	<!-- Home -->
	<div id="home" class="hero-area">

		<!-- Backgound Image -->
		<div class="bg-image bg-parallax overlay" style="background-image:url(./img/progstart.jpeg)"></div>
		<!-- /Backgound Image -->

		<div class="home-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h1 class="white-text">Halaman Admin</h1>
						<!-- <p class="lead white-text">Temukan berbagai profesi menarik yang berhubungan dengan programming dan akses materi pembelajaran yang relevan untuk mencapai karir yang sukses di industri teknologi.</p> -->
						<!-- <a class="main-button icon-button" href="pembelajaran.php">Mulai Sekarang!</a> -->
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- /Home -->

	<!-- About -->
	<div id="about" class="section">

		<!-- container -->
		<div class="container">

			<!-- row -->
			<div class="row">

				<div class="col-md-6">
					<div class="gradient-custom-1 h-100">
						<div class="mask d-flex align-items-center h-100">
							<form action="#" method="POST" id="form-add" enctype="multipart/form-data">
								<input type="hidden" name="id" id="id" value="<?= $data['id_sub_materi'] ?>">
								<div class="mb-3">
									<label for="id_materi" class="form-label">Id Materi</label>
									<input type="text" class="form-control" id="id_materi" name="id_materi" value="<?= $data['id_materi'] ?>" required>
								</div>
								<div class="mb-3">
									<label for="nama_sub_materi" class="form-label">Nama Sub Materi</label>
									<input type="text" class="form-control" id="nama_sub_materi" name="nama_sub_materi" value="<?= $data['nama_sub_materi'] ?>" required>
								</div>
								<div class="mb-3">
									<label for="sumber_materi" class="form-label">Sumber Materi</label>
									<input type="text" class="form-control" id="sumber_materi" name="sumber_materi" value="<?= $data['sumber_materi'] ?>" required>
								</div>
								<br>
								<a href="admin.php"><button type="button" class="main-button icon-button" data-bs-dismiss="modal">Cancel</button></a>
								<button type="submit" class="main-button icon-button" name="btn-edit-menu" id="btn-edit-menu" form="form-add">Update Sumber materi</button>
							</form>

						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- container -->
	</div>

	<!-- Footer -->
	<footer id="footer" class="section">

		<!-- container -->
		<div class="container">

			<!-- row -->
			<div class="row">

				<!-- footer logo -->
				<div class="col-md-6">
					<div class="footer-logo">
						<a class="logo" href="index.php">
							<img src="./img/logo.png" alt="logo">
						</a>
					</div>
				</div>
				<!-- footer logo -->

				<!-- footer nav -->
				<div class="col-md-6">
					<ul class="footer-nav">
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">Tentang Kami</a></li>
						<li><a href="pembelajaran.php">Pembelajaran</a></li>
						<li><a href="login.php">Login</a></li>
					</ul>
				</div>
				<!-- /footer nav -->

			</div>
			<!-- /row -->

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
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>

</html>