<?php
	session_start();

	if ($_SESSION['online'] != true) {
		/* Redirect browser */
		header("Location: ./signIn.php");
		exit();
	}

	$_SESSION['latitude'] = $_POST['latitude'];
	$_SESSION['longitude'] = $_POST['longitude'];

	require("dbConnect.php");
	$db = get_db();

	$query = "SELECT * FROM user_info WHERE name ='" . $_SESSION['name'] . "'";
	$statement = $db->prepare($query);
	$statement->execute();
	while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
		$_SESSION['age'] = $row['age'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['city'] = $row['city'];
		$_SESSION['state'] = $row['state'];
		$_SESSION['factone'] = $row['fact_one'];
		$_SESSION['facttwo'] = $row['fact_two'];
		$_SESSION['factthree'] = $row['fact_three'];
	}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Pear-Up</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="./gps.js"></script>
		<style type="text/css">
			h4 {
				margin: 1em 0 0 0;
			}
		</style>
	</head>
	<body>

		<!-- Header -->
			<section id="header">
				<header>
					<span class="image avatar"><img src="images/avatar.jpg" alt="" /></span>
					<h1 id="logo"><a href="#"><?php echo $_SESSION['name']; ?></a></h1>
					<p>I got reprogrammed by a rogue AI<br />
					and now I'm totally cray</p>
				</header>
				<nav id="nav">
					<ul>
						<li><a href="#one" class="active">Find People</a></li>
						<li><a href="#three">About Me</a></li>
						<li><a href="#four">Contact</a></li>
						<li><a href="./settings.php">Settings</a></li>
					</ul>
				</nav>
				<footer>
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
					</ul>
				</footer>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one">
								<img src="./images/banner.jpg" style="display: block; margin: 0 auto; height: 150px; width: 225px">
								<div class="container">
									<header class="major">
										<h2>Pear-Up</h2>
										<p>Just a flippin awesome website where you can meet cool peeps</p>
									</header>
									<h3>Meet new people (Feature Coming Soon- in development!)</h3>
									<p>Browse below to see people close to you within walking distance</p>
									<div class="features">
										<article>
											<a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
											<div class="inner">
												<h4>Jimbo Smith</h4>
												<p>Hi I'm your new friend, come find me!</p>
												<p><?php echo $_SESSION['latitude'] . ' ' . $_SESSION['longitude']; ?></p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic02.jpg" alt="" /></a>
											<div class="inner">
												<h4>Katy Perry</h4>
												<p>Hi I'm your new friend, come find me!</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic03.jpg" alt="" /></a>
											<div class="inner">
												<h4>Justin Bieber</h4>
												<p>Hi I'm your new friend, come find me!</p>
											</div>
										</article>
									</div>
								</div>
							</section>

						<!-- Three -->
							<section id="three">
								<div class="container">
									<h2>About Me</h2>
									<ul class="alt">
										<?php
											echo '<h4>Name</h4>';
											echo '<li>' . $_SESSION['name'] . '</li>';
											echo '<h4>Age</h4>';
											echo '<li>' . $_SESSION['age'] . '</li>';
											echo '<h4>Email</h4>';
											echo '<li>' . $_SESSION['email'] . '</li>';
											echo '<h4>City</h4>';
											echo '<li>' . $_SESSION['city'] . '</li>';
											echo '<h4>State</h4>';
											echo '<li>' . $_SESSION['state'] . '</li>';
											echo '<h4>Fact One</h4>';
											echo '<li>' . $_SESSION['factone'] . '</li>';
											echo '<h4>Fact Two</h4>';
											echo '<li>' . $_SESSION['facttwo'] . '</li>';
											echo '<h4>Fact Three</h4>';
											echo '<li>' . $_SESSION['factthree'] . '</li>';
										?>
									</ul>
								</div>
							</section>

						<!-- Four -->
							<section id="four">
								<div class="container">
									<h3>Ask Questions or Get Help</h3>
									<form method="post" action="#">
										<div class="row uniform">
											<div class="6u 12u(xsmall)"><input type="text" name="name" id="name" placeholder="Name" /></div>
											<div class="6u 12u(xsmall)"><input type="email" name="email" id="email" placeholder="Email" /></div>
										</div>
										<div class="row uniform">
											<div class="12u"><input type="text" name="subject" id="subject" placeholder="Subject" /></div>
										</div>
										<div class="row uniform">
											<div class="12u"><textarea name="message" id="message" placeholder="Message" rows="6"></textarea></div>
										</div>
										<div class="row uniform">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" class="special" value="Send Message" onclick="alert('Message sent.')" /></li>
													<li><input type="reset" value="Reset Form" /></li>
												</ul>
											</div>
										</div>
									</form>
								</div>
							</section>
						

					</div>

				<!-- Footer -->
					<section id="footer">
						<div class="container">
							<ul class="copyright">
								<li>&copy; Pear-Up. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>