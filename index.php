<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Programming Teacher | Dashboard</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>

</head>

<body class="signup-page" style="background-image: url('assets/img/city.jpg'); background-size: cover; background-repeat: no-repeat;">
	<nav class="navbar navbar-transparent navbar-absolute">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="index.php">Programming Teacher v2.0</a>
        	</div>
			<div class="copyright pull-right" style="margin-top:20px;">
				&copy; 2017 made by whileLOOP</a>
			</div>
    	</div>
    </nav>

    <div class="wrapper">
		<div class="header header-filter" style="background-image: url('../assets/img/city.jpg'); background-size: cover; background-position: top center;">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
						<div class="card card-signup">
								<div class="header header-primary text-center">
									<h4>Sign In to Dashboard</h4>
									<div class="social-line">
										<center>
											<img src="assets/img/logo.png" style="width:60px;">
										</center>
									</div>
								</div>
								<p class="text-divider">Or <a href="signup.php">CREATE NEW ACCOUNT</a></p>
								<div class="content">
									<form action="php/login.php" method="post">
										<div class="row">
											<div class="col-xs-2">
												<center>
													<i class="material-icons" style="margin-top:35px; margin-left:15px;">email</i>
												</center>
											</div>
											<div class="col-xs-10">
												<div class="form-group label-floating">
													<label class="control-label">Enter Username</label>
													<input type="email" name="username" class="form-control">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xs-2">
												<center>
													<i class="material-icons" style="margin-top:35px; margin-left:15px;">lock_outline</i>
												</center>
											</div>
											<div class="col-xs-10">
												<div class="form-group label-floating">
													<label class="control-label">Enter Password</label>
													<input type="password" name="password" class="form-control">
												</div>
											</div>
										</div>

										<div class="footer text-center">
											<center>
												<button class="btn btn-simple btn-primary btn-lg" type="submit">Get Started</button>
											</center>
										</div>
									</form>
								</div>
						</div>
						<div class="alert alert-danger" style="<?php if(!isset($_GET['error'])){ echo "display:none;";}?>">
							<div class="container-fluid">
								<div class="alert-icon">
									<i class="material-icons">error_outline</i>
								</div>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true"><i class="material-icons">clear</i></span>
								</button>
								Damn! Entered username or password invalid!
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

    </div>


</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="assets/js/material-kit.js" type="text/javascript"></script>

</html>
