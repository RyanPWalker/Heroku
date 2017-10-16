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

		echo urldecode($_GET['scripture']);

		if ($_SESSION["book"] == 'John' || 'john') {
			echo "Although the Gospel of John is anonymous, Christian tradition historically has attributed it to John the Apostle, son of Zebedee and one of Jesus' Twelve Apostles. The gospel is so closely related in style and content to the three surviving Johannine epistles that commentators treat the four books, along with the Book of Revelation, as a single corpus of Johannine literature, albeit not necessarily written by the same author.";
		}

		if ($_SESSION["book"] == '1 Nephi') {
			echo "The First Book of Nephi: His Reign and Ministry, often referred to simply as First Nephi, is the first book of the Book of Mormon and one of four books with the name Nephi. The original translation of the title did not include the word 'first'. First and Second were added to the titles of The Books of Nephi by Oliver Cowdery when preparing the book for printing. It is a first-person narrative by a prophet named Nephi, of events that began around 600 BC and recorded on the small plates of Nephi approximately 30 years later. Its 22 chapters tell the story of one family's challenges and the miracles they witness as they escape from Jerusalem, struggle to survive in the wilderness, build a ship and sail to the Americas. The book is composed of two intermingled genres; one a historical narrative describing the events and conversations that occurred and the other a recording of visions, sermons, poetry, and doctrinal discourses as shared by either Nephi or Lehi to members of the family.";
		}	

		if ($_SESSION["book"] == 'D&C') {
			echo "The Doctrine and Covenants (sometimes abbreviated and cited as D&C or D. and C.) is a part of the open scriptural canon of several denominations of the Latter Day Saint movement. Originally published in 1835 as Doctrine and Covenants of the Church of the Latter Day Saints: Carefully Selected from the Revelations of God, editions of the book continue to be printed mainly by The Church of Jesus Christ of Latter-day Saints (LDS Church) and the Community of Christ (formerly the Reorganized Church of Jesus Christ of Latter Day Saints (RLDS Church)).";
		}

		if ($_SESSION["book"] == 'Alma' || 'alma') {
			echo "The Book of Alma (/ˈæl.mə/[1]) is one of the books that make up the Book of Mormon. The full title is The Book of Alma: The Son of Alma. The title refers to Alma the Younger, a prophet and 'chief judge' of the Nephites.";
		}

		if ($_SESSION["book"] == 'Mosiah' || 'mosiah') {
			echo "There are two individuals named Mosiah in the Book of Mormon. They were grandfather and grandson, respectively, and both served as king of the Nephites at Zarahemla.";
		}

		if ($_SESSION["book"] == 'Isaiah' || 'isaiah') {
			echo "Within the text of the Book of Isaiah, Isaiah himself is referred to as 'the prophet', but the exact relationship between the Book of Isaiah and any such historical Isaiah is complicated. The traditional view is that all 66 chapters of the book of Isaiah were written by one man, Isaiah, possibly in two periods between 740 BCE and c. 686 BCE, separated by approximately 15 years, and includes dramatic prophetic declarations of Cyrus the Great in the Bible, acting to restore the nation of Israel from Babylonian captivity. Another widely-held view is that parts of the first half of the book (chapters 1–39) originated with the historical prophet, interspersed with prose commentaries written in the time of King Josiah a hundred years later, and that the remainder of the book dates from immediately before and immediately after the end of the exile in Babylon, almost two centuries after the time of the historic prophet.";
		}
		
	?>

</body>
</html>