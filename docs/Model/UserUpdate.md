# UserUpdate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**first_name** | **string** | User&#39;s first name. Cannot contain more than 5 Chinese words. | [optional] 
**last_name** | **string** | User&#39;s last name. Cannot contain more than 5 Chinese words. | [optional] 
**type** | **int** | User&#39;s type | [optional] 
**pmi** | **string** | Personal Meeting ID,length must be 10 | [optional] 
**use_pmi** | **bool** | Use Personal Meeting ID for instant meetings. | [optional] [default to false]
**timezone** | [**\DateTime**](\DateTime.md) | The time zone id for user profile. For this parameter value please refer to the id value in [timezone](#timezones) list. | [optional] 
**language** | **string** | language | [optional] 
**dept** | **string** | Department for user profile, use for report | [optional] 
**vanity_name** | **string** | Personal meeting room name | [optional] 
**host_key** | **string** | Host Key, should be 6-digit number | [optional] 
**cms_user_id** | **string** | Kaltura User Id | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


