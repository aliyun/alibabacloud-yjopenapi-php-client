<?php
/**
 * ConsoleAdminRecommendSpecificationResultModel
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
 * ConsoleAdminRecommendSpecificationResultModel Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class ConsoleAdminRecommendSpecificationResultModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'ConsoleAdminRecommendSpecificationResultModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'specification_cn_name' => 'string',
'specification_value_code' => 'string',
'specification_name' => 'string',
'specification_attribute_code' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'specification_cn_name' => null,
'specification_value_code' => null,
'specification_name' => null,
'specification_attribute_code' => null    ];

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
        'specification_cn_name' => 'specificationCnName',
'specification_value_code' => 'specificationValueCode',
'specification_name' => 'specificationName',
'specification_attribute_code' => 'specificationAttributeCode'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'specification_cn_name' => 'setSpecificationCnName',
'specification_value_code' => 'setSpecificationValueCode',
'specification_name' => 'setSpecificationName',
'specification_attribute_code' => 'setSpecificationAttributeCode'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'specification_cn_name' => 'getSpecificationCnName',
'specification_value_code' => 'getSpecificationValueCode',
'specification_name' => 'getSpecificationName',
'specification_attribute_code' => 'getSpecificationAttributeCode'    ];

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
        $this->container['specification_cn_name'] = isset($data['specification_cn_name']) ? $data['specification_cn_name'] : null;
        $this->container['specification_value_code'] = isset($data['specification_value_code']) ? $data['specification_value_code'] : null;
        $this->container['specification_name'] = isset($data['specification_name']) ? $data['specification_name'] : null;
        $this->container['specification_attribute_code'] = isset($data['specification_attribute_code']) ? $data['specification_attribute_code'] : null;
    }


    /**
     * Gets specification_cn_name
     *
     * @return string
     */
    public function getSpecificationCnName()
    {
        return $this->container['specification_cn_name'];
    }

    /**
     * Sets specification_cn_name
     *
     * @param string $specification_cn_name specification_cn_name
     *
     * @return $this
     */
    public function setSpecificationCnName($specification_cn_name)
    {
        $this->container['specification_cn_name'] = $specification_cn_name;

        return $this;
    }

    /**
     * Gets specification_value_code
     *
     * @return string
     */
    public function getSpecificationValueCode()
    {
        return $this->container['specification_value_code'];
    }

    /**
     * Sets specification_value_code
     *
     * @param string $specification_value_code specification_value_code
     *
     * @return $this
     */
    public function setSpecificationValueCode($specification_value_code)
    {
        $this->container['specification_value_code'] = $specification_value_code;

        return $this;
    }

    /**
     * Gets specification_name
     *
     * @return string
     */
    public function getSpecificationName()
    {
        return $this->container['specification_name'];
    }

    /**
     * Sets specification_name
     *
     * @param string $specification_name specification_name
     *
     * @return $this
     */
    public function setSpecificationName($specification_name)
    {
        $this->container['specification_name'] = $specification_name;

        return $this;
    }

    /**
     * Gets specification_attribute_code
     *
     * @return string
     */
    public function getSpecificationAttributeCode()
    {
        return $this->container['specification_attribute_code'];
    }

    /**
     * Sets specification_attribute_code
     *
     * @param string $specification_attribute_code specification_attribute_code
     *
     * @return $this
     */
    public function setSpecificationAttributeCode($specification_attribute_code)
    {
        $this->container['specification_attribute_code'] = $specification_attribute_code;

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
