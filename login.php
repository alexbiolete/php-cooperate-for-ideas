<?php include('server.php') ?>

<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name="description" content="Page description">
	<meta name="keywords" content="Ideas, Cooperate">
	<meta name="author" content="Author">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=0.5, maximum-scale=3, shrink-to-fit=no">

	<title>Log in - Cooperate for ideas</title>

	<link rel="icon" href="./images/icons/favicon.ico">
	<link rel="stylesheet" href="./style/lib/bootstrap.min.css">
	<link rel="stylesheet" href="./style/fonts.css">
	<link rel="stylesheet" href="./style/body.css">
	<link rel="stylesheet" href="./style/nav.css">
	<link rel="stylesheet" href="./style/header.css">
	<link rel="stylesheet" href="./style/main.css">
	<link rel="stylesheet" href="./style/footer.css">

	<script src="./scripts/lib/jquery-3.3.1.min.js"></script>
	<script src="./scripts/lib/popper.min.js"></script>
	<script src="./scripts/lib/bootstrap.min.js"></script>

</head>

<body>

	<nav class="navbar navbar-expand-md navbar-dark fixed-top custom-background">
		<img src="./images/icons/logo.png">
		<a class="navbar-brand mr-auto custom-brand" href="./index.html">Cooperate for ideas</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
		 aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link custom-hover" href="./index.html">Home</a>
				</li>
			</ul>
			<ul class="navbar-nav form-inline custom-align">
				<li class="nav-item">
					<a href="./register.php" class="btn btn-light custom-button">Sign up</a>
				</li>
			</ul>
		</div>
	</nav>

	<main class="custom-ideas custom-padding">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="card">
					<form class="form-container" method="post" action="login.php">
						<?php include('errors.php'); ?>
						<div class="card-header display-4 shadowed-text custom-center-text">Log in</div>
						<div class="card-body">
							<div class="form-group">
								<label class="shadowed-text" name="username">Username</label>
								<input type="text" class="form-control" name="username" placeholder="Enter username">
							</div>
							<div class="form-group">
								<label class="shadowed-text" name="password">Password</label>
								<input type="password" class="form-control" name="password" placeholder="Enter password">
							</div>
							<div class="input-group">
								<button type="submit" class="btn btn-dark btn-block" name="login_user">Log in</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</main>

	<footer>
		<div class="custom-license">
			All rights reserved.
		</div>
	</footer>

</body>

</html>