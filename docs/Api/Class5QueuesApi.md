# chatapi\Class5QueuesApi

All URIs are relative to *https://api.chat-api.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**clearActionsQueue**](Class5QueuesApi.md#clearActionsQueue) | **POST** /clearActionsQueue | Clear outbound actions queue.
[**clearMessagesQueue**](Class5QueuesApi.md#clearMessagesQueue) | **POST** /clearMessagesQueue | Clear outbound messages queue.
[**showActionsQueue**](Class5QueuesApi.md#showActionsQueue) | **GET** /showActionsQueue | Get outbound messages queue.
[**showMessagesQueue**](Class5QueuesApi.md#showMessagesQueue) | **GET** /showMessagesQueue | Get outbound messages queue.



## clearActionsQueue

> \chatapi\chatapi\ClearActionsQueueStatus clearActionsQueue()

Clear outbound actions queue.

This method is needed when you accidentally sent thousands of actions in a row.

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


$apiInstance = new chatapi\Api\Class5QueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->clearActionsQueue();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class5QueuesApi->clearActionsQueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\chatapi\chatapi\ClearActionsQueueStatus**](../Model/ClearActionsQueueStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## clearMessagesQueue

> \chatapi\chatapi\ClearMessagesQueueStatus clearMessagesQueue()

Clear outbound messages queue.

This method is needed when you accidentally sent thousands of messages in a row.

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


$apiInstance = new chatapi\Api\Class5QueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->clearMessagesQueue();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class5QueuesApi->clearMessagesQueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\chatapi\chatapi\ClearMessagesQueueStatus**](../Model/ClearMessagesQueueStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showActionsQueue

> \chatapi\chatapi\OutboundActions showActionsQueue()

Get outbound messages queue.

When you create an action, all actions are queued up. If an action is not executed, it remains in the queue and will be sent for execution in time. again. The action cannot be executed due to the status of the device connected to the account.  This method give the last 100 actions in the queue.

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


$apiInstance = new chatapi\Api\Class5QueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->showActionsQueue();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class5QueuesApi->showActionsQueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\chatapi\chatapi\OutboundActions**](../Model/OutboundActions.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showMessagesQueue

> \chatapi\chatapi\OutboundMessages showMessagesQueue()

Get outbound messages queue.

When sending messages, all messages are in the queue. If the message is not sent, then it remains in the queue and in time it will be sent again. The message may not be sent due to the status of the device connected to the account.   This method give the last 100 messages in the queue.

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


$apiInstance = new chatapi\Api\Class5QueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->showMessagesQueue();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class5QueuesApi->showMessagesQueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\chatapi\chatapi\OutboundMessages**](../Model/OutboundMessages.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

