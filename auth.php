<?php
 header("Access-Control-Allow-Origin: *");
 $url = "https://www.gpodder.net/api/2/auth/mayakhanna4/login.json";
 $json = (file_get_contents($url));
 echo($json);
?>
