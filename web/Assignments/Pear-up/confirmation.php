<?php
	session_start();
	$db = NULL;
	try {
		$dbUrl = getenv('DATABASE_URL');
		$dbopts = parse_url($dbUrl);
		$dbHost = $dbopts["host"];
		$dbPort = $dbopts["port"];
		$dbUser = $dbopts["user"];
		$dbPassword = $dbopts["pass"];
		$dbName = ltrim($dbopts["path"],'/');
		$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
		$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}
	catch (PDOException $ex) {
		echo "Error connecting to DB. Details: $ex";
		die();
	}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Pear-Up</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!-- Refresh after 5 seconds -->
		<meta http-equiv="refresh" content="5;url=./index.php" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<h3>Profile updated!</h3>
						<p>Redirecting in 5 seconds...</p>
						<?php
							$name = $_POST[name];
							$age = $_POST[age];
							$city = $_POST[city];
							$state = $_POST[state];
							$email = $_POST[email];
							$factone = $_POST[factone];
							$facttwo = $_POST[facttwo];
							$factthree = $_POST[factthree];
							echo $name . $age . $city . $state . $email . $factone . $facttwo . $factthree;

							$query;

							if ($_GET['task'] === 'insert') {
							$query = 'INSERT INTO user_info(name, age, city, state, email, factone, facttwo, factthree) VALUES(:name, :age, :city, :state, :email, :factone, :facttwo, :factthree)';
							}

							$statement = $db->prepare($query);
							$statement->bindValue(':name', $name);
							$statement->bindValue(':age', $age);
							$statement->bindValue(':city', $city);
							$statement->bindValue(':state', $state);
							$statement->bindValue(':email', $email);
							$statement->bindValue(':factone', $factone);
							$statement->bindValue(':facttwo', $facttwo);
							$statement->bindValue(':factthree', $factthree);
							$statement->execute();
						?>
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