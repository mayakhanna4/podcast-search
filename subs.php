 <?php
 header("Access-Control-Allow-Origin: *");
 $name=$_REQUEST["id"];
 $url="https://www.gpodder.net/subscriptions/".$name.".json";
 $json = (file_get_contents($url));
 echo($json);
 console.log("got to subs.php")
 console.log($json);
 /*$request = new HttpRequest();
$request->setUrl('https://gpodder.net/api/2/auth/mayakhanna4/login.json');
$request->setMethod(HTTP_METH_POST);

$request->setHeaders(array(
  'Postman-Token' => 'bffef3db-40dc-4d35-8000-fe7685654d94',
  'Cache-Control' => 'no-cache',
  'Authorization' => 'Basic bWF5YWtoYW5uYTQ6QXBwbGVzYXVjZXRqMTIz'
));

try {
  $response = $request->send();
  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
} */
 ?>
