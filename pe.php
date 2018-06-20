 <?php
 header("Access-Control-Allow-Origin: *");
 $name=$_REQUEST["id"];
 $url="https://www.gpodder.net/search.json?q=".$name."/";
 $json = (file_get_contents($url));
 echo($json);
 ?>
