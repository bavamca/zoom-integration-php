# Session

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**topic** | **string** | Meeting topic | [optional] 
**type** | **int** | Meeting Type | [optional] 
**start_time** | [**\DateTime**](\DateTime.md) | Meeting start time. When using a format like \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss&#39;Z&#39;\&quot;, always use GMT time. When using a format like \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, you should use local time and you will need to specify the time zone. Only used for scheduled meetings and recurring meetings with fixed time. | [optional] 
**duration** | **int** | Meeting duration (minutes). Used for scheduled meetings only | [optional] 
**timezone** | **string** | Timezone to format start_time. For example, \&quot;America/Los_Angeles\&quot;. For scheduled meetings only. Please reference our [timezone](#timezones) list for supported timezones and their formats. | [optional] 
**password** | **string** | Password to join the meeting. Password may only contain the following characters: [a-z A-Z 0-9 @ - _ *]. Max of 10 characters. | [optional] 
**agenda** | **string** | Meeting description | [optional] 
**tracking_fields** | [**\Swagger\Client\Model\MeetingInfoTrackingFields[]**](MeetingInfoTrackingFields.md) | Tracking fields | [optional] 
**recurrence** | [**\Swagger\Client\Model\Recurrence**](Recurrence.md) |  | [optional] 
**settings** | [**\Swagger\Client\Model\MeetingSettings**](MeetingSettings.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


