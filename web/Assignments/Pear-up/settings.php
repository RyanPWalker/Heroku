<?php
	session_start();
	
	require("dbConnect.php");
	$db = get_db();
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
										<h2>Edit Pearfile</h2>
										<p>Make the adjustments, then click <em>Submit</em> to save.</p>
									<form method="post" action="./confirmation.php?task=update">
										<div class="row uniform">
											<div class="6u 12u(xsmall)"><input type="text" name="name" id="name" placeholder="Name" autofocus /></div>
											<div class="6u 12u(xsmall)">
													<div class="select-wrapper">
														<select name="age" id="age">
															<option value="0">- Select Age -</option>
															<?php
																$count = 1;
																for ($x = 0; $x < 100; $x++) {
															  	echo '<option value="' . $count . '">' . $count . '</option>';
															  	$count++;
																}
															?>
														</select>
													</div>
												</div>
										</div>
										<div class="row uniform">
											<div class="6u 12u(xsmall)"><input type="text" name="city" id="city" placeholder="HomeTown" /></div>
											<div class="6u 12u(xsmall)"><input type="text" name="state" id="state" placeholder="State" /></div>
										</div>
										<div class="row uniform">
											<div class="12u"><input type="email" name="email" id="email" placeholder="Email" /></div>
										</div>
										<div class="row uniform">
											<div class="12u"><input type="text" name="factone" id="factone" placeholder="Fun Fact One" /></div>
										</div>
										<div class="row uniform">
											<div class="12u"><input type="text" name="facttwo" id="facttwo" placeholder="Fun Fact Two" /></div>
										</div>
										<div class="row uniform">
											<div class="12u"><input type="text" name="factthree" id="factthree" placeholder="Fun Fact Three" /></div>
										</div>
										<div class="row uniform">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" class="special" value="Submit" /></li>
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