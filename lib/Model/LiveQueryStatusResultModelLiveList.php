<?php
/**
 * LiveQueryStatusResultModelLiveList
 *
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

namespace Yjopenapi\Client\Model;

use \ArrayAccess;
use \Yjopenapi\Client\Api\ObjectSerializer;

/**
 * LiveQueryStatusResultModelLiveList Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class LiveQueryStatusResultModelLiveList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'LiveQueryStatusResultModelLiveList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'live_id' => 'string',
'server_url' => 'string',
'stream_key' => 'string',
'status' => 'string',
'message' => 'string',
'config' => '\Yjopenapi\Client\Model\LiveQueryStatusResultModelLiveListConfig'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'live_id' => null,
'server_url' => null,
'stream_key' => null,
'status' => null,
'message' => null,
'config' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function serialTypes()
    {
        return self::$serialTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function serialFormats()
    {
        return self::$serialFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'live_id' => 'liveId',
'server_url' => 'serverUrl',
'stream_key' => 'streamKey',
'status' => 'status',
'message' => 'message',
'config' => 'config'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'live_id' => 'setLiveId',
'server_url' => 'setServerUrl',
'stream_key' => 'setStreamKey',
'status' => 'setStatus',
'message' => 'setMessage',
'config' => 'setConfig'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'live_id' => 'getLiveId',
'server_url' => 'getServerUrl',
'stream_key' => 'getStreamKey',
'status' => 'getStatus',
'message' => 'getMessage',
'config' => 'getConfig'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$serialModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['live_id'] = isset($data['live_id']) ? $data['live_id'] : null;
        $this->container['server_url'] = isset($data['server_url']) ? $data['server_url'] : null;
        $this->container['stream_key'] = isset($data['stream_key']) ? $data['stream_key'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
    }


    /**
     * Gets live_id
     *
     * @return string
     */
    public function getLiveId()
    {
        return $this->container['live_id'];
    }

    /**
     * Sets live_id
     *
     * @param string $live_id 推流标识ID
     *
     * @return $this
     */
    public function setLiveId($live_id)
    {
        $this->container['live_id'] = $live_id;

        return $this;
    }

    /**
     * Gets server_url
     *
     * @return string
     */
    public function getServerUrl()
    {
        return $this->container['server_url'];
    }

    /**
     * Sets server_url
     *
     * @param string $server_url 推流服务地址
     *
     * @return $this
     */
    public function setServerUrl($server_url)
    {
        $this->container['server_url'] = $server_url;

        return $this;
    }

    /**
     * Gets stream_key
     *
     * @return string
     */
    public function getStreamKey()
    {
        return $this->container['stream_key'];
    }

    /**
     * Sets stream_key
     *
     * @param string $stream_key 推流鉴权参数
     *
     * @return $this
     */
    public function setStreamKey($stream_key)
    {
        $this->container['stream_key'] = $stream_key;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status 推流状态
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message 推流状态消息
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets config
     *
     * @return \Yjopenapi\Client\Model\LiveQueryStatusResultModelLiveListConfig
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     *
     * @param \Yjopenapi\Client\Model\LiveQueryStatusResultModelLiveListConfig $config config
     *
     * @return $this
     */
    public function setConfig($config)
    {
        $this->container['config'] = $config;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        //if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
        //    return json_encode(
        //        ObjectSerializer::sanitizeForSerialization($this),
        //        JSON_PRETTY_PRINT
        //    );
        //}

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
