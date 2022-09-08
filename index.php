<html>

<head>
  <link type="text/css" rel="stylesheet" media="all" href="workspace/dist/styles/h5p.css" />
  <meta charset="utf-8" />
</head>

<body style="background-color:#27344e; color:white; font-family:sans-serif; margin-top:7.5%" align="center">
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
		echo "<br>";
		echo "<input type='submit' value='Show Class' class='show'>";
		echo "</form>"
	?>
</body>

</html>