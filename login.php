<!doctype html>
<html lang="en">
  <head>
  	<title>Login Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="login-css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(img/bg-login.png);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<form action="login_action.php" class="signin-form" method="post">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Username"  name="username" id="username" required>
						</div>
					<div class="form-group">
					<input  type="password" class="form-control" placeholder="Password" name="password" id="password" required>
					<!-- id="password-field" -->
					<!-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> -->
					</div>
					<div class="form-group">
						<button type="submit" class="form-control btn btn-primary submit px-3" name="login" value="Log In">Sign In</button>
					</div>
					<div class="form-group">
						<button type="back" class="form-control btn btn-primary submit px-3" onclick="history.back()" value="Back">Back</button>
					</div>
	          </form>
	          
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="login-js/jquery.min.js"></script>
  <script src="login-js/popper.js"></script>
  <script src="login-js/bootstrap.min.js"></script>
  <script src="login-js/main.js"></script>

	</body>
</html>

