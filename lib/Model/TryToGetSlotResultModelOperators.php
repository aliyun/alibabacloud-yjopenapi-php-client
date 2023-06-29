<?php
/**
 * TryToGetSlotResultModelOperators
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
 * TryToGetSlotResultModelOperators Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class TryToGetSlotResultModelOperators implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'TryToGetSlotResultModelOperators';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'operator_ip' => 'string',
'operator_enname' => 'string',
'operator_cn_name' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'operator_ip' => null,
'operator_enname' => null,
'operator_cn_name' => null    ];

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
        'operator_ip' => 'operatorIp',
'operator_enname' => 'operatorEnname',
'operator_cn_name' => 'operatorCnName'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'operator_ip' => 'setOperatorIp',
'operator_enname' => 'setOperatorEnname',
'operator_cn_name' => 'setOperatorCnName'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'operator_ip' => 'getOperatorIp',
'operator_enname' => 'getOperatorEnname',
'operator_cn_name' => 'getOperatorCnName'    ];

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
        $this->container['operator_ip'] = isset($data['operator_ip']) ? $data['operator_ip'] : null;
        $this->container['operator_enname'] = isset($data['operator_enname']) ? $data['operator_enname'] : null;
        $this->container['operator_cn_name'] = isset($data['operator_cn_name']) ? $data['operator_cn_name'] : null;
    }


    /**
     * Gets operator_ip
     *
     * @return string
     */
    public function getOperatorIp()
    {
        return $this->container['operator_ip'];
    }

    /**
     * Sets operator_ip
     *
     * @param string $operator_ip 运营商IP
     *
     * @return $this
     */
    public function setOperatorIp($operator_ip)
    {
        $this->container['operator_ip'] = $operator_ip;

        return $this;
    }

    /**
     * Gets operator_enname
     *
     * @return string
     */
    public function getOperatorEnname()
    {
        return $this->container['operator_enname'];
    }

    /**
     * Sets operator_enname
     *
     * @param string $operator_enname 运营商英文名称
     *
     * @return $this
     */
    public function setOperatorEnname($operator_enname)
    {
        $this->container['operator_enname'] = $operator_enname;

        return $this;
    }

    /**
     * Gets operator_cn_name
     *
     * @return string
     */
    public function getOperatorCnName()
    {
        return $this->container['operator_cn_name'];
    }

    /**
     * Sets operator_cn_name
     *
     * @param string $operator_cn_name 运营商中文名称
     *
     * @return $this
     */
    public function setOperatorCnName($operator_cn_name)
    {
        $this->container['operator_cn_name'] = $operator_cn_name;

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
