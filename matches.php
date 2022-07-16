<!--Name: Fares Mohamed -->
<!--Class: CMPT 241 Web Programming -->
<!--matches.php creates a form to search for name to match with another person.-->

<?php include("top.html"); ?> <!--top.html with a header logo-->

<head>
	<link href = "nerdluv.css" type = "text/css" rel = "stylesheet"/>
</head>

<form action =  "https://turing.manhattan.edu/~fmohamed01/project4/matches-submit.php" method="Get">
<fieldset>
	<legend> Returning User: </legend>
	
	<!--Labeled Field: Name -->
	<p class = "*">
		<label for = "Name"> <strong> Name: </strong> </label>
		<input  name = "name" type = "text" size="16" /> 
	</p>
	
	<input type = "submit" value="View My Matches"/>

</fieldset>
</form>
<?php include("bottom.html"); ?> <!--bottom.html with footer notes-->
