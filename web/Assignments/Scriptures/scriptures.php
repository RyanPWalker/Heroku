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
<head>
	<title>Scriptures Resources!</title>
	<style>
		body {
			background-color: #eeeeee !important;
		}
		
		h1 {
			color: rgb(0,100,200);
			font-size: 50px;
			font-family: Menlo, Monaco, fixed-width;
			height: 100%;
			width: 100%;
		}
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
	<h1>Search your favorite scriptures by book name:</h1>
	<div class="panel panel-default">
  		<div class="panel-heading">
			<form action="scriptures.php" method="post">
				<input type="text" name="book">
				<input type="submit" value="Search!" name="whateveryouwant">
				<p style="display: inline; font-size: 10"> <span class="glyphicon glyphicon-chevron-right"></span> Search 'ALL' to see all available scriptures!</p>
			</form>
		</div>

	<div class="panel-body">
	<?php
		if ($_POST[book] != NULL) {
			$_SESSION["book"] = $_POST[book];
		}
		$searchBook = $_SESSION["book"];

		// This allows users to search without 
		// having to capitalize the first letter
		$searchArray = str_split($searchBook);
		$searchArray[0] = '_';
		$searchArray = implode("", $searchArray);
		
		// Storing the database into a session doesn't seem to work.
		//$db = $_SESSION["database"];
		$statement = $db->prepare("SELECT * FROM scriptures WHERE book LIKE'" . $searchArray . "'");
		if ($searchBook == 'ALL') {
			$statement = $db->prepare("SELECT * FROM scriptures");
		}
		$statement->execute();
		while ($row = $statement->fetch(PDO::FETCH_ASSOC))
		{
			// urlencode allows me to pass strings with '&' without
			// ruining the string
			echo '<p>';
			echo '<strong><a href="scriptureInfo.php?scripture='.urlencode($row['book']).'" method="post">' . $row['book'] . '</a> ' . $row['chapter'] . ':';
			echo $row['verse'] . '</strong>' . ' - ' . $row['content'];
			echo '</p>';
		}
	?>
	</div>
</div>
<div class="panel panel-default">
	<?php
	$statement = $db->prepare("SELECT topic_name FROM topic;");
		$statement->execute();
	?>
  		<div class="panel-heading">
			<form action="scriptures.php" method="post">
				<input type="text" name="book">
				<input type="text" name="chapter">
				<input type="text" name="verse">
				<textarea type="text" name="content"></textarea>
				<?php   while($devResult = $statement->fetch(PDO::FETCH_ASSOC) {        echo "<input type='checkbox' name=" .          $devResult['topic_name'] . "value='" .          $devResult['topic_name'] . ">" .          $devResult['topic_name'] . "</input>"; }  ?>
				<input type="submit" value="Update!" name="whateveryouwant">
			</form>
		</div>

	<div class="panel-body">
	<?php
		if ($_POST[book] != NULL) {
			$_SESSION["book"] = $_POST[book];
		}
		if ($_POST[chapter] != NULL) {
			$_SESSION["chapter"] = $_POST[chapter];
		}
		if ($_POST[verse] != NULL) {
			$_SESSION["verse"] = $_POST[verse];
		}
		if ($_POST[content] != NULL) {
			$_SESSION["content"] = $_POST[content];
		}
		$searchBook = $_SESSION["book"];


		
		// Storing the database into a session doesn't seem to work.
		//$db = $_SESSION["database"];
		$statement = $db->prepare("SELECT s.id AS Scripture_id, s.book AS Book, s.verse AS Verse, s.chapter AS Chapter, s.content AS Content, t.topic_name AS Topic FROM common_lookup AS cl INNER JOIN scriptures AS s ON         s.id = cl.scipture  INNER JOIN topic AS t ON t.topic_id = cl.topic;");
		$statement->execute();
		while ($row = $statement->fetch(PDO::FETCH_ASSOC))
		{
			// urlencode allows me to pass strings with '&' without
			// ruining the string
			echo '<p>';
			echo '<strong><a href="scriptureInfo.php?scripture='.urlencode($row['book']).'" method="post">' . $row['book'] . '</a> ' . $row['chapter'] . ':';
			echo $row['verse'] . '</strong>' . ' - ' . $row['content'];
			echo $row['topic_name'];
			echo '</p>';
		}
	?>
	</div>
</div>
</div>

</body>
</html>