# SessionWebinarUpdate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**topic** | **string** | Webinar topic | [optional] 
**type** | **int** | Webinar Type | [optional] 
**start_time** | [**\DateTime**](\DateTime.md) | Webinar start time, in the format \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss&#39;Z&#39;\&quot;, should be GMT time. In the format \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, should be local time, need to specify the time zone. Only used for scheduled webinar and recurring webinar with fixed time. | [optional] 
**duration** | **int** | Webinar duration (minutes). Used for scheduled webinar only | [optional] 
**timezone** | **string** | Timezone to format start_time. For example, \&quot;America/Los_Angeles\&quot;. For scheduled meetings only. Please reference our [timezone](#timezones) list for supported timezones and their formats. | [optional] 
**password** | **string** | Webinar password. Password may only contain the following characters: [a-z A-Z 0-9 @ - _ *]. Max of 10 characters. | [optional] 
**agenda** | **string** | Webinar description | [optional] 
**tracking_fields** | [**\Swagger\Client\Model\MeetingInfoTrackingFields[]**](MeetingInfoTrackingFields.md) | Tracking fields | [optional] 
**recurrence** | [**\Swagger\Client\Model\Recurrence**](Recurrence.md) |  | [optional] 
**settings** | **object** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


