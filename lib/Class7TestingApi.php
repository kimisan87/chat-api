<?php
/**
 * Class7TestingApi
 * PHP version 5
 *
 * @category Class
 * @package  chatapi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Chat API SDK
 *
 * The SDK allows you to receive and send messages through your WhatsApp account. [Sign up now](https://app.chat-api.com/)  The Chat API is based on the WhatsApp WEB protocol and excludes the ban both when using libraries from mgp25 and the like. Despite this, your account can be banned by anti-spam system WhatsApp after several clicking the \"block\" button.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: sale@chat-api.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace chatapi\chatapi;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use chatapi\ApiException;
use chatapi\Configuration;
use chatapi\HeaderSelector;
use chatapi\ObjectSerializer;

/**
 * Class7TestingApi Class Doc Comment
 *
 * @category Class
 * @package  chatapi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Class7TestingApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation instanceStatuses
     *
     * Returns instance status changes history.
     *
     * @param  int $min_time Filter statuses received after specified date. Example: 946684800. (optional)
     * @param  int $max_time Filter statuses received before specified date. Example: 946684800. (optional)
     *
     * @throws \chatapi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \chatapi\chatapi\Statuses
     */
    public function instanceStatuses($min_time = null, $max_time = null)
    {
        list($response) = $this->instanceStatusesWithHttpInfo($min_time, $max_time);
        return $response;
    }

    /**
     * Operation instanceStatusesWithHttpInfo
     *
     * Returns instance status changes history.
     *
     * @param  int $min_time Filter statuses received after specified date. Example: 946684800. (optional)
     * @param  int $max_time Filter statuses received before specified date. Example: 946684800. (optional)
     *
     * @throws \chatapi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \chatapi\chatapi\Statuses, HTTP status code, HTTP response headers (array of strings)
     */
    public function instanceStatusesWithHttpInfo($min_time = null, $max_time = null)
    {
        $request = $this->instanceStatusesRequest($min_time, $max_time);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\chatapi\chatapi\Statuses' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\chatapi\chatapi\Statuses', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\chatapi\chatapi\Statuses';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\chatapi\chatapi\Statuses',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation instanceStatusesAsync
     *
     * Returns instance status changes history.
     *
     * @param  int $min_time Filter statuses received after specified date. Example: 946684800. (optional)
     * @param  int $max_time Filter statuses received before specified date. Example: 946684800. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function instanceStatusesAsync($min_time = null, $max_time = null)
    {
        return $this->instanceStatusesAsyncWithHttpInfo($min_time, $max_time)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation instanceStatusesAsyncWithHttpInfo
     *
     * Returns instance status changes history.
     *
     * @param  int $min_time Filter statuses received after specified date. Example: 946684800. (optional)
     * @param  int $max_time Filter statuses received before specified date. Example: 946684800. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function instanceStatusesAsyncWithHttpInfo($min_time = null, $max_time = null)
    {
        $returnType = '\chatapi\chatapi\Statuses';
        $request = $this->instanceStatusesRequest($min_time, $max_time);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'instanceStatuses'
     *
     * @param  int $min_time Filter statuses received after specified date. Example: 946684800. (optional)
     * @param  int $max_time Filter statuses received before specified date. Example: 946684800. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function instanceStatusesRequest($min_time = null, $max_time = null)
    {

        $resourcePath = '/instanceStatuses';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($min_time !== null) {
            $queryParams['min_time'] = ObjectSerializer::toQueryValue($min_time);
        }
        // query params
        if ($max_time !== null) {
            $queryParams['max_time'] = ObjectSerializer::toQueryValue($max_time);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('instanceId');
        if ($apiKey !== null) {
            $queryParams['instanceId'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('token');
        if ($apiKey !== null) {
            $queryParams['token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation webhookStatuses
     *
     * Returns webhook status for message.
     *
     * @param  string $msg_id Message ID. Example: false_17472822486@c.us_DF38E6A25B42CC8CCE57EC40F. (required)
     *
     * @throws \chatapi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \chatapi\chatapi\WebhookStatus
     */
    public function webhookStatuses($msg_id)
    {
        list($response) = $this->webhookStatusesWithHttpInfo($msg_id);
        return $response;
    }

    /**
     * Operation webhookStatusesWithHttpInfo
     *
     * Returns webhook status for message.
     *
     * @param  string $msg_id Message ID. Example: false_17472822486@c.us_DF38E6A25B42CC8CCE57EC40F. (required)
     *
     * @throws \chatapi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \chatapi\chatapi\WebhookStatus, HTTP status code, HTTP response headers (array of strings)
     */
    public function webhookStatusesWithHttpInfo($msg_id)
    {
        $request = $this->webhookStatusesRequest($msg_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\chatapi\chatapi\WebhookStatus' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\chatapi\chatapi\WebhookStatus', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\chatapi\chatapi\WebhookStatus';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\chatapi\chatapi\WebhookStatus',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation webhookStatusesAsync
     *
     * Returns webhook status for message.
     *
     * @param  string $msg_id Message ID. Example: false_17472822486@c.us_DF38E6A25B42CC8CCE57EC40F. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookStatusesAsync($msg_id)
    {
        return $this->webhookStatusesAsyncWithHttpInfo($msg_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webhookStatusesAsyncWithHttpInfo
     *
     * Returns webhook status for message.
     *
     * @param  string $msg_id Message ID. Example: false_17472822486@c.us_DF38E6A25B42CC8CCE57EC40F. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookStatusesAsyncWithHttpInfo($msg_id)
    {
        $returnType = '\chatapi\chatapi\WebhookStatus';
        $request = $this->webhookStatusesRequest($msg_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'webhookStatuses'
     *
     * @param  string $msg_id Message ID. Example: false_17472822486@c.us_DF38E6A25B42CC8CCE57EC40F. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function webhookStatusesRequest($msg_id)
    {
        // verify the required parameter 'msg_id' is set
        if ($msg_id === null || (is_array($msg_id) && count($msg_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $msg_id when calling webhookStatuses'
            );
        }

        $resourcePath = '/webhookStatus';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($msg_id !== null) {
            $queryParams['msgId'] = ObjectSerializer::toQueryValue($msg_id);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('instanceId');
        if ($apiKey !== null) {
            $queryParams['instanceId'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('token');
        if ($apiKey !== null) {
            $queryParams['token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
