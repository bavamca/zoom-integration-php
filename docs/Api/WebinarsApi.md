# Swagger\Client\WebinarsApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pastWebinars**](WebinarsApi.md#pastWebinars) | **GET** /past_webinars/{webinarId}/instances | List of ended webinar instances
[**webinar**](WebinarsApi.md#webinar) | **GET** /webinars/{webinarId} | Retrieve a webinar
[**webinarCreate**](WebinarsApi.md#webinarCreate) | **POST** /users/{userId}/webinars | Create a webinar
[**webinarDelete**](WebinarsApi.md#webinarDelete) | **DELETE** /webinars/{webinarId} | Delete a webinar
[**webinarPanelistCreate**](WebinarsApi.md#webinarPanelistCreate) | **POST** /webinars/{webinarId}/panelists | Add a webinar panelist
[**webinarPanelistDelete**](WebinarsApi.md#webinarPanelistDelete) | **DELETE** /webinars/{webinarId}/panelists/{panelistId} | Remove a webinar panelist
[**webinarPanelists**](WebinarsApi.md#webinarPanelists) | **GET** /webinars/{webinarId}/panelists | List a webinar&#39;s panelists
[**webinarPanelistsDelete**](WebinarsApi.md#webinarPanelistsDelete) | **DELETE** /webinars/{webinarId}/panelists | Remove a webinar&#39;s panelists
[**webinarPollCreate**](WebinarsApi.md#webinarPollCreate) | **POST** /webinars/{webinarId}/polls | Create a webinar&#39;s poll
[**webinarPollDelete**](WebinarsApi.md#webinarPollDelete) | **DELETE** /webinars/{webinarId}/polls/{pollId} | Delete a webinar&#39;s Poll
[**webinarPollGet**](WebinarsApi.md#webinarPollGet) | **GET** /webinars/{webinarId}/polls/{pollId} | Retrieve a webinar&#39;s poll
[**webinarPollUpdate**](WebinarsApi.md#webinarPollUpdate) | **PUT** /webinars/{webinarId}/polls/{pollId} | Update a webinar&#39;s poll
[**webinarPolls**](WebinarsApi.md#webinarPolls) | **GET** /webinars/{webinarId}/polls | List a webinar&#39;s polls
[**webinarRegistrantCreate**](WebinarsApi.md#webinarRegistrantCreate) | **POST** /webinars/{webinarId}/registrants | Add a webinar registrant
[**webinarRegistrantStatus**](WebinarsApi.md#webinarRegistrantStatus) | **PUT** /webinars/{webinarId}/registrants/status | Update a webinar registrant&#39;s status
[**webinarRegistrants**](WebinarsApi.md#webinarRegistrants) | **GET** /webinars/{webinarId}/registrants | List a webinar&#39;s registrants
[**webinarStatus**](WebinarsApi.md#webinarStatus) | **PUT** /webinars/{webinarId}/status | Update a webinar&#39;s status
[**webinarUpdate**](WebinarsApi.md#webinarUpdate) | **PATCH** /webinars/{webinarId} | Update a webinar
[**webinars**](WebinarsApi.md#webinars) | **GET** /users/{userId}/webinars | List webinars


# **pastWebinars**
> \Swagger\Client\Model\WebinarInstances pastWebinars($webinar_id)

List of ended webinar instances

List of ended webinar instances

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 56; // int | The webinar ID

try {
    $result = $apiInstance->pastWebinars($webinar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->pastWebinars: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID |

### Return type

[**\Swagger\Client\Model\WebinarInstances**](../Model/WebinarInstances.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinar**
> \Swagger\Client\Model\InlineResponse2009 webinar($webinar_id)

Retrieve a webinar

Retrieve a webinar

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 56; // int | The webinar ID

try {
    $result = $apiInstance->webinar($webinar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID |

### Return type

[**\Swagger\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarCreate**
> \Swagger\Client\Model\InlineResponse2015 webinarCreate($user_id, $body)

Create a webinar

Create a webinar for a user <aside>The expiration time of start_url is two hours. But for API users, the expiration time is 90 days.</aside>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address
$body = new \Swagger\Client\Model\Webinar(); // \Swagger\Client\Model\Webinar | User

try {
    $result = $apiInstance->webinarCreate($user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address |
 **body** | [**\Swagger\Client\Model\Webinar**](../Model/Webinar.md)| User |

### Return type

[**\Swagger\Client\Model\InlineResponse2015**](../Model/InlineResponse2015.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarDelete**
> webinarDelete($webinar_id, $occurrence_id)

Delete a webinar

Delete a webinar

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
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

try {
    $apiInstance->webinarDelete($webinar_id, $occurrence_id);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID |
 **occurrence_id** | **string**| The meeting occurrence ID | [optional]

### Return type

void (empty response body)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarPanelistCreate**
> \Swagger\Client\Model\InlineResponse2016 webinarPanelistCreate($webinar_id, $body)

Add a webinar panelist

Add panelist to webinar

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 56; // int | The webinar ID
$body = new \Swagger\Client\Model\WebinarPanelist(); // \Swagger\Client\Model\WebinarPanelist | 

try {
    $result = $apiInstance->webinarPanelistCreate($webinar_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarPanelistCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID |
 **body** | [**\Swagger\Client\Model\WebinarPanelist**](../Model/WebinarPanelist.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2016**](../Model/InlineResponse2016.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarPanelistDelete**
> webinarPanelistDelete($webinar_id, $panelist_id)

Remove a webinar panelist

Remove a panelist from a webinar

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 56; // int | The webinar ID
$panelist_id = 56; // int | The panelist ID

try {
    $apiInstance->webinarPanelistDelete($webinar_id, $panelist_id);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarPanelistDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID |
 **panelist_id** | **int**| The panelist ID |

### Return type

void (empty response body)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarPanelists**
> \Swagger\Client\Model\WebinarPanelistList webinarPanelists($webinar_id)

List a webinar's panelists

List panelists for a webinar

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 56; // int | The webinar ID

try {
    $result = $apiInstance->webinarPanelists($webinar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarPanelists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID |

### Return type

[**\Swagger\Client\Model\WebinarPanelistList**](../Model/WebinarPanelistList.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarPanelistsDelete**
> webinarPanelistsDelete($webinar_id)

Remove a webinar's panelists

Remove all panelists from a webinar

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 56; // int | The webinar ID

try {
    $apiInstance->webinarPanelistsDelete($webinar_id);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarPanelistsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID |

### Return type

void (empty response body)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarPollCreate**
> \Swagger\Client\Model\InlineResponse2017 webinarPollCreate($webinar_id, $body)

Create a webinar's poll

Create a poll for a webinar

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 56; // int | The webinar ID
$body = new \stdClass; // object | Webinar poll object

try {
    $result = $apiInstance->webinarPollCreate($webinar_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarPollCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID |
 **body** | [**object**](../Model/.md)| Webinar poll object |

### Return type

[**\Swagger\Client\Model\InlineResponse2017**](../Model/InlineResponse2017.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarPollDelete**
> webinarPollDelete($webinar_id, $poll_id)

Delete a webinar's Poll

Delete a webinar's Poll

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 56; // int | The webinar ID
$poll_id = "poll_id_example"; // string | The poll ID

try {
    $apiInstance->webinarPollDelete($webinar_id, $poll_id);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarPollDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID |
 **poll_id** | **string**| The poll ID |

### Return type

void (empty response body)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarPollGet**
> \Swagger\Client\Model\InlineResponse2017 webinarPollGet($webinar_id, $poll_id)

Retrieve a webinar's poll

Retrieve a webinar's poll

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 56; // int | The webinar ID
$poll_id = "poll_id_example"; // string | The poll ID

try {
    $result = $apiInstance->webinarPollGet($webinar_id, $poll_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarPollGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID |
 **poll_id** | **string**| The poll ID |

### Return type

[**\Swagger\Client\Model\InlineResponse2017**](../Model/InlineResponse2017.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarPollUpdate**
> webinarPollUpdate($webinar_id, $poll_id, $body)

Update a webinar's poll

Update a webinar's poll

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 56; // int | The webinar ID
$poll_id = "poll_id_example"; // string | The poll ID
$body = new \stdClass; // object | Webinar Poll

try {
    $apiInstance->webinarPollUpdate($webinar_id, $poll_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarPollUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID |
 **poll_id** | **string**| The poll ID |
 **body** | [**object**](../Model/.md)| Webinar Poll |

### Return type

void (empty response body)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarPolls**
> \Swagger\Client\Model\PollList webinarPolls($webinar_id)

List a webinar's polls

List polls of a webinar

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 56; // int | The webinar ID

try {
    $result = $apiInstance->webinarPolls($webinar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarPolls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID |

### Return type

[**\Swagger\Client\Model\PollList**](../Model/PollList.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarRegistrantCreate**
> \Swagger\Client\Model\InlineResponse2013 webinarRegistrantCreate($webinar_id, $body, $occurrence_ids)

Add a webinar registrant

Add a registrant for a webinar

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 56; // int | The webinar ID
$body = new \Swagger\Client\Model\WebinarRegistrant(); // \Swagger\Client\Model\WebinarRegistrant | 
$occurrence_ids = "occurrence_ids_example"; // string | Occurrence IDs, could get this value from Webinar Get API. Multiple value separated by comma.

try {
    $result = $apiInstance->webinarRegistrantCreate($webinar_id, $body, $occurrence_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarRegistrantCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID |
 **body** | [**\Swagger\Client\Model\WebinarRegistrant**](../Model/WebinarRegistrant.md)|  |
 **occurrence_ids** | **string**| Occurrence IDs, could get this value from Webinar Get API. Multiple value separated by comma. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2013**](../Model/InlineResponse2013.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarRegistrantStatus**
> webinarRegistrantStatus($webinar_id, $body, $occurrence_id)

Update a webinar registrant's status

Update a webinar registrant's status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 56; // int | The webinar ID
$body = new \Swagger\Client\Model\Body15(); // \Swagger\Client\Model\Body15 | 
$occurrence_id = "occurrence_id_example"; // string | The meeting occurrence ID

try {
    $apiInstance->webinarRegistrantStatus($webinar_id, $body, $occurrence_id);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarRegistrantStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID |
 **body** | [**\Swagger\Client\Model\Body15**](../Model/Body15.md)|  |
 **occurrence_id** | **string**| The meeting occurrence ID | [optional]

### Return type

void (empty response body)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarRegistrants**
> \Swagger\Client\Model\WebinarRegistrantList webinarRegistrants($webinar_id, $occurrence_id, $status, $page_size, $page_number)

List a webinar's registrants

List registrants for a webinar

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
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
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID |
 **occurrence_id** | **string**| The meeting occurrence ID | [optional]
 **status** | **string**| The registrant status | [optional] [default to approved]
 **page_size** | **int**| The number of records returned within a single API call | [optional] [default to 30]
 **page_number** | **int**| Current page number of returned records | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\WebinarRegistrantList**](../Model/WebinarRegistrantList.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarStatus**
> webinarStatus($webinar_id, $body)

Update a webinar's status

Update a webinar's status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 56; // int | The webinar ID
$body = new \Swagger\Client\Model\Body14(); // \Swagger\Client\Model\Body14 | 

try {
    $apiInstance->webinarStatus($webinar_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID |
 **body** | [**\Swagger\Client\Model\Body14**](../Model/Body14.md)|  |

### Return type

void (empty response body)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarUpdate**
> webinarUpdate($webinar_id, $body)

Update a webinar

Update a webinar

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = 56; // int | The webinar ID
$body = new \Swagger\Client\Model\WebinarUpdate(); // \Swagger\Client\Model\WebinarUpdate | Webinar

try {
    $apiInstance->webinarUpdate($webinar_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinarUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **int**| The webinar ID |
 **body** | [**\Swagger\Client\Model\WebinarUpdate**](../Model/WebinarUpdate.md)| Webinar |

### Return type

void (empty response body)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinars**
> \Swagger\Client\Model\WebinarList webinars($user_id, $page_size, $page_number)

List webinars

List webinars for a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\WebinarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address
$page_size = 30; // int | The number of records returned within a single API call
$page_number = 1; // int | Current page number of returned records

try {
    $result = $apiInstance->webinars($user_id, $page_size, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarsApi->webinars: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address |
 **page_size** | **int**| The number of records returned within a single API call | [optional] [default to 30]
 **page_number** | **int**| Current page number of returned records | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\WebinarList**](../Model/WebinarList.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

