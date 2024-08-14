<?php
/**
 * ConsoleAdminGetOrderResultModelAttributeList
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

namespace Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model;

use \ArrayAccess;
use \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ObjectSerializer;

/**
 * ConsoleAdminGetOrderResultModelAttributeList Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class ConsoleAdminGetOrderResultModelAttributeList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'ConsoleAdminGetOrderResultModelAttributeList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'attribute_code' => 'string',
'time_start' => 'int',
'attribute_value_name' => 'string',
'time_to' => 'int',
'attribute_value' => 'int',
'attribute_name' => 'string',
'attribute_value_code' => 'int',
'time_unit' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'attribute_code' => null,
'time_start' => 'int64',
'attribute_value_name' => null,
'time_to' => 'int64',
'attribute_value' => null,
'attribute_name' => null,
'attribute_value_code' => 'int64',
'time_unit' => null    ];

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
        'attribute_code' => 'attributeCode',
'time_start' => 'timeStart',
'attribute_value_name' => 'attributeValueName',
'time_to' => 'timeTo',
'attribute_value' => 'attributeValue',
'attribute_name' => 'attributeName',
'attribute_value_code' => 'attributeValueCode',
'time_unit' => 'timeUnit'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attribute_code' => 'setAttributeCode',
'time_start' => 'setTimeStart',
'attribute_value_name' => 'setAttributeValueName',
'time_to' => 'setTimeTo',
'attribute_value' => 'setAttributeValue',
'attribute_name' => 'setAttributeName',
'attribute_value_code' => 'setAttributeValueCode',
'time_unit' => 'setTimeUnit'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attribute_code' => 'getAttributeCode',
'time_start' => 'getTimeStart',
'attribute_value_name' => 'getAttributeValueName',
'time_to' => 'getTimeTo',
'attribute_value' => 'getAttributeValue',
'attribute_name' => 'getAttributeName',
'attribute_value_code' => 'getAttributeValueCode',
'time_unit' => 'getTimeUnit'    ];

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
        $this->container['attribute_code'] = isset($data['attribute_code']) ? $data['attribute_code'] : null;
        $this->container['time_start'] = isset($data['time_start']) ? $data['time_start'] : null;
        $this->container['attribute_value_name'] = isset($data['attribute_value_name']) ? $data['attribute_value_name'] : null;
        $this->container['time_to'] = isset($data['time_to']) ? $data['time_to'] : null;
        $this->container['attribute_value'] = isset($data['attribute_value']) ? $data['attribute_value'] : null;
        $this->container['attribute_name'] = isset($data['attribute_name']) ? $data['attribute_name'] : null;
        $this->container['attribute_value_code'] = isset($data['attribute_value_code']) ? $data['attribute_value_code'] : null;
        $this->container['time_unit'] = isset($data['time_unit']) ? $data['time_unit'] : null;
    }


    /**
     * Gets attribute_code
     *
     * @return string
     */
    public function getAttributeCode()
    {
        return $this->container['attribute_code'];
    }

    /**
     * Sets attribute_code
     *
     * @param string $attribute_code attribute_code
     *
     * @return $this
     */
    public function setAttributeCode($attribute_code)
    {
        $this->container['attribute_code'] = $attribute_code;

        return $this;
    }

    /**
     * Gets time_start
     *
     * @return int
     */
    public function getTimeStart()
    {
        return $this->container['time_start'];
    }

    /**
     * Sets time_start
     *
     * @param int $time_start time_start
     *
     * @return $this
     */
    public function setTimeStart($time_start)
    {
        $this->container['time_start'] = $time_start;

        return $this;
    }

    /**
     * Gets attribute_value_name
     *
     * @return string
     */
    public function getAttributeValueName()
    {
        return $this->container['attribute_value_name'];
    }

    /**
     * Sets attribute_value_name
     *
     * @param string $attribute_value_name attribute_value_name
     *
     * @return $this
     */
    public function setAttributeValueName($attribute_value_name)
    {
        $this->container['attribute_value_name'] = $attribute_value_name;

        return $this;
    }

    /**
     * Gets time_to
     *
     * @return int
     */
    public function getTimeTo()
    {
        return $this->container['time_to'];
    }

    /**
     * Sets time_to
     *
     * @param int $time_to time_to
     *
     * @return $this
     */
    public function setTimeTo($time_to)
    {
        $this->container['time_to'] = $time_to;

        return $this;
    }

    /**
     * Gets attribute_value
     *
     * @return int
     */
    public function getAttributeValue()
    {
        return $this->container['attribute_value'];
    }

    /**
     * Sets attribute_value
     *
     * @param int $attribute_value attribute_value
     *
     * @return $this
     */
    public function setAttributeValue($attribute_value)
    {
        $this->container['attribute_value'] = $attribute_value;

        return $this;
    }

    /**
     * Gets attribute_name
     *
     * @return string
     */
    public function getAttributeName()
    {
        return $this->container['attribute_name'];
    }

    /**
     * Sets attribute_name
     *
     * @param string $attribute_name attribute_name
     *
     * @return $this
     */
    public function setAttributeName($attribute_name)
    {
        $this->container['attribute_name'] = $attribute_name;

        return $this;
    }

    /**
     * Gets attribute_value_code
     *
     * @return int
     */
    public function getAttributeValueCode()
    {
        return $this->container['attribute_value_code'];
    }

    /**
     * Sets attribute_value_code
     *
     * @param int $attribute_value_code attribute_value_code
     *
     * @return $this
     */
    public function setAttributeValueCode($attribute_value_code)
    {
        $this->container['attribute_value_code'] = $attribute_value_code;

        return $this;
    }

    /**
     * Gets time_unit
     *
     * @return string
     */
    public function getTimeUnit()
    {
        return $this->container['time_unit'];
    }

    /**
     * Sets time_unit
     *
     * @param string $time_unit time_unit
     *
     * @return $this
     */
    public function setTimeUnit($time_unit)
    {
        $this->container['time_unit'] = $time_unit;

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
