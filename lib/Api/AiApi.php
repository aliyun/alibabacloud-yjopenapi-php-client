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
namespace Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ApiException;
use Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\Configuration;
use Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\HeaderSelector;
use Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ObjectSerializer;

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
     * Operation createNpcRole
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiCreateNpcRoleForms $varForms
     *
     * @throws \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiCreateNpcRoleResult
     */
    public function createNpcRole($varForms)
    {
        list($response) = $this->createNpcRoleWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation createNpcRoleWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiCreateNpcRoleForms $varForms
     *
     * @throws \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiCreateNpcRoleResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function createNpcRoleWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiCreateNpcRoleResult';
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
                        '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiCreateNpcRoleResult',
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
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiCreateNpcRoleForms $varForms
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
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiCreateNpcRoleForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createNpcRoleAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiCreateNpcRoleResult';
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
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiCreateNpcRoleForms $varForms
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
        // verify the required parameter 'knowledge_bases' is set
        if ($varForms['knowledge_bases'] === null || (is_array($varForms['knowledge_bases']) && count($varForms['knowledge_bases']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'knowledge_bases\'] when calling createNpcRole'
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
        $formParams['knowledgeBases'] = ObjectSerializer::toFormValue($varForms['knowledge_bases']);
        if ($varForms['plugin_ids'] !== null) {
            $formParams['pluginIds'] = ObjectSerializer::toFormValue($varForms['plugin_ids']);
        }
        $formParams['shortMemoryRound'] = ObjectSerializer::toFormValue($varForms['short_memory_round']);
        $formParams['tenantId'] = ObjectSerializer::toFormValue($varForms['tenant_id']);
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
     * Operation updateNpcRole
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUpdateNpcRoleForms $varForms
     *
     * @throws \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUpdateNpcRoleResult
     */
    public function updateNpcRole($varForms)
    {
        list($response) = $this->updateNpcRoleWithHttpInfo($varForms);
        return $response;
    }

    /**
     * Operation updateNpcRoleWithHttpInfo
     *
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUpdateNpcRoleForms $varForms
     *
     * @throws \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUpdateNpcRoleResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateNpcRoleWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUpdateNpcRoleResult';
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
                        '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUpdateNpcRoleResult',
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
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUpdateNpcRoleForms $varForms
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
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUpdateNpcRoleForms $varForms
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateNpcRoleAsyncWithHttpInfo($varForms)
    {
        $returnType = '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUpdateNpcRoleResult';
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
     * @param  \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUpdateNpcRoleForms $varForms
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
        // verify the required parameter 'knowledge_bases' is set
        if ($varForms['knowledge_bases'] === null || (is_array($varForms['knowledge_bases']) && count($varForms['knowledge_bases']) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $varForms[\'knowledge_bases\'] when calling updateNpcRole'
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
        $formParams['knowledgeBases'] = ObjectSerializer::toFormValue($varForms['knowledge_bases']);
        if ($varForms['plugin_ids'] !== null) {
            $formParams['pluginIds'] = ObjectSerializer::toFormValue($varForms['plugin_ids']);
        }
        $formParams['shortMemoryRound'] = ObjectSerializer::toFormValue($varForms['short_memory_round']);
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
