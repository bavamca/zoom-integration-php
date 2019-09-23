# AccountSettingsScheduleMeeting

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**host_video** | **bool** | Start meetings with host video on | [optional] 
**participant_video** | **bool** | Start meetings with participant video on. Participants can change this during the meeting. | [optional] 
**audio_type** | **string** | Determine how participants can join the audio portion of the meeting | [optional] [default to 'both']
**join_before_host** | **bool** | Allow participants to join the meeting before the host arrives | [optional] 
**enforce_login** | **bool** | Only signed-in (Zoom users) users can join meetings | [optional] 
**enforce_login_with_domains** | **bool** | Only signed-in users with a specific domain can join meetings | [optional] 
**enforce_login_domains** | **string** | Only signed-in users with a specified domains | [optional] 
**not_store_meeting_topic** | **bool** | Always display \&quot;Zoom Meeting\&quot; as the meeting topic | [optional] 
**force_pmi_jbh_password** | **bool** | Require a password for Personal Meetings if attendees can join before host | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


