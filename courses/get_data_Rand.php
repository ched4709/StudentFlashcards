<?php
//authors: Dimitrija, Riley and Zac

	function get_data($table_name) //name of table in database corresponds to class the student is in
	{
		// variable to establish connection to the database
		$conn = mysqli_connect("localhost", "root", "", "flashcards_demo");
		
		// error checking
		if (!$conn)
		{ return "Connection failed"; }
		$query = "SELECT * FROM $table_name ORDER BY RAND()"; // flashcards display in random order
		$result = mysqli_query($conn, $query);
		$cards = "";
		while($row = mysqli_fetch_array($result))
		{
			$name = explode(" ",$row["Name"]);

			//picture file names are their student ID's and are stored in folders based on class, assigns filename to correct path for individual student
			$filename = "flashcards/content/images/".$table_name."/".$row["StudentID"].".jpg"; 

			if (file_exists($filename)) //checks if file path exists, if not, assign image to 'anon.jpg' otherwise set image to respective student picture
			{
				$cards .= '{"answer": "'.$name[0].'", "image": {"path": "images/'.$table_name.'/'.$row["StudentID"].'.jpg", "width": 889, "height": 594}, "tip": "'.$row["Name"].'"},';
			} 
			else 
			{
				$cards .= '{"answer": "'.$name[0].'", "image": {"path": "images/anon.jpg", "width": 889, "height": 594}, "tip": "'.$row["Name"].'"},';
			}	
		}
		
		// returns necessary meta data for flashcards to read from
		return '{"cards": ['.rtrim($cards, ',').'],
		"progressText": "Card @card of @total",
		"next": "Next",
		"previous": "Previous",
		"checkAnswerText": "Check", 
		"showSolutionsRequiresInput": true,
		"defaultAnswerText": "Your answer",
		"correctAnswerText": "Correct",
		"incorrectAnswerText": "Incorrect",
		"showSolutionText": "Correct answer",
		"results": "Results",
		"ofCorrect": "@score of @total correct",
		"showResults": "Show results",
		"answerShortText": "A:",
		"retry": "Retry",
		"caseSensitive": false,
		"description": "'.ucfirst($table_name).'",
		"cardAnnouncement": "Incorrect answer. Correct answer was @answer",
		"correctAnswerAnnouncement": "@answer is correct.",
		"pageAnnouncement": "Page @current of @total"}';
	}

	//calls above get data function and writes it to content.json file to be read by flashcards
	function create_content($table_name)
	{
		file_put_contents("flashcards/content/content.json", get_data($table_name), FILE_USE_INCLUDE_PATH);
	}
	
?>