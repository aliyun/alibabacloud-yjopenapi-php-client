<?php
/**
 * ConsoleAdminSubmitRefundForms
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

namespace Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model;

use \ArrayAccess;
use \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ObjectSerializer;

/**
 * ConsoleAdminSubmitRefundForms Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class ConsoleAdminSubmitRefundForms implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'ConsoleAdminSubmitRefundForms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'commodity_code' => 'string',
'instance_id' => 'string',
'refund_type' => 'string',
'refund_reason' => 'string',
'refund_reason_type' => 'string',
'target_expire_time' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'commodity_code' => null,
'instance_id' => null,
'refund_type' => null,
'refund_reason' => null,
'refund_reason_type' => null,
'target_expire_time' => null    ];

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
        'commodity_code' => 'commodityCode',
'instance_id' => 'instanceId',
'refund_type' => 'refundType',
'refund_reason' => 'refundReason',
'refund_reason_type' => 'refundReasonType',
'target_expire_time' => 'targetExpireTime'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'commodity_code' => 'setCommodityCode',
'instance_id' => 'setInstanceId',
'refund_type' => 'setRefundType',
'refund_reason' => 'setRefundReason',
'refund_reason_type' => 'setRefundReasonType',
'target_expire_time' => 'setTargetExpireTime'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'commodity_code' => 'getCommodityCode',
'instance_id' => 'getInstanceId',
'refund_type' => 'getRefundType',
'refund_reason' => 'getRefundReason',
'refund_reason_type' => 'getRefundReasonType',
'target_expire_time' => 'getTargetExpireTime'    ];

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
        $this->container['commodity_code'] = isset($data['commodity_code']) ? $data['commodity_code'] : null;
        $this->container['instance_id'] = isset($data['instance_id']) ? $data['instance_id'] : null;
        $this->container['refund_type'] = isset($data['refund_type']) ? $data['refund_type'] : null;
        $this->container['refund_reason'] = isset($data['refund_reason']) ? $data['refund_reason'] : null;
        $this->container['refund_reason_type'] = isset($data['refund_reason_type']) ? $data['refund_reason_type'] : null;
        $this->container['target_expire_time'] = isset($data['target_expire_time']) ? $data['target_expire_time'] : null;
    }


    /**
     * Gets commodity_code
     *
     * @return string
     */
    public function getCommodityCode()
    {
        return $this->container['commodity_code'];
    }

    /**
     * Sets commodity_code
     *
     * @param string $commodity_code 商品编码
     *
     * @return $this
     */
    public function setCommodityCode($commodity_code)
    {
        $this->container['commodity_code'] = $commodity_code;

        return $this;
    }

    /**
     * Gets instance_id
     *
     * @return string
     */
    public function getInstanceId()
    {
        return $this->container['instance_id'];
    }

    /**
     * Sets instance_id
     *
     * @param string $instance_id 实例ID
     *
     * @return $this
     */
    public function setInstanceId($instance_id)
    {
        $this->container['instance_id'] = $instance_id;

        return $this;
    }

    /**
     * Gets refund_type
     *
     * @return string
     */
    public function getRefundType()
    {
        return $this->container['refund_type'];
    }

    /**
     * Sets refund_type
     *
     * @param string $refund_type 退订类型
     *
     * @return $this
     */
    public function setRefundType($refund_type)
    {
        $this->container['refund_type'] = $refund_type;

        return $this;
    }

    /**
     * Gets refund_reason
     *
     * @return string
     */
    public function getRefundReason()
    {
        return $this->container['refund_reason'];
    }

    /**
     * Sets refund_reason
     *
     * @param string $refund_reason 退订理由
     *
     * @return $this
     */
    public function setRefundReason($refund_reason)
    {
        $this->container['refund_reason'] = $refund_reason;

        return $this;
    }

    /**
     * Gets refund_reason_type
     *
     * @return string
     */
    public function getRefundReasonType()
    {
        return $this->container['refund_reason_type'];
    }

    /**
     * Sets refund_reason_type
     *
     * @param string $refund_reason_type 退订理由类型
     *
     * @return $this
     */
    public function setRefundReasonType($refund_reason_type)
    {
        $this->container['refund_reason_type'] = $refund_reason_type;

        return $this;
    }

    /**
     * Gets target_expire_time
     *
     * @return string
     */
    public function getTargetExpireTime()
    {
        return $this->container['target_expire_time'];
    }

    /**
     * Sets target_expire_time
     *
     * @param string $target_expire_time 退订后的过期时间 退续费场景使用
     *
     * @return $this
     */
    public function setTargetExpireTime($target_expire_time)
    {
        $this->container['target_expire_time'] = $target_expire_time;

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
