# Swagger\Client\DashboardsApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dashboardCRC**](DashboardsApi.md#dashboardCRC) | **GET** /metrics/crc | Retrieve CRC Port Usage
[**dashboardIM**](DashboardsApi.md#dashboardIM) | **GET** /metrics/im | Retrieve IM
[**dashboardMeetingDetail**](DashboardsApi.md#dashboardMeetingDetail) | **GET** /metrics/meetings/{meetingId} | Retrieve meeting detail
[**dashboardMeetingParticipantQOS**](DashboardsApi.md#dashboardMeetingParticipantQOS) | **GET** /metrics/meetings/{meetingId}/participants/{participantId}/qos | Retrieve meeting participant QOS
[**dashboardMeetingParticipantShare**](DashboardsApi.md#dashboardMeetingParticipantShare) | **GET** /metrics/meetings/{meetingId}/participants/sharing | Retrieve sharing/recording details of meeting participant
[**dashboardMeetingParticipants**](DashboardsApi.md#dashboardMeetingParticipants) | **GET** /metrics/meetings/{meetingId}/participants | Retrieve meeting participants
[**dashboardMeetingParticipantsQOS**](DashboardsApi.md#dashboardMeetingParticipantsQOS) | **GET** /metrics/meetings/{meetingId}/participants/qos | List meeting participants QOS
[**dashboardMeetings**](DashboardsApi.md#dashboardMeetings) | **GET** /metrics/meetings | List meetings
[**dashboardWebinarDetail**](DashboardsApi.md#dashboardWebinarDetail) | **GET** /metrics/webinars/{webinarId} | Retrieve webinar detail
[**dashboardWebinarParticipantQOS**](DashboardsApi.md#dashboardWebinarParticipantQOS) | **GET** /metrics/webinars/{webinarId}/participants/{participantId}/qos | Retrieve webinar participant QOS
[**dashboardWebinarParticipantShare**](DashboardsApi.md#dashboardWebinarParticipantShare) | **GET** /metrics/webinars/{webinarId}/participants/sharing | Retrieve sharing/recording details of webinar participant
[**dashboardWebinarParticipants**](DashboardsApi.md#dashboardWebinarParticipants) | **GET** /metrics/webinars/{webinarId}/participants | Retrieve webinar participants
[**dashboardWebinarParticipantsQOS**](DashboardsApi.md#dashboardWebinarParticipantsQOS) | **GET** /metrics/webinars/{webinarId}/participants/qos | List webinar participant QOS
[**dashboardWebinars**](DashboardsApi.md#dashboardWebinars) | **GET** /metrics/webinars | List webinars
[**dashboardZoomRoom**](DashboardsApi.md#dashboardZoomRoom) | **GET** /metrics/zoomrooms/{zoomroomId} | Retrieve Zoom Room
[**dashboardZoomRooms**](DashboardsApi.md#dashboardZoomRooms) | **GET** /metrics/zoomrooms | List Zoom Rooms


# **dashboardCRC**
> object dashboardCRC($from, $to)

Retrieve CRC Port Usage

Get CRC Port usage hour by hour for a specified time period <aside class='notice'>We will report a maximum of one month. For example, if \"from\" is set to \"2017-08-05\" and \"to\" is \"2017-10-10\" we will adjust \"from\" to \"2017-09-10\"</aside>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime("2013-10-20"); // \DateTime | Start Date
$to = new \DateTime("2013-10-20"); // \DateTime | End Date

try {
    $result = $apiInstance->dashboardCRC($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardCRC: ', $e->getMessage(), PHP_EOL;
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

# **dashboardIM**
> \Swagger\Client\Model\InlineResponse2004 dashboardIM($from, $to, $page_size, $next_page_token)

Retrieve IM

Retrieve metrics of Zoom IM

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DashboardsApi(
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
    $result = $apiInstance->dashboardIM($from, $to, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardIM: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dashboardMeetingDetail**
> \Swagger\Client\Model\MeetingMetric dashboardMeetingDetail($meeting_id, $type)

Retrieve meeting detail

Retrieve live or past meetings detail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = "meeting_id_example"; // string | The meeting ID or meeting UUID. If given meeting ID, will take the last meeting instance.
$type = "live"; // string | The meeting type

try {
    $result = $apiInstance->dashboardMeetingDetail($meeting_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardMeetingDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| The meeting ID or meeting UUID. If given meeting ID, will take the last meeting instance. |
 **type** | **string**| The meeting type | [optional] [default to live]

### Return type

[**\Swagger\Client\Model\MeetingMetric**](../Model/MeetingMetric.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dashboardMeetingParticipantQOS**
> \Swagger\Client\Model\QOSParticipant dashboardMeetingParticipantQOS($meeting_id, $participant_id, $type)

Retrieve meeting participant QOS

Retrieve live or past meetings participant quality of service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = "meeting_id_example"; // string | The meeting ID or meeting UUID. If given meeting ID, will take the last meeting instance.
$participant_id = "participant_id_example"; // string | Participant ID
$type = "live"; // string | The meeting type

try {
    $result = $apiInstance->dashboardMeetingParticipantQOS($meeting_id, $participant_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardMeetingParticipantQOS: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| The meeting ID or meeting UUID. If given meeting ID, will take the last meeting instance. |
 **participant_id** | **string**| Participant ID |
 **type** | **string**| The meeting type | [optional] [default to live]

### Return type

[**\Swagger\Client\Model\QOSParticipant**](../Model/QOSParticipant.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dashboardMeetingParticipantShare**
> \Swagger\Client\Model\InlineResponse2004 dashboardMeetingParticipantShare($meeting_id, $type, $page_size, $next_page_token)

Retrieve sharing/recording details of meeting participant

Retrieve sharing/recording details of live or past meetings participant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = "meeting_id_example"; // string | The meeting ID or meeting UUID. If given meeting ID, will take the last meeting instance.
$type = "live"; // string | The meeting type
$page_size = 30; // int | The number of records returned within a single API call
$next_page_token = "next_page_token_example"; // string | Next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceed the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->dashboardMeetingParticipantShare($meeting_id, $type, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardMeetingParticipantShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| The meeting ID or meeting UUID. If given meeting ID, will take the last meeting instance. |
 **type** | **string**| The meeting type | [optional] [default to live]
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

# **dashboardMeetingParticipants**
> \Swagger\Client\Model\InlineResponse2004 dashboardMeetingParticipants($meeting_id, $type, $page_size, $next_page_token)

Retrieve meeting participants

Retrieve live or past meetings participants

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = "meeting_id_example"; // string | The meeting ID or meeting UUID. If given meeting ID, will take the last meeting instance.
$type = "live"; // string | The meeting type
$page_size = 30; // int | The number of records returned within a single API call
$next_page_token = "next_page_token_example"; // string | Next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceed the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->dashboardMeetingParticipants($meeting_id, $type, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardMeetingParticipants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| The meeting ID or meeting UUID. If given meeting ID, will take the last meeting instance. |
 **type** | **string**| The meeting type | [optional] [default to live]
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

# **dashboardMeetingParticipantsQOS**
> \Swagger\Client\Model\QOSParticipantList dashboardMeetingParticipantsQOS($meeting_id, $type, $page_size, $next_page_token)

List meeting participants QOS

Retrieve list of live or past meetings participants quality of service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = "meeting_id_example"; // string | The meeting ID or meeting UUID. If given meeting ID, will take the last meeting instance.
$type = "live"; // string | The meeting type
$page_size = 1; // int | Number of items returned per page
$next_page_token = "next_page_token_example"; // string | Next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceed the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->dashboardMeetingParticipantsQOS($meeting_id, $type, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardMeetingParticipantsQOS: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **string**| The meeting ID or meeting UUID. If given meeting ID, will take the last meeting instance. |
 **type** | **string**| The meeting type | [optional] [default to live]
 **page_size** | **int**| Number of items returned per page | [optional] [default to 1]
 **next_page_token** | **string**| Next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceed the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Swagger\Client\Model\QOSParticipantList**](../Model/QOSParticipantList.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dashboardMeetings**
> \Swagger\Client\Model\InlineResponse2004 dashboardMeetings($from, $to, $type, $page_size, $next_page_token)

List meetings

List live meetings or past meetings for a specified period

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime("2013-10-20"); // \DateTime | Start Date
$to = new \DateTime("2013-10-20"); // \DateTime | End Date
$type = "live"; // string | The meeting type
$page_size = 30; // int | The number of records returned within a single API call
$next_page_token = "next_page_token_example"; // string | Next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceed the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->dashboardMeetings($from, $to, $type, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardMeetings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| Start Date |
 **to** | **\DateTime**| End Date |
 **type** | **string**| The meeting type | [optional] [default to live]
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

# **dashboardWebinarDetail**
> \Swagger\Client\Model\WebinarMetric dashboardWebinarDetail($webinar_id, $type)

Retrieve webinar detail

Retrieve live  or past webinars detail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = "webinar_id_example"; // string | The webinar ID or webinar UUID. If given webinar ID, will take the last webinar instance.
$type = "live"; // string | The webinar type

try {
    $result = $apiInstance->dashboardWebinarDetail($webinar_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardWebinarDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **string**| The webinar ID or webinar UUID. If given webinar ID, will take the last webinar instance. |
 **type** | **string**| The webinar type | [optional] [default to live]

### Return type

[**\Swagger\Client\Model\WebinarMetric**](../Model/WebinarMetric.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dashboardWebinarParticipantQOS**
> \Swagger\Client\Model\QOSParticipant dashboardWebinarParticipantQOS($webinar_id, $participant_id, $type)

Retrieve webinar participant QOS

Retrieve live or past webinar participant quality of service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = "webinar_id_example"; // string | The webinar ID or webinar UUID. If given webinar ID, will take the last webinar instance.
$participant_id = "participant_id_example"; // string | Participant ID
$type = "live"; // string | The webinar type

try {
    $result = $apiInstance->dashboardWebinarParticipantQOS($webinar_id, $participant_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardWebinarParticipantQOS: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **string**| The webinar ID or webinar UUID. If given webinar ID, will take the last webinar instance. |
 **participant_id** | **string**| Participant ID |
 **type** | **string**| The webinar type | [optional] [default to live]

### Return type

[**\Swagger\Client\Model\QOSParticipant**](../Model/QOSParticipant.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dashboardWebinarParticipantShare**
> \Swagger\Client\Model\InlineResponse2004 dashboardWebinarParticipantShare($webinar_id, $type, $page_size, $next_page_token)

Retrieve sharing/recording details of webinar participant

Retrieve sharing/recording details of live or past webinar participant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = "webinar_id_example"; // string | The webinar ID or webinar UUID. If given webinar ID, will take the last webinar instance.
$type = "live"; // string | The webinar type
$page_size = 30; // int | The number of records returned within a single API call
$next_page_token = "next_page_token_example"; // string | Next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceed the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->dashboardWebinarParticipantShare($webinar_id, $type, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardWebinarParticipantShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **string**| The webinar ID or webinar UUID. If given webinar ID, will take the last webinar instance. |
 **type** | **string**| The webinar type | [optional] [default to live]
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

# **dashboardWebinarParticipants**
> \Swagger\Client\Model\InlineResponse2004 dashboardWebinarParticipants($webinar_id, $type, $page_size, $next_page_token)

Retrieve webinar participants

Retrieve live or past webinar participants

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = "webinar_id_example"; // string | The webinar ID or webinar UUID. If given webinar ID, will take the last webinar instance.
$type = "live"; // string | The webinar type
$page_size = 30; // int | The number of records returned within a single API call
$next_page_token = "next_page_token_example"; // string | Next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceed the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->dashboardWebinarParticipants($webinar_id, $type, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardWebinarParticipants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **string**| The webinar ID or webinar UUID. If given webinar ID, will take the last webinar instance. |
 **type** | **string**| The webinar type | [optional] [default to live]
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

# **dashboardWebinarParticipantsQOS**
> \Swagger\Client\Model\QOSParticipantList dashboardWebinarParticipantsQOS($webinar_id, $type, $page_size, $next_page_token)

List webinar participant QOS

Retrieve list of live or past webinar participants quality of service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webinar_id = "webinar_id_example"; // string | The webinar ID or webinar UUID. If given webinar ID, will take the last webinar instance.
$type = "live"; // string | The webinar type
$page_size = 1; // int | Number of items returned per page
$next_page_token = "next_page_token_example"; // string | Next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceed the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->dashboardWebinarParticipantsQOS($webinar_id, $type, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardWebinarParticipantsQOS: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webinar_id** | **string**| The webinar ID or webinar UUID. If given webinar ID, will take the last webinar instance. |
 **type** | **string**| The webinar type | [optional] [default to live]
 **page_size** | **int**| Number of items returned per page | [optional] [default to 1]
 **next_page_token** | **string**| Next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceed the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Swagger\Client\Model\QOSParticipantList**](../Model/QOSParticipantList.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dashboardWebinars**
> \Swagger\Client\Model\InlineResponse2004 dashboardWebinars($from, $to, $type, $page_size, $next_page_token)

List webinars

List live webinars or past webinars for a specified period

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime("2013-10-20"); // \DateTime | Start Date
$to = new \DateTime("2013-10-20"); // \DateTime | End Date
$type = "live"; // string | The webinar type
$page_size = 30; // int | The number of records returned within a single API call
$next_page_token = "next_page_token_example"; // string | Next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceed the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->dashboardWebinars($from, $to, $type, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardWebinars: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| Start Date |
 **to** | **\DateTime**| End Date |
 **type** | **string**| The webinar type | [optional] [default to live]
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

# **dashboardZoomRoom**
> \Swagger\Client\Model\InlineResponse2006 dashboardZoomRoom($zoomroom_id, $from, $to, $page_size, $page_number)

Retrieve Zoom Room

Retrieve zoom room on account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zoomroom_id = "zoomroom_id_example"; // string | The Zoom Room ID
$from = new \DateTime("2013-10-20"); // \DateTime | Start Date
$to = new \DateTime("2013-10-20"); // \DateTime | End Date
$page_size = 30; // int | The number of records returned within a single API call
$page_number = 1; // int | Current page number of returned records

try {
    $result = $apiInstance->dashboardZoomRoom($zoomroom_id, $from, $to, $page_size, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardZoomRoom: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zoomroom_id** | **string**| The Zoom Room ID |
 **from** | **\DateTime**| Start Date |
 **to** | **\DateTime**| End Date |
 **page_size** | **int**| The number of records returned within a single API call | [optional] [default to 30]
 **page_number** | **int**| Current page number of returned records | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dashboardZoomRooms**
> \Swagger\Client\Model\ZoomRoomList dashboardZoomRooms($page_size, $page_number)

List Zoom Rooms

List all zoom rooms on account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 30; // int | The number of records returned within a single API call
$page_number = 1; // int | Current page number of returned records

try {
    $result = $apiInstance->dashboardZoomRooms($page_size, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardsApi->dashboardZoomRooms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **int**| The number of records returned within a single API call | [optional] [default to 30]
 **page_number** | **int**| Current page number of returned records | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\ZoomRoomList**](../Model/ZoomRoomList.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

