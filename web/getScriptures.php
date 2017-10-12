<?php
	$statement = $db->prepare("SELECT * FROM scriptures WHERE book = $_POST[book]");
		$statement->execute();
		// Go through each result
		while ($row = $statement->fetch(PDO::FETCH_ASSOC))
		{
			echo '<p>';
			echo '<strong>' . $row['book'] . ' ' . $row['chapter'] . ':';
			echo $row['verse'] . '</strong>' . ' - ' . $row['content'];
			echo '</p>';
		}
?>
