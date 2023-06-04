<?php
/**
 * ConsoleAdminListInstancesOfProjectResultModelDataList
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
 * ConsoleAdminListInstancesOfProjectResultModelDataList Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class ConsoleAdminListInstancesOfProjectResultModelDataList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'ConsoleAdminListInstancesOfProjectResultModelDataList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'commodity_specification_cn_name' => 'string',
'bandwidth_charge_type' => 'string',
'effective_time' => 'int',
'platform_type' => 'string',
'payment_type' => 'string',
'token' => 'string',
'expire_time' => 'int',
'commodity_instance_name' => 'string',
'commodity_instance_id' => 'string',
'region' => 'string',
'project_id' => 'string',
'container_count' => 'string',
'status' => 'string',
'trade_channel' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'commodity_specification_cn_name' => null,
'bandwidth_charge_type' => null,
'effective_time' => 'int64',
'platform_type' => null,
'payment_type' => null,
'token' => null,
'expire_time' => 'int64',
'commodity_instance_name' => null,
'commodity_instance_id' => null,
'region' => null,
'project_id' => null,
'container_count' => null,
'status' => null,
'trade_channel' => null    ];

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
        'commodity_specification_cn_name' => 'commoditySpecificationCnName',
'bandwidth_charge_type' => 'bandwidthChargeType',
'effective_time' => 'effectiveTime',
'platform_type' => 'platformType',
'payment_type' => 'paymentType',
'token' => 'token',
'expire_time' => 'expireTime',
'commodity_instance_name' => 'commodityInstanceName',
'commodity_instance_id' => 'commodityInstanceId',
'region' => 'region',
'project_id' => 'projectId',
'container_count' => 'containerCount',
'status' => 'status',
'trade_channel' => 'tradeChannel'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'commodity_specification_cn_name' => 'setCommoditySpecificationCnName',
'bandwidth_charge_type' => 'setBandwidthChargeType',
'effective_time' => 'setEffectiveTime',
'platform_type' => 'setPlatformType',
'payment_type' => 'setPaymentType',
'token' => 'setToken',
'expire_time' => 'setExpireTime',
'commodity_instance_name' => 'setCommodityInstanceName',
'commodity_instance_id' => 'setCommodityInstanceId',
'region' => 'setRegion',
'project_id' => 'setProjectId',
'container_count' => 'setContainerCount',
'status' => 'setStatus',
'trade_channel' => 'setTradeChannel'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'commodity_specification_cn_name' => 'getCommoditySpecificationCnName',
'bandwidth_charge_type' => 'getBandwidthChargeType',
'effective_time' => 'getEffectiveTime',
'platform_type' => 'getPlatformType',
'payment_type' => 'getPaymentType',
'token' => 'getToken',
'expire_time' => 'getExpireTime',
'commodity_instance_name' => 'getCommodityInstanceName',
'commodity_instance_id' => 'getCommodityInstanceId',
'region' => 'getRegion',
'project_id' => 'getProjectId',
'container_count' => 'getContainerCount',
'status' => 'getStatus',
'trade_channel' => 'getTradeChannel'    ];

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
        $this->container['commodity_specification_cn_name'] = isset($data['commodity_specification_cn_name']) ? $data['commodity_specification_cn_name'] : null;
        $this->container['bandwidth_charge_type'] = isset($data['bandwidth_charge_type']) ? $data['bandwidth_charge_type'] : null;
        $this->container['effective_time'] = isset($data['effective_time']) ? $data['effective_time'] : null;
        $this->container['platform_type'] = isset($data['platform_type']) ? $data['platform_type'] : null;
        $this->container['payment_type'] = isset($data['payment_type']) ? $data['payment_type'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['expire_time'] = isset($data['expire_time']) ? $data['expire_time'] : null;
        $this->container['commodity_instance_name'] = isset($data['commodity_instance_name']) ? $data['commodity_instance_name'] : null;
        $this->container['commodity_instance_id'] = isset($data['commodity_instance_id']) ? $data['commodity_instance_id'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['project_id'] = isset($data['project_id']) ? $data['project_id'] : null;
        $this->container['container_count'] = isset($data['container_count']) ? $data['container_count'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['trade_channel'] = isset($data['trade_channel']) ? $data['trade_channel'] : null;
    }


    /**
     * Gets commodity_specification_cn_name
     *
     * @return string
     */
    public function getCommoditySpecificationCnName()
    {
        return $this->container['commodity_specification_cn_name'];
    }

    /**
     * Sets commodity_specification_cn_name
     *
     * @param string $commodity_specification_cn_name commodity_specification_cn_name
     *
     * @return $this
     */
    public function setCommoditySpecificationCnName($commodity_specification_cn_name)
    {
        $this->container['commodity_specification_cn_name'] = $commodity_specification_cn_name;

        return $this;
    }

    /**
     * Gets bandwidth_charge_type
     *
     * @return string
     */
    public function getBandwidthChargeType()
    {
        return $this->container['bandwidth_charge_type'];
    }

    /**
     * Sets bandwidth_charge_type
     *
     * @param string $bandwidth_charge_type bandwidth_charge_type
     *
     * @return $this
     */
    public function setBandwidthChargeType($bandwidth_charge_type)
    {
        $this->container['bandwidth_charge_type'] = $bandwidth_charge_type;

        return $this;
    }

    /**
     * Gets effective_time
     *
     * @return int
     */
    public function getEffectiveTime()
    {
        return $this->container['effective_time'];
    }

    /**
     * Sets effective_time
     *
     * @param int $effective_time effective_time
     *
     * @return $this
     */
    public function setEffectiveTime($effective_time)
    {
        $this->container['effective_time'] = $effective_time;

        return $this;
    }

    /**
     * Gets platform_type
     *
     * @return string
     */
    public function getPlatformType()
    {
        return $this->container['platform_type'];
    }

    /**
     * Sets platform_type
     *
     * @param string $platform_type platform_type
     *
     * @return $this
     */
    public function setPlatformType($platform_type)
    {
        $this->container['platform_type'] = $platform_type;

        return $this;
    }

    /**
     * Gets payment_type
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     *
     * @param string $payment_type payment_type
     *
     * @return $this
     */
    public function setPaymentType($payment_type)
    {
        $this->container['payment_type'] = $payment_type;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string $token token
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets expire_time
     *
     * @return int
     */
    public function getExpireTime()
    {
        return $this->container['expire_time'];
    }

    /**
     * Sets expire_time
     *
     * @param int $expire_time expire_time
     *
     * @return $this
     */
    public function setExpireTime($expire_time)
    {
        $this->container['expire_time'] = $expire_time;

        return $this;
    }

    /**
     * Gets commodity_instance_name
     *
     * @return string
     */
    public function getCommodityInstanceName()
    {
        return $this->container['commodity_instance_name'];
    }

    /**
     * Sets commodity_instance_name
     *
     * @param string $commodity_instance_name commodity_instance_name
     *
     * @return $this
     */
    public function setCommodityInstanceName($commodity_instance_name)
    {
        $this->container['commodity_instance_name'] = $commodity_instance_name;

        return $this;
    }

    /**
     * Gets commodity_instance_id
     *
     * @return string
     */
    public function getCommodityInstanceId()
    {
        return $this->container['commodity_instance_id'];
    }

    /**
     * Sets commodity_instance_id
     *
     * @param string $commodity_instance_id commodity_instance_id
     *
     * @return $this
     */
    public function setCommodityInstanceId($commodity_instance_id)
    {
        $this->container['commodity_instance_id'] = $commodity_instance_id;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string $region region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets project_id
     *
     * @return string
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param string $project_id project_id
     *
     * @return $this
     */
    public function setProjectId($project_id)
    {
        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets container_count
     *
     * @return string
     */
    public function getContainerCount()
    {
        return $this->container['container_count'];
    }

    /**
     * Sets container_count
     *
     * @param string $container_count container_count
     *
     * @return $this
     */
    public function setContainerCount($container_count)
    {
        $this->container['container_count'] = $container_count;

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
     * Gets trade_channel
     *
     * @return string
     */
    public function getTradeChannel()
    {
        return $this->container['trade_channel'];
    }

    /**
     * Sets trade_channel
     *
     * @param string $trade_channel trade_channel
     *
     * @return $this
     */
    public function setTradeChannel($trade_channel)
    {
        $this->container['trade_channel'] = $trade_channel;

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
