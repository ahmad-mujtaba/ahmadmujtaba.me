<?php

    $rootFolder = "ahmadmujtaba.me";
    $index = "index.html";
    $requestUri = $_SERVER["REQUEST_URI"];

    if($requestUri === "/") {
        include($index);
    } elseif (file_exists($rootFolder.$requestUri)) {
        include($requestUri);
    } else {
        include("HTTP404.html");
    }


?>
