<?php

if(!strpos($_SERVER["SERVER_SOFTWARE"], "Win")) {
	// prod
	include("config.prod.php");
} else {
	// dev
	include("config.dev.php");
}

?>