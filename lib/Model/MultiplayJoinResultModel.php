<?php
/**
 * MultiplayJoinResultModel
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
 * MultiplayJoinResultModel Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class MultiplayJoinResultModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'MultiplayJoinResultModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'data_ver' => 'string',
'token_id' => 'string',
'session' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'data_ver' => null,
'token_id' => null,
'session' => null    ];

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
        'data_ver' => 'dataVer',
'token_id' => 'tokenId',
'session' => 'session'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data_ver' => 'setDataVer',
'token_id' => 'setTokenId',
'session' => 'setSession'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data_ver' => 'getDataVer',
'token_id' => 'getTokenId',
'session' => 'getSession'    ];

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
        $this->container['data_ver'] = isset($data['data_ver']) ? $data['data_ver'] : null;
        $this->container['token_id'] = isset($data['token_id']) ? $data['token_id'] : null;
        $this->container['session'] = isset($data['session']) ? $data['session'] : null;
    }


    /**
     * Gets data_ver
     *
     * @return string
     */
    public function getDataVer()
    {
        return $this->container['data_ver'];
    }

    /**
     * Sets data_ver
     *
     * @param string $data_ver 当前联机数据版本号
     *
     * @return $this
     */
    public function setDataVer($data_ver)
    {
        $this->container['data_ver'] = $data_ver;

        return $this;
    }

    /**
     * Gets token_id
     *
     * @return string
     */
    public function getTokenId()
    {
        return $this->container['token_id'];
    }

    /**
     * Sets token_id
     *
     * @param string $token_id 加入人令牌Id
     *
     * @return $this
     */
    public function setTokenId($token_id)
    {
        $this->container['token_id'] = $token_id;

        return $this;
    }

    /**
     * Gets session
     *
     * @return string
     */
    public function getSession()
    {
        return $this->container['session'];
    }

    /**
     * Sets session
     *
     * @param string $session 加入者sessionId
     *
     * @return $this
     */
    public function setSession($session)
    {
        $this->container['session'] = $session;

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
