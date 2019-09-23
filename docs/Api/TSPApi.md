# Swagger\Client\TSPApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tsp**](TSPApi.md#tsp) | **GET** /tsp | Retrieve account&#39;s TSP information
[**tspUpdate**](TSPApi.md#tspUpdate) | **PATCH** /tsp | Update account&#39;s TSP information
[**userTSP**](TSPApi.md#userTSP) | **GET** /users/{userId}/tsp/{tspId} | Retrieve a user&#39;s TSP account
[**userTSPCreate**](TSPApi.md#userTSPCreate) | **POST** /users/{userId}/tsp | Add a user&#39;s TSP account
[**userTSPDelete**](TSPApi.md#userTSPDelete) | **DELETE** /users/{userId}/tsp/{tspId} | Delete a user&#39;s TSP account
[**userTSPUpdate**](TSPApi.md#userTSPUpdate) | **PATCH** /users/{userId}/tsp/{tspId} | Update a TSP account
[**userTSPs**](TSPApi.md#userTSPs) | **GET** /users/{userId}/tsp | List user&#39;s TSP accounts


# **tsp**
> object tsp()

Retrieve account's TSP information

Retrieve TSP information on account level

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TSPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->tsp();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TSPApi->tsp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tspUpdate**
> tspUpdate($body)

Update account's TSP information

Update TSP information on account level

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TSPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body9(); // \Swagger\Client\Model\Body9 | TSP Account

try {
    $apiInstance->tspUpdate($body);
} catch (Exception $e) {
    echo 'Exception when calling TSPApi->tspUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body9**](../Model/Body9.md)| TSP Account |

### Return type

void (empty response body)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userTSP**
> \Swagger\Client\Model\TSP userTSP($user_id, $tsp_id)

Retrieve a user's TSP account

Retrieve a user's TSP account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TSPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address
$tsp_id = "tsp_id_example"; // string | TSP account index

try {
    $result = $apiInstance->userTSP($user_id, $tsp_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TSPApi->userTSP: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address |
 **tsp_id** | **string**| TSP account index |

### Return type

[**\Swagger\Client\Model\TSP**](../Model/TSP.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userTSPCreate**
> \Swagger\Client\Model\TSP userTSPCreate($user_id, $body)

Add a user's TSP account

Add a user's TSP account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TSPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address
$body = new \Swagger\Client\Model\TSP(); // \Swagger\Client\Model\TSP | TSP Account

try {
    $result = $apiInstance->userTSPCreate($user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TSPApi->userTSPCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address |
 **body** | [**\Swagger\Client\Model\TSP**](../Model/TSP.md)| TSP Account |

### Return type

[**\Swagger\Client\Model\TSP**](../Model/TSP.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userTSPDelete**
> userTSPDelete($user_id, $tsp_id)

Delete a user's TSP account

Delete a user's TSP account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TSPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address
$tsp_id = "tsp_id_example"; // string | TSP account index

try {
    $apiInstance->userTSPDelete($user_id, $tsp_id);
} catch (Exception $e) {
    echo 'Exception when calling TSPApi->userTSPDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address |
 **tsp_id** | **string**| TSP account index |

### Return type

void (empty response body)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userTSPUpdate**
> userTSPUpdate($user_id, $tsp_id, $body)

Update a TSP account

Update a user's TSP account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TSPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address
$tsp_id = "tsp_id_example"; // string | TSP account index
$body = new \Swagger\Client\Model\TSP(); // \Swagger\Client\Model\TSP | TSP Account

try {
    $apiInstance->userTSPUpdate($user_id, $tsp_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TSPApi->userTSPUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address |
 **tsp_id** | **string**| TSP account index |
 **body** | [**\Swagger\Client\Model\TSP**](../Model/TSP.md)| TSP Account |

### Return type

void (empty response body)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userTSPs**
> object userTSPs($user_id)

List user's TSP accounts

List user's TSP accounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TSPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address

try {
    $result = $apiInstance->userTSPs($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TSPApi->userTSPs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address |

### Return type

**object**

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

