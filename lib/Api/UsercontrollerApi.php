<?php
/**
 * UsercontrollerApi
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
 * UsercontrollerApi Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class UsercontrollerApi
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
     * Operation deleteGameArchive
     *
     * @param  \Yjopenapi\Client\Model\UsercontrollerDeleteGameArchiveForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\UsercontrollerDeleteGameArchiveResult
     */
    public function deleteGameArchive($varForms)
    {
        list($response) = $this->deleteGameArchiveWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation deleteGameArchiveWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\UsercontrollerDeleteGameArchiveForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\UsercontrollerDeleteGameArchiveResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteGameArchiveWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\UsercontrollerDeleteGameArchiveResult';
        $request = $this->deleteGameArchiveRequest($varForms);

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
                        '\Yjopenapi\Client\Model\UsercontrollerDeleteGameArchiveResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deleteGameArchiveAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\UsercontrollerDeleteGameArchiveForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteGameArchiveAsync($varForms)
    {
        return $this->deleteGameArchiveAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteGameArchiveAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\UsercontrollerDeleteGameArchiveForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteGameArchiveAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\UsercontrollerDeleteGameArchiveResult';
        $request = $this->deleteGameArchiveRequest($varForms);

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
     * Create request for operation 'deleteGameArchive'
     *
     * @param  \Yjopenapi\Client\Model\UsercontrollerDeleteGameArchiveForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteGameArchiveRequest($varForms)
    {
        // verify the required parameter 'account_id' is set
        if ($varForms['account_id'] === null || (is_array($varForms['account_id']) && count($varForms['account_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'account_id\'] when calling deleteGameArchive'
            );
        }
        // verify the required parameter 'game_id' is set
        if ($varForms['game_id'] === null || (is_array($varForms['game_id']) && count($varForms['game_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'game_id\'] when calling deleteGameArchive'
            );
        }
        // verify the required parameter 'archive_id' is set
        if ($varForms['archive_id'] === null || (is_array($varForms['archive_id']) && count($varForms['archive_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'archive_id\'] when calling deleteGameArchive'
            );
        }

        $resourcePath = '/usercontroller/deleteGameArchive';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['accountId'] = ObjectSerializer::toFormValue($varForms['account_id']);
        $formParams['gameId'] = ObjectSerializer::toFormValue($varForms['game_id']);
        $formParams['archiveId'] = ObjectSerializer::toFormValue($varForms['archive_id']);

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
     * Operation getGameTrialSurplusDuration
     *
     * @param  \Yjopenapi\Client\Model\UsercontrollerGetGameTrialSurplusDurationForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\UsercontrollerGetGameTrialSurplusDurationResult
     */
    public function getGameTrialSurplusDuration($varForms)
    {
        list($response) = $this->getGameTrialSurplusDurationWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation getGameTrialSurplusDurationWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\UsercontrollerGetGameTrialSurplusDurationForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\UsercontrollerGetGameTrialSurplusDurationResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function getGameTrialSurplusDurationWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\UsercontrollerGetGameTrialSurplusDurationResult';
        $request = $this->getGameTrialSurplusDurationRequest($varForms);

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
                        '\Yjopenapi\Client\Model\UsercontrollerGetGameTrialSurplusDurationResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getGameTrialSurplusDurationAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\UsercontrollerGetGameTrialSurplusDurationForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getGameTrialSurplusDurationAsync($varForms)
    {
        return $this->getGameTrialSurplusDurationAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getGameTrialSurplusDurationAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\UsercontrollerGetGameTrialSurplusDurationForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getGameTrialSurplusDurationAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\UsercontrollerGetGameTrialSurplusDurationResult';
        $request = $this->getGameTrialSurplusDurationRequest($varForms);

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
     * Create request for operation 'getGameTrialSurplusDuration'
     *
     * @param  \Yjopenapi\Client\Model\UsercontrollerGetGameTrialSurplusDurationForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getGameTrialSurplusDurationRequest($varForms)
    {
        // verify the required parameter 'account_id' is set
        if ($varForms['account_id'] === null || (is_array($varForms['account_id']) && count($varForms['account_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'account_id\'] when calling getGameTrialSurplusDuration'
            );
        }
        // verify the required parameter 'game_id' is set
        if ($varForms['game_id'] === null || (is_array($varForms['game_id']) && count($varForms['game_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'game_id\'] when calling getGameTrialSurplusDuration'
            );
        }
        // verify the required parameter 'project_id' is set
        if ($varForms['project_id'] === null || (is_array($varForms['project_id']) && count($varForms['project_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'project_id\'] when calling getGameTrialSurplusDuration'
            );
        }

        $resourcePath = '/usercontroller/getGameTrialSurplusDuration';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['accountId'] = ObjectSerializer::toFormValue($varForms['account_id']);
        $formParams['gameId'] = ObjectSerializer::toFormValue($varForms['game_id']);
        $formParams['projectId'] = ObjectSerializer::toFormValue($varForms['project_id']);

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
     * Operation getUserGameArchive
     *
     * @param  \Yjopenapi\Client\Model\UsercontrollerGetUserGameArchiveForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\UsercontrollerGetUserGameArchiveResult
     */
    public function getUserGameArchive($varForms)
    {
        list($response) = $this->getUserGameArchiveWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation getUserGameArchiveWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\UsercontrollerGetUserGameArchiveForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\UsercontrollerGetUserGameArchiveResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUserGameArchiveWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\UsercontrollerGetUserGameArchiveResult';
        $request = $this->getUserGameArchiveRequest($varForms);

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
                        '\Yjopenapi\Client\Model\UsercontrollerGetUserGameArchiveResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getUserGameArchiveAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\UsercontrollerGetUserGameArchiveForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUserGameArchiveAsync($varForms)
    {
        return $this->getUserGameArchiveAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getUserGameArchiveAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\UsercontrollerGetUserGameArchiveForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUserGameArchiveAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\UsercontrollerGetUserGameArchiveResult';
        $request = $this->getUserGameArchiveRequest($varForms);

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
     * Create request for operation 'getUserGameArchive'
     *
     * @param  \Yjopenapi\Client\Model\UsercontrollerGetUserGameArchiveForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getUserGameArchiveRequest($varForms)
    {
        // verify the required parameter 'account_id' is set
        if ($varForms['account_id'] === null || (is_array($varForms['account_id']) && count($varForms['account_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'account_id\'] when calling getUserGameArchive'
            );
        }
        // verify the required parameter 'game_id' is set
        if ($varForms['game_id'] === null || (is_array($varForms['game_id']) && count($varForms['game_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'game_id\'] when calling getUserGameArchive'
            );
        }
        // verify the required parameter 'project_id' is set
        if ($varForms['project_id'] === null || (is_array($varForms['project_id']) && count($varForms['project_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'project_id\'] when calling getUserGameArchive'
            );
        }

        $resourcePath = '/usercontroller/getUserGameArchive';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['accountId'] = ObjectSerializer::toFormValue($varForms['account_id']);
        $formParams['gameId'] = ObjectSerializer::toFormValue($varForms['game_id']);
        $formParams['projectId'] = ObjectSerializer::toFormValue($varForms['project_id']);

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
     * Operation listLatestGameArchive
     *
     * @param  \Yjopenapi\Client\Model\UsercontrollerListLatestGameArchiveForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\UsercontrollerListLatestGameArchiveResult
     */
    public function listLatestGameArchive($varForms)
    {
        list($response) = $this->listLatestGameArchiveWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation listLatestGameArchiveWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\UsercontrollerListLatestGameArchiveForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\UsercontrollerListLatestGameArchiveResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function listLatestGameArchiveWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\UsercontrollerListLatestGameArchiveResult';
        $request = $this->listLatestGameArchiveRequest($varForms);

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
                        '\Yjopenapi\Client\Model\UsercontrollerListLatestGameArchiveResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listLatestGameArchiveAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\UsercontrollerListLatestGameArchiveForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listLatestGameArchiveAsync($varForms)
    {
        return $this->listLatestGameArchiveAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listLatestGameArchiveAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\UsercontrollerListLatestGameArchiveForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listLatestGameArchiveAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\UsercontrollerListLatestGameArchiveResult';
        $request = $this->listLatestGameArchiveRequest($varForms);

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
     * Create request for operation 'listLatestGameArchive'
     *
     * @param  \Yjopenapi\Client\Model\UsercontrollerListLatestGameArchiveForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listLatestGameArchiveRequest($varForms)
    {
        // verify the required parameter 'account_id' is set
        if ($varForms['account_id'] === null || (is_array($varForms['account_id']) && count($varForms['account_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'account_id\'] when calling listLatestGameArchive'
            );
        }
        // verify the required parameter 'game_id' is set
        if ($varForms['game_id'] === null || (is_array($varForms['game_id']) && count($varForms['game_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'game_id\'] when calling listLatestGameArchive'
            );
        }

        $resourcePath = '/usercontroller/listLatestGameArchive';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['accountId'] = ObjectSerializer::toFormValue($varForms['account_id']);
        $formParams['gameId'] = ObjectSerializer::toFormValue($varForms['game_id']);
        if ($varForms['page_size'] !== null) {
            $formParams['pageSize'] = ObjectSerializer::toFormValue($varForms['page_size']);
        }
        if ($varForms['page_number'] !== null) {
            $formParams['pageNumber'] = ObjectSerializer::toFormValue($varForms['page_number']);
        }
        if ($varForms['tag_status'] !== null) {
            $formParams['tagStatus'] = ObjectSerializer::toFormValue($varForms['tag_status']);
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
     * Operation restoreGameArchive
     *
     * @param  \Yjopenapi\Client\Model\UsercontrollerRestoreGameArchiveForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\UsercontrollerRestoreGameArchiveResult
     */
    public function restoreGameArchive($varForms)
    {
        list($response) = $this->restoreGameArchiveWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation restoreGameArchiveWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\UsercontrollerRestoreGameArchiveForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\UsercontrollerRestoreGameArchiveResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function restoreGameArchiveWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\UsercontrollerRestoreGameArchiveResult';
        $request = $this->restoreGameArchiveRequest($varForms);

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
                        '\Yjopenapi\Client\Model\UsercontrollerRestoreGameArchiveResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation restoreGameArchiveAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\UsercontrollerRestoreGameArchiveForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function restoreGameArchiveAsync($varForms)
    {
        return $this->restoreGameArchiveAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation restoreGameArchiveAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\UsercontrollerRestoreGameArchiveForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function restoreGameArchiveAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\UsercontrollerRestoreGameArchiveResult';
        $request = $this->restoreGameArchiveRequest($varForms);

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
     * Create request for operation 'restoreGameArchive'
     *
     * @param  \Yjopenapi\Client\Model\UsercontrollerRestoreGameArchiveForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function restoreGameArchiveRequest($varForms)
    {
        // verify the required parameter 'account_id' is set
        if ($varForms['account_id'] === null || (is_array($varForms['account_id']) && count($varForms['account_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'account_id\'] when calling restoreGameArchive'
            );
        }
        // verify the required parameter 'game_id' is set
        if ($varForms['game_id'] === null || (is_array($varForms['game_id']) && count($varForms['game_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'game_id\'] when calling restoreGameArchive'
            );
        }
        // verify the required parameter 'archive_id' is set
        if ($varForms['archive_id'] === null || (is_array($varForms['archive_id']) && count($varForms['archive_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'archive_id\'] when calling restoreGameArchive'
            );
        }

        $resourcePath = '/usercontroller/restoreGameArchive';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['accountId'] = ObjectSerializer::toFormValue($varForms['account_id']);
        $formParams['gameId'] = ObjectSerializer::toFormValue($varForms['game_id']);
        $formParams['archiveId'] = ObjectSerializer::toFormValue($varForms['archive_id']);

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
     * Operation updateGameArchiveTagStatus
     *
     * @param  \Yjopenapi\Client\Model\UsercontrollerUpdateGameArchiveTagStatusForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\UsercontrollerUpdateGameArchiveTagStatusResult
     */
    public function updateGameArchiveTagStatus($varForms)
    {
        list($response) = $this->updateGameArchiveTagStatusWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation updateGameArchiveTagStatusWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\UsercontrollerUpdateGameArchiveTagStatusForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\UsercontrollerUpdateGameArchiveTagStatusResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateGameArchiveTagStatusWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\UsercontrollerUpdateGameArchiveTagStatusResult';
        $request = $this->updateGameArchiveTagStatusRequest($varForms);

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
                        '\Yjopenapi\Client\Model\UsercontrollerUpdateGameArchiveTagStatusResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateGameArchiveTagStatusAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\UsercontrollerUpdateGameArchiveTagStatusForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateGameArchiveTagStatusAsync($varForms)
    {
        return $this->updateGameArchiveTagStatusAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateGameArchiveTagStatusAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\UsercontrollerUpdateGameArchiveTagStatusForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateGameArchiveTagStatusAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\UsercontrollerUpdateGameArchiveTagStatusResult';
        $request = $this->updateGameArchiveTagStatusRequest($varForms);

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
     * Create request for operation 'updateGameArchiveTagStatus'
     *
     * @param  \Yjopenapi\Client\Model\UsercontrollerUpdateGameArchiveTagStatusForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateGameArchiveTagStatusRequest($varForms)
    {
        // verify the required parameter 'account_id' is set
        if ($varForms['account_id'] === null || (is_array($varForms['account_id']) && count($varForms['account_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'account_id\'] when calling updateGameArchiveTagStatus'
            );
        }
        // verify the required parameter 'game_id' is set
        if ($varForms['game_id'] === null || (is_array($varForms['game_id']) && count($varForms['game_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'game_id\'] when calling updateGameArchiveTagStatus'
            );
        }
        // verify the required parameter 'archive_id' is set
        if ($varForms['archive_id'] === null || (is_array($varForms['archive_id']) && count($varForms['archive_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'archive_id\'] when calling updateGameArchiveTagStatus'
            );
        }
        // verify the required parameter 'tag_status' is set
        if ($varForms['tag_status'] === null || (is_array($varForms['tag_status']) && count($varForms['tag_status']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'tag_status\'] when calling updateGameArchiveTagStatus'
            );
        }

        $resourcePath = '/usercontroller/updateGameArchiveTagStatus';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['accountId'] = ObjectSerializer::toFormValue($varForms['account_id']);
        $formParams['gameId'] = ObjectSerializer::toFormValue($varForms['game_id']);
        $formParams['archiveId'] = ObjectSerializer::toFormValue($varForms['archive_id']);
        $formParams['tagStatus'] = ObjectSerializer::toFormValue($varForms['tag_status']);

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
