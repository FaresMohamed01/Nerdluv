<!--Name: Fares Mohamed -->
<!--Class: CMPT 241 Web Programming -->
<!--signup-submit.php reads the sign-up.php results using POST method-->

<?php include("top.html"); ?> <!--top.html with a header logo-->

<head>
	<link href = "nerdluv.css" type = "text/css" rel = "stylesheet"/>
</head>

<p id = "*">
	<strong> Thank you! </strong>
</p>

<?php
	// Read the user's form inputs using POST
	$Name = $_POST["Name"];
	$Gender = $_POST["Gender"];
	$Age = $_POST["Age"];
	$personality_type = $_POST["personality_type"];
	$favorite_OS = $_POST["favorite_OS"];
	$min = $_POST["min"];
	$max = $_POST["max"];
	
	//create a new line in singles.txt with the new user information (Add to the file)
	$new_signup = "$Name,$Gender,$Age,$personality_type,$favorite_OS,$min,$max";
	file_put_contents("singles.txt", "\n".$new_signup, FILE_APPEND);
?>

<p id = "*">
	Welcome to NerdLuv, <?=$_POST["Name"]?>! <!--print the name of the new user-->
</p>


<p id = "*">
	Now <a href=matches.php>login in to see your matches! </a> <!--Connects to matches.php-->
</p>

<?php include("bottom.html"); ?> <!--bottom.html with footer notes-->
