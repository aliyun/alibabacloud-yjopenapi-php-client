<?php
/**
 * ConsoleAdminGetGameVersionProgressResultModel
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

namespace Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model;

use \ArrayAccess;
use \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ObjectSerializer;

/**
 * ConsoleAdminGetGameVersionProgressResultModel Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class ConsoleAdminGetGameVersionProgressResultModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'ConsoleAdminGetGameVersionProgressResultModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'extra' => 'map[string,string]',
'description' => 'string',
'event' => 'string',
'status' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'extra' => null,
'description' => null,
'event' => null,
'status' => null    ];

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
        'extra' => 'extra',
'description' => 'description',
'event' => 'event',
'status' => 'status'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'extra' => 'setExtra',
'description' => 'setDescription',
'event' => 'setEvent',
'status' => 'setStatus'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'extra' => 'getExtra',
'description' => 'getDescription',
'event' => 'getEvent',
'status' => 'getStatus'    ];

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
        $this->container['extra'] = isset($data['extra']) ? $data['extra'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['event'] = isset($data['event']) ? $data['event'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }


    /**
     * Gets extra
     *
     * @return map[string,string]
     */
    public function getExtra()
    {
        return $this->container['extra'];
    }

    /**
     * Sets extra
     *
     * @param map[string,string] $extra 提供不固定的额外信息
     *
     * @return $this
     */
    public function setExtra($extra)
    {
        $this->container['extra'] = $extra;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets event
     *
     * @return string
     */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     *
     * @param string $event event
     *
     * @return $this
     */
    public function setEvent($event)
    {
        $this->container['event'] = $event;

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
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
