<?php
include 'config.php';
include 'function.php';

// $username = $_POST['username'];
// $password = $_POST['password'];

// $query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' AND password='$password'");

$listCRUD = readSubMateriCRUD();

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
					<div class="section-header">
						<h4>Sub Materi</h4>
						<a href="create_Submateri.php" class="main-button icon-button">
							+ Tambah Data
						</a>
					</div>
					<div class="gradient-custom-1 h-100">
						<div class="mask d-flex align-items-center h-100">
							<div class="container">
								<div class="row justify-content-center">
									<div class="col-12">
										<div class="table-responsive bg-white">
											<table class="table mb-0 table-bordered">
												<thead>
													<tr>
														<th scope="col">No</th>
														<th scope="col">Nama Materi</th>
														<th scope="col">Nama Sub Materi</th>
														<th scope="col">Sumber Materi</th>
														<th colspan="2">Aksi</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$batas = 10;
													$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
													$halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

													$previous = $halaman - 1;
													$next = $halaman + 1;

													$data = mysqli_query($conn, "SELECT sub_materi.id_sub_materi, materi.nama_materi, sub_materi.nama_sub_materi, sub_materi.sumber_materi FROM sub_materi INNER JOIN materi ON sub_materi.id_materi = materi.id_materi");
													$jumlah_data = mysqli_num_rows($data);
													$total_halaman = ceil($jumlah_data / $batas);

													$data_crud = mysqli_query($conn, "SELECT sub_materi.id_sub_materi, materi.nama_materi,  sub_materi.nama_sub_materi,  sub_materi.sumber_materi FROM sub_materi INNER JOIN materi ON sub_materi.id_materi = materi.id_materi ORDER BY sub_materi.id_sub_materi  limit $halaman_awal, $batas");
													$nomor = $halaman_awal + 1;

													$cacah=1;
													while ($crud = mysqli_fetch_array($data_crud)) {
													?>
														<tr>
															<td><?= $crud['id_sub_materi'] ?></td>
															<td><?= $crud['nama_materi'] ?></td>
															<td><?= $crud['nama_sub_materi'] ?></td>
															<td><a href="<?= $crud['sumber_materi'] ?>"><?= $crud['sumber_materi'] ?></a></td>
															<td>
																<a href="edit.php?id_sub_materi=<?= $crud['id_sub_materi'] ?>" class="link-warning"><i class="bi bi-pencil-square">Edit</i></a>
															</td>
															<td>
																<a href="delete.php?id_sub_materi=<?= $crud['id_sub_materi'] ?>" onclick="return confirm('Yakin Hapus?')"><i class="bi bi-trash3">Delete</i></a>
															</td>
														</tr>
													<?php
													$cacah++;
													}
													?>

												</tbody>
											</table>
											<nav>
												<ul class="pagination justify-content-center">
													<li class="page-item">
														<a class="page-link" <?php if ($halaman > 1) {
																					echo "href='?halaman=$previous'";
																				} ?>>Previous</a>
													</li>
													<?php
													for ($x = 1; $x <= $total_halaman; $x++) {
													?>
														<li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
													<?php
													}
													?>
													<li class="page-item">
														<a class="page-link" <?php if ($halaman < $total_halaman) {
																					echo "href='?halaman=$next'";
																				} ?>>Next</a>
													</li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- feature -->
					<div class="feature">
						<!-- <i class="feature-icon fa fa-flask"></i> -->
						<div class="feature-content">

						</div>
					</div>
					<!-- /feature -->

					<!-- feature -->
					<div class="feature">
						<!-- <i class="feature-icon fa fa-users"></i> -->
						<div class="feature-content">

						</div>
					</div>
					<!-- /feature -->


				</div>

				<div class="col-md-6">
					<div class="about-img">

					</div>
				</div>

			</div>
			<!-- row -->

		</div>
		<!-- container -->
	</div>
	<!-- /About -->






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
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>

</html>