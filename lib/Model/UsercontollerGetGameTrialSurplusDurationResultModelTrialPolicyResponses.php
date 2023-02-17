<?php
/**
 * UsercontollerGetGameTrialSurplusDurationResultModelTrialPolicyResponses
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
 * UsercontollerGetGameTrialSurplusDurationResultModelTrialPolicyResponses Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class UsercontollerGetGameTrialSurplusDurationResultModelTrialPolicyResponses implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'UsercontollerGetGameTrialSurplusDurationResultModelTrialPolicyResponses';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'surplus_duration_in_second' => 'int',
'policy_type' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'surplus_duration_in_second' => 'int64',
'policy_type' => null    ];

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
        'surplus_duration_in_second' => 'surplusDurationInSecond',
'policy_type' => 'policyType'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'surplus_duration_in_second' => 'setSurplusDurationInSecond',
'policy_type' => 'setPolicyType'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'surplus_duration_in_second' => 'getSurplusDurationInSecond',
'policy_type' => 'getPolicyType'    ];

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
        $this->container['surplus_duration_in_second'] = isset($data['surplus_duration_in_second']) ? $data['surplus_duration_in_second'] : null;
        $this->container['policy_type'] = isset($data['policy_type']) ? $data['policy_type'] : null;
    }


    /**
     * Gets surplus_duration_in_second
     *
     * @return int
     */
    public function getSurplusDurationInSecond()
    {
        return $this->container['surplus_duration_in_second'];
    }

    /**
     * Sets surplus_duration_in_second
     *
     * @param int $surplus_duration_in_second 剩余试玩时长
     *
     * @return $this
     */
    public function setSurplusDurationInSecond($surplus_duration_in_second)
    {
        $this->container['surplus_duration_in_second'] = $surplus_duration_in_second;

        return $this;
    }

    /**
     * Gets policy_type
     *
     * @return string
     */
    public function getPolicyType()
    {
        return $this->container['policy_type'];
    }

    /**
     * Sets policy_type
     *
     * @param string $policy_type 策略类型
     *
     * @return $this
     */
    public function setPolicyType($policy_type)
    {
        $this->container['policy_type'] = $policy_type;

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
