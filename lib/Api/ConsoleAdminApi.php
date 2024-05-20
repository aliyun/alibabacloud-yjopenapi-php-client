<?php
/**
 * ConsoleAdminApi
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
 * ConsoleAdminApi Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class ConsoleAdminApi
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
     * Operation activateDeployment
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminActivateDeploymentForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\ConsoleAdminActivateDeploymentResult
     */
    public function activateDeployment($varForms)
    {
        list($response) = $this->activateDeploymentWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation activateDeploymentWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminActivateDeploymentForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\ConsoleAdminActivateDeploymentResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function activateDeploymentWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminActivateDeploymentResult';
        $request = $this->activateDeploymentRequest($varForms);

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
                        '\Yjopenapi\Client\Model\ConsoleAdminActivateDeploymentResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation activateDeploymentAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminActivateDeploymentForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function activateDeploymentAsync($varForms)
    {
        return $this->activateDeploymentAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation activateDeploymentAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminActivateDeploymentForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function activateDeploymentAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminActivateDeploymentResult';
        $request = $this->activateDeploymentRequest($varForms);

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
     * Create request for operation 'activateDeployment'
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminActivateDeploymentForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function activateDeploymentRequest($varForms)
    {
        // verify the required parameter 'game_id' is set
        if ($varForms['game_id'] === null || (is_array($varForms['game_id']) && count($varForms['game_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'game_id\'] when calling activateDeployment'
            );
        }
        // verify the required parameter 'project_id' is set
        if ($varForms['project_id'] === null || (is_array($varForms['project_id']) && count($varForms['project_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'project_id\'] when calling activateDeployment'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($varForms['version_id'] === null || (is_array($varForms['version_id']) && count($varForms['version_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'version_id\'] when calling activateDeployment'
            );
        }

        $resourcePath = '/consoleAdmin/activateDeployment';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['gameId'] = ObjectSerializer::toFormValue($varForms['game_id']);
        $formParams['projectId'] = ObjectSerializer::toFormValue($varForms['project_id']);
        $formParams['versionId'] = ObjectSerializer::toFormValue($varForms['version_id']);
        if ($varForms['max_concurrency'] !== null) {
            $formParams['maxConcurrency'] = ObjectSerializer::toFormValue($varForms['max_concurrency']);
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
     * Operation adaptGameVersion
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminAdaptGameVersionForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\ConsoleAdminAdaptGameVersionResult
     */
    public function adaptGameVersion($varForms)
    {
        list($response) = $this->adaptGameVersionWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation adaptGameVersionWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminAdaptGameVersionForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\ConsoleAdminAdaptGameVersionResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function adaptGameVersionWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminAdaptGameVersionResult';
        $request = $this->adaptGameVersionRequest($varForms);

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
                        '\Yjopenapi\Client\Model\ConsoleAdminAdaptGameVersionResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation adaptGameVersionAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminAdaptGameVersionForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function adaptGameVersionAsync($varForms)
    {
        return $this->adaptGameVersionAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation adaptGameVersionAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminAdaptGameVersionForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function adaptGameVersionAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminAdaptGameVersionResult';
        $request = $this->adaptGameVersionRequest($varForms);

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
     * Create request for operation 'adaptGameVersion'
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminAdaptGameVersionForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function adaptGameVersionRequest($varForms)
    {
        // verify the required parameter 'version_id' is set
        if ($varForms['version_id'] === null || (is_array($varForms['version_id']) && count($varForms['version_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'version_id\'] when calling adaptGameVersion'
            );
        }

        $resourcePath = '/consoleAdmin/adaptGameVersion';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['versionId'] = ObjectSerializer::toFormValue($varForms['version_id']);

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
     * Operation addGameToProject
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminAddGameToProjectForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\ConsoleAdminAddGameToProjectResult
     */
    public function addGameToProject($varForms)
    {
        list($response) = $this->addGameToProjectWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation addGameToProjectWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminAddGameToProjectForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\ConsoleAdminAddGameToProjectResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function addGameToProjectWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminAddGameToProjectResult';
        $request = $this->addGameToProjectRequest($varForms);

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
                        '\Yjopenapi\Client\Model\ConsoleAdminAddGameToProjectResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation addGameToProjectAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminAddGameToProjectForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addGameToProjectAsync($varForms)
    {
        return $this->addGameToProjectAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation addGameToProjectAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminAddGameToProjectForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addGameToProjectAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminAddGameToProjectResult';
        $request = $this->addGameToProjectRequest($varForms);

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
     * Create request for operation 'addGameToProject'
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminAddGameToProjectForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function addGameToProjectRequest($varForms)
    {
        // verify the required parameter 'project_id' is set
        if ($varForms['project_id'] === null || (is_array($varForms['project_id']) && count($varForms['project_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'project_id\'] when calling addGameToProject'
            );
        }
        // verify the required parameter 'game_id' is set
        if ($varForms['game_id'] === null || (is_array($varForms['game_id']) && count($varForms['game_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'game_id\'] when calling addGameToProject'
            );
        }

        $resourcePath = '/consoleAdmin/addGameToProject';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['projectId'] = ObjectSerializer::toFormValue($varForms['project_id']);
        $formParams['gameId'] = ObjectSerializer::toFormValue($varForms['game_id']);

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
     * Operation batchUpdateDispatchConfig
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminBatchUpdateDispatchConfigForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\ConsoleAdminBatchUpdateDispatchConfigResult
     */
    public function batchUpdateDispatchConfig($varForms)
    {
        list($response) = $this->batchUpdateDispatchConfigWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation batchUpdateDispatchConfigWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminBatchUpdateDispatchConfigForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\ConsoleAdminBatchUpdateDispatchConfigResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function batchUpdateDispatchConfigWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminBatchUpdateDispatchConfigResult';
        $request = $this->batchUpdateDispatchConfigRequest($varForms);

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
                        '\Yjopenapi\Client\Model\ConsoleAdminBatchUpdateDispatchConfigResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation batchUpdateDispatchConfigAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminBatchUpdateDispatchConfigForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function batchUpdateDispatchConfigAsync($varForms)
    {
        return $this->batchUpdateDispatchConfigAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation batchUpdateDispatchConfigAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminBatchUpdateDispatchConfigForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function batchUpdateDispatchConfigAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminBatchUpdateDispatchConfigResult';
        $request = $this->batchUpdateDispatchConfigRequest($varForms);

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
     * Create request for operation 'batchUpdateDispatchConfig'
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminBatchUpdateDispatchConfigForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function batchUpdateDispatchConfigRequest($varForms)
    {
        // verify the required parameter 'mix_project_id' is set
        if ($varForms['mix_project_id'] === null || (is_array($varForms['mix_project_id']) && count($varForms['mix_project_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'mix_project_id\'] when calling batchUpdateDispatchConfig'
            );
        }
        // verify the required parameter 'instance_id' is set
        if ($varForms['instance_id'] === null || (is_array($varForms['instance_id']) && count($varForms['instance_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'instance_id\'] when calling batchUpdateDispatchConfig'
            );
        }
        // verify the required parameter 'app_name' is set
        if ($varForms['app_name'] === null || (is_array($varForms['app_name']) && count($varForms['app_name']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'app_name\'] when calling batchUpdateDispatchConfig'
            );
        }
        // verify the required parameter 'config_list' is set
        if ($varForms['config_list'] === null || (is_array($varForms['config_list']) && count($varForms['config_list']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'config_list\'] when calling batchUpdateDispatchConfig'
            );
        }

        $resourcePath = '/consoleAdmin/batchUpdateDispatchConfig';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['mixProjectId'] = ObjectSerializer::toFormValue($varForms['mix_project_id']);
        $formParams['instanceId'] = ObjectSerializer::toFormValue($varForms['instance_id']);
        $formParams['appName'] = ObjectSerializer::toFormValue($varForms['app_name']);
        $formParams['configList'] = ObjectSerializer::toFormValue($varForms['config_list']);

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
     * Operation createGame
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminCreateGameForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\ConsoleAdminCreateGameResult
     */
    public function createGame($varForms)
    {
        list($response) = $this->createGameWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation createGameWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminCreateGameForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\ConsoleAdminCreateGameResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function createGameWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminCreateGameResult';
        $request = $this->createGameRequest($varForms);

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
                        '\Yjopenapi\Client\Model\ConsoleAdminCreateGameResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createGameAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminCreateGameForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createGameAsync($varForms)
    {
        return $this->createGameAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createGameAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminCreateGameForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createGameAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminCreateGameResult';
        $request = $this->createGameRequest($varForms);

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
     * Create request for operation 'createGame'
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminCreateGameForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createGameRequest($varForms)
    {
        // verify the required parameter 'game_name' is set
        if ($varForms['game_name'] === null || (is_array($varForms['game_name']) && count($varForms['game_name']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'game_name\'] when calling createGame'
            );
        }
        // verify the required parameter 'platform_type' is set
        if ($varForms['platform_type'] === null || (is_array($varForms['platform_type']) && count($varForms['platform_type']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'platform_type\'] when calling createGame'
            );
        }

        $resourcePath = '/consoleAdmin/createGame';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['gameName'] = ObjectSerializer::toFormValue($varForms['game_name']);
        $formParams['platformType'] = ObjectSerializer::toFormValue($varForms['platform_type']);
        if ($varForms['os_type'] !== null) {
            $formParams['osType'] = ObjectSerializer::toFormValue($varForms['os_type']);
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
     * Operation createOrder
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminCreateOrderForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\ConsoleAdminCreateOrderResult
     */
    public function createOrder($varForms)
    {
        list($response) = $this->createOrderWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation createOrderWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminCreateOrderForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\ConsoleAdminCreateOrderResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function createOrderWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminCreateOrderResult';
        $request = $this->createOrderRequest($varForms);

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
                        '\Yjopenapi\Client\Model\ConsoleAdminCreateOrderResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createOrderAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminCreateOrderForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createOrderAsync($varForms)
    {
        return $this->createOrderAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createOrderAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminCreateOrderForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createOrderAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminCreateOrderResult';
        $request = $this->createOrderRequest($varForms);

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
     * Create request for operation 'createOrder'
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminCreateOrderForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createOrderRequest($varForms)
    {
        // verify the required parameter 'category_code' is set
        if ($varForms['category_code'] === null || (is_array($varForms['category_code']) && count($varForms['category_code']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'category_code\'] when calling createOrder'
            );
        }
        // verify the required parameter 'commodity_code' is set
        if ($varForms['commodity_code'] === null || (is_array($varForms['commodity_code']) && count($varForms['commodity_code']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'commodity_code\'] when calling createOrder'
            );
        }
        // verify the required parameter 'primary_charge_item_code' is set
        if ($varForms['primary_charge_item_code'] === null || (is_array($varForms['primary_charge_item_code']) && count($varForms['primary_charge_item_code']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'primary_charge_item_code\'] when calling createOrder'
            );
        }
        // verify the required parameter 'attribute_request_list' is set
        if ($varForms['attribute_request_list'] === null || (is_array($varForms['attribute_request_list']) && count($varForms['attribute_request_list']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'attribute_request_list\'] when calling createOrder'
            );
        }
        // verify the required parameter 'order_type' is set
        if ($varForms['order_type'] === null || (is_array($varForms['order_type']) && count($varForms['order_type']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'order_type\'] when calling createOrder'
            );
        }

        $resourcePath = '/consoleAdmin/createOrder';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['categoryCode'] = ObjectSerializer::toFormValue($varForms['category_code']);
        $formParams['commodityCode'] = ObjectSerializer::toFormValue($varForms['commodity_code']);
        if ($varForms['instance_id'] !== null) {
            $formParams['instanceId'] = ObjectSerializer::toFormValue($varForms['instance_id']);
        }
        $formParams['primaryChargeItemCode'] = ObjectSerializer::toFormValue($varForms['primary_charge_item_code']);
        $formParams['attributeRequestList'] = ObjectSerializer::toFormValue($varForms['attribute_request_list']);
        $formParams['orderType'] = ObjectSerializer::toFormValue($varForms['order_type']);
        if ($varForms['auto_renew'] !== null) {
            $formParams['autoRenew'] = ObjectSerializer::toFormValue($varForms['auto_renew']);
        }
        if ($varForms['create_order_ext_params'] !== null) {
            $formParams['createOrderExtParams'] = ObjectSerializer::toFormValue($varForms['create_order_ext_params']);
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
     * Operation createProject
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminCreateProjectForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\ConsoleAdminCreateProjectResult
     */
    public function createProject($varForms)
    {
        list($response) = $this->createProjectWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation createProjectWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminCreateProjectForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\ConsoleAdminCreateProjectResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function createProjectWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminCreateProjectResult';
        $request = $this->createProjectRequest($varForms);

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
                        '\Yjopenapi\Client\Model\ConsoleAdminCreateProjectResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createProjectAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminCreateProjectForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createProjectAsync($varForms)
    {
        return $this->createProjectAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createProjectAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminCreateProjectForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createProjectAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminCreateProjectResult';
        $request = $this->createProjectRequest($varForms);

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
     * Create request for operation 'createProject'
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminCreateProjectForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createProjectRequest($varForms)
    {
        // verify the required parameter 'project_name' is set
        if ($varForms['project_name'] === null || (is_array($varForms['project_name']) && count($varForms['project_name']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'project_name\'] when calling createProject'
            );
        }

        $resourcePath = '/consoleAdmin/createProject';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['projectName'] = ObjectSerializer::toFormValue($varForms['project_name']);

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
     * Operation deleteGame
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminDeleteGameForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\ConsoleAdminDeleteGameResult
     */
    public function deleteGame($varForms)
    {
        list($response) = $this->deleteGameWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation deleteGameWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminDeleteGameForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\ConsoleAdminDeleteGameResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteGameWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminDeleteGameResult';
        $request = $this->deleteGameRequest($varForms);

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
                        '\Yjopenapi\Client\Model\ConsoleAdminDeleteGameResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deleteGameAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminDeleteGameForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteGameAsync($varForms)
    {
        return $this->deleteGameAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteGameAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminDeleteGameForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteGameAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminDeleteGameResult';
        $request = $this->deleteGameRequest($varForms);

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
     * Create request for operation 'deleteGame'
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminDeleteGameForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteGameRequest($varForms)
    {
        // verify the required parameter 'game_id' is set
        if ($varForms['game_id'] === null || (is_array($varForms['game_id']) && count($varForms['game_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'game_id\'] when calling deleteGame'
            );
        }

        $resourcePath = '/consoleAdmin/deleteGame';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['gameId'] = ObjectSerializer::toFormValue($varForms['game_id']);

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
     * Operation deleteGameVersion
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminDeleteGameVersionForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\ConsoleAdminDeleteGameVersionResult
     */
    public function deleteGameVersion($varForms)
    {
        list($response) = $this->deleteGameVersionWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation deleteGameVersionWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminDeleteGameVersionForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\ConsoleAdminDeleteGameVersionResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteGameVersionWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminDeleteGameVersionResult';
        $request = $this->deleteGameVersionRequest($varForms);

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
                        '\Yjopenapi\Client\Model\ConsoleAdminDeleteGameVersionResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deleteGameVersionAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminDeleteGameVersionForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteGameVersionAsync($varForms)
    {
        return $this->deleteGameVersionAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteGameVersionAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminDeleteGameVersionForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteGameVersionAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminDeleteGameVersionResult';
        $request = $this->deleteGameVersionRequest($varForms);

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
     * Create request for operation 'deleteGameVersion'
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminDeleteGameVersionForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteGameVersionRequest($varForms)
    {
        // verify the required parameter 'version_id' is set
        if ($varForms['version_id'] === null || (is_array($varForms['version_id']) && count($varForms['version_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'version_id\'] when calling deleteGameVersion'
            );
        }

        $resourcePath = '/consoleAdmin/deleteGameVersion';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['versionId'] = ObjectSerializer::toFormValue($varForms['version_id']);

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
     * Operation deleteProject
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminDeleteProjectForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\ConsoleAdminDeleteProjectResult
     */
    public function deleteProject($varForms)
    {
        list($response) = $this->deleteProjectWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation deleteProjectWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminDeleteProjectForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\ConsoleAdminDeleteProjectResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteProjectWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminDeleteProjectResult';
        $request = $this->deleteProjectRequest($varForms);

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
                        '\Yjopenapi\Client\Model\ConsoleAdminDeleteProjectResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deleteProjectAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminDeleteProjectForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteProjectAsync($varForms)
    {
        return $this->deleteProjectAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteProjectAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminDeleteProjectForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteProjectAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminDeleteProjectResult';
        $request = $this->deleteProjectRequest($varForms);

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
     * Create request for operation 'deleteProject'
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminDeleteProjectForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteProjectRequest($varForms)
    {
        // verify the required parameter 'project_id' is set
        if ($varForms['project_id'] === null || (is_array($varForms['project_id']) && count($varForms['project_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'project_id\'] when calling deleteProject'
            );
        }

        $resourcePath = '/consoleAdmin/deleteProject';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
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
     * Operation getBillFlowInfo
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminGetBillFlowInfoForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\ConsoleAdminGetBillFlowInfoResult
     */
    public function getBillFlowInfo($varForms)
    {
        list($response) = $this->getBillFlowInfoWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation getBillFlowInfoWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminGetBillFlowInfoForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\ConsoleAdminGetBillFlowInfoResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBillFlowInfoWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminGetBillFlowInfoResult';
        $request = $this->getBillFlowInfoRequest($varForms);

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
                        '\Yjopenapi\Client\Model\ConsoleAdminGetBillFlowInfoResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getBillFlowInfoAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminGetBillFlowInfoForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBillFlowInfoAsync($varForms)
    {
        return $this->getBillFlowInfoAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getBillFlowInfoAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminGetBillFlowInfoForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBillFlowInfoAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminGetBillFlowInfoResult';
        $request = $this->getBillFlowInfoRequest($varForms);

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
     * Create request for operation 'getBillFlowInfo'
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminGetBillFlowInfoForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getBillFlowInfoRequest($varForms)
    {
        // verify the required parameter 'accounting_period_from' is set
        if ($varForms['accounting_period_from'] === null || (is_array($varForms['accounting_period_from']) && count($varForms['accounting_period_from']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'accounting_period_from\'] when calling getBillFlowInfo'
            );
        }
        // verify the required parameter 'accounting_period_to' is set
        if ($varForms['accounting_period_to'] === null || (is_array($varForms['accounting_period_to']) && count($varForms['accounting_period_to']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'accounting_period_to\'] when calling getBillFlowInfo'
            );
        }
        // verify the required parameter 'tenant_id' is set
        if ($varForms['tenant_id'] === null || (is_array($varForms['tenant_id']) && count($varForms['tenant_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'tenant_id\'] when calling getBillFlowInfo'
            );
        }

        $resourcePath = '/consoleAdmin/getBillFlowInfo';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['accountingPeriodFrom'] = ObjectSerializer::toFormValue($varForms['accounting_period_from']);
        $formParams['accountingPeriodTo'] = ObjectSerializer::toFormValue($varForms['accounting_period_to']);
        if ($varForms['commodity_code'] !== null) {
            $formParams['commodityCode'] = ObjectSerializer::toFormValue($varForms['commodity_code']);
        }
        $formParams['tenantId'] = ObjectSerializer::toFormValue($varForms['tenant_id']);
        if ($varForms['order_id'] !== null) {
            $formParams['orderId'] = ObjectSerializer::toFormValue($varForms['order_id']);
        }
        if ($varForms['status'] !== null) {
            $formParams['status'] = ObjectSerializer::toFormValue($varForms['status']);
        }
        if ($varForms['consume_type'] !== null) {
            $formParams['consumeType'] = ObjectSerializer::toFormValue($varForms['consume_type']);
        }
        if ($varForms['bill_type'] !== null) {
            $formParams['billType'] = ObjectSerializer::toFormValue($varForms['bill_type']);
        }
        if ($varForms['page_number'] !== null) {
            $formParams['pageNumber'] = ObjectSerializer::toFormValue($varForms['page_number']);
        }
        if ($varForms['page_size'] !== null) {
            $formParams['pageSize'] = ObjectSerializer::toFormValue($varForms['page_size']);
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
     * Operation getGameVersion
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminGetGameVersionForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\ConsoleAdminGetGameVersionResult
     */
    public function getGameVersion($varForms)
    {
        list($response) = $this->getGameVersionWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation getGameVersionWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminGetGameVersionForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\ConsoleAdminGetGameVersionResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function getGameVersionWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminGetGameVersionResult';
        $request = $this->getGameVersionRequest($varForms);

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
                        '\Yjopenapi\Client\Model\ConsoleAdminGetGameVersionResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getGameVersionAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminGetGameVersionForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getGameVersionAsync($varForms)
    {
        return $this->getGameVersionAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getGameVersionAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminGetGameVersionForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getGameVersionAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminGetGameVersionResult';
        $request = $this->getGameVersionRequest($varForms);

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
     * Create request for operation 'getGameVersion'
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminGetGameVersionForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getGameVersionRequest($varForms)
    {
        // verify the required parameter 'version_id' is set
        if ($varForms['version_id'] === null || (is_array($varForms['version_id']) && count($varForms['version_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'version_id\'] when calling getGameVersion'
            );
        }

        $resourcePath = '/consoleAdmin/getGameVersion';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['versionId'] = ObjectSerializer::toFormValue($varForms['version_id']);

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
     * Operation getGameVersionProgress
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminGetGameVersionProgressForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\ConsoleAdminGetGameVersionProgressResult
     */
    public function getGameVersionProgress($varForms)
    {
        list($response) = $this->getGameVersionProgressWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation getGameVersionProgressWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminGetGameVersionProgressForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\ConsoleAdminGetGameVersionProgressResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function getGameVersionProgressWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminGetGameVersionProgressResult';
        $request = $this->getGameVersionProgressRequest($varForms);

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
                        '\Yjopenapi\Client\Model\ConsoleAdminGetGameVersionProgressResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getGameVersionProgressAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminGetGameVersionProgressForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getGameVersionProgressAsync($varForms)
    {
        return $this->getGameVersionProgressAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getGameVersionProgressAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminGetGameVersionProgressForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getGameVersionProgressAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminGetGameVersionProgressResult';
        $request = $this->getGameVersionProgressRequest($varForms);

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
     * Create request for operation 'getGameVersionProgress'
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminGetGameVersionProgressForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getGameVersionProgressRequest($varForms)
    {
        // verify the required parameter 'task_id' is set
        if ($varForms['task_id'] === null || (is_array($varForms['task_id']) && count($varForms['task_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'task_id\'] when calling getGameVersionProgress'
            );
        }

        $resourcePath = '/consoleAdmin/getGameVersionProgress';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['taskId'] = ObjectSerializer::toFormValue($varForms['task_id']);

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
     * Operation getOrder
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminGetOrderForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\ConsoleAdminGetOrderResult
     */
    public function getOrder($varForms)
    {
        list($response) = $this->getOrderWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation getOrderWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminGetOrderForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\ConsoleAdminGetOrderResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrderWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminGetOrderResult';
        $request = $this->getOrderRequest($varForms);

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
                        '\Yjopenapi\Client\Model\ConsoleAdminGetOrderResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getOrderAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminGetOrderForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrderAsync($varForms)
    {
        return $this->getOrderAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOrderAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminGetOrderForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrderAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminGetOrderResult';
        $request = $this->getOrderRequest($varForms);

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
     * Create request for operation 'getOrder'
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminGetOrderForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOrderRequest($varForms)
    {
        // verify the required parameter 'order_id' is set
        if ($varForms['order_id'] === null || (is_array($varForms['order_id']) && count($varForms['order_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'order_id\'] when calling getOrder'
            );
        }

        $resourcePath = '/consoleAdmin/getOrder';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['orderId'] = ObjectSerializer::toFormValue($varForms['order_id']);

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
     * Operation listActivateableInstances
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListActivateableInstancesForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\ConsoleAdminListActivateableInstancesResult
     */
    public function listActivateableInstances($varForms)
    {
        list($response) = $this->listActivateableInstancesWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation listActivateableInstancesWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListActivateableInstancesForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\ConsoleAdminListActivateableInstancesResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function listActivateableInstancesWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminListActivateableInstancesResult';
        $request = $this->listActivateableInstancesRequest($varForms);

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
                        '\Yjopenapi\Client\Model\ConsoleAdminListActivateableInstancesResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listActivateableInstancesAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListActivateableInstancesForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listActivateableInstancesAsync($varForms)
    {
        return $this->listActivateableInstancesAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listActivateableInstancesAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListActivateableInstancesForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listActivateableInstancesAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminListActivateableInstancesResult';
        $request = $this->listActivateableInstancesRequest($varForms);

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
     * Create request for operation 'listActivateableInstances'
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListActivateableInstancesForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listActivateableInstancesRequest($varForms)
    {
        // verify the required parameter 'project_id' is set
        if ($varForms['project_id'] === null || (is_array($varForms['project_id']) && count($varForms['project_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'project_id\'] when calling listActivateableInstances'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($varForms['version_id'] === null || (is_array($varForms['version_id']) && count($varForms['version_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'version_id\'] when calling listActivateableInstances'
            );
        }

        $resourcePath = '/consoleAdmin/listActivateableInstances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['projectId'] = ObjectSerializer::toFormValue($varForms['project_id']);
        $formParams['versionId'] = ObjectSerializer::toFormValue($varForms['version_id']);

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
     * Operation listActivatedInstances
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListActivatedInstancesForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\ConsoleAdminListActivatedInstancesResult
     */
    public function listActivatedInstances($varForms)
    {
        list($response) = $this->listActivatedInstancesWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation listActivatedInstancesWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListActivatedInstancesForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\ConsoleAdminListActivatedInstancesResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function listActivatedInstancesWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminListActivatedInstancesResult';
        $request = $this->listActivatedInstancesRequest($varForms);

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
                        '\Yjopenapi\Client\Model\ConsoleAdminListActivatedInstancesResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listActivatedInstancesAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListActivatedInstancesForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listActivatedInstancesAsync($varForms)
    {
        return $this->listActivatedInstancesAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listActivatedInstancesAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListActivatedInstancesForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listActivatedInstancesAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminListActivatedInstancesResult';
        $request = $this->listActivatedInstancesRequest($varForms);

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
     * Create request for operation 'listActivatedInstances'
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListActivatedInstancesForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listActivatedInstancesRequest($varForms)
    {
        // verify the required parameter 'game_id' is set
        if ($varForms['game_id'] === null || (is_array($varForms['game_id']) && count($varForms['game_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'game_id\'] when calling listActivatedInstances'
            );
        }
        // verify the required parameter 'project_id' is set
        if ($varForms['project_id'] === null || (is_array($varForms['project_id']) && count($varForms['project_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'project_id\'] when calling listActivatedInstances'
            );
        }

        $resourcePath = '/consoleAdmin/listActivatedInstances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
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
     * Operation listControllersOfGame
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListControllersOfGameForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\ConsoleAdminListControllersOfGameResult
     */
    public function listControllersOfGame($varForms)
    {
        list($response) = $this->listControllersOfGameWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation listControllersOfGameWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListControllersOfGameForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\ConsoleAdminListControllersOfGameResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function listControllersOfGameWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminListControllersOfGameResult';
        $request = $this->listControllersOfGameRequest($varForms);

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
                        '\Yjopenapi\Client\Model\ConsoleAdminListControllersOfGameResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listControllersOfGameAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListControllersOfGameForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listControllersOfGameAsync($varForms)
    {
        return $this->listControllersOfGameAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listControllersOfGameAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListControllersOfGameForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listControllersOfGameAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminListControllersOfGameResult';
        $request = $this->listControllersOfGameRequest($varForms);

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
     * Create request for operation 'listControllersOfGame'
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListControllersOfGameForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listControllersOfGameRequest($varForms)
    {
        // verify the required parameter 'game_id' is set
        if ($varForms['game_id'] === null || (is_array($varForms['game_id']) && count($varForms['game_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'game_id\'] when calling listControllersOfGame'
            );
        }

        $resourcePath = '/consoleAdmin/listControllersOfGame';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['gameId'] = ObjectSerializer::toFormValue($varForms['game_id']);
        if ($varForms['next_token'] !== null) {
            $formParams['nextToken'] = ObjectSerializer::toFormValue($varForms['next_token']);
        }
        if ($varForms['max_results'] !== null) {
            $formParams['maxResults'] = ObjectSerializer::toFormValue($varForms['max_results']);
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
     * Operation listDeployableInstances
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListDeployableInstancesForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\ConsoleAdminListDeployableInstancesResult
     */
    public function listDeployableInstances($varForms)
    {
        list($response) = $this->listDeployableInstancesWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation listDeployableInstancesWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListDeployableInstancesForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\ConsoleAdminListDeployableInstancesResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function listDeployableInstancesWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminListDeployableInstancesResult';
        $request = $this->listDeployableInstancesRequest($varForms);

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
                        '\Yjopenapi\Client\Model\ConsoleAdminListDeployableInstancesResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listDeployableInstancesAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListDeployableInstancesForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listDeployableInstancesAsync($varForms)
    {
        return $this->listDeployableInstancesAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listDeployableInstancesAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListDeployableInstancesForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listDeployableInstancesAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminListDeployableInstancesResult';
        $request = $this->listDeployableInstancesRequest($varForms);

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
     * Create request for operation 'listDeployableInstances'
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListDeployableInstancesForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listDeployableInstancesRequest($varForms)
    {
        // verify the required parameter 'version_id' is set
        if ($varForms['version_id'] === null || (is_array($varForms['version_id']) && count($varForms['version_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'version_id\'] when calling listDeployableInstances'
            );
        }
        // verify the required parameter 'project_id' is set
        if ($varForms['project_id'] === null || (is_array($varForms['project_id']) && count($varForms['project_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'project_id\'] when calling listDeployableInstances'
            );
        }

        $resourcePath = '/consoleAdmin/listDeployableInstances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['versionId'] = ObjectSerializer::toFormValue($varForms['version_id']);
        $formParams['projectId'] = ObjectSerializer::toFormValue($varForms['project_id']);
        if ($varForms['page_size'] !== null) {
            $formParams['pageSize'] = ObjectSerializer::toFormValue($varForms['page_size']);
        }
        if ($varForms['page_number'] !== null) {
            $formParams['pageNumber'] = ObjectSerializer::toFormValue($varForms['page_number']);
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
     * Operation listGameDeployDetailsOfProject
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListGameDeployDetailsOfProjectForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\ConsoleAdminListGameDeployDetailsOfProjectResult
     */
    public function listGameDeployDetailsOfProject($varForms)
    {
        list($response) = $this->listGameDeployDetailsOfProjectWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation listGameDeployDetailsOfProjectWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListGameDeployDetailsOfProjectForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\ConsoleAdminListGameDeployDetailsOfProjectResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function listGameDeployDetailsOfProjectWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminListGameDeployDetailsOfProjectResult';
        $request = $this->listGameDeployDetailsOfProjectRequest($varForms);

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
                        '\Yjopenapi\Client\Model\ConsoleAdminListGameDeployDetailsOfProjectResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listGameDeployDetailsOfProjectAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListGameDeployDetailsOfProjectForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listGameDeployDetailsOfProjectAsync($varForms)
    {
        return $this->listGameDeployDetailsOfProjectAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listGameDeployDetailsOfProjectAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListGameDeployDetailsOfProjectForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listGameDeployDetailsOfProjectAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminListGameDeployDetailsOfProjectResult';
        $request = $this->listGameDeployDetailsOfProjectRequest($varForms);

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
     * Create request for operation 'listGameDeployDetailsOfProject'
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListGameDeployDetailsOfProjectForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listGameDeployDetailsOfProjectRequest($varForms)
    {

        $resourcePath = '/consoleAdmin/listGameDeployDetailsOfProject';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        if ($varForms['project_id'] !== null) {
            $formParams['projectId'] = ObjectSerializer::toFormValue($varForms['project_id']);
        }
        if ($varForms['game_id'] !== null) {
            $formParams['gameId'] = ObjectSerializer::toFormValue($varForms['game_id']);
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
     * Operation listGameVersions
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListGameVersionsForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\ConsoleAdminListGameVersionsResult
     */
    public function listGameVersions($varForms)
    {
        list($response) = $this->listGameVersionsWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation listGameVersionsWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListGameVersionsForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\ConsoleAdminListGameVersionsResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function listGameVersionsWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminListGameVersionsResult';
        $request = $this->listGameVersionsRequest($varForms);

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
                        '\Yjopenapi\Client\Model\ConsoleAdminListGameVersionsResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listGameVersionsAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListGameVersionsForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listGameVersionsAsync($varForms)
    {
        return $this->listGameVersionsAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listGameVersionsAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListGameVersionsForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listGameVersionsAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminListGameVersionsResult';
        $request = $this->listGameVersionsRequest($varForms);

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
     * Create request for operation 'listGameVersions'
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListGameVersionsForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listGameVersionsRequest($varForms)
    {
        // verify the required parameter 'game_id' is set
        if ($varForms['game_id'] === null || (is_array($varForms['game_id']) && count($varForms['game_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'game_id\'] when calling listGameVersions'
            );
        }

        $resourcePath = '/consoleAdmin/listGameVersions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        if ($varForms['next_token'] !== null) {
            $formParams['nextToken'] = ObjectSerializer::toFormValue($varForms['next_token']);
        }
        if ($varForms['max_results'] !== null) {
            $formParams['maxResults'] = ObjectSerializer::toFormValue($varForms['max_results']);
        }
        $formParams['gameId'] = ObjectSerializer::toFormValue($varForms['game_id']);

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
     * Operation listGames
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListGamesForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\ConsoleAdminListGamesResult
     */
    public function listGames($varForms)
    {
        list($response) = $this->listGamesWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation listGamesWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListGamesForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\ConsoleAdminListGamesResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function listGamesWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminListGamesResult';
        $request = $this->listGamesRequest($varForms);

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
                        '\Yjopenapi\Client\Model\ConsoleAdminListGamesResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listGamesAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListGamesForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listGamesAsync($varForms)
    {
        return $this->listGamesAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listGamesAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListGamesForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listGamesAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminListGamesResult';
        $request = $this->listGamesRequest($varForms);

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
     * Create request for operation 'listGames'
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListGamesForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listGamesRequest($varForms)
    {

        $resourcePath = '/consoleAdmin/listGames';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        if ($varForms['next_token'] !== null) {
            $formParams['nextToken'] = ObjectSerializer::toFormValue($varForms['next_token']);
        }
        if ($varForms['max_results'] !== null) {
            $formParams['maxResults'] = ObjectSerializer::toFormValue($varForms['max_results']);
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
     * Operation listInstancesOfProject
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListInstancesOfProjectForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\ConsoleAdminListInstancesOfProjectResult
     */
    public function listInstancesOfProject($varForms)
    {
        list($response) = $this->listInstancesOfProjectWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation listInstancesOfProjectWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListInstancesOfProjectForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\ConsoleAdminListInstancesOfProjectResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function listInstancesOfProjectWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminListInstancesOfProjectResult';
        $request = $this->listInstancesOfProjectRequest($varForms);

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
                        '\Yjopenapi\Client\Model\ConsoleAdminListInstancesOfProjectResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listInstancesOfProjectAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListInstancesOfProjectForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listInstancesOfProjectAsync($varForms)
    {
        return $this->listInstancesOfProjectAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listInstancesOfProjectAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListInstancesOfProjectForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listInstancesOfProjectAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminListInstancesOfProjectResult';
        $request = $this->listInstancesOfProjectRequest($varForms);

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
     * Create request for operation 'listInstancesOfProject'
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListInstancesOfProjectForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listInstancesOfProjectRequest($varForms)
    {
        // verify the required parameter 'project_id' is set
        if ($varForms['project_id'] === null || (is_array($varForms['project_id']) && count($varForms['project_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'project_id\'] when calling listInstancesOfProject'
            );
        }

        $resourcePath = '/consoleAdmin/listInstancesOfProject';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        if ($varForms['next_token'] !== null) {
            $formParams['nextToken'] = ObjectSerializer::toFormValue($varForms['next_token']);
        }
        if ($varForms['max_result'] !== null) {
            $formParams['maxResult'] = ObjectSerializer::toFormValue($varForms['max_result']);
        }
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
     * Operation listMonthBill
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListMonthBillForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\ConsoleAdminListMonthBillResult
     */
    public function listMonthBill($varForms)
    {
        list($response) = $this->listMonthBillWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation listMonthBillWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListMonthBillForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\ConsoleAdminListMonthBillResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function listMonthBillWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminListMonthBillResult';
        $request = $this->listMonthBillRequest($varForms);

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
                        '\Yjopenapi\Client\Model\ConsoleAdminListMonthBillResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listMonthBillAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListMonthBillForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listMonthBillAsync($varForms)
    {
        return $this->listMonthBillAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listMonthBillAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListMonthBillForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listMonthBillAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminListMonthBillResult';
        $request = $this->listMonthBillRequest($varForms);

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
     * Create request for operation 'listMonthBill'
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListMonthBillForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listMonthBillRequest($varForms)
    {
        // verify the required parameter 'accounting_period_from' is set
        if ($varForms['accounting_period_from'] === null || (is_array($varForms['accounting_period_from']) && count($varForms['accounting_period_from']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'accounting_period_from\'] when calling listMonthBill'
            );
        }
        // verify the required parameter 'accounting_period_to' is set
        if ($varForms['accounting_period_to'] === null || (is_array($varForms['accounting_period_to']) && count($varForms['accounting_period_to']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'accounting_period_to\'] when calling listMonthBill'
            );
        }

        $resourcePath = '/consoleAdmin/listMonthBill';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['accountingPeriodFrom'] = ObjectSerializer::toFormValue($varForms['accounting_period_from']);
        $formParams['accountingPeriodTo'] = ObjectSerializer::toFormValue($varForms['accounting_period_to']);
        if ($varForms['page_number'] !== null) {
            $formParams['pageNumber'] = ObjectSerializer::toFormValue($varForms['page_number']);
        }
        if ($varForms['page_size'] !== null) {
            $formParams['pageSize'] = ObjectSerializer::toFormValue($varForms['page_size']);
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
     * Operation listProjects
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListProjectsForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\ConsoleAdminListProjectsResult
     */
    public function listProjects($varForms)
    {
        list($response) = $this->listProjectsWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation listProjectsWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListProjectsForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\ConsoleAdminListProjectsResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function listProjectsWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminListProjectsResult';
        $request = $this->listProjectsRequest($varForms);

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
                        '\Yjopenapi\Client\Model\ConsoleAdminListProjectsResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listProjectsAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListProjectsForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listProjectsAsync($varForms)
    {
        return $this->listProjectsAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listProjectsAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListProjectsForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listProjectsAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminListProjectsResult';
        $request = $this->listProjectsRequest($varForms);

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
     * Create request for operation 'listProjects'
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListProjectsForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listProjectsRequest($varForms)
    {

        $resourcePath = '/consoleAdmin/listProjects';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        if ($varForms['next_token'] !== null) {
            $formParams['nextToken'] = ObjectSerializer::toFormValue($varForms['next_token']);
        }
        if ($varForms['max_results'] !== null) {
            $formParams['maxResults'] = ObjectSerializer::toFormValue($varForms['max_results']);
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
     * Operation listVersionDeployInstances
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListVersionDeployInstancesForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\ConsoleAdminListVersionDeployInstancesResult
     */
    public function listVersionDeployInstances($varForms)
    {
        list($response) = $this->listVersionDeployInstancesWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation listVersionDeployInstancesWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListVersionDeployInstancesForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\ConsoleAdminListVersionDeployInstancesResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function listVersionDeployInstancesWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminListVersionDeployInstancesResult';
        $request = $this->listVersionDeployInstancesRequest($varForms);

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
                        '\Yjopenapi\Client\Model\ConsoleAdminListVersionDeployInstancesResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listVersionDeployInstancesAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListVersionDeployInstancesForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listVersionDeployInstancesAsync($varForms)
    {
        return $this->listVersionDeployInstancesAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listVersionDeployInstancesAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListVersionDeployInstancesForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listVersionDeployInstancesAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminListVersionDeployInstancesResult';
        $request = $this->listVersionDeployInstancesRequest($varForms);

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
     * Create request for operation 'listVersionDeployInstances'
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminListVersionDeployInstancesForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listVersionDeployInstancesRequest($varForms)
    {

        $resourcePath = '/consoleAdmin/listVersionDeployInstances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        if ($varForms['project_id'] !== null) {
            $formParams['projectId'] = ObjectSerializer::toFormValue($varForms['project_id']);
        }
        if ($varForms['game_id'] !== null) {
            $formParams['gameId'] = ObjectSerializer::toFormValue($varForms['game_id']);
        }
        if ($varForms['version_id'] !== null) {
            $formParams['versionId'] = ObjectSerializer::toFormValue($varForms['version_id']);
        }
        if ($varForms['deploy_status'] !== null) {
            $formParams['deployStatus'] = ObjectSerializer::toFormValue($varForms['deploy_status']);
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
     * Operation queryAdaptResultByVersionId
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminQueryAdaptResultByVersionIdForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\ConsoleAdminQueryAdaptResultByVersionIdResult
     */
    public function queryAdaptResultByVersionId($varForms)
    {
        list($response) = $this->queryAdaptResultByVersionIdWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation queryAdaptResultByVersionIdWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminQueryAdaptResultByVersionIdForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\ConsoleAdminQueryAdaptResultByVersionIdResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function queryAdaptResultByVersionIdWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminQueryAdaptResultByVersionIdResult';
        $request = $this->queryAdaptResultByVersionIdRequest($varForms);

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
                        '\Yjopenapi\Client\Model\ConsoleAdminQueryAdaptResultByVersionIdResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation queryAdaptResultByVersionIdAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminQueryAdaptResultByVersionIdForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function queryAdaptResultByVersionIdAsync($varForms)
    {
        return $this->queryAdaptResultByVersionIdAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation queryAdaptResultByVersionIdAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminQueryAdaptResultByVersionIdForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function queryAdaptResultByVersionIdAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminQueryAdaptResultByVersionIdResult';
        $request = $this->queryAdaptResultByVersionIdRequest($varForms);

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
     * Create request for operation 'queryAdaptResultByVersionId'
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminQueryAdaptResultByVersionIdForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function queryAdaptResultByVersionIdRequest($varForms)
    {
        // verify the required parameter 'mix_version_id' is set
        if ($varForms['mix_version_id'] === null || (is_array($varForms['mix_version_id']) && count($varForms['mix_version_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'mix_version_id\'] when calling queryAdaptResultByVersionId'
            );
        }

        $resourcePath = '/consoleAdmin/queryAdaptResultByVersionId';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['mixVersionId'] = ObjectSerializer::toFormValue($varForms['mix_version_id']);

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
     * Operation recommendSpecification
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminRecommendSpecificationForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\ConsoleAdminRecommendSpecificationResult
     */
    public function recommendSpecification($varForms)
    {
        list($response) = $this->recommendSpecificationWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation recommendSpecificationWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminRecommendSpecificationForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\ConsoleAdminRecommendSpecificationResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function recommendSpecificationWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminRecommendSpecificationResult';
        $request = $this->recommendSpecificationRequest($varForms);

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
                        '\Yjopenapi\Client\Model\ConsoleAdminRecommendSpecificationResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation recommendSpecificationAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminRecommendSpecificationForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function recommendSpecificationAsync($varForms)
    {
        return $this->recommendSpecificationAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation recommendSpecificationAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminRecommendSpecificationForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function recommendSpecificationAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminRecommendSpecificationResult';
        $request = $this->recommendSpecificationRequest($varForms);

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
     * Create request for operation 'recommendSpecification'
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminRecommendSpecificationForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function recommendSpecificationRequest($varForms)
    {
        // verify the required parameter 'game_id' is set
        if ($varForms['game_id'] === null || (is_array($varForms['game_id']) && count($varForms['game_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'game_id\'] when calling recommendSpecification'
            );
        }
        // verify the required parameter 'game_version_id' is set
        if ($varForms['game_version_id'] === null || (is_array($varForms['game_version_id']) && count($varForms['game_version_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'game_version_id\'] when calling recommendSpecification'
            );
        }
        // verify the required parameter 'platform_type' is set
        if ($varForms['platform_type'] === null || (is_array($varForms['platform_type']) && count($varForms['platform_type']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'platform_type\'] when calling recommendSpecification'
            );
        }

        $resourcePath = '/consoleAdmin/recommendSpecification';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['gameId'] = ObjectSerializer::toFormValue($varForms['game_id']);
        $formParams['gameVersionId'] = ObjectSerializer::toFormValue($varForms['game_version_id']);
        $formParams['platformType'] = ObjectSerializer::toFormValue($varForms['platform_type']);

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
     * Operation removeGameFromProject
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminRemoveGameFromProjectForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\ConsoleAdminRemoveGameFromProjectResult
     */
    public function removeGameFromProject($varForms)
    {
        list($response) = $this->removeGameFromProjectWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation removeGameFromProjectWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminRemoveGameFromProjectForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\ConsoleAdminRemoveGameFromProjectResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function removeGameFromProjectWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminRemoveGameFromProjectResult';
        $request = $this->removeGameFromProjectRequest($varForms);

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
                        '\Yjopenapi\Client\Model\ConsoleAdminRemoveGameFromProjectResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation removeGameFromProjectAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminRemoveGameFromProjectForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removeGameFromProjectAsync($varForms)
    {
        return $this->removeGameFromProjectAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation removeGameFromProjectAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminRemoveGameFromProjectForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removeGameFromProjectAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminRemoveGameFromProjectResult';
        $request = $this->removeGameFromProjectRequest($varForms);

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
     * Create request for operation 'removeGameFromProject'
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminRemoveGameFromProjectForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function removeGameFromProjectRequest($varForms)
    {
        // verify the required parameter 'project_id' is set
        if ($varForms['project_id'] === null || (is_array($varForms['project_id']) && count($varForms['project_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'project_id\'] when calling removeGameFromProject'
            );
        }
        // verify the required parameter 'game_id' is set
        if ($varForms['game_id'] === null || (is_array($varForms['game_id']) && count($varForms['game_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'game_id\'] when calling removeGameFromProject'
            );
        }

        $resourcePath = '/consoleAdmin/removeGameFromProject';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['projectId'] = ObjectSerializer::toFormValue($varForms['project_id']);
        $formParams['gameId'] = ObjectSerializer::toFormValue($varForms['game_id']);

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
     * Operation submitDeployment
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminSubmitDeploymentForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\ConsoleAdminSubmitDeploymentResult
     */
    public function submitDeployment($varForms)
    {
        list($response) = $this->submitDeploymentWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation submitDeploymentWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminSubmitDeploymentForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\ConsoleAdminSubmitDeploymentResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function submitDeploymentWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminSubmitDeploymentResult';
        $request = $this->submitDeploymentRequest($varForms);

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
                        '\Yjopenapi\Client\Model\ConsoleAdminSubmitDeploymentResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation submitDeploymentAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminSubmitDeploymentForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function submitDeploymentAsync($varForms)
    {
        return $this->submitDeploymentAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation submitDeploymentAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminSubmitDeploymentForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function submitDeploymentAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminSubmitDeploymentResult';
        $request = $this->submitDeploymentRequest($varForms);

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
     * Create request for operation 'submitDeployment'
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminSubmitDeploymentForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function submitDeploymentRequest($varForms)
    {
        // verify the required parameter 'game_id' is set
        if ($varForms['game_id'] === null || (is_array($varForms['game_id']) && count($varForms['game_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'game_id\'] when calling submitDeployment'
            );
        }
        // verify the required parameter 'project_id' is set
        if ($varForms['project_id'] === null || (is_array($varForms['project_id']) && count($varForms['project_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'project_id\'] when calling submitDeployment'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($varForms['version_id'] === null || (is_array($varForms['version_id']) && count($varForms['version_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'version_id\'] when calling submitDeployment'
            );
        }
        // verify the required parameter 'cloud_game_instance_ids' is set
        if ($varForms['cloud_game_instance_ids'] === null || (is_array($varForms['cloud_game_instance_ids']) && count($varForms['cloud_game_instance_ids']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'cloud_game_instance_ids\'] when calling submitDeployment'
            );
        }
        // verify the required parameter 'operation_type' is set
        if ($varForms['operation_type'] === null || (is_array($varForms['operation_type']) && count($varForms['operation_type']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'operation_type\'] when calling submitDeployment'
            );
        }

        $resourcePath = '/consoleAdmin/submitDeployment';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['gameId'] = ObjectSerializer::toFormValue($varForms['game_id']);
        $formParams['projectId'] = ObjectSerializer::toFormValue($varForms['project_id']);
        $formParams['versionId'] = ObjectSerializer::toFormValue($varForms['version_id']);
        $formParams['cloudGameInstanceIds'] = ObjectSerializer::toFormValue($varForms['cloud_game_instance_ids']);
        $formParams['operationType'] = ObjectSerializer::toFormValue($varForms['operation_type']);

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
     * Operation uploadGameVersionByDownload
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminUploadGameVersionByDownloadForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Model\ConsoleAdminUploadGameVersionByDownloadResult
     */
    public function uploadGameVersionByDownload($varForms)
    {
        list($response) = $this->uploadGameVersionByDownloadWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation uploadGameVersionByDownloadWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminUploadGameVersionByDownloadForms $varForms
     *
     * @throws \Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Model\ConsoleAdminUploadGameVersionByDownloadResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function uploadGameVersionByDownloadWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminUploadGameVersionByDownloadResult';
        $request = $this->uploadGameVersionByDownloadRequest($varForms);

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
                        '\Yjopenapi\Client\Model\ConsoleAdminUploadGameVersionByDownloadResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation uploadGameVersionByDownloadAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminUploadGameVersionByDownloadForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uploadGameVersionByDownloadAsync($varForms)
    {
        return $this->uploadGameVersionByDownloadAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation uploadGameVersionByDownloadAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminUploadGameVersionByDownloadForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uploadGameVersionByDownloadAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Model\ConsoleAdminUploadGameVersionByDownloadResult';
        $request = $this->uploadGameVersionByDownloadRequest($varForms);

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
     * Create request for operation 'uploadGameVersionByDownload'
     *
     * @param  \Yjopenapi\Client\Model\ConsoleAdminUploadGameVersionByDownloadForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function uploadGameVersionByDownloadRequest($varForms)
    {
        // verify the required parameter 'hash' is set
        if ($varForms['hash'] === null || (is_array($varForms['hash']) && count($varForms['hash']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'hash\'] when calling uploadGameVersionByDownload'
            );
        }
        // verify the required parameter 'game_id' is set
        if ($varForms['game_id'] === null || (is_array($varForms['game_id']) && count($varForms['game_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'game_id\'] when calling uploadGameVersionByDownload'
            );
        }
        // verify the required parameter 'download_type' is set
        if ($varForms['download_type'] === null || (is_array($varForms['download_type']) && count($varForms['download_type']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'download_type\'] when calling uploadGameVersionByDownload'
            );
        }
        // verify the required parameter 'version_name' is set
        if ($varForms['version_name'] === null || (is_array($varForms['version_name']) && count($varForms['version_name']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'version_name\'] when calling uploadGameVersionByDownload'
            );
        }

        $resourcePath = '/consoleAdmin/uploadGameVersionByDownload';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['hash'] = ObjectSerializer::toFormValue($varForms['hash']);
        $formParams['gameId'] = ObjectSerializer::toFormValue($varForms['game_id']);
        $formParams['downloadType'] = ObjectSerializer::toFormValue($varForms['download_type']);
        $formParams['versionName'] = ObjectSerializer::toFormValue($varForms['version_name']);
        if ($varForms['os_manifest'] !== null) {
            $formParams['osManifest'] = ObjectSerializer::toFormValue($varForms['os_manifest']);
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
