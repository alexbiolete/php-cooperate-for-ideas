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

	<title>Add idea - Cooperate for ideas</title>

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
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
		 aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link custom-hover" href="./home.php">Home</a>
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

	<main class="custom-ideas custom-padding">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="card">
					<form class="form-container" method="post" action="server.php">
						<div class="card-header display-4 shadowed-text custom-center-text">Add idea</div>
						<div class="card-body">
							<div class="form-group">
								<label>Title</label>
								<input type="text" class="form-control" placeholder="Title" name="title">
							</div>
							<div class="form-group">
								<label>About</label>
								<textarea class="form-control" placeholder="Describe your idea" name="about" rows="3"></textarea>
							</div>
							<div class="form-group">
								<label>E-mail</label>
								<input type="email" class="form-control" placeholder="Enter e-mail address" name="eml">
							</div>
							<br>
							<button type="submit" class="btn btn-dark btn-block" name="add_idea">Submit</button>
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