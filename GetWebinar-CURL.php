<?php
ini_set('error_reporting', E_ALL);

require_once(__DIR__ . '/vendor/autoload.php');
use \Firebase\JWT\JWT;


$issuedAt = time();
$expirationTime = $issuedAt + 60;  // jwt valid for 60 seconds from the issued time
$payload = array(
  'iss' => 'API_KEY',
  'exp' => $expirationTime
);
$key = API_SECRET;
$alg = 'HS256';
$jwt = JWT::encode($payload, $key, $alg);

$webinar_id='WEBINAR_ID';

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.zoom.us/v2/webinars/".$webinar_id,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer ".$jwt,
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

$get_webinar = json_decode($response);

?>