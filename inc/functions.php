<?php

function yearsSince($date){
    $now = time();
    $then = strtotime($date);
    
    return round(($now-$then)/(60*60*24*365), 1) . " years";
}
	
	

?>
