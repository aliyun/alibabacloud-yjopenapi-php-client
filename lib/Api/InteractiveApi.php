<?php
/**
 * InteractiveApi
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
 * InteractiveApi Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class InteractiveApi
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
     * Operation getParty
     *
     * @param  \Yjopenapi\Client\Model\InteractiveGetPartyForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\InteractiveGetPartyResult
     */
    public function getParty($varForms)
    {
        list($response) = $this->getPartyWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation getPartyWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\InteractiveGetPartyForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\InteractiveGetPartyResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPartyWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\InteractiveGetPartyResult';
        $request = $this->getPartyRequest($varForms);

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
                        '\Yjopenapi\Client\Model\InteractiveGetPartyResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPartyAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\InteractiveGetPartyForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPartyAsync($varForms)
    {
        return $this->getPartyAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPartyAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\InteractiveGetPartyForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPartyAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\InteractiveGetPartyResult';
        $request = $this->getPartyRequest($varForms);

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
     * Create request for operation 'getParty'
     *
     * @param  \Yjopenapi\Client\Model\InteractiveGetPartyForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getPartyRequest($varForms)
    {
        // verify the required parameter 'mix_game_id' is set
        if ($varForms['mix_game_id'] === null || (is_array($varForms['mix_game_id']) && count($varForms['mix_game_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'mix_game_id\'] when calling getParty'
            );
        }
        // verify the required parameter 'user_id' is set
        if ($varForms['user_id'] === null || (is_array($varForms['user_id']) && count($varForms['user_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'user_id\'] when calling getParty'
            );
        }
        // verify the required parameter 're_connect' is set
        if ($varForms['re_connect'] === null || (is_array($varForms['re_connect']) && count($varForms['re_connect']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'re_connect\'] when calling getParty'
            );
        }
        // verify the required parameter 'project_id' is set
        if ($varForms['project_id'] === null || (is_array($varForms['project_id']) && count($varForms['project_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'project_id\'] when calling getParty'
            );
        }

        $resourcePath = '/interactive/getParty';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['mixGameId'] = ObjectSerializer::toFormValue($varForms['mix_game_id']);
        $formParams['userId'] = ObjectSerializer::toFormValue($varForms['user_id']);
        $formParams['reConnect'] = ObjectSerializer::toFormValue($varForms['re_connect']);
        $formParams['projectId'] = ObjectSerializer::toFormValue($varForms['project_id']);
        if ($varForms['config'] !== null) {
            $formParams['config'] = ObjectSerializer::toFormValue($varForms['config']);
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
     * Operation getPartyStatus
     *
     * @param  \Yjopenapi\Client\Model\InteractiveGetPartyStatusForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\InteractiveGetPartyStatusResult
     */
    public function getPartyStatus($varForms)
    {
        list($response) = $this->getPartyStatusWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation getPartyStatusWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\InteractiveGetPartyStatusForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\InteractiveGetPartyStatusResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPartyStatusWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\InteractiveGetPartyStatusResult';
        $request = $this->getPartyStatusRequest($varForms);

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
                        '\Yjopenapi\Client\Model\InteractiveGetPartyStatusResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPartyStatusAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\InteractiveGetPartyStatusForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPartyStatusAsync($varForms)
    {
        return $this->getPartyStatusAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPartyStatusAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\InteractiveGetPartyStatusForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPartyStatusAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\InteractiveGetPartyStatusResult';
        $request = $this->getPartyStatusRequest($varForms);

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
     * Create request for operation 'getPartyStatus'
     *
     * @param  \Yjopenapi\Client\Model\InteractiveGetPartyStatusForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getPartyStatusRequest($varForms)
    {
        // verify the required parameter 'party_id' is set
        if ($varForms['party_id'] === null || (is_array($varForms['party_id']) && count($varForms['party_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'party_id\'] when calling getPartyStatus'
            );
        }

        $resourcePath = '/interactive/getPartyStatus';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['partyId'] = ObjectSerializer::toFormValue($varForms['party_id']);

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
     * Operation joinParty
     *
     * @param  \Yjopenapi\Client\Model\InteractiveJoinPartyForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\InteractiveJoinPartyResult
     */
    public function joinParty($varForms)
    {
        list($response) = $this->joinPartyWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation joinPartyWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\InteractiveJoinPartyForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\InteractiveJoinPartyResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function joinPartyWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\InteractiveJoinPartyResult';
        $request = $this->joinPartyRequest($varForms);

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
                        '\Yjopenapi\Client\Model\InteractiveJoinPartyResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation joinPartyAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\InteractiveJoinPartyForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function joinPartyAsync($varForms)
    {
        return $this->joinPartyAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation joinPartyAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\InteractiveJoinPartyForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function joinPartyAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\InteractiveJoinPartyResult';
        $request = $this->joinPartyRequest($varForms);

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
     * Create request for operation 'joinParty'
     *
     * @param  \Yjopenapi\Client\Model\InteractiveJoinPartyForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function joinPartyRequest($varForms)
    {
        // verify the required parameter 'party_id' is set
        if ($varForms['party_id'] === null || (is_array($varForms['party_id']) && count($varForms['party_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'party_id\'] when calling joinParty'
            );
        }
        // verify the required parameter 'user_id' is set
        if ($varForms['user_id'] === null || (is_array($varForms['user_id']) && count($varForms['user_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'user_id\'] when calling joinParty'
            );
        }
        // verify the required parameter 'seat_id' is set
        if ($varForms['seat_id'] === null || (is_array($varForms['seat_id']) && count($varForms['seat_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'seat_id\'] when calling joinParty'
            );
        }
        // verify the required parameter 'control_id' is set
        if ($varForms['control_id'] === null || (is_array($varForms['control_id']) && count($varForms['control_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'control_id\'] when calling joinParty'
            );
        }
        // verify the required parameter 're_connect' is set
        if ($varForms['re_connect'] === null || (is_array($varForms['re_connect']) && count($varForms['re_connect']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'re_connect\'] when calling joinParty'
            );
        }

        $resourcePath = '/interactive/joinParty';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['partyId'] = ObjectSerializer::toFormValue($varForms['party_id']);
        $formParams['userId'] = ObjectSerializer::toFormValue($varForms['user_id']);
        $formParams['seatId'] = ObjectSerializer::toFormValue($varForms['seat_id']);
        $formParams['controlId'] = ObjectSerializer::toFormValue($varForms['control_id']);
        $formParams['reConnect'] = ObjectSerializer::toFormValue($varForms['re_connect']);

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
     * Operation kickOutUser
     *
     * @param  \Yjopenapi\Client\Model\InteractiveKickOutUserForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\InteractiveKickOutUserResult
     */
    public function kickOutUser($varForms)
    {
        list($response) = $this->kickOutUserWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation kickOutUserWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\InteractiveKickOutUserForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\InteractiveKickOutUserResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function kickOutUserWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\InteractiveKickOutUserResult';
        $request = $this->kickOutUserRequest($varForms);

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
                        '\Yjopenapi\Client\Model\InteractiveKickOutUserResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation kickOutUserAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\InteractiveKickOutUserForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function kickOutUserAsync($varForms)
    {
        return $this->kickOutUserAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation kickOutUserAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\InteractiveKickOutUserForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function kickOutUserAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\InteractiveKickOutUserResult';
        $request = $this->kickOutUserRequest($varForms);

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
     * Create request for operation 'kickOutUser'
     *
     * @param  \Yjopenapi\Client\Model\InteractiveKickOutUserForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function kickOutUserRequest($varForms)
    {
        // verify the required parameter 'party_id' is set
        if ($varForms['party_id'] === null || (is_array($varForms['party_id']) && count($varForms['party_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'party_id\'] when calling kickOutUser'
            );
        }
        // verify the required parameter 'user_id' is set
        if ($varForms['user_id'] === null || (is_array($varForms['user_id']) && count($varForms['user_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'user_id\'] when calling kickOutUser'
            );
        }

        $resourcePath = '/interactive/kickOutUser';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['partyId'] = ObjectSerializer::toFormValue($varForms['party_id']);
        $formParams['userId'] = ObjectSerializer::toFormValue($varForms['user_id']);
        if ($varForms['kick_out_reason'] !== null) {
            $formParams['kickOutReason'] = ObjectSerializer::toFormValue($varForms['kick_out_reason']);
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
     * Operation modifySeats
     *
     * @param  \Yjopenapi\Client\Model\InteractiveModifySeatsForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\InteractiveModifySeatsResult
     */
    public function modifySeats($varForms)
    {
        list($response) = $this->modifySeatsWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation modifySeatsWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\InteractiveModifySeatsForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\InteractiveModifySeatsResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function modifySeatsWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\InteractiveModifySeatsResult';
        $request = $this->modifySeatsRequest($varForms);

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
                        '\Yjopenapi\Client\Model\InteractiveModifySeatsResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation modifySeatsAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\InteractiveModifySeatsForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifySeatsAsync($varForms)
    {
        return $this->modifySeatsAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation modifySeatsAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\InteractiveModifySeatsForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifySeatsAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\InteractiveModifySeatsResult';
        $request = $this->modifySeatsRequest($varForms);

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
     * Create request for operation 'modifySeats'
     *
     * @param  \Yjopenapi\Client\Model\InteractiveModifySeatsForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function modifySeatsRequest($varForms)
    {
        // verify the required parameter 'party_id' is set
        if ($varForms['party_id'] === null || (is_array($varForms['party_id']) && count($varForms['party_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'party_id\'] when calling modifySeats'
            );
        }
        // verify the required parameter 'operator' is set
        if ($varForms['operator'] === null || (is_array($varForms['operator']) && count($varForms['operator']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'operator\'] when calling modifySeats'
            );
        }
        // verify the required parameter 'modify_seats' is set
        if ($varForms['modify_seats'] === null || (is_array($varForms['modify_seats']) && count($varForms['modify_seats']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'modify_seats\'] when calling modifySeats'
            );
        }

        $resourcePath = '/interactive/modifySeats';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['partyId'] = ObjectSerializer::toFormValue($varForms['party_id']);
        $formParams['operator'] = ObjectSerializer::toFormValue($varForms['operator']);
        $formParams['modifySeats'] = ObjectSerializer::toFormValue($varForms['modify_seats']);

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
     * Operation shutDownParty
     *
     * @param  \Yjopenapi\Client\Model\InteractiveShutDownPartyForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\InteractiveShutDownPartyResult
     */
    public function shutDownParty($varForms)
    {
        list($response) = $this->shutDownPartyWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation shutDownPartyWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\InteractiveShutDownPartyForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\InteractiveShutDownPartyResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function shutDownPartyWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\InteractiveShutDownPartyResult';
        $request = $this->shutDownPartyRequest($varForms);

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
                        '\Yjopenapi\Client\Model\InteractiveShutDownPartyResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation shutDownPartyAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\InteractiveShutDownPartyForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function shutDownPartyAsync($varForms)
    {
        return $this->shutDownPartyAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation shutDownPartyAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\InteractiveShutDownPartyForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function shutDownPartyAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\InteractiveShutDownPartyResult';
        $request = $this->shutDownPartyRequest($varForms);

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
     * Create request for operation 'shutDownParty'
     *
     * @param  \Yjopenapi\Client\Model\InteractiveShutDownPartyForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function shutDownPartyRequest($varForms)
    {
        // verify the required parameter 'party_id' is set
        if ($varForms['party_id'] === null || (is_array($varForms['party_id']) && count($varForms['party_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'party_id\'] when calling shutDownParty'
            );
        }

        $resourcePath = '/interactive/shutDownParty';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['partyId'] = ObjectSerializer::toFormValue($varForms['party_id']);
        if ($varForms['shut_down_reason'] !== null) {
            $formParams['shutDownReason'] = ObjectSerializer::toFormValue($varForms['shut_down_reason']);
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
