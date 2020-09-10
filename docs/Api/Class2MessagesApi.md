# chatapi\Class2MessagesApi

All URIs are relative to *https://api.chat-api.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**forwardMessage**](Class2MessagesApi.md#forwardMessage) | **POST** /forwardMessage | Forwarding messages to a new or existing chat.
[**getMessages**](Class2MessagesApi.md#getMessages) | **GET** /messages | Get a list of messages.
[**sendContact**](Class2MessagesApi.md#sendContact) | **POST** /sendContact | Sending a contact or contact list to a new or existing chat.
[**sendFile**](Class2MessagesApi.md#sendFile) | **POST** /sendFile | Send a file to a new or existing chat.
[**sendLink**](Class2MessagesApi.md#sendLink) | **POST** /sendLink | Send text with link and link&#39;s preview to a new or existing chat.
[**sendLocation**](Class2MessagesApi.md#sendLocation) | **POST** /sendLocation | Sending a location to a new or existing chat.
[**sendMessage**](Class2MessagesApi.md#sendMessage) | **POST** /sendMessage | Send a message to a new or existing chat.
[**sendPTT**](Class2MessagesApi.md#sendPTT) | **POST** /sendPTT | Send a ptt-audio to a new or existing chat.
[**sendVCard**](Class2MessagesApi.md#sendVCard) | **POST** /sendVCard | Sending a vcard to a new or existing chat.



## forwardMessage

> \chatapi\chatapi\SendMessageStatus forwardMessage($forward_message_request)

Forwarding messages to a new or existing chat.

Only one of two parameters is needed to determine the destination - chatId or phone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: instanceId
$config = chatapi\Configuration::getDefaultConfiguration()->setApiKey('instanceId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = chatapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('instanceId', 'Bearer');

// Configure API key authorization: token
$config = chatapi\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = chatapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new chatapi\Api\Class2MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$forward_message_request = new \chatapi\chatapi\ForwardMessageRequest(); // \chatapi\chatapi\ForwardMessageRequest | 

try {
    $result = $apiInstance->forwardMessage($forward_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class2MessagesApi->forwardMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **forward_message_request** | [**\chatapi\chatapi\ForwardMessageRequest**](../Model/ForwardMessageRequest.md)|  |

### Return type

[**\chatapi\chatapi\SendMessageStatus**](../Model/SendMessageStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: application/x-www-form-urlencoded, application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getMessages

> \chatapi\chatapi\Messages getMessages($last_message_number, $last, $chat_id, $limit, $min_time, $max_time)

Get a list of messages.

To receive only new messages, pass the **lastMessageNumber** parameter from the last query.  Files from messages are guaranteed to be stored only for 30 days and can be deleted. Download the files as soon as you get to your server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: instanceId
$config = chatapi\Configuration::getDefaultConfiguration()->setApiKey('instanceId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = chatapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('instanceId', 'Bearer');

// Configure API key authorization: token
$config = chatapi\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = chatapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new chatapi\Api\Class2MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$last_message_number = 0; // int | The lastMessageNumber parameter from the last response
$last = true; // bool | Displays the last 100 messages. If this parameter is passed, then lastMessageNumber is ignored.
$chat_id = 17633123456@c.us; // string | Filter messages by chatId  Chat ID from the message list. Examples: 17633123456@c.us for private messages and 17680561234-1479621234@g.us for the group.
$limit = 100; // int | Sets length of the message list. Default 100. With value 0 returns all messages.
$min_time = 946684800; // int | Filter messages received after specified time. Example: 946684800.
$max_time = 946684800; // int | Filter messages received before specified time. Example: 946684800.

try {
    $result = $apiInstance->getMessages($last_message_number, $last, $chat_id, $limit, $min_time, $max_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class2MessagesApi->getMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **last_message_number** | **int**| The lastMessageNumber parameter from the last response | [optional]
 **last** | **bool**| Displays the last 100 messages. If this parameter is passed, then lastMessageNumber is ignored. | [optional] [default to false]
 **chat_id** | **string**| Filter messages by chatId  Chat ID from the message list. Examples: 17633123456@c.us for private messages and 17680561234-1479621234@g.us for the group. | [optional]
 **limit** | **int**| Sets length of the message list. Default 100. With value 0 returns all messages. | [optional]
 **min_time** | **int**| Filter messages received after specified time. Example: 946684800. | [optional]
 **max_time** | **int**| Filter messages received before specified time. Example: 946684800. | [optional]

### Return type

[**\chatapi\chatapi\Messages**](../Model/Messages.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## sendContact

> \chatapi\chatapi\SendMessageStatus sendContact($send_contact_request)

Sending a contact or contact list to a new or existing chat.

Only one of two parameters is needed to determine the destination - chatId or phone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: instanceId
$config = chatapi\Configuration::getDefaultConfiguration()->setApiKey('instanceId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = chatapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('instanceId', 'Bearer');

// Configure API key authorization: token
$config = chatapi\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = chatapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new chatapi\Api\Class2MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_contact_request = new \chatapi\chatapi\SendContactRequest(); // \chatapi\chatapi\SendContactRequest | 

try {
    $result = $apiInstance->sendContact($send_contact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class2MessagesApi->sendContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **send_contact_request** | [**\chatapi\chatapi\SendContactRequest**](../Model/SendContactRequest.md)|  |

### Return type

[**\chatapi\chatapi\SendMessageStatus**](../Model/SendMessageStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: application/x-www-form-urlencoded, application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## sendFile

> \chatapi\chatapi\SendMessageStatus sendFile($send_file_request)

Send a file to a new or existing chat.

Only one of two parameters is needed to determine the destination - chatId or phone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: instanceId
$config = chatapi\Configuration::getDefaultConfiguration()->setApiKey('instanceId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = chatapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('instanceId', 'Bearer');

// Configure API key authorization: token
$config = chatapi\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = chatapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new chatapi\Api\Class2MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_file_request = new \chatapi\chatapi\SendFileRequest(); // \chatapi\chatapi\SendFileRequest | 

try {
    $result = $apiInstance->sendFile($send_file_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class2MessagesApi->sendFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **send_file_request** | [**\chatapi\chatapi\SendFileRequest**](../Model/SendFileRequest.md)|  |

### Return type

[**\chatapi\chatapi\SendMessageStatus**](../Model/SendMessageStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: application/x-www-form-urlencoded, application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## sendLink

> \chatapi\chatapi\SendMessageStatus sendLink($send_link_request)

Send text with link and link's preview to a new or existing chat.

Only one of two parameters is needed to determine the destination - chatId or phone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: instanceId
$config = chatapi\Configuration::getDefaultConfiguration()->setApiKey('instanceId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = chatapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('instanceId', 'Bearer');

// Configure API key authorization: token
$config = chatapi\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = chatapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new chatapi\Api\Class2MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_link_request = new \chatapi\chatapi\SendLinkRequest(); // \chatapi\chatapi\SendLinkRequest | 

try {
    $result = $apiInstance->sendLink($send_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class2MessagesApi->sendLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **send_link_request** | [**\chatapi\chatapi\SendLinkRequest**](../Model/SendLinkRequest.md)|  |

### Return type

[**\chatapi\chatapi\SendMessageStatus**](../Model/SendMessageStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: application/x-www-form-urlencoded, application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## sendLocation

> \chatapi\chatapi\SendMessageStatus sendLocation($send_location_request)

Sending a location to a new or existing chat.

Only one of two parameters is needed to determine the destination - chatId or phone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: instanceId
$config = chatapi\Configuration::getDefaultConfiguration()->setApiKey('instanceId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = chatapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('instanceId', 'Bearer');

// Configure API key authorization: token
$config = chatapi\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = chatapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new chatapi\Api\Class2MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_location_request = new \chatapi\chatapi\SendLocationRequest(); // \chatapi\chatapi\SendLocationRequest | 

try {
    $result = $apiInstance->sendLocation($send_location_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class2MessagesApi->sendLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **send_location_request** | [**\chatapi\chatapi\SendLocationRequest**](../Model/SendLocationRequest.md)|  |

### Return type

[**\chatapi\chatapi\SendMessageStatus**](../Model/SendMessageStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: application/x-www-form-urlencoded, application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## sendMessage

> \chatapi\chatapi\SendMessageStatus sendMessage($send_message_request)

Send a message to a new or existing chat.

The message will be added to the queue for sending and delivered even if the phone is disconnected from the Internet or authorization is not passed.  Only one of two parameters is needed to determine the destination - chatId or phone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: instanceId
$config = chatapi\Configuration::getDefaultConfiguration()->setApiKey('instanceId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = chatapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('instanceId', 'Bearer');

// Configure API key authorization: token
$config = chatapi\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = chatapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new chatapi\Api\Class2MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_message_request = new \chatapi\chatapi\SendMessageRequest(); // \chatapi\chatapi\SendMessageRequest | 

try {
    $result = $apiInstance->sendMessage($send_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class2MessagesApi->sendMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **send_message_request** | [**\chatapi\chatapi\SendMessageRequest**](../Model/SendMessageRequest.md)|  |

### Return type

[**\chatapi\chatapi\SendMessageStatus**](../Model/SendMessageStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: application/x-www-form-urlencoded, application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## sendPTT

> \chatapi\chatapi\SendMessageStatus sendPTT($send_ptt_request)

Send a ptt-audio to a new or existing chat.

Only one of two parameters is needed to determine the destination - chatId or phone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: instanceId
$config = chatapi\Configuration::getDefaultConfiguration()->setApiKey('instanceId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = chatapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('instanceId', 'Bearer');

// Configure API key authorization: token
$config = chatapi\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = chatapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new chatapi\Api\Class2MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_ptt_request = new \chatapi\chatapi\SendPTTRequest(); // \chatapi\chatapi\SendPTTRequest | 

try {
    $result = $apiInstance->sendPTT($send_ptt_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class2MessagesApi->sendPTT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **send_ptt_request** | [**\chatapi\chatapi\SendPTTRequest**](../Model/SendPTTRequest.md)|  |

### Return type

[**\chatapi\chatapi\SendMessageStatus**](../Model/SendMessageStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: application/x-www-form-urlencoded, application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## sendVCard

> \chatapi\chatapi\SendMessageStatus sendVCard($send_v_card_request)

Sending a vcard to a new or existing chat.

Only one of two parameters is needed to determine the destination - chatId or phone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: instanceId
$config = chatapi\Configuration::getDefaultConfiguration()->setApiKey('instanceId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = chatapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('instanceId', 'Bearer');

// Configure API key authorization: token
$config = chatapi\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = chatapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new chatapi\Api\Class2MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_v_card_request = new \chatapi\chatapi\SendVCardRequest(); // \chatapi\chatapi\SendVCardRequest | 

try {
    $result = $apiInstance->sendVCard($send_v_card_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class2MessagesApi->sendVCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **send_v_card_request** | [**\chatapi\chatapi\SendVCardRequest**](../Model/SendVCardRequest.md)|  |

### Return type

[**\chatapi\chatapi\SendMessageStatus**](../Model/SendMessageStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: application/x-www-form-urlencoded, application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

