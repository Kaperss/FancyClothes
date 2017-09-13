<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fancy clothes | <?php echo $title; ?> </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fa/font-awesome.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
	<div class="container toppen">
		<div class="row">
			<div class="flagogdkk container col-md-2">
				<div class="row">
					<div class="flag col-sm-9">
						<img src="img/ikon.png" alt="Dansk sprog">
						Dansk
					</div>
					<div class="dkk col-sm-3">
						DKK
					</div>
				</div>
			</div>
			<div class="container col-md-2 col-md-offset-8" >
				<form action="#" class="row">
					<input type="text" placeholder="Indtast søgning.." class="col-md-9">
					<button class="col-md-3">Søg</button>
				</form>
			</div>
		</div>
	</div>
	<hr>
	<header class="container">
		<a href="index.php"><img src="img/homeIcon.png" alt="Hjem / Logo" id="homeLogo"></a>
	</header>
	<hr>
	<nav class="navbar navbar-inverse navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-left">
					<li class="nav-item">
						<a class="nav-link p-3" href="index.php">Forside</a>
					</li>
					<li class="nav-item">
						<a class="nav-link p-3" href="index.php">Produkter</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Nyheder</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Handelsbetingelser</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Om os</a>
					</li>
					<li class="nav-item">
						<?php
                //Skifter mellem et log out link i nav eller to log ind / opret bruger links alt efter om man er logget ind eller ej
						if(isset($_SESSION['username']) && !empty($_SESSION['username'])) 
						{
							echo '<a href="logout.php" 
							class="nav-link p-3">
							Log ud </a>'; 
						}

						else { 
							echo '<li><a class="nav-link p-3 login" 
							href="#">
							Log ind </a></li>';
							echo '<li><a class="nav-link p-3 register" 
							href="newUser.php">
							Opret bruger </a></li>';
						} 
						?>

					</li>
				</ul>
				<ul class="nav nabar-nav navbar-right">
					<li class="nav-item  shoppingCart">
						<div class="col-md-1 offset-1 ">
							Din indkøbsvogn er tom
						</div>
						<div>
							<i class="fa fa-shopping-cart" aria-hidden="true"></i>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<hr>
	<!-- Bootstrap carousel / slideshow -->
	<div id="myCarousel" class="carousel slide container" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="img/slide1.jpg" alt="Nogle sko">
			</div>

			<div class="item">
				<img src="img/slide2.jpg" alt="Andre sko">
			</div>

			<div class="item">
				<img src="img/slide3.jpg" alt="Jaks">
			</div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- HUSK KATEGORIER + NYEHDSBREV -->
	<hr>
	<div class="container">
		<h1 class="centrer">FancyClothes.DK - tøj, kvalitet, simpelt!</h1>
	</div>
	<hr>
