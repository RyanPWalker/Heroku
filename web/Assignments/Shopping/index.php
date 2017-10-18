<?php
session_start();
	$pokemon = $_GET['pokemon'];
	if ($pokemon === 'Charmander') {
		$_SESSION["Charmander"] = $pokemon;
	}
	if ($pokemon === 'Squirtle') {
		$_SESSION["Squirtle"] = $pokemon;
	}
	if ($pokemon === 'Bulbasaur') {
		$_SESSION["Bulbasaur"] = $pokemon;
	}
	if ($pokemon === 'Pikachu') {
		$_SESSION["Pikachu"] = $pokemon;
	}
	if ($pokemon === 'Pidgey') {
		$_SESSION["Pidgey"] = $pokemon;
	}
	if ($pokemon === 'Metapod') {
		$_SESSION["Metapod"] = $pokemon;
	}
	if ($pokemon === 'Snorlax') {
		$_SESSION["Snorlax"] = $pokemon;
	}
	if ($pokemon === 'Growlithe') {
		$_SESSION["Growlithe"] = $pokemon;
	}
	if ($pokemon === 'Rattata') {
		$_SESSION["Rattata"] = $pokemon;
	}

	$numItems;
	if ($_SESSION["numItems"] == null) {
		$numItems = 0;
		$_SESSION["numItems"] = $numItems;
	}
	else { $_SESSION["numItems"] = $numItems + 1; }
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Adopt-a-mon</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.html" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Adopt-a-mon</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="ViewCart.php">View Cart</a></li>
							<li><a href="Checkout.php">Checkout</a></li>
							<li><a href="index.php">About</a></li>
							<li><a href="index.php">Help</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>Welcome to Adopt-a-mon!<br />
								Adopt your new pokemon friend <a href="index.php/#pokemon">here</a> today!.</h1>
								<p>A brief intro to pokemon:</p>
								<iframe id="infoVideo" width="1000" height="400" frameBorder="0" src="https://www.youtube.com/embed/rhhuAm2rSGE?autoplay=1">
								</iframe>
								<br>
								<br>
								<p id="pokemon">Below you'll find the currently homeless pokemon desperately looking for a home.</p>
								<p>Click on one to add it to your cart!</p>
							</header>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<a href="index.php?pokemon=Charmander">
										<h2>Charmander</h2>
										<div class="content">
											<p>A fire-type pokemon.  Loves to play outisde and great for cuddling in the winter.</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
									<a href="index.php?pokemon=Squirtle">
										<h2>Squirtle</h2>
										<div class="content">
											<p>A water-type pokemon.  Enjoys a fun day at the beach and makes a great life gaurd for the kids!</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/pic03.jpg" alt="" />
									</span>
									<a href="index.php?pokemon=Bulbasaur">
										<h2>Bulbasaur</h2>
										<div class="content">
											<p>A grass-type pokemon.</p>
										</div>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="images/pic04.jpg" alt="" />
									</span>
									<a href="index.php?pokemon=Pikachu">
										<h2>Pikachu</h2>
										<div class="content">
											<p>An electric-type pokemon.  Always full of energy and never ceases to shock you!</p>
										</div>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="images/pic05.jpg" alt="" />
									</span>
									<a href="index.php?pokemon=Pidgey">
										<h2>Pidgey</h2>
										<div class="content">
											<p>A flying-type pokemon.  Makes for good company and likes to sing!</p>
										</div>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="images/pic06.jpg" alt="" />
									</span>
									<a href="index.php?pokemon=Metapod">
										<h2>Metapod</h2>
										<div class="content">
											<p>A grass-type pokemon.  Doesn't do much.  Makes a good paper weight.</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/pic07.jpg" alt="" />
									</span>
									<a href="index.php?pokemon=Snorlax">
										<h2>Snorlax</h2>
										<div class="content">
											<p>A normal-type pokemon.  Loves to sleep, great cuddler.</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/pic08.jpg" alt="" />
									</span>
									<a href="index.php?pokemon=Growlithe">
										<h2>Growlithe</h2>
										<div class="content">
											<p>A fire-type pokemon.  Take him for a run or play his favorite game- fireball!</p>
										</div>
									</a>
								</article>
								<article class="style1">
									<span class="image">
										<img src="images/pic09.jpg" alt="" />
									</span>
									<a href="index.php?pokemon=Rattata">
										<h2>Rattata</h2>
										<div class="content">
											<p>A normal-type pokemon.  Likes to run and dig.</p>
										</div>
									</a>
								</article>
							</section>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Get in touch</h2>
								<form method="post" action="#">
									<div class="field half first">
										<input type="text" name="name" id="name" placeholder="Name" />
									</div>
									<div class="field half">
										<input type="email" name="email" id="email" placeholder="Email" />
									</div>
									<div class="field">
										<textarea name="message" id="message" placeholder="Message"></textarea>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send" class="special" onclick="alert('Message sent!');" /></li>
									</ul>
								</form>
							</section>
							<section>
								<h2>Follow</h2>
								<ul class="icons">
									<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon style2 fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; Adopt-a-mon. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script type="text/javascript">
			$( document ).ready(function() {
				var video =  iframe.getElementById('infoVideo'); 
				video.mute();
				console.log('muted');
			});
		</script>

	</body>
</html>