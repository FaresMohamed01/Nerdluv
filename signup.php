<!--Name: Fares Mohamed -->
<!--Class: CMPT 241 Web Programming -->
<!--signup.php creates a HTML form where singles can sign up on nerdLuv.-->

<?php include("top.html"); ?> <!--top.html with a header logo-->

<head>
	<link href = "nerdluv.css" type = "text/css" rel = "stylesheet"/>
</head>

<!--Form with POST method referencing to signup-submit.php-->
<form action = "https://turing.manhattan.edu/~fmohamed01/project4/signup-submit.php" method="Post">
<fieldset>
	<body>
		<legend> New User Signup: </legend>
	</body>
	
	<!--Labeled Field: Name-->
	<h1 class = "*">
		<label for = "Name"> <strong> Name: </strong> </label>
		<input  name = "Name" type = "text" size="16" >
	</h1>
	
	<!--Labeled Field: Gender-->
	<label for = "Gender"> <strong> Gender: </strong> </label>
	<input name = "Gender" type = "radio" value = "M"> Male 
	<input type = "radio" name = "Gender" value = "F" checked = "checked" > Female 
	<br>
	<br>
	
	<!--Labeled Field: Age-->
	<h1 class = "*">
		<label for = "Age"> 
		<strong> Age: </strong> 
		<input name = "Age" type = "text" size = "6" maxlength = "2" > 
		</label>
	</h1>
	
	
	<!--Labeled Field: Personality Check-->
	
	<label for = "personality_type"> <strong> Personality type: </strong> </label>
	<input name = "personality_type" type = "text" size = "6" maxlength = "4"/> 
	<a href="https://www.humanmetrics.com/personality">(Don't know your type?)</a> 
	<br>
	<br>
	
	<!--Labeled Field: OS-->
	<h1 class = "*">
		<label for = "favorite_OS"> <strong> Favorite OS: </strong> </label> 
		<select name = "favorite_OS" id = "favorite OS"> 
			<option value = "Windows"> Windows </option>
			<option value = "Mac OS X"> Mac OS X </option>
			<option value = "Linux"> Linux </option>
		</select> 
	</h1>
	
	<!--Labeled Field: Seeking Age-->
	<label for = "Seeking_Age"> <strong> Seeking age: </strong> </label> 
	<input name = "min" type = "text" placeholder = "min"  size = "6" maxlength = "2"> to <input name = "max" type = "text" placeholder = "max"  size = "6" maxlength = "2"> 
	<br>
	
	<!-- Submit to proceed to signup-submit.php -->
	<input type = "submit" value="Sign Up">

</fieldset>
</form>
<?php include("bottom.html"); ?> <!--bottom.html with footer notes-->
