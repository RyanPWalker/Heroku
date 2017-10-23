<?php
	session_start();

	// Temporary until I add a password hash
	$_SESSION['online'] = true;

	require("dbConnect.php");
	$db = get_db();

	$name = $_POST[name];
	$_SESSION['name'] = $name;
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Pear-Up</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one">
								<img src="./images/banner.jpg" style="display: block; margin: 0 auto; height: 150px; width: 225px">
								<div class="container">
									<header class="major">
										<h2>Sign In</h2>
									<form method="post" action="./signIn.php">
										<div class="row uniform">
											<div class="6u 12u(xsmall)"><input type="text" name="name" id="name" placeholder="Name" autofocus /></div>
											<div class="6u 12u(xsmall)"><input type="text" name="password" id="password" placeholder="Password" /></div>
										</div>
										<div class="row uniform">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" class="special" value="Log in!" /></li>
													<li><input type="button" onclick="location.href='./createProfile.php'" value="Create Account" /></li>
												</ul>
												<?php

													try {
														//$query = 'SELECT name FROM user_info WHERE name = ":name"';
														$query = "SELECT name FROM user_info WHERE name ='" . $name . "'";
														$statement = $db->prepare($query);
														//$statement->bindValue(':name', $name, PDO::PARAM_STR);
														$statement->execute();
														while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
															$foundName = $row['name'];
														}
													} catch (Exception $e) {
														if (($foundName == NULL) && ($name != NULL)) {
															echo '<strong style="color:red">Username not found.</strong>';
														}
													}
													
													if ($foundName != NULL) {
														header("Location: ./index.php");
														exit();
													}

												?>
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