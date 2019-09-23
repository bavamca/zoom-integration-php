# MeetingSettings

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**host_video** | **bool** | Start video when host joins meeting | [optional] 
**participant_video** | **bool** | Start video when participants join meeting | [optional] 
**cn_meeting** | **bool** | Host meeting in China | [optional] [default to false]
**in_meeting** | **bool** | Host meeting in India | [optional] [default to false]
**join_before_host** | **bool** | Allow participants to join the meeting before the host starts the meeting. Only used for scheduled or recurring meetings. | [optional] [default to false]
**mute_upon_entry** | **bool** | Mute participants upon entry | [optional] [default to false]
**watermark** | **bool** | Add watermark when viewing shared screen | [optional] [default to false]
**use_pmi** | **bool** | Use Personal Meeting ID. Only used for scheduled meetings and recurring meetings with no fixed time. | [optional] [default to false]
**approval_type** | **int** |  | [optional] 
**registration_type** | **int** | Registration type. Used for recurring meeting with fixed time only. | [optional] 
**audio** | **string** | Determine how participants can join the audio portion of the meeting | [optional] [default to 'both']
**auto_recording** | **string** |  | [optional] [default to 'none']
**enforce_login** | **bool** | Only signed-in users can join this meeting | [optional] 
**enforce_login_domains** | **string** | Only signed-in users with specified domains can join meetings | [optional] 
**alternative_hosts** | **string** | Alternative hosts emails or IDs. Multiple value separated by comma. | [optional] 
**close_registration** | **bool** | Close registration after event date | [optional] [default to false]
**waiting_room** | **bool** | Enable waiting room | [optional] [default to false]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


