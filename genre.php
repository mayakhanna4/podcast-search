 <?php
 header("Access-Control-Allow-Origin: *");
 $name=$_REQUEST["id"];
 $url="https://www.gpodder.net/api/2/tag/".$name."/25.json";
 $json = (file_get_contents($url));
 echo($json);
 ?>
