<?php
	$dbopts = parse_url(getenv('DATABASE_URL')); $app->register(new Herrera\Pdo\PdoServiceProvider(),                array(                    'pdo.dsn' => 'pgsql:dbname='.ltrim($dbopts["path"],'/').';host='.$dbopts["host"] . ';port=' . $dbopts["port"],                    'pdo.username' => $dbopts["user"],                    'pdo.password' => $dbopts["pass"]                ) );
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
			font-size: 100px;
			font-family: Menlo, Monaco, fixed-width;
			height: 100%;
			width: 100%;
			display: flex;
			position: fixed;
			align-items: center;
			justify-content: center;
		}
	</style>
</head>
<body>
	<h1>Here are the database results:</h1>

	<?php
		$psql = "SELECT * FROM scriptures";
		$result = $dbopts->query($psql); foreach ($result as $row){   
			echo "<tr>";   
			echo "<td>" . $row['book'] . "</td>";   
			echo "<td>" . $row['chapter'] . "</td>";   
			echo "<td>" . $row['verse'] . "</td>";   
			echo "<td>" . $row['content'] . "</td>";  
			echo "</tr>";
		}
	?>

</body>
</html>