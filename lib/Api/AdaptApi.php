<?php
/**
 * AdaptApi
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
namespace Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ApiException;
use Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\Configuration;
use Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\HeaderSelector;
use Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ObjectSerializer;

/**
 * AdaptApi Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class AdaptApi
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
     * Operation createAndSubmitAll
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AdaptCreateAndSubmitAllForms $varForms
     *
     * @throws \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AdaptCreateAndSubmitAllResult
     */
    public function createAndSubmitAll($varForms)
    {
        list($response) = $this->createAndSubmitAllWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation createAndSubmitAllWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AdaptCreateAndSubmitAllForms $varForms
     *
     * @throws \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AdaptCreateAndSubmitAllResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function createAndSubmitAllWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AdaptCreateAndSubmitAllResult';
        $request = $this->createAndSubmitAllRequest($varForms);

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
                        '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AdaptCreateAndSubmitAllResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createAndSubmitAllAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AdaptCreateAndSubmitAllForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createAndSubmitAllAsync($varForms)
    {
        return $this->createAndSubmitAllAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createAndSubmitAllAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AdaptCreateAndSubmitAllForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createAndSubmitAllAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AdaptCreateAndSubmitAllResult';
        $request = $this->createAndSubmitAllRequest($varForms);

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
     * Create request for operation 'createAndSubmitAll'
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AdaptCreateAndSubmitAllForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createAndSubmitAllRequest($varForms)
    {
        // verify the required parameter 'platform_type' is set
        if ($varForms['platform_type'] === null || (is_array($varForms['platform_type']) && count($varForms['platform_type']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'platform_type\'] when calling createAndSubmitAll'
            );
        }
        // verify the required parameter 'source_platform' is set
        if ($varForms['source_platform'] === null || (is_array($varForms['source_platform']) && count($varForms['source_platform']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'source_platform\'] when calling createAndSubmitAll'
            );
        }
        // verify the required parameter 'records' is set
        if ($varForms['records'] === null || (is_array($varForms['records']) && count($varForms['records']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'records\'] when calling createAndSubmitAll'
            );
        }
        // verify the required parameter 'mix_game_version_id' is set
        if ($varForms['mix_game_version_id'] === null || (is_array($varForms['mix_game_version_id']) && count($varForms['mix_game_version_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'mix_game_version_id\'] when calling createAndSubmitAll'
            );
        }
        // verify the required parameter 'mix_game_id' is set
        if ($varForms['mix_game_id'] === null || (is_array($varForms['mix_game_id']) && count($varForms['mix_game_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'mix_game_id\'] when calling createAndSubmitAll'
            );
        }

        $resourcePath = '/adapt/createAndSubmitAll';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        if ($varForms['game_id'] !== null) {
            $formParams['gameId'] = ObjectSerializer::toFormValue($varForms['game_id']);
        }
        if ($varForms['game_name'] !== null) {
            $formParams['gameName'] = ObjectSerializer::toFormValue($varForms['game_name']);
        }
        if ($varForms['game_version_id'] !== null) {
            $formParams['gameVersionId'] = ObjectSerializer::toFormValue($varForms['game_version_id']);
        }
        if ($varForms['game_version'] !== null) {
            $formParams['gameVersion'] = ObjectSerializer::toFormValue($varForms['game_version']);
        }
        if ($varForms['resolution_list'] !== null) {
            $formParams['resolutionList'] = ObjectSerializer::toFormValue($varForms['resolution_list']);
        }
        if ($varForms['frame_rate_list'] !== null) {
            $formParams['frameRateList'] = ObjectSerializer::toFormValue($varForms['frame_rate_list']);
        }
        $formParams['platformType'] = ObjectSerializer::toFormValue($varForms['platform_type']);
        $formParams['sourcePlatform'] = ObjectSerializer::toFormValue($varForms['source_platform']);
        $formParams['records'] = ObjectSerializer::toFormValue($varForms['records']);
        $formParams['mixGameVersionId'] = ObjectSerializer::toFormValue($varForms['mix_game_version_id']);
        $formParams['mixGameId'] = ObjectSerializer::toFormValue($varForms['mix_game_id']);

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
     * Operation queryRequestById
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AdaptQueryRequestByIdForms $varForms
     *
     * @throws \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AdaptQueryRequestByIdResult
     */
    public function queryRequestById($varForms)
    {
        list($response) = $this->queryRequestByIdWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation queryRequestByIdWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AdaptQueryRequestByIdForms $varForms
     *
     * @throws \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AdaptQueryRequestByIdResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function queryRequestByIdWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AdaptQueryRequestByIdResult';
        $request = $this->queryRequestByIdRequest($varForms);

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
                        '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AdaptQueryRequestByIdResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation queryRequestByIdAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AdaptQueryRequestByIdForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function queryRequestByIdAsync($varForms)
    {
        return $this->queryRequestByIdAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation queryRequestByIdAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AdaptQueryRequestByIdForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function queryRequestByIdAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AdaptQueryRequestByIdResult';
        $request = $this->queryRequestByIdRequest($varForms);

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
     * Create request for operation 'queryRequestById'
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AdaptQueryRequestByIdForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function queryRequestByIdRequest($varForms)
    {
        // verify the required parameter 'id' is set
        if ($varForms['id'] === null || (is_array($varForms['id']) && count($varForms['id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'id\'] when calling queryRequestById'
            );
        }

        $resourcePath = '/adapt/queryRequestById';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['id'] = ObjectSerializer::toFormValue($varForms['id']);

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
