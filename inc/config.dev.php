<?php

	define("SITE_ROOT", "http://localhost/ahmadmujtaba.me");	
	$staticAssetsVersion = "?v=".substr(md5(time().SITE_ROOT),0,6);	// random for dev for quick save -> refresh
	
?>