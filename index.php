<html>

<head>
  <meta charset="utf-8" />
</head>

<body style="background-color:#27344e; color:white;" align="center">
	<br>
	<?php
		$conn = mysqli_connect("localhost", "root", "", "flashcards_demo");
		
		if (!$conn)
		{ return "Connection failed"; }
		$query = "show tables";
		$result = mysqli_query($conn, $query);
		echo "<h1 style='font-size:60px'>Team 39 Flashcards</h1>";
		echo "<form action='workspace/flashcards.php'>";
		echo "<label style='font-size:50px'>Select Class: </label><br>";
		while ($row = mysqli_fetch_row($result)) {
			echo "<input type='radio' name='class' id='$row[0]' value='$row[0]'><label for='$row[0]' style='font-size:40px'>".ucwords($row[0])."</label><br>";
		}
		echo "<input type='submit' value='Show Class' style='font-size:20px'>";
		echo "</form>"
	?>
</body>

</html>