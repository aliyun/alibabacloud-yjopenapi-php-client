<?php
/**
 * QuerySessionStatusResultModel
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

namespace Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model;

use \ArrayAccess;
use \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ObjectSerializer;

/**
 * QuerySessionStatusResultModel Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class QuerySessionStatusResultModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'QuerySessionStatusResultModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'game_id' => 'string',
'code' => 'string',
'message' => 'string',
'account_id' => 'string',
'dispatch_time' => 'int',
'user_level' => 'int',
'region_id' => 'string',
'success' => 'bool',
'tenant_id' => 'int',
'stop_time' => 'int',
'play_time' => 'int',
'project_id' => 'string',
'game_session' => 'string',
'status' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'game_id' => null,
'code' => null,
'message' => null,
'account_id' => null,
'dispatch_time' => 'int64',
'user_level' => null,
'region_id' => null,
'success' => null,
'tenant_id' => 'int64',
'stop_time' => 'int64',
'play_time' => 'int64',
'project_id' => null,
'game_session' => null,
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
        'game_id' => 'gameId',
'code' => 'code',
'message' => 'message',
'account_id' => 'accountId',
'dispatch_time' => 'dispatchTime',
'user_level' => 'userLevel',
'region_id' => 'regionId',
'success' => 'success',
'tenant_id' => 'tenantId',
'stop_time' => 'stopTime',
'play_time' => 'playTime',
'project_id' => 'projectId',
'game_session' => 'gameSession',
'status' => 'status'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'game_id' => 'setGameId',
'code' => 'setCode',
'message' => 'setMessage',
'account_id' => 'setAccountId',
'dispatch_time' => 'setDispatchTime',
'user_level' => 'setUserLevel',
'region_id' => 'setRegionId',
'success' => 'setSuccess',
'tenant_id' => 'setTenantId',
'stop_time' => 'setStopTime',
'play_time' => 'setPlayTime',
'project_id' => 'setProjectId',
'game_session' => 'setGameSession',
'status' => 'setStatus'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'game_id' => 'getGameId',
'code' => 'getCode',
'message' => 'getMessage',
'account_id' => 'getAccountId',
'dispatch_time' => 'getDispatchTime',
'user_level' => 'getUserLevel',
'region_id' => 'getRegionId',
'success' => 'getSuccess',
'tenant_id' => 'getTenantId',
'stop_time' => 'getStopTime',
'play_time' => 'getPlayTime',
'project_id' => 'getProjectId',
'game_session' => 'getGameSession',
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
        $this->container['game_id'] = isset($data['game_id']) ? $data['game_id'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['dispatch_time'] = isset($data['dispatch_time']) ? $data['dispatch_time'] : null;
        $this->container['user_level'] = isset($data['user_level']) ? $data['user_level'] : null;
        $this->container['region_id'] = isset($data['region_id']) ? $data['region_id'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['tenant_id'] = isset($data['tenant_id']) ? $data['tenant_id'] : null;
        $this->container['stop_time'] = isset($data['stop_time']) ? $data['stop_time'] : null;
        $this->container['play_time'] = isset($data['play_time']) ? $data['play_time'] : null;
        $this->container['project_id'] = isset($data['project_id']) ? $data['project_id'] : null;
        $this->container['game_session'] = isset($data['game_session']) ? $data['game_session'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
     * @param string $game_id 会话归属的游戏ID
     *
     * @return $this
     */
    public function setGameId($game_id)
    {
        $this->container['game_id'] = $game_id;

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
     * Gets account_id
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string $account_id 会话所属用户ID
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets dispatch_time
     *
     * @return int
     */
    public function getDispatchTime()
    {
        return $this->container['dispatch_time'];
    }

    /**
     * Sets dispatch_time
     *
     * @param int $dispatch_time 会话调度毫秒时间戳
     *
     * @return $this
     */
    public function setDispatchTime($dispatch_time)
    {
        $this->container['dispatch_time'] = $dispatch_time;

        return $this;
    }

    /**
     * Gets user_level
     *
     * @return int
     */
    public function getUserLevel()
    {
        return $this->container['user_level'];
    }

    /**
     * Sets user_level
     *
     * @param int $user_level 会话调度用户等级
     *
     * @return $this
     */
    public function setUserLevel($user_level)
    {
        $this->container['user_level'] = $user_level;

        return $this;
    }

    /**
     * Gets region_id
     *
     * @return string
     */
    public function getRegionId()
    {
        return $this->container['region_id'];
    }

    /**
     * Sets region_id
     *
     * @param string $region_id 会话调度大区ID
     *
     * @return $this
     */
    public function setRegionId($region_id)
    {
        $this->container['region_id'] = $region_id;

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
     * @param bool $success 是否成功
     *
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

        return $this;
    }

    /**
     * Gets tenant_id
     *
     * @return int
     */
    public function getTenantId()
    {
        return $this->container['tenant_id'];
    }

    /**
     * Sets tenant_id
     *
     * @param int $tenant_id 会话归属的租户ID
     *
     * @return $this
     */
    public function setTenantId($tenant_id)
    {
        $this->container['tenant_id'] = $tenant_id;

        return $this;
    }

    /**
     * Gets stop_time
     *
     * @return int
     */
    public function getStopTime()
    {
        return $this->container['stop_time'];
    }

    /**
     * Sets stop_time
     *
     * @param int $stop_time 会话停止毫秒时间戳
     *
     * @return $this
     */
    public function setStopTime($stop_time)
    {
        $this->container['stop_time'] = $stop_time;

        return $this;
    }

    /**
     * Gets play_time
     *
     * @return int
     */
    public function getPlayTime()
    {
        return $this->container['play_time'];
    }

    /**
     * Sets play_time
     *
     * @param int $play_time 用户开始游戏毫秒时间戳
     *
     * @return $this
     */
    public function setPlayTime($play_time)
    {
        $this->container['play_time'] = $play_time;

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
     * @param string $project_id 会话归属的项目ID
     *
     * @return $this
     */
    public function setProjectId($project_id)
    {
        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets game_session
     *
     * @return string
     */
    public function getGameSession()
    {
        return $this->container['game_session'];
    }

    /**
     * Sets game_session
     *
     * @param string $game_session 会话ID
     *
     * @return $this
     */
    public function setGameSession($game_session)
    {
        $this->container['game_session'] = $game_session;

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
     * @param string $status 会话当前状态：STARTED: 运行中，STOPPED: 已停止
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
