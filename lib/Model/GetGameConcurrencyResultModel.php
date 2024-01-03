<?php
/**
 * GetGameConcurrencyResultModel
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
 * GetGameConcurrencyResultModel Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class GetGameConcurrencyResultModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'GetGameConcurrencyResultModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'game_id' => 'string',
'current_time' => 'int',
'playing_region_list' => '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\GetGameConcurrencyResultModelPlayingRegionList[]',
'code' => 'string',
'playing_total' => 'int',
'success' => 'bool',
'queuing_total' => 'int',
'message' => 'string',
'project_id' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'game_id' => null,
'current_time' => 'int64',
'playing_region_list' => null,
'code' => null,
'playing_total' => 'int64',
'success' => null,
'queuing_total' => 'int64',
'message' => null,
'project_id' => null    ];

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
'current_time' => 'currentTime',
'playing_region_list' => 'playingRegionList',
'code' => 'code',
'playing_total' => 'playingTotal',
'success' => 'success',
'queuing_total' => 'queuingTotal',
'message' => 'message',
'project_id' => 'projectId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'game_id' => 'setGameId',
'current_time' => 'setCurrentTime',
'playing_region_list' => 'setPlayingRegionList',
'code' => 'setCode',
'playing_total' => 'setPlayingTotal',
'success' => 'setSuccess',
'queuing_total' => 'setQueuingTotal',
'message' => 'setMessage',
'project_id' => 'setProjectId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'game_id' => 'getGameId',
'current_time' => 'getCurrentTime',
'playing_region_list' => 'getPlayingRegionList',
'code' => 'getCode',
'playing_total' => 'getPlayingTotal',
'success' => 'getSuccess',
'queuing_total' => 'getQueuingTotal',
'message' => 'getMessage',
'project_id' => 'getProjectId'    ];

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
        $this->container['current_time'] = isset($data['current_time']) ? $data['current_time'] : null;
        $this->container['playing_region_list'] = isset($data['playing_region_list']) ? $data['playing_region_list'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['playing_total'] = isset($data['playing_total']) ? $data['playing_total'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['queuing_total'] = isset($data['queuing_total']) ? $data['queuing_total'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['project_id'] = isset($data['project_id']) ? $data['project_id'] : null;
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
     * Gets playing_region_list
     *
     * @return \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\GetGameConcurrencyResultModelPlayingRegionList[]
     */
    public function getPlayingRegionList()
    {
        return $this->container['playing_region_list'];
    }

    /**
     * Sets playing_region_list
     *
     * @param \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\GetGameConcurrencyResultModelPlayingRegionList[] $playing_region_list 当前游戏region维度游戏中人数统计
     *
     * @return $this
     */
    public function setPlayingRegionList($playing_region_list)
    {
        $this->container['playing_region_list'] = $playing_region_list;

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
     * @param string $code 错误码
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets playing_total
     *
     * @return int
     */
    public function getPlayingTotal()
    {
        return $this->container['playing_total'];
    }

    /**
     * Sets playing_total
     *
     * @param int $playing_total 当前游戏中人数
     *
     * @return $this
     */
    public function setPlayingTotal($playing_total)
    {
        $this->container['playing_total'] = $playing_total;

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
     * @param bool $success 查询结果
     *
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

        return $this;
    }

    /**
     * Gets queuing_total
     *
     * @return int
     */
    public function getQueuingTotal()
    {
        return $this->container['queuing_total'];
    }

    /**
     * Sets queuing_total
     *
     * @param int $queuing_total 当前排队人数
     *
     * @return $this
     */
    public function setQueuingTotal($queuing_total)
    {
        $this->container['queuing_total'] = $queuing_total;

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
     * @param string $message 错误信息
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

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
