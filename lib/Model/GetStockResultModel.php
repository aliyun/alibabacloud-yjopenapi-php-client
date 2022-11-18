<?php
/**
 * GetStockResultModel
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
 * GetStockResultModel Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class GetStockResultModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'GetStockResultModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'request_id' => 'string',
'code' => 'string',
'message' => 'string',
'success' => 'bool',
'project_id' => 'string',
'game_id' => 'string',
'current_time' => 'int',
'quota_total' => 'int',
'used_total' => 'int',
'available_total' => 'int',
'instance_stock_list' => '\Yjopenapi\Client\Model\GetStockResultInstanceStockList[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'request_id' => null,
'code' => null,
'message' => null,
'success' => null,
'project_id' => null,
'game_id' => null,
'current_time' => 'int64',
'quota_total' => null,
'used_total' => null,
'available_total' => null,
'instance_stock_list' => null    ];

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
        'request_id' => 'requestId',
'code' => 'code',
'message' => 'message',
'success' => 'success',
'project_id' => 'projectId',
'game_id' => 'gameId',
'current_time' => 'currentTime',
'quota_total' => 'quotaTotal',
'used_total' => 'usedTotal',
'available_total' => 'availableTotal',
'instance_stock_list' => 'instanceStockList'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'request_id' => 'setRequestId',
'code' => 'setCode',
'message' => 'setMessage',
'success' => 'setSuccess',
'project_id' => 'setProjectId',
'game_id' => 'setGameId',
'current_time' => 'setCurrentTime',
'quota_total' => 'setQuotaTotal',
'used_total' => 'setUsedTotal',
'available_total' => 'setAvailableTotal',
'instance_stock_list' => 'setInstanceStockList'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'request_id' => 'getRequestId',
'code' => 'getCode',
'message' => 'getMessage',
'success' => 'getSuccess',
'project_id' => 'getProjectId',
'game_id' => 'getGameId',
'current_time' => 'getCurrentTime',
'quota_total' => 'getQuotaTotal',
'used_total' => 'getUsedTotal',
'available_total' => 'getAvailableTotal',
'instance_stock_list' => 'getInstanceStockList'    ];

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
        $this->container['request_id'] = isset($data['request_id']) ? $data['request_id'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['project_id'] = isset($data['project_id']) ? $data['project_id'] : null;
        $this->container['game_id'] = isset($data['game_id']) ? $data['game_id'] : null;
        $this->container['current_time'] = isset($data['current_time']) ? $data['current_time'] : null;
        $this->container['quota_total'] = isset($data['quota_total']) ? $data['quota_total'] : null;
        $this->container['used_total'] = isset($data['used_total']) ? $data['used_total'] : null;
        $this->container['available_total'] = isset($data['available_total']) ? $data['available_total'] : null;
        $this->container['instance_stock_list'] = isset($data['instance_stock_list']) ? $data['instance_stock_list'] : null;
    }


    /**
     * Gets request_id
     *
     * @return string
     */
    public function getRequestId()
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id
     *
     * @param string $request_id 请求链路唯一标示
     *
     * @return $this
     */
    public function setRequestId($request_id)
    {
        $this->container['request_id'] = $request_id;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code 返回码
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message 返回信息
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets success
     *
     * @return bool
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     *
     * @param bool $success 调度执行结果
     *
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

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
     * @param string $project_id 游戏归属的项目Id
     *
     * @return $this
     */
    public function setProjectId($project_id)
    {
        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets game_id
     *
     * @return string
     */
    public function getGameId()
    {
        return $this->container['game_id'];
    }

    /**
     * Sets game_id
     *
     * @param string $game_id Paas平台游戏ID
     *
     * @return $this
     */
    public function setGameId($game_id)
    {
        $this->container['game_id'] = $game_id;

        return $this;
    }

    /**
     * Gets current_time
     *
     * @return int
     */
    public function getCurrentTime()
    {
        return $this->container['current_time'];
    }

    /**
     * Sets current_time
     *
     * @param int $current_time 当前毫秒时间戳
     *
     * @return $this
     */
    public function setCurrentTime($current_time)
    {
        $this->container['current_time'] = $current_time;

        return $this;
    }

    /**
     * Gets quota_total
     *
     * @return int
     */
    public function getQuotaTotal()
    {
        return $this->container['quota_total'];
    }

    /**
     * Sets quota_total
     *
     * @param int $quota_total 总路数
     *
     * @return $this
     */
    public function setQuotaTotal($quota_total)
    {
        $this->container['quota_total'] = $quota_total;

        return $this;
    }

    /**
     * Gets used_total
     *
     * @return int
     */
    public function getUsedTotal()
    {
        return $this->container['used_total'];
    }

    /**
     * Sets used_total
     *
     * @param int $used_total 已使用路数
     *
     * @return $this
     */
    public function setUsedTotal($used_total)
    {
        $this->container['used_total'] = $used_total;

        return $this;
    }

    /**
     * Gets available_total
     *
     * @return int
     */
    public function getAvailableTotal()
    {
        return $this->container['available_total'];
    }

    /**
     * Sets available_total
     *
     * @param int $available_total 可用剩余路数
     *
     * @return $this
     */
    public function setAvailableTotal($available_total)
    {
        $this->container['available_total'] = $available_total;

        return $this;
    }

    /**
     * Gets instance_stock_list
     *
     * @return \Yjopenapi\Client\Model\GetStockResultInstanceStockList[]
     */
    public function getInstanceStockList()
    {
        return $this->container['instance_stock_list'];
    }

    /**
     * Sets instance_stock_list
     *
     * @param \Yjopenapi\Client\Model\GetStockResultInstanceStockList[] $instance_stock_list instance_stock_list
     *
     * @return $this
     */
    public function setInstanceStockList($instance_stock_list)
    {
        $this->container['instance_stock_list'] = $instance_stock_list;

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
