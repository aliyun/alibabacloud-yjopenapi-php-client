<?php
/**
 * MultiplayApi
 * PHP version 5
 *
 * @category Class
 * @package  Yjopenapi\Client
 */

/** Package client
 * 
 * 
 * YuanJing OpenAPI SDK for PHP
 *
 * 
 *
 */
namespace Yjopenapi\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Yjopenapi\Client\Api\ApiException;
use Yjopenapi\Client\Api\Configuration;
use Yjopenapi\Client\Api\HeaderSelector;
use Yjopenapi\Client\Api\ObjectSerializer;

/**
 * MultiplayApi Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class MultiplayApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation close
     *
     * @param  \Yjopenapi\Client\Model\MultiplayCloseForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\MultiplayCloseResult
     */
    public function close($varForms)
    {
        list($response) = $this->closeWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation closeWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\MultiplayCloseForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\MultiplayCloseResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function closeWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\MultiplayCloseResult';
        $request = $this->closeRequest($varForms);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
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

            $content = $responseBody->getContents();
            if (!in_array($returnType, ['string','integer','bool'])) {
                $content = json_decode($content);
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
                        '\Yjopenapi\Client\Model\MultiplayCloseResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation closeAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\MultiplayCloseForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function closeAsync($varForms)
    {
        return $this->closeAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation closeAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\MultiplayCloseForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function closeAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\MultiplayCloseResult';
        $request = $this->closeRequest($varForms);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();

                    $content = $responseBody->getContents();
                    if ($returnType !== 'string') {
                        $content = json_decode($content);
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
     * Create request for operation 'close'
     *
     * @param  \Yjopenapi\Client\Model\MultiplayCloseForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function closeRequest($varForms)
    {
        // verify the required parameter 'mp_id' is set
        if ($varForms['mp_id'] === null || (is_array($varForms['mp_id']) && count($varForms['mp_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'mp_id\'] when calling close'
            );
        }

        $resourcePath = '/multiplay/close';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['mpId'] = ObjectSerializer::toFormValue($varForms['mp_id']);
        if ($varForms['reason'] !== null) {
            $formParams['reason'] = ObjectSerializer::toFormValue($varForms['reason']);
        }

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/x-www-form-urlencoded']
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        $signHeaders = $this->headerSelector->prepareSignHeader($formParams, $queryParams, 'POST', $this->config);

        $headers = array_merge(
            ['User-Agent' => 'cgw-client/1.0.0/php'],
            $signHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getScheme() . '://' . $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation init
     *
     * @param  \Yjopenapi\Client\Model\MultiplayInitForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\MultiplayInitResult
     */
    public function init($varForms)
    {
        list($response) = $this->initWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation initWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\MultiplayInitForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\MultiplayInitResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function initWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\MultiplayInitResult';
        $request = $this->initRequest($varForms);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
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

            $content = $responseBody->getContents();
            if (!in_array($returnType, ['string','integer','bool'])) {
                $content = json_decode($content);
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
                        '\Yjopenapi\Client\Model\MultiplayInitResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation initAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\MultiplayInitForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function initAsync($varForms)
    {
        return $this->initAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation initAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\MultiplayInitForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function initAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\MultiplayInitResult';
        $request = $this->initRequest($varForms);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();

                    $content = $responseBody->getContents();
                    if ($returnType !== 'string') {
                        $content = json_decode($content);
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
     * Create request for operation 'init'
     *
     * @param  \Yjopenapi\Client\Model\MultiplayInitForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function initRequest($varForms)
    {
        // verify the required parameter 'game_session' is set
        if ($varForms['game_session'] === null || (is_array($varForms['game_session']) && count($varForms['game_session']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'game_session\'] when calling init'
            );
        }
        // verify the required parameter 'app_key' is set
        if ($varForms['app_key'] === null || (is_array($varForms['app_key']) && count($varForms['app_key']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'app_key\'] when calling init'
            );
        }

        $resourcePath = '/multiplay/init';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['gameSession'] = ObjectSerializer::toFormValue($varForms['game_session']);
        $formParams['appKey'] = ObjectSerializer::toFormValue($varForms['app_key']);
        if ($varForms['config'] !== null) {
            $formParams['config'] = ObjectSerializer::toFormValue($varForms['config']);
        }
        if ($varForms['tokens'] !== null) {
            $formParams['tokens'] = ObjectSerializer::toFormValue($varForms['tokens']);
        }

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/x-www-form-urlencoded']
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        $signHeaders = $this->headerSelector->prepareSignHeader($formParams, $queryParams, 'POST', $this->config);

        $headers = array_merge(
            ['User-Agent' => 'cgw-client/1.0.0/php'],
            $signHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getScheme() . '://' . $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation join
     *
     * @param  \Yjopenapi\Client\Model\MultiplayJoinForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\MultiplayJoinResult
     */
    public function join($varForms)
    {
        list($response) = $this->joinWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation joinWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\MultiplayJoinForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\MultiplayJoinResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function joinWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\MultiplayJoinResult';
        $request = $this->joinRequest($varForms);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
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

            $content = $responseBody->getContents();
            if (!in_array($returnType, ['string','integer','bool'])) {
                $content = json_decode($content);
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
                        '\Yjopenapi\Client\Model\MultiplayJoinResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation joinAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\MultiplayJoinForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function joinAsync($varForms)
    {
        return $this->joinAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation joinAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\MultiplayJoinForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function joinAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\MultiplayJoinResult';
        $request = $this->joinRequest($varForms);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();

                    $content = $responseBody->getContents();
                    if ($returnType !== 'string') {
                        $content = json_decode($content);
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
     * Create request for operation 'join'
     *
     * @param  \Yjopenapi\Client\Model\MultiplayJoinForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function joinRequest($varForms)
    {
        // verify the required parameter 'mp_id' is set
        if ($varForms['mp_id'] === null || (is_array($varForms['mp_id']) && count($varForms['mp_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'mp_id\'] when calling join'
            );
        }
        // verify the required parameter 'account_id' is set
        if ($varForms['account_id'] === null || (is_array($varForms['account_id']) && count($varForms['account_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'account_id\'] when calling join'
            );
        }

        $resourcePath = '/multiplay/join';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['mpId'] = ObjectSerializer::toFormValue($varForms['mp_id']);
        $formParams['accountId'] = ObjectSerializer::toFormValue($varForms['account_id']);
        if ($varForms['control_id'] !== null) {
            $formParams['controlId'] = ObjectSerializer::toFormValue($varForms['control_id']);
        }

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/x-www-form-urlencoded']
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        $signHeaders = $this->headerSelector->prepareSignHeader($formParams, $queryParams, 'POST', $this->config);

        $headers = array_merge(
            ['User-Agent' => 'cgw-client/1.0.0/php'],
            $signHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getScheme() . '://' . $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leave
     *
     * @param  \Yjopenapi\Client\Model\MultiplayLeaveForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\MultiplayLeaveResult
     */
    public function leave($varForms)
    {
        list($response) = $this->leaveWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation leaveWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\MultiplayLeaveForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\MultiplayLeaveResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function leaveWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\MultiplayLeaveResult';
        $request = $this->leaveRequest($varForms);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
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

            $content = $responseBody->getContents();
            if (!in_array($returnType, ['string','integer','bool'])) {
                $content = json_decode($content);
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
                        '\Yjopenapi\Client\Model\MultiplayLeaveResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leaveAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\MultiplayLeaveForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leaveAsync($varForms)
    {
        return $this->leaveAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leaveAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\MultiplayLeaveForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leaveAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\MultiplayLeaveResult';
        $request = $this->leaveRequest($varForms);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();

                    $content = $responseBody->getContents();
                    if ($returnType !== 'string') {
                        $content = json_decode($content);
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
     * Create request for operation 'leave'
     *
     * @param  \Yjopenapi\Client\Model\MultiplayLeaveForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leaveRequest($varForms)
    {
        // verify the required parameter 'mp_id' is set
        if ($varForms['mp_id'] === null || (is_array($varForms['mp_id']) && count($varForms['mp_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'mp_id\'] when calling leave'
            );
        }
        // verify the required parameter 'kick_out' is set
        if ($varForms['kick_out'] === null || (is_array($varForms['kick_out']) && count($varForms['kick_out']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'kick_out\'] when calling leave'
            );
        }
        // verify the required parameter 'token_ids' is set
        if ($varForms['token_ids'] === null || (is_array($varForms['token_ids']) && count($varForms['token_ids']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'token_ids\'] when calling leave'
            );
        }

        $resourcePath = '/multiplay/leave';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['mpId'] = ObjectSerializer::toFormValue($varForms['mp_id']);
        $formParams['kickOut'] = ObjectSerializer::toFormValue($varForms['kick_out']);
        if ($varForms['reason'] !== null) {
            $formParams['reason'] = ObjectSerializer::toFormValue($varForms['reason']);
        }
        $formParams['tokenIds'] = ObjectSerializer::toFormValue($varForms['token_ids']);

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/x-www-form-urlencoded']
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        $signHeaders = $this->headerSelector->prepareSignHeader($formParams, $queryParams, 'POST', $this->config);

        $headers = array_merge(
            ['User-Agent' => 'cgw-client/1.0.0/php'],
            $signHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getScheme() . '://' . $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation modify
     *
     * @param  \Yjopenapi\Client\Model\MultiplayModifyForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\MultiplayModifyResult
     */
    public function modify($varForms)
    {
        list($response) = $this->modifyWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation modifyWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\MultiplayModifyForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\MultiplayModifyResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function modifyWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\MultiplayModifyResult';
        $request = $this->modifyRequest($varForms);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
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

            $content = $responseBody->getContents();
            if (!in_array($returnType, ['string','integer','bool'])) {
                $content = json_decode($content);
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
                        '\Yjopenapi\Client\Model\MultiplayModifyResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation modifyAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\MultiplayModifyForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifyAsync($varForms)
    {
        return $this->modifyAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation modifyAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\MultiplayModifyForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifyAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\MultiplayModifyResult';
        $request = $this->modifyRequest($varForms);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();

                    $content = $responseBody->getContents();
                    if ($returnType !== 'string') {
                        $content = json_decode($content);
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
     * Create request for operation 'modify'
     *
     * @param  \Yjopenapi\Client\Model\MultiplayModifyForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function modifyRequest($varForms)
    {
        // verify the required parameter 'mp_id' is set
        if ($varForms['mp_id'] === null || (is_array($varForms['mp_id']) && count($varForms['mp_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'mp_id\'] when calling modify'
            );
        }

        $resourcePath = '/multiplay/modify';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['mpId'] = ObjectSerializer::toFormValue($varForms['mp_id']);
        if ($varForms['tokens'] !== null) {
            $formParams['tokens'] = ObjectSerializer::toFormValue($varForms['tokens']);
        }

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/x-www-form-urlencoded']
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        $signHeaders = $this->headerSelector->prepareSignHeader($formParams, $queryParams, 'POST', $this->config);

        $headers = array_merge(
            ['User-Agent' => 'cgw-client/1.0.0/php'],
            $signHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getScheme() . '://' . $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation query
     *
     * @param  \Yjopenapi\Client\Model\MultiplayQueryForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\MultiplayQueryResult
     */
    public function query($varForms)
    {
        list($response) = $this->queryWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation queryWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\MultiplayQueryForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\MultiplayQueryResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function queryWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\MultiplayQueryResult';
        $request = $this->queryRequest($varForms);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
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

            $content = $responseBody->getContents();
            if (!in_array($returnType, ['string','integer','bool'])) {
                $content = json_decode($content);
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
                        '\Yjopenapi\Client\Model\MultiplayQueryResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation queryAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\MultiplayQueryForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function queryAsync($varForms)
    {
        return $this->queryAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation queryAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\MultiplayQueryForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function queryAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\MultiplayQueryResult';
        $request = $this->queryRequest($varForms);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();

                    $content = $responseBody->getContents();
                    if ($returnType !== 'string') {
                        $content = json_decode($content);
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
     * Create request for operation 'query'
     *
     * @param  \Yjopenapi\Client\Model\MultiplayQueryForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function queryRequest($varForms)
    {
        // verify the required parameter 'mp_id' is set
        if ($varForms['mp_id'] === null || (is_array($varForms['mp_id']) && count($varForms['mp_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'mp_id\'] when calling query'
            );
        }

        $resourcePath = '/multiplay/query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['mpId'] = ObjectSerializer::toFormValue($varForms['mp_id']);

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/x-www-form-urlencoded']
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        $signHeaders = $this->headerSelector->prepareSignHeader($formParams, $queryParams, 'POST', $this->config);

        $headers = array_merge(
            ['User-Agent' => 'cgw-client/1.0.0/php'],
            $signHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getScheme() . '://' . $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
        //if ($this->config->getDebug()) {
        //    $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
        //    if (!$options[RequestOptions::DEBUG]) {
        //        throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
        //    }
        //}
        return $options;
    }
}
