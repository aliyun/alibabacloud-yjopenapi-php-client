<?php
/**
 * DispatchApi
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
 * DispatchApi Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class DispatchApi
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
     * Operation batchStopGame
     *
     * @param  \Yjopenapi\Client\Model\BatchStopGameForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\BatchStopGameResult
     */
    public function batchStopGame($varForms)
    {
        list($response) = $this->batchStopGameWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation batchStopGameWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\BatchStopGameForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\BatchStopGameResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function batchStopGameWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\BatchStopGameResult';
        $request = $this->batchStopGameRequest($varForms);

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
                        '\Yjopenapi\Client\Model\BatchStopGameResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation batchStopGameAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\BatchStopGameForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function batchStopGameAsync($varForms)
    {
        return $this->batchStopGameAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation batchStopGameAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\BatchStopGameForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function batchStopGameAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\BatchStopGameResult';
        $request = $this->batchStopGameRequest($varForms);

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
     * Create request for operation 'batchStopGame'
     *
     * @param  \Yjopenapi\Client\Model\BatchStopGameForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function batchStopGameRequest($varForms)
    {
        // verify the required parameter 'game_id' is set
        if ($varForms['game_id'] === null || (is_array($varForms['game_id']) && count($varForms['game_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'game_id\'] when calling batchStopGame'
            );
        }
        // verify the required parameter 'app_key' is set
        if ($varForms['app_key'] === null || (is_array($varForms['app_key']) && count($varForms['app_key']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'app_key\'] when calling batchStopGame'
            );
        }
        // verify the required parameter 'token' is set
        if ($varForms['token'] === null || (is_array($varForms['token']) && count($varForms['token']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'token\'] when calling batchStopGame'
            );
        }

        $resourcePath = '/batchStopGame';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['gameId'] = ObjectSerializer::toFormValue($varForms['game_id']);
        $formParams['appKey'] = ObjectSerializer::toFormValue($varForms['app_key']);
        $formParams['token'] = ObjectSerializer::toFormValue($varForms['token']);
        if ($varForms['reason'] !== null) {
            $formParams['reason'] = ObjectSerializer::toFormValue($varForms['reason']);
        }
        if ($varForms['track_info'] !== null) {
            $formParams['trackInfo'] = ObjectSerializer::toFormValue($varForms['track_info']);
        }
        if ($varForms['tags'] !== null) {
            $formParams['tags'] = ObjectSerializer::toFormValue($varForms['tags']);
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
     * Operation cancelGameHang
     *
     * @param  \Yjopenapi\Client\Model\CancelGameHangForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\CancelGameHangResult
     */
    public function cancelGameHang($varForms)
    {
        list($response) = $this->cancelGameHangWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation cancelGameHangWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\CancelGameHangForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\CancelGameHangResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function cancelGameHangWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\CancelGameHangResult';
        $request = $this->cancelGameHangRequest($varForms);

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
                        '\Yjopenapi\Client\Model\CancelGameHangResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation cancelGameHangAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\CancelGameHangForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelGameHangAsync($varForms)
    {
        return $this->cancelGameHangAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation cancelGameHangAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\CancelGameHangForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelGameHangAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\CancelGameHangResult';
        $request = $this->cancelGameHangRequest($varForms);

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
     * Create request for operation 'cancelGameHang'
     *
     * @param  \Yjopenapi\Client\Model\CancelGameHangForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function cancelGameHangRequest($varForms)
    {
        // verify the required parameter 'game_session' is set
        if ($varForms['game_session'] === null || (is_array($varForms['game_session']) && count($varForms['game_session']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'game_session\'] when calling cancelGameHang'
            );
        }
        // verify the required parameter 'app_key' is set
        if ($varForms['app_key'] === null || (is_array($varForms['app_key']) && count($varForms['app_key']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'app_key\'] when calling cancelGameHang'
            );
        }

        $resourcePath = '/cancelGameHang';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['gameSession'] = ObjectSerializer::toFormValue($varForms['game_session']);
        $formParams['appKey'] = ObjectSerializer::toFormValue($varForms['app_key']);

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
     * Operation gameNotify
     *
     * @param  \Yjopenapi\Client\Model\GameNotifyForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\GameNotifyResult
     */
    public function gameNotify($varForms)
    {
        list($response) = $this->gameNotifyWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation gameNotifyWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\GameNotifyForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\GameNotifyResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function gameNotifyWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\GameNotifyResult';
        $request = $this->gameNotifyRequest($varForms);

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
                        '\Yjopenapi\Client\Model\GameNotifyResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation gameNotifyAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\GameNotifyForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function gameNotifyAsync($varForms)
    {
        return $this->gameNotifyAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation gameNotifyAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\GameNotifyForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function gameNotifyAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\GameNotifyResult';
        $request = $this->gameNotifyRequest($varForms);

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
     * Create request for operation 'gameNotify'
     *
     * @param  \Yjopenapi\Client\Model\GameNotifyForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function gameNotifyRequest($varForms)
    {
        // verify the required parameter 'game_session' is set
        if ($varForms['game_session'] === null || (is_array($varForms['game_session']) && count($varForms['game_session']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'game_session\'] when calling gameNotify'
            );
        }
        // verify the required parameter 'app_key' is set
        if ($varForms['app_key'] === null || (is_array($varForms['app_key']) && count($varForms['app_key']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'app_key\'] when calling gameNotify'
            );
        }
        // verify the required parameter 'type' is set
        if ($varForms['type'] === null || (is_array($varForms['type']) && count($varForms['type']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'type\'] when calling gameNotify'
            );
        }

        $resourcePath = '/gameNotify';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['gameSession'] = ObjectSerializer::toFormValue($varForms['game_session']);
        $formParams['appKey'] = ObjectSerializer::toFormValue($varForms['app_key']);
        $formParams['type'] = ObjectSerializer::toFormValue($varForms['type']);
        if ($varForms['value'] !== null) {
            $formParams['value'] = ObjectSerializer::toFormValue($varForms['value']);
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
     * Operation getGameConcurrency
     *
     * @param  \Yjopenapi\Client\Model\GetGameConcurrencyForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\GetGameConcurrencyResult
     */
    public function getGameConcurrency($varForms)
    {
        list($response) = $this->getGameConcurrencyWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation getGameConcurrencyWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\GetGameConcurrencyForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\GetGameConcurrencyResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function getGameConcurrencyWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\GetGameConcurrencyResult';
        $request = $this->getGameConcurrencyRequest($varForms);

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
                        '\Yjopenapi\Client\Model\GetGameConcurrencyResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getGameConcurrencyAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\GetGameConcurrencyForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getGameConcurrencyAsync($varForms)
    {
        return $this->getGameConcurrencyAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getGameConcurrencyAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\GetGameConcurrencyForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getGameConcurrencyAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\GetGameConcurrencyResult';
        $request = $this->getGameConcurrencyRequest($varForms);

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
     * Create request for operation 'getGameConcurrency'
     *
     * @param  \Yjopenapi\Client\Model\GetGameConcurrencyForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getGameConcurrencyRequest($varForms)
    {
        // verify the required parameter 'game_id' is set
        if ($varForms['game_id'] === null || (is_array($varForms['game_id']) && count($varForms['game_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'game_id\'] when calling getGameConcurrency'
            );
        }
        // verify the required parameter 'app_key' is set
        if ($varForms['app_key'] === null || (is_array($varForms['app_key']) && count($varForms['app_key']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'app_key\'] when calling getGameConcurrency'
            );
        }

        $resourcePath = '/getGameConcurrency';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['gameId'] = ObjectSerializer::toFormValue($varForms['game_id']);
        $formParams['appKey'] = ObjectSerializer::toFormValue($varForms['app_key']);
        if ($varForms['query_queue_concurrency'] !== null) {
            $formParams['queryQueueConcurrency'] = ObjectSerializer::toFormValue($varForms['query_queue_concurrency']);
        }
        if ($varForms['queue_user_level'] !== null) {
            $formParams['queueUserLevel'] = ObjectSerializer::toFormValue($varForms['queue_user_level']);
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
     * Operation getStock
     *
     * @param  \Yjopenapi\Client\Model\GetStockForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\GetStockResult
     */
    public function getStock($varForms)
    {
        list($response) = $this->getStockWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation getStockWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\GetStockForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\GetStockResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function getStockWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\GetStockResult';
        $request = $this->getStockRequest($varForms);

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
                        '\Yjopenapi\Client\Model\GetStockResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getStockAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\GetStockForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStockAsync($varForms)
    {
        return $this->getStockAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getStockAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\GetStockForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStockAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\GetStockResult';
        $request = $this->getStockRequest($varForms);

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
     * Create request for operation 'getStock'
     *
     * @param  \Yjopenapi\Client\Model\GetStockForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getStockRequest($varForms)
    {
        // verify the required parameter 'app_key' is set
        if ($varForms['app_key'] === null || (is_array($varForms['app_key']) && count($varForms['app_key']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'app_key\'] when calling getStock'
            );
        }
        // verify the required parameter 'type' is set
        if ($varForms['type'] === null || (is_array($varForms['type']) && count($varForms['type']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'type\'] when calling getStock'
            );
        }

        $resourcePath = '/getStock';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        if ($varForms['game_id'] !== null) {
            $formParams['gameId'] = ObjectSerializer::toFormValue($varForms['game_id']);
        }
        $formParams['appKey'] = ObjectSerializer::toFormValue($varForms['app_key']);
        $formParams['type'] = ObjectSerializer::toFormValue($varForms['type']);

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
     * Operation getStopGameToken
     *
     * @param  \Yjopenapi\Client\Model\GetStopGameTokenForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\GetStopGameTokenResult
     */
    public function getStopGameToken($varForms)
    {
        list($response) = $this->getStopGameTokenWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation getStopGameTokenWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\GetStopGameTokenForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\GetStopGameTokenResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function getStopGameTokenWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\GetStopGameTokenResult';
        $request = $this->getStopGameTokenRequest($varForms);

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
                        '\Yjopenapi\Client\Model\GetStopGameTokenResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getStopGameTokenAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\GetStopGameTokenForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStopGameTokenAsync($varForms)
    {
        return $this->getStopGameTokenAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getStopGameTokenAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\GetStopGameTokenForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getStopGameTokenAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\GetStopGameTokenResult';
        $request = $this->getStopGameTokenRequest($varForms);

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
     * Create request for operation 'getStopGameToken'
     *
     * @param  \Yjopenapi\Client\Model\GetStopGameTokenForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getStopGameTokenRequest($varForms)
    {
        // verify the required parameter 'game_id' is set
        if ($varForms['game_id'] === null || (is_array($varForms['game_id']) && count($varForms['game_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'game_id\'] when calling getStopGameToken'
            );
        }
        // verify the required parameter 'app_key' is set
        if ($varForms['app_key'] === null || (is_array($varForms['app_key']) && count($varForms['app_key']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'app_key\'] when calling getStopGameToken'
            );
        }

        $resourcePath = '/getStopGameToken';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['gameId'] = ObjectSerializer::toFormValue($varForms['game_id']);
        $formParams['appKey'] = ObjectSerializer::toFormValue($varForms['app_key']);

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
     * Operation listGameServerIp
     *
     * @param  \Yjopenapi\Client\Model\ListGameServerIpForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\ListGameServerIpResult
     */
    public function listGameServerIp($varForms)
    {
        list($response) = $this->listGameServerIpWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation listGameServerIpWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\ListGameServerIpForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\ListGameServerIpResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function listGameServerIpWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ListGameServerIpResult';
        $request = $this->listGameServerIpRequest($varForms);

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
                        '\Yjopenapi\Client\Model\ListGameServerIpResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listGameServerIpAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ListGameServerIpForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listGameServerIpAsync($varForms)
    {
        return $this->listGameServerIpAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listGameServerIpAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ListGameServerIpForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listGameServerIpAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ListGameServerIpResult';
        $request = $this->listGameServerIpRequest($varForms);

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
     * Create request for operation 'listGameServerIp'
     *
     * @param  \Yjopenapi\Client\Model\ListGameServerIpForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listGameServerIpRequest($varForms)
    {

        $resourcePath = '/listGameServerIp';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        if ($varForms['page_size'] !== null) {
            $formParams['pageSize'] = ObjectSerializer::toFormValue($varForms['page_size']);
        }
        if ($varForms['next_token'] !== null) {
            $formParams['nextToken'] = ObjectSerializer::toFormValue($varForms['next_token']);
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
     * Operation queryGameHang
     *
     * @param  \Yjopenapi\Client\Model\QueryGameHangForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\QueryGameHangResult
     */
    public function queryGameHang($varForms)
    {
        list($response) = $this->queryGameHangWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation queryGameHangWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\QueryGameHangForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\QueryGameHangResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function queryGameHangWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\QueryGameHangResult';
        $request = $this->queryGameHangRequest($varForms);

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
                        '\Yjopenapi\Client\Model\QueryGameHangResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation queryGameHangAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\QueryGameHangForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function queryGameHangAsync($varForms)
    {
        return $this->queryGameHangAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation queryGameHangAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\QueryGameHangForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function queryGameHangAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\QueryGameHangResult';
        $request = $this->queryGameHangRequest($varForms);

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
     * Create request for operation 'queryGameHang'
     *
     * @param  \Yjopenapi\Client\Model\QueryGameHangForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function queryGameHangRequest($varForms)
    {
        // verify the required parameter 'game_session' is set
        if ($varForms['game_session'] === null || (is_array($varForms['game_session']) && count($varForms['game_session']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'game_session\'] when calling queryGameHang'
            );
        }
        // verify the required parameter 'app_key' is set
        if ($varForms['app_key'] === null || (is_array($varForms['app_key']) && count($varForms['app_key']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'app_key\'] when calling queryGameHang'
            );
        }

        $resourcePath = '/queryGameHang';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['gameSession'] = ObjectSerializer::toFormValue($varForms['game_session']);
        $formParams['appKey'] = ObjectSerializer::toFormValue($varForms['app_key']);

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
     * Operation querySessionStatus
     *
     * @param  \Yjopenapi\Client\Model\QuerySessionStatusForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\QuerySessionStatusResult
     */
    public function querySessionStatus($varForms)
    {
        list($response) = $this->querySessionStatusWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation querySessionStatusWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\QuerySessionStatusForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\QuerySessionStatusResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function querySessionStatusWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\QuerySessionStatusResult';
        $request = $this->querySessionStatusRequest($varForms);

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
                        '\Yjopenapi\Client\Model\QuerySessionStatusResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation querySessionStatusAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\QuerySessionStatusForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function querySessionStatusAsync($varForms)
    {
        return $this->querySessionStatusAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation querySessionStatusAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\QuerySessionStatusForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function querySessionStatusAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\QuerySessionStatusResult';
        $request = $this->querySessionStatusRequest($varForms);

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
     * Create request for operation 'querySessionStatus'
     *
     * @param  \Yjopenapi\Client\Model\QuerySessionStatusForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function querySessionStatusRequest($varForms)
    {
        // verify the required parameter 'game_session' is set
        if ($varForms['game_session'] === null || (is_array($varForms['game_session']) && count($varForms['game_session']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'game_session\'] when calling querySessionStatus'
            );
        }
        // verify the required parameter 'app_key' is set
        if ($varForms['app_key'] === null || (is_array($varForms['app_key']) && count($varForms['app_key']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'app_key\'] when calling querySessionStatus'
            );
        }

        $resourcePath = '/querySessionStatus';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['gameSession'] = ObjectSerializer::toFormValue($varForms['game_session']);
        $formParams['appKey'] = ObjectSerializer::toFormValue($varForms['app_key']);

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
     * Operation setGameAlive
     *
     * @param  \Yjopenapi\Client\Model\SetGameAliveForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\SetGameAliveResult
     */
    public function setGameAlive($varForms)
    {
        list($response) = $this->setGameAliveWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation setGameAliveWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\SetGameAliveForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\SetGameAliveResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function setGameAliveWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\SetGameAliveResult';
        $request = $this->setGameAliveRequest($varForms);

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
                        '\Yjopenapi\Client\Model\SetGameAliveResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation setGameAliveAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\SetGameAliveForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setGameAliveAsync($varForms)
    {
        return $this->setGameAliveAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation setGameAliveAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\SetGameAliveForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setGameAliveAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\SetGameAliveResult';
        $request = $this->setGameAliveRequest($varForms);

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
     * Create request for operation 'setGameAlive'
     *
     * @param  \Yjopenapi\Client\Model\SetGameAliveForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function setGameAliveRequest($varForms)
    {
        // verify the required parameter 'game_session' is set
        if ($varForms['game_session'] === null || (is_array($varForms['game_session']) && count($varForms['game_session']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'game_session\'] when calling setGameAlive'
            );
        }
        // verify the required parameter 'app_key' is set
        if ($varForms['app_key'] === null || (is_array($varForms['app_key']) && count($varForms['app_key']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'app_key\'] when calling setGameAlive'
            );
        }
        // verify the required parameter 'keep_alive' is set
        if ($varForms['keep_alive'] === null || (is_array($varForms['keep_alive']) && count($varForms['keep_alive']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'keep_alive\'] when calling setGameAlive'
            );
        }

        $resourcePath = '/setGameAlive';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['gameSession'] = ObjectSerializer::toFormValue($varForms['game_session']);
        $formParams['appKey'] = ObjectSerializer::toFormValue($varForms['app_key']);
        $formParams['keepAlive'] = ObjectSerializer::toFormValue($varForms['keep_alive']);

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
     * Operation setGameHang
     *
     * @param  \Yjopenapi\Client\Model\SetGameHangForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\SetGameHangResult
     */
    public function setGameHang($varForms)
    {
        list($response) = $this->setGameHangWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation setGameHangWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\SetGameHangForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\SetGameHangResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function setGameHangWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\SetGameHangResult';
        $request = $this->setGameHangRequest($varForms);

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
                        '\Yjopenapi\Client\Model\SetGameHangResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation setGameHangAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\SetGameHangForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setGameHangAsync($varForms)
    {
        return $this->setGameHangAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation setGameHangAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\SetGameHangForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setGameHangAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\SetGameHangResult';
        $request = $this->setGameHangRequest($varForms);

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
     * Create request for operation 'setGameHang'
     *
     * @param  \Yjopenapi\Client\Model\SetGameHangForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function setGameHangRequest($varForms)
    {
        // verify the required parameter 'game_session' is set
        if ($varForms['game_session'] === null || (is_array($varForms['game_session']) && count($varForms['game_session']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'game_session\'] when calling setGameHang'
            );
        }
        // verify the required parameter 'app_key' is set
        if ($varForms['app_key'] === null || (is_array($varForms['app_key']) && count($varForms['app_key']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'app_key\'] when calling setGameHang'
            );
        }
        // verify the required parameter 'duration' is set
        if ($varForms['duration'] === null || (is_array($varForms['duration']) && count($varForms['duration']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'duration\'] when calling setGameHang'
            );
        }

        $resourcePath = '/setGameHang';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['gameSession'] = ObjectSerializer::toFormValue($varForms['game_session']);
        $formParams['appKey'] = ObjectSerializer::toFormValue($varForms['app_key']);
        $formParams['duration'] = ObjectSerializer::toFormValue($varForms['duration']);
        if ($varForms['kick_in_the_game'] !== null) {
            $formParams['kickInTheGame'] = ObjectSerializer::toFormValue($varForms['kick_in_the_game']);
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
     * Operation stopGame
     *
     * @param  \Yjopenapi\Client\Model\StopGameForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\StopGameResult
     */
    public function stopGame($varForms)
    {
        list($response) = $this->stopGameWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation stopGameWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\StopGameForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\StopGameResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function stopGameWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\StopGameResult';
        $request = $this->stopGameRequest($varForms);

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
                        '\Yjopenapi\Client\Model\StopGameResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation stopGameAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\StopGameForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function stopGameAsync($varForms)
    {
        return $this->stopGameAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation stopGameAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\StopGameForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function stopGameAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\StopGameResult';
        $request = $this->stopGameRequest($varForms);

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
     * Create request for operation 'stopGame'
     *
     * @param  \Yjopenapi\Client\Model\StopGameForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function stopGameRequest($varForms)
    {
        // verify the required parameter 'account_id' is set
        if ($varForms['account_id'] === null || (is_array($varForms['account_id']) && count($varForms['account_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'account_id\'] when calling stopGame'
            );
        }
        // verify the required parameter 'game_id' is set
        if ($varForms['game_id'] === null || (is_array($varForms['game_id']) && count($varForms['game_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'game_id\'] when calling stopGame'
            );
        }
        // verify the required parameter 'app_key' is set
        if ($varForms['app_key'] === null || (is_array($varForms['app_key']) && count($varForms['app_key']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'app_key\'] when calling stopGame'
            );
        }
        // verify the required parameter 'game_session' is set
        if ($varForms['game_session'] === null || (is_array($varForms['game_session']) && count($varForms['game_session']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'game_session\'] when calling stopGame'
            );
        }

        $resourcePath = '/stopGame';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['accountId'] = ObjectSerializer::toFormValue($varForms['account_id']);
        $formParams['gameId'] = ObjectSerializer::toFormValue($varForms['game_id']);
        $formParams['appKey'] = ObjectSerializer::toFormValue($varForms['app_key']);
        $formParams['gameSession'] = ObjectSerializer::toFormValue($varForms['game_session']);
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
     * Operation stopPreopenContainer
     *
     * @param  \Yjopenapi\Client\Model\StopPreopenContainerForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\StopPreopenContainerResult
     */
    public function stopPreopenContainer($varForms)
    {
        list($response) = $this->stopPreopenContainerWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation stopPreopenContainerWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\StopPreopenContainerForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\StopPreopenContainerResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function stopPreopenContainerWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\StopPreopenContainerResult';
        $request = $this->stopPreopenContainerRequest($varForms);

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
                        '\Yjopenapi\Client\Model\StopPreopenContainerResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation stopPreopenContainerAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\StopPreopenContainerForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function stopPreopenContainerAsync($varForms)
    {
        return $this->stopPreopenContainerAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation stopPreopenContainerAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\StopPreopenContainerForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function stopPreopenContainerAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\StopPreopenContainerResult';
        $request = $this->stopPreopenContainerRequest($varForms);

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
     * Create request for operation 'stopPreopenContainer'
     *
     * @param  \Yjopenapi\Client\Model\StopPreopenContainerForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function stopPreopenContainerRequest($varForms)
    {
        // verify the required parameter 'app_key' is set
        if ($varForms['app_key'] === null || (is_array($varForms['app_key']) && count($varForms['app_key']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'app_key\'] when calling stopPreopenContainer'
            );
        }
        // verify the required parameter 'game_id' is set
        if ($varForms['game_id'] === null || (is_array($varForms['game_id']) && count($varForms['game_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'game_id\'] when calling stopPreopenContainer'
            );
        }

        $resourcePath = '/stopPreopenContainer';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['appKey'] = ObjectSerializer::toFormValue($varForms['app_key']);
        $formParams['gameId'] = ObjectSerializer::toFormValue($varForms['game_id']);
        if ($varForms['number_of_batches'] !== null) {
            $formParams['numberOfBatches'] = ObjectSerializer::toFormValue($varForms['number_of_batches']);
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
     * Operation tryToGetSlot
     *
     * @param  \Yjopenapi\Client\Model\TryToGetSlotForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\TryToGetSlotResult
     */
    public function tryToGetSlot($varForms)
    {
        list($response) = $this->tryToGetSlotWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation tryToGetSlotWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\TryToGetSlotForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\TryToGetSlotResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function tryToGetSlotWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\TryToGetSlotResult';
        $request = $this->tryToGetSlotRequest($varForms);

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
                        '\Yjopenapi\Client\Model\TryToGetSlotResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation tryToGetSlotAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\TryToGetSlotForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function tryToGetSlotAsync($varForms)
    {
        return $this->tryToGetSlotAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation tryToGetSlotAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\TryToGetSlotForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function tryToGetSlotAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\TryToGetSlotResult';
        $request = $this->tryToGetSlotRequest($varForms);

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
     * Create request for operation 'tryToGetSlot'
     *
     * @param  \Yjopenapi\Client\Model\TryToGetSlotForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function tryToGetSlotRequest($varForms)
    {
        // verify the required parameter 'account_id' is set
        if ($varForms['account_id'] === null || (is_array($varForms['account_id']) && count($varForms['account_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'account_id\'] when calling tryToGetSlot'
            );
        }
        // verify the required parameter 'game_id' is set
        if ($varForms['game_id'] === null || (is_array($varForms['game_id']) && count($varForms['game_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'game_id\'] when calling tryToGetSlot'
            );
        }
        // verify the required parameter 'app_key' is set
        if ($varForms['app_key'] === null || (is_array($varForms['app_key']) && count($varForms['app_key']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'app_key\'] when calling tryToGetSlot'
            );
        }

        $resourcePath = '/tryToGetSlot';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['accountId'] = ObjectSerializer::toFormValue($varForms['account_id']);
        $formParams['gameId'] = ObjectSerializer::toFormValue($varForms['game_id']);
        $formParams['appKey'] = ObjectSerializer::toFormValue($varForms['app_key']);
        if ($varForms['region_id'] !== null) {
            $formParams['regionId'] = ObjectSerializer::toFormValue($varForms['region_id']);
        }
        if ($varForms['re_connect'] !== null) {
            $formParams['reConnect'] = ObjectSerializer::toFormValue($varForms['re_connect']);
        }
        if ($varForms['biz_param'] !== null) {
            $formParams['bizParam'] = ObjectSerializer::toFormValue($varForms['biz_param']);
        }
        if ($varForms['client_ip'] !== null) {
            $formParams['clientIp'] = ObjectSerializer::toFormValue($varForms['client_ip']);
        }
        if ($varForms['tags'] !== null) {
            $formParams['tags'] = ObjectSerializer::toFormValue($varForms['tags']);
        }
        if ($varForms['user_level'] !== null) {
            $formParams['userLevel'] = ObjectSerializer::toFormValue($varForms['user_level']);
        }
        if ($varForms['codec'] !== null) {
            $formParams['codec'] = ObjectSerializer::toFormValue($varForms['codec']);
        }
        if ($varForms['resolution'] !== null) {
            $formParams['resolution'] = ObjectSerializer::toFormValue($varForms['resolution']);
        }
        if ($varForms['bit_rate'] !== null) {
            $formParams['bitRate'] = ObjectSerializer::toFormValue($varForms['bit_rate']);
        }
        if ($varForms['fps'] !== null) {
            $formParams['fps'] = ObjectSerializer::toFormValue($varForms['fps']);
        }
        if ($varForms['game_cmd_param'] !== null) {
            $formParams['gameCmdParam'] = ObjectSerializer::toFormValue($varForms['game_cmd_param']);
        }
        if ($varForms['start_param'] !== null) {
            $formParams['startParam'] = ObjectSerializer::toFormValue($varForms['start_param']);
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
