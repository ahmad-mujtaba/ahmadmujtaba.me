<?php

	if($_SERVER["SERVER_ADDR"] === "::1") {	
		include("config.dev.php");
	} else {
		include("config.prod.php");
	}

?>