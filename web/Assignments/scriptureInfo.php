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
	<h1>Information on <?php echo $_SESSION["book"] ?>:</h1>

	<?php
	echo "MAde it this far";

		if ($_SESSION["book"] == 'John') {
			echo "Info on John";
		}
		
	?>

</body>
</html>