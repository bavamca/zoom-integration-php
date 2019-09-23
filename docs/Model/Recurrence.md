# Recurrence

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **int** | Recurrence meeting type | [optional] 
**repeat_interval** | **int** | At which interval should the meeting repeat? For a daily meeting, max of 90 days. For a weekly meeting, max of 12 weeks. For a monthly meeting, max of 3 months. | [optional] 
**weekly_days** | **int** | Days of the week the meeting should repeat, multiple values separated by comma | [optional] 
**monthly_day** | **int** | Day of the month for the meeting to be scheduled. The value range is from 1 to 31. | [optional] 
**monthly_week** | **int** | Week for which the meeting should recur each month, | [optional] 
**monthly_week_day** | **int** | Day for which the meeting should recur each month | [optional] 
**end_times** | **int** | Select how many times the meeting will occur before it is canceled. (Cannot be used with \&quot;end_date_time\&quot;.) | [optional] 
**end_date_time** | [**\DateTime**](\DateTime.md) | Select a date the meeting will occur before it is canceled.. Should be UTC time, such as 2017-11-25T12:00:00Z. (Cannot be used with \&quot;end_times\&quot;.) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


