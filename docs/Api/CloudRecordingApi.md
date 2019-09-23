# Swagger\Client\CloudRecordingApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**recordingDelete**](CloudRecordingApi.md#recordingDelete) | **DELETE** /meetings/{meetingId}/recordings | Delete a meeting&#39;s recordings
[**recordingDeleteOne**](CloudRecordingApi.md#recordingDeleteOne) | **DELETE** /meetings/{meetingId}/recordings/{recordingId} | Delete one meeting recording file
[**recordingGet**](CloudRecordingApi.md#recordingGet) | **GET** /meetings/{meetingId}/recordings | Retrieve a meeting’s all recordings
[**recordingSettingUpdate**](CloudRecordingApi.md#recordingSettingUpdate) | **GET** /meetings/{meetingId}/recordings/settings | Retrieve a meeting recording&#39;s settings
[**recordingSettingsUpdate**](CloudRecordingApi.md#recordingSettingsUpdate) | **PATCH** /meetings/{meetingId}/recordings/settings | Update a meeting recording&#39;s settings
[**recordingStatusUpdate**](CloudRecordingApi.md#recordingStatusUpdate) | **PUT** /meetings/{meetingId}/recordings/status | Recover a meeting&#39;s recordings
[**recordingStatusUpdateOne**](CloudRecordingApi.md#recordingStatusUpdateOne) | **PUT** /meetings/{meetingId}/recordings/{recordingId}/status | Recover a single recording
[**recordingsList**](CloudRecordingApi.md#recordingsList) | **GET** /users/{userId}/recordings | List all the recordings


# **recordingDelete**
> recordingDelete($meeting_id, $action)

Delete a meeting's recordings

Delete a meeting's recordings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = "meeting_id_example"; // string | The meeting ID or meeting UUID. If given meeting ID, will take the last meeting instance.
$action = "trash"; // string | The recording delete action

try {
    $apiInstance->recordingDelete($meeting_id, $action);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->recordingDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| The meeting ID or meeting UUID. If given meeting ID, will take the last meeting instance. |
 **action** | **string**| The recording delete action | [optional] [default to trash]

### Return type

void (empty response body)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recordingDeleteOne**
> recordingDeleteOne($meeting_id, $recording_id, $action)

Delete one meeting recording file

Delete one meeting recording file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = "meeting_id_example"; // string | The meeting ID or meeting UUID. If given meeting ID, will take the last meeting instance.
$recording_id = "recording_id_example"; // string | The recording ID
$action = "trash"; // string | The recording delete action

try {
    $apiInstance->recordingDeleteOne($meeting_id, $recording_id, $action);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->recordingDeleteOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| The meeting ID or meeting UUID. If given meeting ID, will take the last meeting instance. |
 **recording_id** | **string**| The recording ID |
 **action** | **string**| The recording delete action | [optional] [default to trash]

### Return type

void (empty response body)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recordingGet**
> \Swagger\Client\Model\InlineResponse2005 recordingGet($meeting_id)

Retrieve a meeting’s all recordings

Retrieve a meeting’s all recordings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = "meeting_id_example"; // string | The meeting ID or meeting UUID. If given meeting ID, will take the last meeting instance.

try {
    $result = $apiInstance->recordingGet($meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->recordingGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| The meeting ID or meeting UUID. If given meeting ID, will take the last meeting instance. |

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recordingSettingUpdate**
> \Swagger\Client\Model\RecordingSettings recordingSettingUpdate($meeting_id)

Retrieve a meeting recording's settings

Retrieve a meeting recording's settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = "meeting_id_example"; // string | The meeting ID or meeting UUID. If given meeting ID, will take the last meeting instance.

try {
    $result = $apiInstance->recordingSettingUpdate($meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->recordingSettingUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| The meeting ID or meeting UUID. If given meeting ID, will take the last meeting instance. |

### Return type

[**\Swagger\Client\Model\RecordingSettings**](../Model/RecordingSettings.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recordingSettingsUpdate**
> recordingSettingsUpdate($meeting_id, $body)

Update a meeting recording's settings

Update a meeting recording's settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = "meeting_id_example"; // string | The meeting ID or meeting UUID. If given meeting ID, will take the last meeting instance.
$body = new \Swagger\Client\Model\RecordingSettings(); // \Swagger\Client\Model\RecordingSettings | Meeting recording Settings

try {
    $apiInstance->recordingSettingsUpdate($meeting_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->recordingSettingsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| The meeting ID or meeting UUID. If given meeting ID, will take the last meeting instance. |
 **body** | [**\Swagger\Client\Model\RecordingSettings**](../Model/RecordingSettings.md)| Meeting recording Settings |

### Return type

void (empty response body)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recordingStatusUpdate**
> recordingStatusUpdate($meeting_id, $body)

Recover a meeting's recordings

Recover a meeting's recordings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = "meeting_id_example"; // string | The meeting ID or meeting UUID. If given meeting ID, will take the last meeting instance.
$body = new \Swagger\Client\Model\Body7(); // \Swagger\Client\Model\Body7 | 

try {
    $apiInstance->recordingStatusUpdate($meeting_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->recordingStatusUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| The meeting ID or meeting UUID. If given meeting ID, will take the last meeting instance. |
 **body** | [**\Swagger\Client\Model\Body7**](../Model/Body7.md)|  |

### Return type

void (empty response body)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recordingStatusUpdateOne**
> recordingStatusUpdateOne($meeting_id, $recording_id, $body)

Recover a single recording

Recover a single recording

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\CloudRecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = "meeting_id_example"; // string | The meeting ID or meeting UUID. If given meeting ID, will take the last meeting instance.
$recording_id = "recording_id_example"; // string | The recording ID
$body = new \Swagger\Client\Model\Body8(); // \Swagger\Client\Model\Body8 | 

try {
    $apiInstance->recordingStatusUpdateOne($meeting_id, $recording_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->recordingStatusUpdateOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| The meeting ID or meeting UUID. If given meeting ID, will take the last meeting instance. |
 **recording_id** | **string**| The recording ID |
 **body** | [**\Swagger\Client\Model\Body8**](../Model/Body8.md)|  |

### Return type

void (empty response body)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recordingsList**
> \Swagger\Client\Model\RecordingMeetingList recordingsList($user_id, $from, $to, $page_size, $next_page_token, $mc, $trash)

List all the recordings

List all the recordings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\CloudRecordingApi(
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
$mc = "false"; // string | Query mc
$trash = false; // bool | Query trash

try {
    $result = $apiInstance->recordingsList($user_id, $from, $to, $page_size, $next_page_token, $mc, $trash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudRecordingApi->recordingsList: ', $e->getMessage(), PHP_EOL;
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
 **mc** | **string**| Query mc | [optional] [default to false]
 **trash** | **bool**| Query trash | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\RecordingMeetingList**](../Model/RecordingMeetingList.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

