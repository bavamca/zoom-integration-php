# WebinarSettings

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**host_video** | **bool** | Start video when host joins webinar | [optional] 
**panelists_video** | **bool** | Start video when panelists join webinar | [optional] 
**practice_session** | **bool** | Enable Practice Session | [optional] [default to false]
**hd_video** | **bool** | Default to HD Video | [optional] [default to false]
**approval_type** | **int** |  | [optional] 
**registration_type** | **int** | Registration type. Used for recurring webinar with fixed time only. | [optional] 
**audio** | **string** | Determine how participants can join the audio portion of the meeting | [optional] [default to 'both']
**auto_recording** | **string** |  | [optional] [default to 'none']
**enforce_login** | **bool** | Only signed-in users can join this meeting | [optional] 
**enforce_login_domains** | **string** | Only signed-in users with specified domains can join meetings | [optional] 
**alternative_hosts** | **string** | Alternative hosts emails or IDs. Multiple values separated by comma. | [optional] 
**close_registration** | **bool** | Close registration after event date | [optional] 
**show_share_button** | **bool** | Show social share buttons on registration page | [optional] 
**allow_multiple_devices** | **bool** | Allow attendees to join from multiple devices | [optional] 
**on_demand** | **bool** | Make the webinar on-demand | [optional] [default to false]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


