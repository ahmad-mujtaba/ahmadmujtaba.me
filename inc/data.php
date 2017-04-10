<?php

	$skills = array(
		"JS/jQuery" 		=> 8,		
		"CSS/SASS"		=> 9,
		"HTML 5"		=> 9,
		"php"			=> 7,
		"Vue JS"		=> 3,
		"Java"			=> 5,
		"Phonegap/Cordova"	=> 6
	);
	
	
	arsort($skills);	
	
	$skillsHtml = "";
	foreach($skills as $tech => $rating) {
		$skillsHtml.="<tr>";
		$skillsHtml.="<td class='tech'>$tech</td>";
		$skillsHtml.="<td class='rating' data-val='$rating'>".$rating."/10</td>";
		$skillsHtml.="</tr>";
		
	}
	
	

?>
