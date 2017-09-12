<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<<<<<<< HEAD
	<title>Fancy clothes | <?php echo $title; ?> </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="flagogdkk container col-md-6">
				<div class="flag col-md-3">
					<img src="img/ikon.png" alt="Dansk sprog">
					Dansk
				</div>
				<div class="dkk col-md-1">
					DKK
				</div>
			</div>
			<div class="container col-md-6">
				<div class="col-md-8">
					<form action="#">
						<input type="text" placeholder="Indtast søgning..">
						<button>Søg</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<header class="container">
		<a href="index.php"><img src="img/homeIcon.png" alt="Hjem / Logo" id="homeLogo"></a>
	</header>
	<hr>
	<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
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
				<ul class="nav navbar-nav">
					<li class="nav-item">
						<a class="nav-link p-3" href="index.php">Forside</a>
					</li>
					<li class="nav-item">
						<a class="nav-link p-3" href="index.php">Produkter</a>
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
			</div>
		</div>
	</nav>
</div>
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


=======
	<title>Fancy clothes | <?php echo "$_PAGE"; ?> </title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
>>>>>>> 50191aaa3d2e55c31491dce02c108e36b1e2a55b
