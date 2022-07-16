<!--Name: Fares Mohamed -->
<!--Class: CMPT 241 Web Programming -->
<!--matches-submit.php reads the matches.php results using GET method and matches users together based on certain guidelines-->

<?php include("top.html"); ?> <!--top.html with a header logo-->

<head>
	<link href = "nerdluv.css" type = "text/css" rel = "stylesheet"/>
</head>

<!--Getting the name using GET-->
<p>
<?php
	$name = $_GET["name"];
?>
<strong> Matches for <?= $name ?> </strong>
</p>


<?php
	$single_file = file("singles.txt");
	//Reading the contents from signles.txt related to the user that is looking for a match
	foreach ($single_file as $singles){
		$user_info = explode (",", $singles);
		$compare_name = strcmp ($name, $user_info[0]); //compare the names
		
		if ($compare_name === 0){
			$user_information = $user_info;
		}
	}
	
	//Reading the contents from signles.txt related to the matching user
	foreach ($single_file as $single){
		$matching_user = explode (",", $single);
		
		//compare both user gender and matching user gender. If both are the same, we skip and continue to search for opposite gender matches.
		$compare_gender = strcmp ($user_information[1], $matching_user[1]);
		if ($compare_gender === 0){
			$gender = false;
			if ($gender == false){
				continue;
			}
			else {
				break;
			}
		}
		
		//compare the compatible ages and if each person (user and matching user) is not between the other's min and max, continue looking for other candidates who are between the min and max. 
		$compare_user_min = $matching_user[2] < $user_information[5];
		$compare_user_max = $matching_user[2] > $user_information[6];
		$compare_match_min = $matching_user[5] > $user_information[2];
		$compare_match_max = $matching_user[6] < $user_information[2];
		if (($compare_user_min || $compare_user_max) || ($compare_match_min || $compare_match_max)){
			$age = false;
			if ($age == false){
				continue;
			}
			else {
				break;
			}
		}
		
		//compare both user OS and matching user OS. If both are different, we skip and continue to search for matches with the same favorite OS.
		$compare_OS = strcmp ($user_information[4], $matching_user[4]);
		if ($compare_OS !== 0){
			$OS = false;
			if ($OS == false){
				continue;
			}
			else {
				break;
			}
		}
		
		//compare both user personality and matching user personality. If both are different, we skip and continue to search for matches with at least one similar personality letter.
		$count = 0;
		for ($i = 0; $i < strlen($user_information[3]); $i++){
			$compare_personality = strcmp (($user_information[3][$i]),($matching_user[3][$i]));
			if ($compare_personality === 0){
				$count = $count + 1;
			}
		}
		
		if ($count < 1){
			$personality = false;
			if ($personality == false){
				continue;
			}
			else {
				break;
			}
		}
?>

<!-- Displaying the results of the match using unordered list-->
<div class = "match">
<p> 
	<img src = "user.jpg" /> 
	<?= $matching_user[0]?>
</p>

<ul>
	<li><strong>gender:</strong><?= $matching_user[1]?></li>
	<li><strong>age:</strong>	<?= $matching_user[2] ?></li>
	<li><strong>type:</strong>	<?= $matching_user[3] ?></li>
	<li> <strong>OS:</strong>	<?= $matching_user[4] ?></li>

</ul>
</div>

<?php
}
?>

<?php include("bottom.html"); ?> <!--bottom.html with footer notes-->
