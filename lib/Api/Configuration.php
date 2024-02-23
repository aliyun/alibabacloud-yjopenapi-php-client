<?php
/**
 * Configuration
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

/**
 * Configuration Class Doc Comment
 * PHP version 5
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class Configuration
{
    private static $defaultConfiguration;

    /**
     * DefaultHeaders
     *
     * @var string
     */
    protected $defaultHeaders = [];

    /**
     * SignatureVersion
     *
     * @var string
     */
    protected $signatureVersion = '1.0';

    /**
     * SignatureMethod
     *
     * @var string
     */
    protected $signatureMethod = 'MD5';

    /**
     * AccessKey
     *
     * @var string
     */
    protected $accessKey = '';

    /**
     * SecretKey
     *
     * @var string
     */
    protected $secretKey = '';

    /**
     * HTTP scheme
     *
     * @var string
     */
    protected $scheme = 'https';

    /**
     * Host
     *
     * @var string
     */
    protected $host = '/';

    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     *
     * @param string $key
     * @param string $value
     *
     * @return $this
     */
    public function addHeader($key, $value)
    {
        $this->defaultHeaders[$key] = $value;
        return $this;
    }

    /**
     *
     * @param string $key
     *
     * @return string
     */
    public function getHeader($key)
    {
        return isset($this->defaultHeaders[$key]) ? $this->defaultHeaders[$key] : null;
    }

    public function getHeaders() {
        return $this->defaultHeaders;
    }

    /**
     *
     * @param string $accessKey
     *
     * @return $this
     */
    public function setAccessKey($accessKey)
    {
        $this->accessKey = $accessKey;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getAccessKey()
    {
        return $this->accessKey;
    }

    /**
     *
     * @param string $secretKey
     *
     * @return $this
     */
    public function setSecretKey($secretKey)
    {
        $this->secretKey = $secretKey;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getSecretKey()
    {
        return $this->secretKey;
    }

    /**
     *
     * @param string $scheme
     *
     * @return $this
     */
    public function setScheme($scheme)
    {
        $this->scheme = $scheme;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getScheme()
    {
        return $this->scheme;
    }

    /**
     *
     * @param string $host
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = $host;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
    * @return string
    */
    public function getSignatureVersion() {
        return $this->signatureVersion;
    }

    /**
    * @param string $signatureVersion
    * @return $this
    */
    public function setSignatureVersion($signatureVersion) {
        $this->signatureVersion = $signatureVersion;
        return $this;
    }

    /**
    * @return string
    */
    public function getSignatureMethod() {
        return $this->signatureMethod;
    }

    /**
    * @param string $signatureMethod
    * @return $this
    */
    public function setSignatureMethod($signatureMethod) {
        $this->signatureMethod = $signatureMethod;
        return $this;
    }

    /**
     *
     * @return Configuration
     */
    public static function getDefaultConfiguration()
    {
        if (self::$defaultConfiguration === null) {
            self::$defaultConfiguration = new Configuration();
        }

        return self::$defaultConfiguration;
    }

    /**
     *
     * @param Configuration $config
     *
     * @return void
     */
    public static function setDefaultConfiguration(Configuration $config)
    {
        self::$defaultConfiguration = $config;
    }

}
