# Swagger\Client\MeetingsApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**meeting**](MeetingsApi.md#meeting) | **GET** /meetings/{meetingId} | Retrieve a meeting
[**meetingCreate**](MeetingsApi.md#meetingCreate) | **POST** /users/{userId}/meetings | Create a meeting
[**meetingDelete**](MeetingsApi.md#meetingDelete) | **DELETE** /meetings/{meetingId} | Delete a meeting
[**meetingInvitation**](MeetingsApi.md#meetingInvitation) | **GET** /meetings/{meetingId}/invitation | Retrieve meeting invitation
[**meetingLiveStreamStatusUpdate**](MeetingsApi.md#meetingLiveStreamStatusUpdate) | **PATCH** /meetings/{meetingId}/livestream/status | Update a meeting live stream status
[**meetingLiveStreamUpdate**](MeetingsApi.md#meetingLiveStreamUpdate) | **PATCH** /meetings/{meetingId}/livestream | Update a meeting live stream
[**meetingPollCreate**](MeetingsApi.md#meetingPollCreate) | **POST** /meetings/{meetingId}/polls | Create a meeting&#39;s poll
[**meetingPollDelete**](MeetingsApi.md#meetingPollDelete) | **DELETE** /meetings/{meetingId}/polls/{pollId} | Delete a meeting&#39;s Poll
[**meetingPollGet**](MeetingsApi.md#meetingPollGet) | **GET** /meetings/{meetingId}/polls/{pollId} | Retrieve a meeting&#39;s poll
[**meetingPollUpdate**](MeetingsApi.md#meetingPollUpdate) | **PUT** /meetings/{meetingId}/polls/{pollId} | Update a meeting&#39;s poll
[**meetingPolls**](MeetingsApi.md#meetingPolls) | **GET** /meetings/{meetingId}/polls | List a meeting&#39;s polls
[**meetingRegistrantCreate**](MeetingsApi.md#meetingRegistrantCreate) | **POST** /meetings/{meetingId}/registrants | Add a meeting registrant
[**meetingRegistrantStatus**](MeetingsApi.md#meetingRegistrantStatus) | **PUT** /meetings/{meetingId}/registrants/status | Update a meeting registrant&#39;s status
[**meetingRegistrants**](MeetingsApi.md#meetingRegistrants) | **GET** /meetings/{meetingId}/registrants | List a meeting&#39;s registrants
[**meetingStatus**](MeetingsApi.md#meetingStatus) | **PUT** /meetings/{meetingId}/status | Update a meeting&#39;s status
[**meetingUpdate**](MeetingsApi.md#meetingUpdate) | **PATCH** /meetings/{meetingId} | Update a meeting
[**meetings**](MeetingsApi.md#meetings) | **GET** /users/{userId}/meetings | List meetings
[**pastMeetingDetails**](MeetingsApi.md#pastMeetingDetails) | **GET** /past_meetings/{meetingUUID} | Retrieve past meeting details
[**pastMeetingParticipants**](MeetingsApi.md#pastMeetingParticipants) | **GET** /past_meetings/{meetingUUID}/participants | Retrieve past meeting participants
[**pastMeetings**](MeetingsApi.md#pastMeetings) | **GET** /past_meetings/{meetingId}/instances | List of ended meeting instances


# **meeting**
> \Swagger\Client\Model\InlineResponse2003 meeting($meeting_id)

Retrieve a meeting

Retrieve a meeting's details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 56; // int | The meeting ID

try {
    $result = $apiInstance->meeting($meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meeting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingCreate**
> \Swagger\Client\Model\InlineResponse2012 meetingCreate($user_id, $body)

Create a meeting

Create a meeting for a user <aside>The expiration time of start_url is two hours. But for API users, the expiration time is 90 days.</aside>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address
$body = new \stdClass; // object | Meeting object

try {
    $result = $apiInstance->meetingCreate($user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address |
 **body** | [**object**](../Model/.md)| Meeting object |

### Return type

[**\Swagger\Client\Model\InlineResponse2012**](../Model/InlineResponse2012.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingDelete**
> meetingDelete($meeting_id, $occurrence_id)

Delete a meeting

Delete a meeting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 56; // int | The meeting ID
$occurrence_id = "occurrence_id_example"; // string | The meeting occurrence ID

try {
    $apiInstance->meetingDelete($meeting_id, $occurrence_id);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID |
 **occurrence_id** | **string**| The meeting occurrence ID | [optional]

### Return type

void (empty response body)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingInvitation**
> \Swagger\Client\Model\MeetingInvitation meetingInvitation($meeting_id)

Retrieve meeting invitation

Retrieve a meeting invitation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 56; // int | The meeting ID

try {
    $result = $apiInstance->meetingInvitation($meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingInvitation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID |

### Return type

[**\Swagger\Client\Model\MeetingInvitation**](../Model/MeetingInvitation.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingLiveStreamStatusUpdate**
> meetingLiveStreamStatusUpdate($meeting_id, $body)

Update a meeting live stream status

Update a meeting's live stream status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 56; // int | The meeting ID
$body = new \Swagger\Client\Model\MeetingLiveStreamStatus(); // \Swagger\Client\Model\MeetingLiveStreamStatus | Meeting

try {
    $apiInstance->meetingLiveStreamStatusUpdate($meeting_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingLiveStreamStatusUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID |
 **body** | [**\Swagger\Client\Model\MeetingLiveStreamStatus**](../Model/MeetingLiveStreamStatus.md)| Meeting |

### Return type

void (empty response body)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingLiveStreamUpdate**
> meetingLiveStreamUpdate($meeting_id, $body)

Update a meeting live stream

Update a meeting's live stream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 56; // int | The meeting ID
$body = new \Swagger\Client\Model\MeetingLiveStream(); // \Swagger\Client\Model\MeetingLiveStream | Meeting

try {
    $apiInstance->meetingLiveStreamUpdate($meeting_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingLiveStreamUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID |
 **body** | [**\Swagger\Client\Model\MeetingLiveStream**](../Model/MeetingLiveStream.md)| Meeting |

### Return type

void (empty response body)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingPollCreate**
> \Swagger\Client\Model\InlineResponse2014 meetingPollCreate($meeting_id, $body)

Create a meeting's poll

Create a poll for a meeting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 56; // int | The meeting ID
$body = new \stdClass; // object | Meeting poll object

try {
    $result = $apiInstance->meetingPollCreate($meeting_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingPollCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID |
 **body** | [**object**](../Model/.md)| Meeting poll object |

### Return type

[**\Swagger\Client\Model\InlineResponse2014**](../Model/InlineResponse2014.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingPollDelete**
> meetingPollDelete($meeting_id, $poll_id)

Delete a meeting's Poll

Delete a meeting's Poll

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 56; // int | The meeting ID
$poll_id = "poll_id_example"; // string | The poll ID

try {
    $apiInstance->meetingPollDelete($meeting_id, $poll_id);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingPollDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID |
 **poll_id** | **string**| The poll ID |

### Return type

void (empty response body)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingPollGet**
> \Swagger\Client\Model\InlineResponse2014 meetingPollGet($meeting_id, $poll_id)

Retrieve a meeting's poll

Retrieve a meeting's poll

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 56; // int | The meeting ID
$poll_id = "poll_id_example"; // string | The poll ID

try {
    $result = $apiInstance->meetingPollGet($meeting_id, $poll_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingPollGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID |
 **poll_id** | **string**| The poll ID |

### Return type

[**\Swagger\Client\Model\InlineResponse2014**](../Model/InlineResponse2014.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingPollUpdate**
> meetingPollUpdate($meeting_id, $poll_id, $body)

Update a meeting's poll

Update a meeting's poll

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 56; // int | The meeting ID
$poll_id = "poll_id_example"; // string | The poll ID
$body = new \stdClass; // object | Meeting Poll

try {
    $apiInstance->meetingPollUpdate($meeting_id, $poll_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingPollUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID |
 **poll_id** | **string**| The poll ID |
 **body** | [**object**](../Model/.md)| Meeting Poll |

### Return type

void (empty response body)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingPolls**
> \Swagger\Client\Model\PollList meetingPolls($meeting_id)

List a meeting's polls

List polls of a meeting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 56; // int | The meeting ID

try {
    $result = $apiInstance->meetingPolls($meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingPolls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID |

### Return type

[**\Swagger\Client\Model\PollList**](../Model/PollList.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingRegistrantCreate**
> \Swagger\Client\Model\InlineResponse2013 meetingRegistrantCreate($meeting_id, $body, $occurrence_ids)

Add a meeting registrant

Register a participant for a meeting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 56; // int | The meeting ID
$body = new \Swagger\Client\Model\MeetingRegistrant(); // \Swagger\Client\Model\MeetingRegistrant | 
$occurrence_ids = "occurrence_ids_example"; // string | Occurrence IDs. You can find these with the meeting get API. Multiple values separated by comma.

try {
    $result = $apiInstance->meetingRegistrantCreate($meeting_id, $body, $occurrence_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingRegistrantCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID |
 **body** | [**\Swagger\Client\Model\MeetingRegistrant**](../Model/MeetingRegistrant.md)|  |
 **occurrence_ids** | **string**| Occurrence IDs. You can find these with the meeting get API. Multiple values separated by comma. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2013**](../Model/InlineResponse2013.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingRegistrantStatus**
> meetingRegistrantStatus($meeting_id, $body, $occurrence_id)

Update a meeting registrant's status

Update a meeting registrant's status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 56; // int | The meeting ID
$body = new \Swagger\Client\Model\RegistrantStatus(); // \Swagger\Client\Model\RegistrantStatus | 
$occurrence_id = "occurrence_id_example"; // string | The meeting occurrence ID

try {
    $apiInstance->meetingRegistrantStatus($meeting_id, $body, $occurrence_id);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingRegistrantStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID |
 **body** | [**\Swagger\Client\Model\RegistrantStatus**](../Model/RegistrantStatus.md)|  |
 **occurrence_id** | **string**| The meeting occurrence ID | [optional]

### Return type

void (empty response body)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingRegistrants**
> \Swagger\Client\Model\MeetingRegistrantList meetingRegistrants($meeting_id, $occurrence_id, $status, $page_size, $page_number)

List a meeting's registrants

List registrants of a meeting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 56; // int | The meeting ID
$occurrence_id = "occurrence_id_example"; // string | The meeting occurrence ID
$status = "approved"; // string | The registrant status
$page_size = 30; // int | The number of records returned within a single API call
$page_number = 1; // int | Current page number of returned records

try {
    $result = $apiInstance->meetingRegistrants($meeting_id, $occurrence_id, $status, $page_size, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingRegistrants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID |
 **occurrence_id** | **string**| The meeting occurrence ID | [optional]
 **status** | **string**| The registrant status | [optional] [default to approved]
 **page_size** | **int**| The number of records returned within a single API call | [optional] [default to 30]
 **page_number** | **int**| Current page number of returned records | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\MeetingRegistrantList**](../Model/MeetingRegistrantList.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingStatus**
> meetingStatus($meeting_id, $body)

Update a meeting's status

Update a meeting's status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 56; // int | The meeting ID
$body = new \Swagger\Client\Model\Body6(); // \Swagger\Client\Model\Body6 | 

try {
    $apiInstance->meetingStatus($meeting_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID |
 **body** | [**\Swagger\Client\Model\Body6**](../Model/Body6.md)|  |

### Return type

void (empty response body)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingUpdate**
> meetingUpdate($meeting_id, $body)

Update a meeting

Update a meeting's details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 56; // int | The meeting ID
$body = new \stdClass; // object | Meeting

try {
    $apiInstance->meetingUpdate($meeting_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID |
 **body** | [**object**](../Model/.md)| Meeting |

### Return type

void (empty response body)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetings**
> \Swagger\Client\Model\MeetingList meetings($user_id, $type, $page_size, $page_number)

List meetings

List meetings for a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The user ID or email address
$type = "live"; // string | The meeting type
$page_size = 30; // int | The number of records returned within a single API call
$page_number = 1; // int | Current page number of returned records

try {
    $result = $apiInstance->meetings($user_id, $type, $page_size, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address |
 **type** | **string**| The meeting type | [optional] [default to live]
 **page_size** | **int**| The number of records returned within a single API call | [optional] [default to 30]
 **page_number** | **int**| Current page number of returned records | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\MeetingList**](../Model/MeetingList.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pastMeetingDetails**
> object pastMeetingDetails($meeting_uuid)

Retrieve past meeting details

Retrieve ended meeting details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_uuid = "meeting_uuid_example"; // string | The meeting UUID.

try {
    $result = $apiInstance->pastMeetingDetails($meeting_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->pastMeetingDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_uuid** | **string**| The meeting UUID. |

### Return type

**object**

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pastMeetingParticipants**
> \Swagger\Client\Model\InlineResponse2004 pastMeetingParticipants($meeting_uuid, $page_size, $next_page_token)

Retrieve past meeting participants

Retrieve ended meeting participants

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_uuid = "meeting_uuid_example"; // string | The meeting UUID.
$page_size = 30; // int | The number of records returned within a single API call
$next_page_token = "next_page_token_example"; // string | Next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceed the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->pastMeetingParticipants($meeting_uuid, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->pastMeetingParticipants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_uuid** | **string**| The meeting UUID. |
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

# **pastMeetings**
> \Swagger\Client\Model\MeetingInstances pastMeetings($meeting_id)

List of ended meeting instances

List of ended meeting instances

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: global
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Swagger\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_id = 56; // int | The meeting ID

try {
    $result = $apiInstance->pastMeetings($meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->pastMeetings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meeting_id** | **int**| The meeting ID |

### Return type

[**\Swagger\Client\Model\MeetingInstances**](../Model/MeetingInstances.md)

### Authorization

[global](../../README.md#global)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

