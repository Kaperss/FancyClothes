<?php
$title = "Home";
require_once "includes/header.php" ?>
<!-- Sidebar heromkring -->
<div class="container centrer">
	<h4>INSPIRATION</h4>
	<hr>
</div>

<div class="container">
	<div class="row totoejrow">
		<div class="col-sm-12 col-md-6 herretoej">
			<h2>Herretøj</h2>
			<button><strong>Læs mere</strong></button>
		</div>
		<div class="col-sm-12 col-md-6 kvindetoej">
			<h2>Kvindetøj</h2>
			<button><strong>Læs mere</strong></button>
		</div>
	</div>
</div>
<main class="container">
	<div class="row">
	 <!-- Laver en formular til at skrive data til DB -->
        <?php require "includes/getArticles.php"; ?>
        <!-- Slet når det virker -->

		
<!--
	<div class="row">
		<article class="col-sm-12 col-md-6 col-lg-6">
			<img src="img/produkt1.jpg" class="img-responsive" alt="">
			<div class="centrer"><h4>Titel</h4>
				<i class="fa fa-star fa-lg" aria.hidden="true"></i>
				<i class="fa fa-star fa-lg" aria.hidden="true"></i>
				<i class="fa fa-star fa-lg" aria.hidden="true"></i>
				<i class="fa fa-star fa-lg" aria.hidden="true"></i>
				<i class="fa fa-star fa-lg" aria.hidden="true"></i>
			</div>
			<div class="greybg">
				<h5 class="grey p-1">TID OG LAVET AF EN DUDE</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam quam porro saepe eos nihil nisi, voluptatibus nobis quod quo commodi! Voluptatibus consectetur, quibusdam unde dignissimos tenetur illo dolore quidem saepe.</p>
				<a href="#"><p class="p-1 btmargin0 py-1">Læs mere...</p></a>
			</div>


		</article>
		<article class="col-sm-12 col-md-6 col-lg-6">
			<img src="img/produkt1.jpg" class="img-responsive" alt="">
			<div class="centrer"><h4>Titel</h4>
				<i class="fa fa-star fa-lg" aria.hidden="true"></i>
				<i class="fa fa-star fa-lg" aria.hidden="true"></i>
				<i class="fa fa-star fa-lg" aria.hidden="true"></i>
				<i class="fa fa-star fa-lg" aria.hidden="true"></i>
				<i class="fa fa-star fa-lg" aria.hidden="true"></i>
			</div>
			<div class="greybg">
				<h5 class="grey p-1">TID OG LAVET AF EN DUDE</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, similique. Ea dicta, temporibus fuga debitis omnis. Possimus asperiores dolor ut provident, magnam esse libero tempora quisquam nihil. Neque, ex illo.</p>
				<a href="#"><p class="p-1 btmargin0 py-1">Læs mere...</p></a>
			</div>
		</div>
	-->
	</main>
	<?php require_once "includes/footer.php" ?>