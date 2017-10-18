<?php
	session_start();
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
		<title>Checkout</title>
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
							<li><a href="ViewCart.php">View Cart  (<?php echo $_SESSION["numItems"]; ?>)</a></li>
							<li><a href="Checkout.php">Checkout</a></li>
							<li><a href="index.php">About</a></li>
							<li><a href="index.php">Help</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>Checkout</h1>
							<?php
							echo '<h3>All items in your cart:</h3>';
							echo '<ol>';
							foreach ($_SESSION as $key=>$val) {
								if ($key !== 'numItems') {
									echo '<li>' . $val . '</li>';
								}
							}
							echo '</ol>';
							?>

							<!-- Form -->
								<section>
									<h2>Form</h2>
									<form action="Confirmation.php" method="post">
										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<input type="text" name="fullname" id="name" value="" placeholder="Name" required/>
											</div>
											<div class="6u$ 12u$(xsmall)">
												<input type="email" name="email" id="email" value="" placeholder="Email" required/>
											</div>
											<div class="6u 12u$(xsmall)">
												<input type="text" name="address" id="address" value="" placeholder="Address" required/>
											</div>
											<div class="6u$ 12u$(xsmall)">
												<input type="text" name="city" id="city" value="" placeholder="City, State, Zip" required/>
											</div>
											<div class="4u 12u$(small)">
												<input type="radio" id="priority-low" name="priority" checked>
												<label for="priority-low">Slow Shipping</label>
											</div>
											<div class="4u 12u$(small)">
												<input type="radio" id="priority-normal" name="priority">
												<label for="priority-normal">Normal Shipping</label>
											</div>
											<div class="4u$ 12u$(small)">
												<input type="radio" id="priority-high" name="priority">
												<label for="priority-high">Fast Shipping</label>
											</div>
											<div class="6u 12u$(small)">
												<input type="checkbox" id="copy" name="copy">
												<label for="copy">Email me a copy</label>
											</div>
											<div class="6u$ 12u$(small)">
												<input type="checkbox" id="human" name="human" checked>
												<label for="human">Not a robot</label>
											</div>
											<div class="12u$">
												<textarea name="message" id="message" placeholder="Additional comments..." rows="6"></textarea>
											</div>
											<div class="12u$">
												<ul class="actions">
													<li><input type="submit" value="Confirm Purchase" class="special" /></li>
													<li><input type="reset" value="Return to Cart" onclick="location.href='./ViewCart.php'" /></li>
												</ul>
											</div>
										</div>
									</form>
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
										<li><input type="submit" value="Send" class="special" /></li>
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