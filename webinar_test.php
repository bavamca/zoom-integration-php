<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJhdWQiOm51bGwsImlzcyI6IkFvV0dsVm9XUTZ5cGJmR3pJMUFUcUEiLCJleHAiOjE1NjkyNTQwNjIsImlhdCI6MTU2OTI0ODY2M30.ciql4XeXBvXS_M1sXlV_tTfxIru24ggslmrWVcbFC88');


// eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJhdWQiOm51bGwsImlzcyI6IkFvV0dsVm9XUTZ5cGJmR3pJMUFUcUEiLCJleHAiOjE1NjkyNTQwNjIsImlhdCI6MTU2OTI0ODY2M30.ciql4XeXBvXS_M1sXlV_tTfxIru24ggslmrWVcbFC88
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');


// Configure API key authorization: global
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 56; // int | The webinar ID
$occurrence_id = "occurrence_id_example"; // string | The meeting occurrence ID
$status = "approved"; // string | The registrant status
$page_size = 30; // int | The number of records returned within a single API call
$page_number = 1; // int | Current page number of returned records

try {
    $result = $apiInstance->webinarRegistrants($webinar_id, $occurrence_id, $status, $page_size, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarRegistrants: ', $e->getMessage(), PHP_EOL;
}
?>