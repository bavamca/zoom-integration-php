# Swagger\Client\ReportsApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportCloudRecording**](ReportsApi.md#reportCloudRecording) | **GET** /report/cloud_recording | Retrieve cloud recording usage report
[**reportDaily**](ReportsApi.md#reportDaily) | **GET** /report/daily | Retrieve daily report
[**reportMeetingDetails**](ReportsApi.md#reportMeetingDetails) | **GET** /report/meetings/{meetingId} | Retrieve meeting details report
[**reportMeetingParticipants**](ReportsApi.md#reportMeetingParticipants) | **GET** /report/meetings/{meetingId}/participants | Retrieve meeting participants report
[**reportMeetingPolls**](ReportsApi.md#reportMeetingPolls) | **GET** /report/meetings/{meetingId}/polls | Retrieve meeting polls report
[**reportMeetings**](ReportsApi.md#reportMeetings) | **GET** /report/users/{userId}/meetings | Retrieve meetings report
[**reportTelephone**](ReportsApi.md#reportTelephone) | **GET** /report/telephone | Retrieve telephone report
[**reportUsers**](ReportsApi.md#reportUsers) | **GET** /report/users | Retrieve hosts report
[**reportWebinarDetails**](ReportsApi.md#reportWebinarDetails) | **GET** /report/webinars/{webinarId} | Retrieve webinar details report
[**reportWebinarParticipants**](ReportsApi.md#reportWebinarParticipants) | **GET** /report/webinars/{webinarId}/participants | Retrieve webinar participants report
[**reportWebinarPolls**](ReportsApi.md#reportWebinarPolls) | **GET** /report/webinars/{webinarId}/polls | Retrieve webinar polls report
[**reportWebinarQA**](ReportsApi.md#reportWebinarQA) | **GET** /report/webinars/{webinarId}/qa | Retrieve webinar Q&amp;A report


# **reportCloudRecording**
> object reportCloudRecording($from, $to)

Retrieve cloud recording usage report

Retrieve cloud recording usage report for a specified period. You can only get cloud recording reports for the most recent period of 6 months. The date gap between from and to dates should be smaller or equal to 30 days.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime("2013-10-20"); // \DateTime | Start Date
$to = new \DateTime("2013-10-20"); // \DateTime | End Date

try {
    $result = $apiInstance->reportCloudRecording($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportCloudRecording: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| Start Date |
 **to** | **\DateTime**| End Date |

### Return type

**object**

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportDaily**
> object reportDaily($year, $month)

Retrieve daily report

Retrieve daily report for one month, can only get daily report for recent 6 months

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year = 56; // int | Year for this report
$month = 56; // int | Month for this report

try {
    $result = $apiInstance->reportDaily($year, $month);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportDaily: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **int**| Year for this report | [optional]
 **month** | **int**| Month for this report | [optional]

### Return type

**object**

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportMeetingDetails**
> object reportMeetingDetails($meeting_id)

Retrieve meeting details report

Retrieve ended meeting details report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = "meeting_id_example"; // string | The meeting ID or meeting UUID. If given meeting ID, will take the last meeting instance.

try {
    $result = $apiInstance->reportMeetingDetails($meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportMeetingDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| The meeting ID or meeting UUID. If given meeting ID, will take the last meeting instance. |

### Return type

**object**

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportMeetingParticipants**
> \Swagger\Client\Model\InlineResponse2004 reportMeetingParticipants($meeting_id, $page_size, $next_page_token)

Retrieve meeting participants report

Retrieve ended meeting participants report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = "meeting_id_example"; // string | The meeting ID or meeting UUID. If given meeting ID, will take the last meeting instance.
$page_size = 30; // int | The number of records returned within a single API call
$next_page_token = "next_page_token_example"; // string | Next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceed the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->reportMeetingParticipants($meeting_id, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportMeetingParticipants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| The meeting ID or meeting UUID. If given meeting ID, will take the last meeting instance. |
 **page_size** | **int**| The number of records returned within a single API call | [optional] [default to 30]
 **next_page_token** | **string**| Next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceed the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportMeetingPolls**
> object reportMeetingPolls($meeting_id)

Retrieve meeting polls report

Retrieve ended meeting polls report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = "meeting_id_example"; // string | The meeting ID or meeting UUID. If given meeting ID, will take the last meeting instance.

try {
    $result = $apiInstance->reportMeetingPolls($meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportMeetingPolls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| The meeting ID or meeting UUID. If given meeting ID, will take the last meeting instance. |

### Return type

**object**

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportMeetings**
> \Swagger\Client\Model\InlineResponse2004 reportMeetings($user_id, $from, $to, $page_size, $next_page_token)

Retrieve meetings report

Retrieve ended meetings report for a specified period

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address
$from = new \DateTime("2013-10-20"); // \DateTime | Start Date
$to = new \DateTime("2013-10-20"); // \DateTime | End Date
$page_size = 30; // int | The number of records returned within a single API call
$next_page_token = "next_page_token_example"; // string | Next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceed the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->reportMeetings($user_id, $from, $to, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportMeetings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address |
 **from** | **\DateTime**| Start Date |
 **to** | **\DateTime**| End Date |
 **page_size** | **int**| The number of records returned within a single API call | [optional] [default to 30]
 **next_page_token** | **string**| Next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceed the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportTelephone**
> \Swagger\Client\Model\InlineResponse2007 reportTelephone($from, $to, $type, $page_size, $page_number)

Retrieve telephone report

Retrieve telephone report for a specified period <aside>Toll Report option would be removed.</aside>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime("2013-10-20"); // \DateTime | Start Date
$to = new \DateTime("2013-10-20"); // \DateTime | End Date
$type = "1"; // string | Audio type
$page_size = 30; // int | The number of records returned within a single API call
$page_number = 1; // int | Current page number of returned records

try {
    $result = $apiInstance->reportTelephone($from, $to, $type, $page_size, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportTelephone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| Start Date |
 **to** | **\DateTime**| End Date |
 **type** | **string**| Audio type | [optional] [default to 1]
 **page_size** | **int**| The number of records returned within a single API call | [optional] [default to 30]
 **page_number** | **int**| Current page number of returned records | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportUsers**
> \Swagger\Client\Model\InlineResponse2007 reportUsers($from, $to, $type, $page_size, $page_number)

Retrieve hosts report

Retrieve active or inactive hosts report for a specified period

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime("2013-10-20"); // \DateTime | Start Date
$to = new \DateTime("2013-10-20"); // \DateTime | End Date
$type = "type_example"; // string | Active hosts or inactive hosts
$page_size = 30; // int | The number of records returned within a single API call
$page_number = 1; // int | Current page number of returned records

try {
    $result = $apiInstance->reportUsers($from, $to, $type, $page_size, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| Start Date |
 **to** | **\DateTime**| End Date |
 **type** | **string**| Active hosts or inactive hosts | [optional]
 **page_size** | **int**| The number of records returned within a single API call | [optional] [default to 30]
 **page_number** | **int**| Current page number of returned records | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportWebinarDetails**
> object reportWebinarDetails($webinar_id)

Retrieve webinar details report

Retrieve ended webinar details report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = "webinar_id_example"; // string | The webinar ID or webinar UUID. If given webinar ID, will take the last webinar instance.

try {
    $result = $apiInstance->reportWebinarDetails($webinar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportWebinarDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **string**| The webinar ID or webinar UUID. If given webinar ID, will take the last webinar instance. |

### Return type

**object**

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportWebinarParticipants**
> \Swagger\Client\Model\InlineResponse2004 reportWebinarParticipants($webinar_id, $page_size, $next_page_token)

Retrieve webinar participants report

Retrieve ended webinar participants report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = "webinar_id_example"; // string | The webinar ID or webinar UUID. If given webinar ID, will take the last webinar instance.
$page_size = 30; // int | The number of records returned within a single API call
$next_page_token = "next_page_token_example"; // string | Next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceed the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->reportWebinarParticipants($webinar_id, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportWebinarParticipants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **string**| The webinar ID or webinar UUID. If given webinar ID, will take the last webinar instance. |
 **page_size** | **int**| The number of records returned within a single API call | [optional] [default to 30]
 **next_page_token** | **string**| Next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceed the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportWebinarPolls**
> object reportWebinarPolls($webinar_id)

Retrieve webinar polls report

Retrieve ended webinar polls report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = "webinar_id_example"; // string | The webinar ID or webinar UUID. If given webinar ID, will take the last webinar instance.

try {
    $result = $apiInstance->reportWebinarPolls($webinar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportWebinarPolls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **string**| The webinar ID or webinar UUID. If given webinar ID, will take the last webinar instance. |

### Return type

**object**

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportWebinarQA**
> object reportWebinarQA($webinar_id)

Retrieve webinar Q&A report

Retrieve ended webinar Q&A report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = "webinar_id_example"; // string | The webinar ID or webinar UUID. If given webinar ID, will take the last webinar instance.

try {
    $result = $apiInstance->reportWebinarQA($webinar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportWebinarQA: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **string**| The webinar ID or webinar UUID. If given webinar ID, will take the last webinar instance. |

### Return type

**object**

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

