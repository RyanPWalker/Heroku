<?php
	session_start();

	$remove = $_GET['Remove'];
  unset($_SESSION[$remove]);

	$numItems = -1;
	foreach ($_SESSION as $key=>$val) {
		$numItems++;
	}
	if ($numItems == -1) {$numItems = 0;}
	$_SESSION["numItems"] = $numItems;
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>View Cart</title>
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
								<a href="index.php" class="logo">
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
							<li><a href="ViewCart.php">View Cart  (<?php echo $_SESSION["numItems"]; ?>)</a></li>
							<li><a href="Checkout.php">Checkout</a></li>
							<li><a href="index.php">About</a></li>
							<li><a href="index.php">Help</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>View Cart</h1>
							<span><img src="images/pic13.jpg" class="image right" style="height: 350px; width: 350px;" alt="" /></span>

							<?php
							if ($remove != null) {
								echo 'Removed: ' . $remove;
							}
							echo "<h3>All items in your cart:</h3>";
							echo '<ol>';
							foreach ($_SESSION as $key=>$val) {
								if ($key !== 'numItems') {
									echo '<li>' . $val . '  <a href="ViewCart.php?Remove='. $val . '">Remove</a></li>';
								}
							}
							echo '</ol>';
							?>

							<br><br><br>
							<ul class="actions">
								<li><button class="button" onclick="location.href='./index.php'">Home</button></li>
								<li><button class="button" onclick="location.href='./index.php?pokemon=Clear'">Clear All Items</button></li>
								<li><button class="button" onclick="location.href='./Checkout.php'">Checkout!</button></li>
							</ul>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Ask questions or get help:</h2>
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

	</body>
</html>