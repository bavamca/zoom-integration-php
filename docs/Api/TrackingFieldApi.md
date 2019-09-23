# Swagger\Client\TrackingFieldApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**trackingfieldCreate**](TrackingFieldApi.md#trackingfieldCreate) | **POST** /v2/tracking_fields | Create a Tracking Field
[**trackingfieldDelete**](TrackingFieldApi.md#trackingfieldDelete) | **DELETE** /v2/tracking_fields/{fieldId} | Delete a Tracking Field
[**trackingfieldGet**](TrackingFieldApi.md#trackingfieldGet) | **GET** /v2/tracking_fields/{fieldId} | Retrieve a tracking field
[**trackingfieldList**](TrackingFieldApi.md#trackingfieldList) | **GET** /v2/tracking_fields | List Tracking Fields.
[**trackingfieldUpdate**](TrackingFieldApi.md#trackingfieldUpdate) | **PATCH** /v2/tracking_fields/{fieldId} | Update a Tracking Field


# **trackingfieldCreate**
> \Swagger\Client\Model\InlineResponse2011 trackingfieldCreate($body)

Create a Tracking Field

Create a Tracking Field on your Zoom account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TrackingFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TrackingField(); // \Swagger\Client\Model\TrackingField | Tracking Field

try {
    $result = $apiInstance->trackingfieldCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingFieldApi->trackingfieldCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TrackingField**](../Model/TrackingField.md)| Tracking Field |

### Return type

[**\Swagger\Client\Model\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trackingfieldDelete**
> trackingfieldDelete($field_id)

Delete a Tracking Field

Delete a Tracking Field on your Zoom account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TrackingFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = "field_id_example"; // string | The Tracking Field ID

try {
    $apiInstance->trackingfieldDelete($field_id);
} catch (Exception $e) {
    echo 'Exception when calling TrackingFieldApi->trackingfieldDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field_id** | **string**| The Tracking Field ID |

### Return type

void (empty response body)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trackingfieldGet**
> \Swagger\Client\Model\InlineResponse2011 trackingfieldGet($field_id)

Retrieve a tracking field

Retrieve a tracking field

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TrackingFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = "field_id_example"; // string | The Tracking Field ID

try {
    $result = $apiInstance->trackingfieldGet($field_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingFieldApi->trackingfieldGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field_id** | **string**| The Tracking Field ID |

### Return type

[**\Swagger\Client\Model\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trackingfieldList**
> \Swagger\Client\Model\TrackingFieldList trackingfieldList()

List Tracking Fields.

List Tracking Fields on your Zoom account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TrackingFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->trackingfieldList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingFieldApi->trackingfieldList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\TrackingFieldList**](../Model/TrackingFieldList.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trackingfieldUpdate**
> trackingfieldUpdate($field_id, $body)

Update a Tracking Field

Update a Tracking Field on your Zoom account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TrackingFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = "field_id_example"; // string | The Tracking Field ID
$body = new \Swagger\Client\Model\TrackingField(); // \Swagger\Client\Model\TrackingField | 

try {
    $apiInstance->trackingfieldUpdate($field_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TrackingFieldApi->trackingfieldUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field_id** | **string**| The Tracking Field ID |
 **body** | [**\Swagger\Client\Model\TrackingField**](../Model/TrackingField.md)|  |

### Return type

void (empty response body)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

