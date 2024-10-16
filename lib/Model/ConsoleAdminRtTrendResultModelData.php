<?php
/**
 * ConsoleAdminRtTrendResultModelData
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

namespace Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model;

use \ArrayAccess;
use \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ObjectSerializer;

/**
 * ConsoleAdminRtTrendResultModelData Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class ConsoleAdminRtTrendResultModelData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'ConsoleAdminRtTrendResultModelData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'data' => '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\ConsoleAdminRtTrendResultModelDataData[]',
'indicator_type' => 'string',
'max_value' => 'string',
'name' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'data' => null,
'indicator_type' => null,
'max_value' => null,
'name' => null    ];

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
        'data' => 'data',
'indicator_type' => 'indicatorType',
'max_value' => 'maxValue',
'name' => 'name'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data' => 'setData',
'indicator_type' => 'setIndicatorType',
'max_value' => 'setMaxValue',
'name' => 'setName'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data' => 'getData',
'indicator_type' => 'getIndicatorType',
'max_value' => 'getMaxValue',
'name' => 'getName'    ];

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
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['indicator_type'] = isset($data['indicator_type']) ? $data['indicator_type'] : null;
        $this->container['max_value'] = isset($data['max_value']) ? $data['max_value'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }


    /**
     * Gets data
     *
     * @return \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\ConsoleAdminRtTrendResultModelDataData[]
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\ConsoleAdminRtTrendResultModelDataData[] $data data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets indicator_type
     *
     * @return string
     */
    public function getIndicatorType()
    {
        return $this->container['indicator_type'];
    }

    /**
     * Sets indicator_type
     *
     * @param string $indicator_type indicator_type
     *
     * @return $this
     */
    public function setIndicatorType($indicator_type)
    {
        $this->container['indicator_type'] = $indicator_type;

        return $this;
    }

    /**
     * Gets max_value
     *
     * @return string
     */
    public function getMaxValue()
    {
        return $this->container['max_value'];
    }

    /**
     * Sets max_value
     *
     * @param string $max_value max_value
     *
     * @return $this
     */
    public function setMaxValue($max_value)
    {
        $this->container['max_value'] = $max_value;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
