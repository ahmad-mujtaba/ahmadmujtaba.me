<?php 


$requestUri = substr($_SERVER["REQUEST_URI"], 1);

if($requestUri === "") {

}elseif(file_exists("ahmadmujtaba.me/".$requestUri)) {
    include($requestUri);
} else {
    include("HTTP404.html");
}


?>
