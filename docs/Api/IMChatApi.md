# Swagger\Client\IMChatApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**imChatMessages**](IMChatApi.md#imChatMessages) | **GET** /im/chat/sessions/{sessionId} | Retrieve IM Chat messages
[**imChatSessions**](IMChatApi.md#imChatSessions) | **GET** /im/chat/sessions | Retrieve IM Chat sessions


# **imChatMessages**
> \Swagger\Client\Model\InlineResponse2002 imChatMessages($session_id, $from, $to, $page_size, $next_page_token)

Retrieve IM Chat messages

Retrieve IM Chat messages for a specified period <aside>This API only supports oauth2.</aside>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\IMChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = "session_id_example"; // string | IM Chat Session ID
$from = new \DateTime("2013-10-20"); // \DateTime | Start Date
$to = new \DateTime("2013-10-20"); // \DateTime | End Date
$page_size = 30; // int | The number of records returned within a single API call
$next_page_token = "next_page_token_example"; // string | Next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceed the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->imChatMessages($session_id, $from, $to, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMChatApi->imChatMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_id** | **string**| IM Chat Session ID |
 **from** | **\DateTime**| Start Date |
 **to** | **\DateTime**| End Date |
 **page_size** | **int**| The number of records returned within a single API call | [optional] [default to 30]
 **next_page_token** | **string**| Next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceed the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imChatSessions**
> \Swagger\Client\Model\InlineResponse2002 imChatSessions($from, $to, $page_size, $next_page_token)

Retrieve IM Chat sessions

Retrieve IM Chat sessions for a specified period <aside>This API only supports oauth2.</aside>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\IMChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime("2013-10-20"); // \DateTime | Start Date
$to = new \DateTime("2013-10-20"); // \DateTime | End Date
$page_size = 30; // int | The number of records returned within a single API call
$next_page_token = "next_page_token_example"; // string | Next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceed the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->imChatSessions($from, $to, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMChatApi->imChatSessions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| Start Date |
 **to** | **\DateTime**| End Date |
 **page_size** | **int**| The number of records returned within a single API call | [optional] [default to 30]
 **next_page_token** | **string**| Next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceed the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

