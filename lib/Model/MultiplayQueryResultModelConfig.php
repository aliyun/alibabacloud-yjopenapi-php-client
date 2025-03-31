<?php
/**
 * MultiplayQueryResultModelConfig
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

namespace Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model;

use \ArrayAccess;
use \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ObjectSerializer;

/**
 * MultiplayQueryResultModelConfig Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class MultiplayQueryResultModelConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'MultiplayQueryResultModelConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'max_token' => 'int',
'host_timeout' => 'int',
'connect_timeout' => 'int',
'input_timeout' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'max_token' => null,
'host_timeout' => null,
'connect_timeout' => null,
'input_timeout' => null    ];

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
        'max_token' => 'maxToken',
'host_timeout' => 'hostTimeout',
'connect_timeout' => 'connectTimeout',
'input_timeout' => 'inputTimeout'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'max_token' => 'setMaxToken',
'host_timeout' => 'setHostTimeout',
'connect_timeout' => 'setConnectTimeout',
'input_timeout' => 'setInputTimeout'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'max_token' => 'getMaxToken',
'host_timeout' => 'getHostTimeout',
'connect_timeout' => 'getConnectTimeout',
'input_timeout' => 'getInputTimeout'    ];

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
        $this->container['max_token'] = isset($data['max_token']) ? $data['max_token'] : null;
        $this->container['host_timeout'] = isset($data['host_timeout']) ? $data['host_timeout'] : null;
        $this->container['connect_timeout'] = isset($data['connect_timeout']) ? $data['connect_timeout'] : null;
        $this->container['input_timeout'] = isset($data['input_timeout']) ? $data['input_timeout'] : null;
    }


    /**
     * Gets max_token
     *
     * @return int
     */
    public function getMaxToken()
    {
        return $this->container['max_token'];
    }

    /**
     * Sets max_token
     *
     * @param int $max_token max_token
     *
     * @return $this
     */
    public function setMaxToken($max_token)
    {
        $this->container['max_token'] = $max_token;

        return $this;
    }

    /**
     * Gets host_timeout
     *
     * @return int
     */
    public function getHostTimeout()
    {
        return $this->container['host_timeout'];
    }

    /**
     * Sets host_timeout
     *
     * @param int $host_timeout host_timeout
     *
     * @return $this
     */
    public function setHostTimeout($host_timeout)
    {
        $this->container['host_timeout'] = $host_timeout;

        return $this;
    }

    /**
     * Gets connect_timeout
     *
     * @return int
     */
    public function getConnectTimeout()
    {
        return $this->container['connect_timeout'];
    }

    /**
     * Sets connect_timeout
     *
     * @param int $connect_timeout connect_timeout
     *
     * @return $this
     */
    public function setConnectTimeout($connect_timeout)
    {
        $this->container['connect_timeout'] = $connect_timeout;

        return $this;
    }

    /**
     * Gets input_timeout
     *
     * @return int
     */
    public function getInputTimeout()
    {
        return $this->container['input_timeout'];
    }

    /**
     * Sets input_timeout
     *
     * @param int $input_timeout input_timeout
     *
     * @return $this
     */
    public function setInputTimeout($input_timeout)
    {
        $this->container['input_timeout'] = $input_timeout;

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
