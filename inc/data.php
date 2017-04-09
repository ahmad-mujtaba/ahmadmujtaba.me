<?php

	$skills = array(
		"JavaScript" 	=> 8,
		"jQuery"		=> 9,
		"CSS"			=> 8,
		"HTML"			=> 9,
		"php"			=> 6,
		"Vue JS"		=> 3,
		"Java"			=> 5			
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
