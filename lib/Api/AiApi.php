<?php
/**
 * AiApi
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
namespace Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ApiException;
use Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\Configuration;
use Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\HeaderSelector;
use Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ObjectSerializer;

/**
 * AiApi Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class AiApi
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
     * Operation batchUpdateKbVersion
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiBatchUpdateKbVersionForms $varForms
     *
     * @throws \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiBatchUpdateKbVersionResult
     */
    public function batchUpdateKbVersion($varForms)
    {
        list($response) = $this->batchUpdateKbVersionWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation batchUpdateKbVersionWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiBatchUpdateKbVersionForms $varForms
     *
     * @throws \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiBatchUpdateKbVersionResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function batchUpdateKbVersionWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiBatchUpdateKbVersionResult';
        $request = $this->batchUpdateKbVersionRequest($varForms);

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
                        '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiBatchUpdateKbVersionResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation batchUpdateKbVersionAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiBatchUpdateKbVersionForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function batchUpdateKbVersionAsync($varForms)
    {
        return $this->batchUpdateKbVersionAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation batchUpdateKbVersionAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiBatchUpdateKbVersionForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function batchUpdateKbVersionAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiBatchUpdateKbVersionResult';
        $request = $this->batchUpdateKbVersionRequest($varForms);

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
     * Create request for operation 'batchUpdateKbVersion'
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiBatchUpdateKbVersionForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function batchUpdateKbVersionRequest($varForms)
    {
        // verify the required parameter 'role_ids' is set
        if ($varForms['role_ids'] === null || (is_array($varForms['role_ids']) && count($varForms['role_ids']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'role_ids\'] when calling batchUpdateKbVersion'
            );
        }
        // verify the required parameter 'kb_id' is set
        if ($varForms['kb_id'] === null || (is_array($varForms['kb_id']) && count($varForms['kb_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'kb_id\'] when calling batchUpdateKbVersion'
            );
        }
        // verify the required parameter 'kb_version_id' is set
        if ($varForms['kb_version_id'] === null || (is_array($varForms['kb_version_id']) && count($varForms['kb_version_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'kb_version_id\'] when calling batchUpdateKbVersion'
            );
        }
        // verify the required parameter 'operator' is set
        if ($varForms['operator'] === null || (is_array($varForms['operator']) && count($varForms['operator']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'operator\'] when calling batchUpdateKbVersion'
            );
        }

        $resourcePath = '/ai/batchUpdateKbVersion';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['roleIds'] = ObjectSerializer::toFormValue($varForms['role_ids']);
        $formParams['kbId'] = ObjectSerializer::toFormValue($varForms['kb_id']);
        $formParams['kbVersionId'] = ObjectSerializer::toFormValue($varForms['kb_version_id']);
        $formParams['operator'] = ObjectSerializer::toFormValue($varForms['operator']);

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
     * Operation cancelQueue
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiCancelQueueForms $varForms
     *
     * @throws \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiCancelQueueResult
     */
    public function cancelQueue($varForms)
    {
        list($response) = $this->cancelQueueWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation cancelQueueWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiCancelQueueForms $varForms
     *
     * @throws \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiCancelQueueResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function cancelQueueWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiCancelQueueResult';
        $request = $this->cancelQueueRequest($varForms);

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
                        '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiCancelQueueResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation cancelQueueAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiCancelQueueForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelQueueAsync($varForms)
    {
        return $this->cancelQueueAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation cancelQueueAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiCancelQueueForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelQueueAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiCancelQueueResult';
        $request = $this->cancelQueueRequest($varForms);

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
     * Create request for operation 'cancelQueue'
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiCancelQueueForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function cancelQueueRequest($varForms)
    {
        // verify the required parameter 'task_id' is set
        if ($varForms['task_id'] === null || (is_array($varForms['task_id']) && count($varForms['task_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'task_id\'] when calling cancelQueue'
            );
        }

        $resourcePath = '/ai/cancelQueue';
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
     * Operation createNpcRole
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiCreateNpcRoleForms $varForms
     *
     * @throws \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiCreateNpcRoleResult
     */
    public function createNpcRole($varForms)
    {
        list($response) = $this->createNpcRoleWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation createNpcRoleWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiCreateNpcRoleForms $varForms
     *
     * @throws \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiCreateNpcRoleResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function createNpcRoleWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiCreateNpcRoleResult';
        $request = $this->createNpcRoleRequest($varForms);

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
                        '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiCreateNpcRoleResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createNpcRoleAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiCreateNpcRoleForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createNpcRoleAsync($varForms)
    {
        return $this->createNpcRoleAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createNpcRoleAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiCreateNpcRoleForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createNpcRoleAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiCreateNpcRoleResult';
        $request = $this->createNpcRoleRequest($varForms);

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
     * Create request for operation 'createNpcRole'
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiCreateNpcRoleForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createNpcRoleRequest($varForms)
    {
        // verify the required parameter 'name' is set
        if ($varForms['name'] === null || (is_array($varForms['name']) && count($varForms['name']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'name\'] when calling createNpcRole'
            );
        }
        // verify the required parameter 'description' is set
        if ($varForms['description'] === null || (is_array($varForms['description']) && count($varForms['description']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'description\'] when calling createNpcRole'
            );
        }
        // verify the required parameter 'figure_id' is set
        if ($varForms['figure_id'] === null || (is_array($varForms['figure_id']) && count($varForms['figure_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'figure_id\'] when calling createNpcRole'
            );
        }
        // verify the required parameter 'voice_id' is set
        if ($varForms['voice_id'] === null || (is_array($varForms['voice_id']) && count($varForms['voice_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'voice_id\'] when calling createNpcRole'
            );
        }
        // verify the required parameter 'characters' is set
        if ($varForms['characters'] === null || (is_array($varForms['characters']) && count($varForms['characters']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'characters\'] when calling createNpcRole'
            );
        }
        // verify the required parameter 'greetings' is set
        if ($varForms['greetings'] === null || (is_array($varForms['greetings']) && count($varForms['greetings']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'greetings\'] when calling createNpcRole'
            );
        }
        // verify the required parameter 'guidance' is set
        if ($varForms['guidance'] === null || (is_array($varForms['guidance']) && count($varForms['guidance']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'guidance\'] when calling createNpcRole'
            );
        }
        // verify the required parameter 'short_memory_round' is set
        if ($varForms['short_memory_round'] === null || (is_array($varForms['short_memory_round']) && count($varForms['short_memory_round']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'short_memory_round\'] when calling createNpcRole'
            );
        }
        // verify the required parameter 'tenant_id' is set
        if ($varForms['tenant_id'] === null || (is_array($varForms['tenant_id']) && count($varForms['tenant_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'tenant_id\'] when calling createNpcRole'
            );
        }
        // verify the required parameter 'operator' is set
        if ($varForms['operator'] === null || (is_array($varForms['operator']) && count($varForms['operator']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'operator\'] when calling createNpcRole'
            );
        }
        // verify the required parameter 'llm_model_id' is set
        if ($varForms['llm_model_id'] === null || (is_array($varForms['llm_model_id']) && count($varForms['llm_model_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'llm_model_id\'] when calling createNpcRole'
            );
        }

        $resourcePath = '/ai/createNpcRole';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['name'] = ObjectSerializer::toFormValue($varForms['name']);
        $formParams['description'] = ObjectSerializer::toFormValue($varForms['description']);
        $formParams['figureId'] = ObjectSerializer::toFormValue($varForms['figure_id']);
        $formParams['voiceId'] = ObjectSerializer::toFormValue($varForms['voice_id']);
        $formParams['characters'] = ObjectSerializer::toFormValue($varForms['characters']);
        $formParams['greetings'] = ObjectSerializer::toFormValue($varForms['greetings']);
        $formParams['guidance'] = ObjectSerializer::toFormValue($varForms['guidance']);
        if ($varForms['knowledge_bases'] !== null) {
            $formParams['knowledgeBases'] = ObjectSerializer::toFormValue($varForms['knowledge_bases']);
        }
        if ($varForms['plugin_ids'] !== null) {
            $formParams['pluginIds'] = ObjectSerializer::toFormValue($varForms['plugin_ids']);
        }
        $formParams['shortMemoryRound'] = ObjectSerializer::toFormValue($varForms['short_memory_round']);
        $formParams['tenantId'] = ObjectSerializer::toFormValue($varForms['tenant_id']);
        $formParams['operator'] = ObjectSerializer::toFormValue($varForms['operator']);
        $formParams['llmModelId'] = ObjectSerializer::toFormValue($varForms['llm_model_id']);

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
     * Operation deleteModels
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiDeleteModelsForms $varForms
     *
     * @throws \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiDeleteModelsResult
     */
    public function deleteModels($varForms)
    {
        list($response) = $this->deleteModelsWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation deleteModelsWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiDeleteModelsForms $varForms
     *
     * @throws \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiDeleteModelsResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteModelsWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiDeleteModelsResult';
        $request = $this->deleteModelsRequest($varForms);

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
                        '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiDeleteModelsResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deleteModelsAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiDeleteModelsForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteModelsAsync($varForms)
    {
        return $this->deleteModelsAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteModelsAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiDeleteModelsForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteModelsAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiDeleteModelsResult';
        $request = $this->deleteModelsRequest($varForms);

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
     * Create request for operation 'deleteModels'
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiDeleteModelsForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteModelsRequest($varForms)
    {
        // verify the required parameter 'resource_id' is set
        if ($varForms['resource_id'] === null || (is_array($varForms['resource_id']) && count($varForms['resource_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'resource_id\'] when calling deleteModels'
            );
        }

        $resourcePath = '/ai/deleteModels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['resourceId'] = ObjectSerializer::toFormValue($varForms['resource_id']);

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
     * Operation getPrompt
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiGetPromptForms $varForms
     *
     * @throws \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiGetPromptResult
     */
    public function getPrompt($varForms)
    {
        list($response) = $this->getPromptWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation getPromptWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiGetPromptForms $varForms
     *
     * @throws \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiGetPromptResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPromptWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiGetPromptResult';
        $request = $this->getPromptRequest($varForms);

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
                        '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiGetPromptResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPromptAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiGetPromptForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPromptAsync($varForms)
    {
        return $this->getPromptAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPromptAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiGetPromptForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPromptAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiGetPromptResult';
        $request = $this->getPromptRequest($varForms);

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
     * Create request for operation 'getPrompt'
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiGetPromptForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getPromptRequest($varForms)
    {
        // verify the required parameter 'task_id' is set
        if ($varForms['task_id'] === null || (is_array($varForms['task_id']) && count($varForms['task_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'task_id\'] when calling getPrompt'
            );
        }

        $resourcePath = '/ai/getPrompt';
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
     * Operation getQueue
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiGetQueueForms $varForms
     *
     * @throws \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiGetQueueResult
     */
    public function getQueue($varForms)
    {
        list($response) = $this->getQueueWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation getQueueWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiGetQueueForms $varForms
     *
     * @throws \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiGetQueueResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function getQueueWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiGetQueueResult';
        $request = $this->getQueueRequest($varForms);

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
                        '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiGetQueueResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getQueueAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiGetQueueForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getQueueAsync($varForms)
    {
        return $this->getQueueAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getQueueAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiGetQueueForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getQueueAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiGetQueueResult';
        $request = $this->getQueueRequest($varForms);

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
     * Create request for operation 'getQueue'
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiGetQueueForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getQueueRequest($varForms)
    {
        // verify the required parameter 'task_id' is set
        if ($varForms['task_id'] === null || (is_array($varForms['task_id']) && count($varForms['task_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'task_id\'] when calling getQueue'
            );
        }

        $resourcePath = '/ai/getQueue';
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
     * Operation listModels
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiListModelsForms $varForms
     *
     * @throws \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiListModelsResult
     */
    public function listModels($varForms)
    {
        list($response) = $this->listModelsWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation listModelsWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiListModelsForms $varForms
     *
     * @throws \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiListModelsResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function listModelsWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiListModelsResult';
        $request = $this->listModelsRequest($varForms);

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
                        '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiListModelsResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listModelsAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiListModelsForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listModelsAsync($varForms)
    {
        return $this->listModelsAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listModelsAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiListModelsForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listModelsAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiListModelsResult';
        $request = $this->listModelsRequest($varForms);

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
     * Create request for operation 'listModels'
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiListModelsForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listModelsRequest($varForms)
    {
        // verify the required parameter 'page_number' is set
        if ($varForms['page_number'] === null || (is_array($varForms['page_number']) && count($varForms['page_number']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'page_number\'] when calling listModels'
            );
        }
        // verify the required parameter 'page_size' is set
        if ($varForms['page_size'] === null || (is_array($varForms['page_size']) && count($varForms['page_size']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'page_size\'] when calling listModels'
            );
        }

        $resourcePath = '/ai/listModels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        if ($varForms['model_type'] !== null) {
            $formParams['modelType'] = ObjectSerializer::toFormValue($varForms['model_type']);
        }
        if ($varForms['model_file_type'] !== null) {
            $formParams['modelFileType'] = ObjectSerializer::toFormValue($varForms['model_file_type']);
        }
        if ($varForms['model_series'] !== null) {
            $formParams['modelSeries'] = ObjectSerializer::toFormValue($varForms['model_series']);
        }
        if ($varForms['model_file_name'] !== null) {
            $formParams['modelFileName'] = ObjectSerializer::toFormValue($varForms['model_file_name']);
        }
        $formParams['pageNumber'] = ObjectSerializer::toFormValue($varForms['page_number']);
        $formParams['pageSize'] = ObjectSerializer::toFormValue($varForms['page_size']);

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
     * Operation prompt
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiPromptForms $varForms
     *
     * @throws \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiPromptResult
     */
    public function prompt($varForms)
    {
        list($response) = $this->promptWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation promptWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiPromptForms $varForms
     *
     * @throws \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiPromptResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function promptWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiPromptResult';
        $request = $this->promptRequest($varForms);

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
                        '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiPromptResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation promptAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiPromptForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function promptAsync($varForms)
    {
        return $this->promptAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation promptAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiPromptForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function promptAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiPromptResult';
        $request = $this->promptRequest($varForms);

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
     * Create request for operation 'prompt'
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiPromptForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function promptRequest($varForms)
    {
        // verify the required parameter 'scene_type' is set
        if ($varForms['scene_type'] === null || (is_array($varForms['scene_type']) && count($varForms['scene_type']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'scene_type\'] when calling prompt'
            );
        }
        // verify the required parameter 'prompt_param' is set
        if ($varForms['prompt_param'] === null || (is_array($varForms['prompt_param']) && count($varForms['prompt_param']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'prompt_param\'] when calling prompt'
            );
        }

        $resourcePath = '/ai/prompt';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['sceneType'] = ObjectSerializer::toFormValue($varForms['scene_type']);
        $formParams['promptParam'] = ObjectSerializer::toFormValue($varForms['prompt_param']);
        if ($varForms['resources'] !== null) {
            $formParams['resources'] = ObjectSerializer::toFormValue($varForms['resources']);
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
     * Operation updateModels
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUpdateModelsForms $varForms
     *
     * @throws \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUpdateModelsResult
     */
    public function updateModels($varForms)
    {
        list($response) = $this->updateModelsWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation updateModelsWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUpdateModelsForms $varForms
     *
     * @throws \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUpdateModelsResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateModelsWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUpdateModelsResult';
        $request = $this->updateModelsRequest($varForms);

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
                        '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUpdateModelsResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateModelsAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUpdateModelsForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateModelsAsync($varForms)
    {
        return $this->updateModelsAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateModelsAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUpdateModelsForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateModelsAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUpdateModelsResult';
        $request = $this->updateModelsRequest($varForms);

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
     * Create request for operation 'updateModels'
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUpdateModelsForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateModelsRequest($varForms)
    {
        // verify the required parameter 'resource_id' is set
        if ($varForms['resource_id'] === null || (is_array($varForms['resource_id']) && count($varForms['resource_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'resource_id\'] when calling updateModels'
            );
        }
        // verify the required parameter 'desc' is set
        if ($varForms['desc'] === null || (is_array($varForms['desc']) && count($varForms['desc']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'desc\'] when calling updateModels'
            );
        }

        $resourcePath = '/ai/updateModels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['resourceId'] = ObjectSerializer::toFormValue($varForms['resource_id']);
        $formParams['desc'] = ObjectSerializer::toFormValue($varForms['desc']);

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
     * Operation updateNpcRole
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUpdateNpcRoleForms $varForms
     *
     * @throws \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUpdateNpcRoleResult
     */
    public function updateNpcRole($varForms)
    {
        list($response) = $this->updateNpcRoleWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation updateNpcRoleWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUpdateNpcRoleForms $varForms
     *
     * @throws \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUpdateNpcRoleResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateNpcRoleWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUpdateNpcRoleResult';
        $request = $this->updateNpcRoleRequest($varForms);

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
                        '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUpdateNpcRoleResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateNpcRoleAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUpdateNpcRoleForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateNpcRoleAsync($varForms)
    {
        return $this->updateNpcRoleAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateNpcRoleAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUpdateNpcRoleForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateNpcRoleAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUpdateNpcRoleResult';
        $request = $this->updateNpcRoleRequest($varForms);

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
     * Create request for operation 'updateNpcRole'
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUpdateNpcRoleForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateNpcRoleRequest($varForms)
    {
        // verify the required parameter 'id' is set
        if ($varForms['id'] === null || (is_array($varForms['id']) && count($varForms['id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'id\'] when calling updateNpcRole'
            );
        }
        // verify the required parameter 'name' is set
        if ($varForms['name'] === null || (is_array($varForms['name']) && count($varForms['name']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'name\'] when calling updateNpcRole'
            );
        }
        // verify the required parameter 'description' is set
        if ($varForms['description'] === null || (is_array($varForms['description']) && count($varForms['description']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'description\'] when calling updateNpcRole'
            );
        }
        // verify the required parameter 'figure_id' is set
        if ($varForms['figure_id'] === null || (is_array($varForms['figure_id']) && count($varForms['figure_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'figure_id\'] when calling updateNpcRole'
            );
        }
        // verify the required parameter 'voice_id' is set
        if ($varForms['voice_id'] === null || (is_array($varForms['voice_id']) && count($varForms['voice_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'voice_id\'] when calling updateNpcRole'
            );
        }
        // verify the required parameter 'characters' is set
        if ($varForms['characters'] === null || (is_array($varForms['characters']) && count($varForms['characters']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'characters\'] when calling updateNpcRole'
            );
        }
        // verify the required parameter 'greetings' is set
        if ($varForms['greetings'] === null || (is_array($varForms['greetings']) && count($varForms['greetings']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'greetings\'] when calling updateNpcRole'
            );
        }
        // verify the required parameter 'guidance' is set
        if ($varForms['guidance'] === null || (is_array($varForms['guidance']) && count($varForms['guidance']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'guidance\'] when calling updateNpcRole'
            );
        }
        // verify the required parameter 'short_memory_round' is set
        if ($varForms['short_memory_round'] === null || (is_array($varForms['short_memory_round']) && count($varForms['short_memory_round']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'short_memory_round\'] when calling updateNpcRole'
            );
        }
        // verify the required parameter 'operator' is set
        if ($varForms['operator'] === null || (is_array($varForms['operator']) && count($varForms['operator']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'operator\'] when calling updateNpcRole'
            );
        }
        // verify the required parameter 'llm_model_id' is set
        if ($varForms['llm_model_id'] === null || (is_array($varForms['llm_model_id']) && count($varForms['llm_model_id']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'llm_model_id\'] when calling updateNpcRole'
            );
        }

        $resourcePath = '/ai/updateNpcRole';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['id'] = ObjectSerializer::toFormValue($varForms['id']);
        $formParams['name'] = ObjectSerializer::toFormValue($varForms['name']);
        $formParams['description'] = ObjectSerializer::toFormValue($varForms['description']);
        $formParams['figureId'] = ObjectSerializer::toFormValue($varForms['figure_id']);
        $formParams['voiceId'] = ObjectSerializer::toFormValue($varForms['voice_id']);
        $formParams['characters'] = ObjectSerializer::toFormValue($varForms['characters']);
        $formParams['greetings'] = ObjectSerializer::toFormValue($varForms['greetings']);
        $formParams['guidance'] = ObjectSerializer::toFormValue($varForms['guidance']);
        if ($varForms['knowledge_bases'] !== null) {
            $formParams['knowledgeBases'] = ObjectSerializer::toFormValue($varForms['knowledge_bases']);
        }
        if ($varForms['plugin_ids'] !== null) {
            $formParams['pluginIds'] = ObjectSerializer::toFormValue($varForms['plugin_ids']);
        }
        $formParams['shortMemoryRound'] = ObjectSerializer::toFormValue($varForms['short_memory_round']);
        $formParams['operator'] = ObjectSerializer::toFormValue($varForms['operator']);
        $formParams['llmModelId'] = ObjectSerializer::toFormValue($varForms['llm_model_id']);

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
     * Operation uploadModels
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUploadModelsForms $varForms
     *
     * @throws \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUploadModelsResult
     */
    public function uploadModels($varForms)
    {
        list($response) = $this->uploadModelsWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation uploadModelsWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUploadModelsForms $varForms
     *
     * @throws \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUploadModelsResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function uploadModelsWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUploadModelsResult';
        $request = $this->uploadModelsRequest($varForms);

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
                        '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUploadModelsResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation uploadModelsAsync
     *
     * 
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUploadModelsForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uploadModelsAsync($varForms)
    {
        return $this->uploadModelsAsyncWithHttpInfo($varForms)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation uploadModelsAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUploadModelsForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uploadModelsAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUploadModelsResult';
        $request = $this->uploadModelsRequest($varForms);

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
     * Create request for operation 'uploadModels'
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUploadModelsForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function uploadModelsRequest($varForms)
    {
        // verify the required parameter 'model_type' is set
        if ($varForms['model_type'] === null || (is_array($varForms['model_type']) && count($varForms['model_type']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'model_type\'] when calling uploadModels'
            );
        }
        // verify the required parameter 'model_file_type' is set
        if ($varForms['model_file_type'] === null || (is_array($varForms['model_file_type']) && count($varForms['model_file_type']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'model_file_type\'] when calling uploadModels'
            );
        }
        // verify the required parameter 'model_series' is set
        if ($varForms['model_series'] === null || (is_array($varForms['model_series']) && count($varForms['model_series']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'model_series\'] when calling uploadModels'
            );
        }
        // verify the required parameter 'model_file_name' is set
        if ($varForms['model_file_name'] === null || (is_array($varForms['model_file_name']) && count($varForms['model_file_name']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'model_file_name\'] when calling uploadModels'
            );
        }
        // verify the required parameter 'desc' is set
        if ($varForms['desc'] === null || (is_array($varForms['desc']) && count($varForms['desc']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'desc\'] when calling uploadModels'
            );
        }
        // verify the required parameter 'url' is set
        if ($varForms['url'] === null || (is_array($varForms['url']) && count($varForms['url']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'url\'] when calling uploadModels'
            );
        }

        $resourcePath = '/ai/uploadModels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // form params
        $formParams['modelType'] = ObjectSerializer::toFormValue($varForms['model_type']);
        $formParams['modelFileType'] = ObjectSerializer::toFormValue($varForms['model_file_type']);
        $formParams['modelSeries'] = ObjectSerializer::toFormValue($varForms['model_series']);
        $formParams['modelFileName'] = ObjectSerializer::toFormValue($varForms['model_file_name']);
        $formParams['desc'] = ObjectSerializer::toFormValue($varForms['desc']);
        $formParams['url'] = ObjectSerializer::toFormValue($varForms['url']);

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
