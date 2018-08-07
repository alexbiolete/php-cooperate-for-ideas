<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name="description" content="Page description">
	<meta name="keywords" content="Ideas, Cooperate">
	<meta name="author" content="Author">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=0.5, maximum-scale=3, shrink-to-fit=no">

	<title>Cooperate for ideas</title>

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
		<a class="navbar-brand mr-auto custom-brand" href="./home.php">Cooperate for ideas</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link custom-hover" href="./add-idea.php">Add idea</a>
				</li>
			</ul>
			<?php  if (isset($_SESSION['username'])) : ?>
			<ul class="navbar-nav form-inline custom-align">
				<p>You are logged in as
					<strong>
						<?php echo $_SESSION['username']; ?>
					</strong>
				</p>
				<li class="nav-item">
					<a href="index.html?logout='1'" class="btn btn-outline-light custom-button">Log out</a>
				</li>
			</ul>
			<?php endif ?>
		</div>
	</nav>

	<header class="custom-home-header">
		<h1 class="display-4">Welcome!</h1>
		<p class="lead">Here you can find other people's ideas or even submit your own.</p>
	</header>

	<main class="custom-ideas">
		<?php include('show-ideas.php'); ?>
	</main>

	<footer>
		<div class="custom-main">
			<h6 class="font-weight-light font-italic">"Great minds discuss ideas; average minds discuss events; small minds discuss people."</h6>
			- Eleanor Roosevelt
		</div>
		<div class="custom-license">
			All rights reserved.
		</div>
	</footer>

	<a href="#" id="go_top" title="Go to the top">
		<img src="./images/icons/arrow.png" class="custom-size">
	</a>

	<script src="./scripts/smoothScroll.js"></script>
	<script src="./scripts/goTop.js"></script>

</body>

</html>