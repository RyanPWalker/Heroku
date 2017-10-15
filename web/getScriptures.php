<?php
session_start();
?>
<!DOCTYPE HTML>
<head>
	<title>Scriptures Resources!</title>
	<style>
		body {
			background-color: #eeeeee;
		}
		
		h1 {
			color: rgb(0,100,200);
			font-size: 50px;
			font-family: Menlo, Monaco, fixed-width;
			height: 100%;
			width: 100%;
		}
	</style>
</head>
<body>
	<h1>Here are the database results:</h1>

	<form action="getScriptures.php">
			<input type="text" name="book">
			<button>Submit</button>
	</form>

	<?php
		$showBook = $_POST[book];
		$db = $_SESSION["database"];
		echo $showBook;
		$statement = $db->prepare("SELECT * FROM scriptures WHERE book = $showBook");
		$statement->execute();
		echo "Made it this far";
		while ($row = $statement->fetch(PDO::FETCH_ASSOC))
		{
			echo '<p>';
			echo '<strong>' . $row['book'] . ' ' . $row['chapter'] . ':';
			echo $row['verse'] . '</strong>' . ' - ' . $row['content'];
			echo '</p>';
		}
	?>

</body>
</html>
