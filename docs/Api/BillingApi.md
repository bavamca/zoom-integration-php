# Swagger\Client\BillingApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountBilling**](BillingApi.md#accountBilling) | **GET** /accounts/{accountId}/billing | Retrieve billing information for a sub account
[**accountBillingUpdate**](BillingApi.md#accountBillingUpdate) | **PATCH** /accounts/{accountId}/billing | Update billing information for a sub account
[**accountPlanAddonCreate**](BillingApi.md#accountPlanAddonCreate) | **POST** /accounts/{accountId}/plans/addons | Add an additional plan for sub account
[**accountPlanAddonUpdate**](BillingApi.md#accountPlanAddonUpdate) | **PUT** /accounts/{accountId}/plans/addons | Update an additional plan for sub account
[**accountPlanBaseUpdate**](BillingApi.md#accountPlanBaseUpdate) | **PUT** /accounts/{accountId}/plans/base | Update a base plan for a sub account
[**accountPlanCreate**](BillingApi.md#accountPlanCreate) | **POST** /accounts/{accountId}/plans | Subscribe plans for a sub account
[**accountPlans**](BillingApi.md#accountPlans) | **GET** /accounts/{accountId}/plans | Retrieve plan information for a sub account


# **accountBilling**
> \Swagger\Client\Model\BillingContactRequired accountBilling($account_id)

Retrieve billing information for a sub account

Retrieve billing information for a sub account under the master account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = "account_id_example"; // string | The account ID

try {
    $result = $apiInstance->accountBilling($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->accountBilling: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account ID |

### Return type

[**\Swagger\Client\Model\BillingContactRequired**](../Model/BillingContactRequired.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountBillingUpdate**
> accountBillingUpdate($account_id, $body)

Update billing information for a sub account

Update billing information for a sub account under the master account <aside>Only for the sub account which is a paid account and paid by master account</aside>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = "account_id_example"; // string | The account ID
$body = new \Swagger\Client\Model\BillingContact(); // \Swagger\Client\Model\BillingContact | 

try {
    $apiInstance->accountBillingUpdate($account_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->accountBillingUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account ID |
 **body** | [**\Swagger\Client\Model\BillingContact**](../Model/BillingContact.md)|  |

### Return type

void (empty response body)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountPlanAddonCreate**
> accountPlanAddonCreate($account_id, $body)

Add an additional plan for sub account

Add an additional plan for sub account <aside>Can only add an Additional plan for the sub account which is a paid account and paid by master account</aside>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = "account_id_example"; // string | The account ID
$body = new \Swagger\Client\Model\AccountPlanRequired(); // \Swagger\Client\Model\AccountPlanRequired | 

try {
    $apiInstance->accountPlanAddonCreate($account_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->accountPlanAddonCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account ID |
 **body** | [**\Swagger\Client\Model\AccountPlanRequired**](../Model/AccountPlanRequired.md)|  |

### Return type

void (empty response body)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountPlanAddonUpdate**
> accountPlanAddonUpdate($account_id, $body)

Update an additional plan for sub account

Update an additional plan for sub account<aside>Can only update an Additional plan for the sub account which is a paid account and paid by master account</aside>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = "account_id_example"; // string | The account ID
$body = new \Swagger\Client\Model\AccountPlanRequired(); // \Swagger\Client\Model\AccountPlanRequired | 

try {
    $apiInstance->accountPlanAddonUpdate($account_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->accountPlanAddonUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account ID |
 **body** | [**\Swagger\Client\Model\AccountPlanRequired**](../Model/AccountPlanRequired.md)|  |

### Return type

void (empty response body)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountPlanBaseUpdate**
> accountPlanBaseUpdate($account_id, $body)

Update a base plan for a sub account

Update a base plan for a sub account <aside>Can only update a base plan for the sub account which is a paid account and paid by master account</aside>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = "account_id_example"; // string | The account ID
$body = new \Swagger\Client\Model\AccountPlanBaseRequired(); // \Swagger\Client\Model\AccountPlanBaseRequired | 

try {
    $apiInstance->accountPlanBaseUpdate($account_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->accountPlanBaseUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account ID |
 **body** | [**\Swagger\Client\Model\AccountPlanBaseRequired**](../Model/AccountPlanBaseRequired.md)|  |

### Return type

void (empty response body)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountPlanCreate**
> \Swagger\Client\Model\AccountPlans accountPlanCreate($account_id, $body)

Subscribe plans for a sub account

Subscribe plans for a sub account of the master account <aside>Can only subscribe plans for the sub account which is a free account and paid by master account</aside>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = "account_id_example"; // string | The account ID
$body = new \stdClass; // object | 

try {
    $result = $apiInstance->accountPlanCreate($account_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->accountPlanCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account ID |
 **body** | [**object**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\AccountPlans**](../Model/AccountPlans.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountPlans**
> \Swagger\Client\Model\AccountPlans accountPlans($account_id)

Retrieve plan information for a sub account

Retrieve plan information for a sub account under the master account  <aside>Only for the sub account which is paid by master account</aside>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = "account_id_example"; // string | The account ID

try {
    $result = $apiInstance->accountPlans($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->accountPlans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account ID |

### Return type

[**\Swagger\Client\Model\AccountPlans**](../Model/AccountPlans.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

