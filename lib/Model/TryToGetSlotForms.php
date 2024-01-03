<?php
/**
 * TryToGetSlotForms
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

namespace Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model;

use \ArrayAccess;
use \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ObjectSerializer;

/**
 * TryToGetSlotForms Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class TryToGetSlotForms implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'TryToGetSlotForms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'account_id' => 'string',
'game_id' => 'string',
'app_key' => 'string',
'region_id' => 'string',
're_connect' => 'bool',
'biz_param' => 'string',
'client_ip' => 'string',
'tags' => 'string',
'user_level' => 'int',
'codec' => 'int',
'resolution' => 'int',
'bit_rate' => 'int',
'fps' => 'int',
'game_cmd_param' => 'string',
'start_param' => '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\TryToGetSlotFormsStartParam'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'account_id' => null,
'game_id' => null,
'app_key' => null,
'region_id' => null,
're_connect' => null,
'biz_param' => null,
'client_ip' => null,
'tags' => null,
'user_level' => 'int32',
'codec' => 'int32',
'resolution' => 'int32',
'bit_rate' => 'int32',
'fps' => 'int32',
'game_cmd_param' => null,
'start_param' => null    ];

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
        'account_id' => 'accountId',
'game_id' => 'gameId',
'app_key' => 'appKey',
'region_id' => 'regionId',
're_connect' => 'reConnect',
'biz_param' => 'bizParam',
'client_ip' => 'clientIp',
'tags' => 'tags',
'user_level' => 'userLevel',
'codec' => 'codec',
'resolution' => 'resolution',
'bit_rate' => 'bitRate',
'fps' => 'fps',
'game_cmd_param' => 'gameCmdParam',
'start_param' => 'startParam'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
'game_id' => 'setGameId',
'app_key' => 'setAppKey',
'region_id' => 'setRegionId',
're_connect' => 'setReConnect',
'biz_param' => 'setBizParam',
'client_ip' => 'setClientIp',
'tags' => 'setTags',
'user_level' => 'setUserLevel',
'codec' => 'setCodec',
'resolution' => 'setResolution',
'bit_rate' => 'setBitRate',
'fps' => 'setFps',
'game_cmd_param' => 'setGameCmdParam',
'start_param' => 'setStartParam'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
'game_id' => 'getGameId',
'app_key' => 'getAppKey',
'region_id' => 'getRegionId',
're_connect' => 'getReConnect',
'biz_param' => 'getBizParam',
'client_ip' => 'getClientIp',
'tags' => 'getTags',
'user_level' => 'getUserLevel',
'codec' => 'getCodec',
'resolution' => 'getResolution',
'bit_rate' => 'getBitRate',
'fps' => 'getFps',
'game_cmd_param' => 'getGameCmdParam',
'start_param' => 'getStartParam'    ];

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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['game_id'] = isset($data['game_id']) ? $data['game_id'] : null;
        $this->container['app_key'] = isset($data['app_key']) ? $data['app_key'] : null;
        $this->container['region_id'] = isset($data['region_id']) ? $data['region_id'] : null;
        $this->container['re_connect'] = isset($data['re_connect']) ? $data['re_connect'] : null;
        $this->container['biz_param'] = isset($data['biz_param']) ? $data['biz_param'] : null;
        $this->container['client_ip'] = isset($data['client_ip']) ? $data['client_ip'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['user_level'] = isset($data['user_level']) ? $data['user_level'] : null;
        $this->container['codec'] = isset($data['codec']) ? $data['codec'] : null;
        $this->container['resolution'] = isset($data['resolution']) ? $data['resolution'] : null;
        $this->container['bit_rate'] = isset($data['bit_rate']) ? $data['bit_rate'] : null;
        $this->container['fps'] = isset($data['fps']) ? $data['fps'] : null;
        $this->container['game_cmd_param'] = isset($data['game_cmd_param']) ? $data['game_cmd_param'] : null;
        $this->container['start_param'] = isset($data['start_param']) ? $data['start_param'] : null;
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
     * @param string $account_id 用户id，给到Paas平台和SDK，两者保持一致，全局唯一
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

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
     * @param string $game_id Paas平台部署的游戏Id
     *
     * @return $this
     */
    public function setGameId($game_id)
    {
        $this->container['game_id'] = $game_id;

        return $this;
    }

    /**
     * Gets app_key
     *
     * @return string
     */
    public function getAppKey()
    {
        return $this->container['app_key'];
    }

    /**
     * Sets app_key
     *
     * @param string $app_key Paas平台AK(应用的AK，非服务端AK)
     *
     * @return $this
     */
    public function setAppKey($app_key)
    {
        $this->container['app_key'] = $app_key;

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
     * @param string $region_id 需要调度的区域
     *
     * @return $this
     */
    public function setRegionId($region_id)
    {
        $this->container['region_id'] = $region_id;

        return $this;
    }

    /**
     * Gets re_connect
     *
     * @return bool
     */
    public function getReConnect()
    {
        return $this->container['re_connect'];
    }

    /**
     * Sets re_connect
     *
     * @param bool $re_connect false代表不使用断线重连，开启新游戏
     *
     * @return $this
     */
    public function setReConnect($re_connect)
    {
        $this->container['re_connect'] = $re_connect;

        return $this;
    }

    /**
     * Gets biz_param
     *
     * @return string
     */
    public function getBizParam()
    {
        return $this->container['biz_param'];
    }

    /**
     * Sets biz_param
     *
     * @param string $biz_param 端侧从Paas sdk获取的调度业务参数
     *
     * @return $this
     */
    public function setBizParam($biz_param)
    {
        $this->container['biz_param'] = $biz_param;

        return $this;
    }

    /**
     * Gets client_ip
     *
     * @return string
     */
    public function getClientIp()
    {
        return $this->container['client_ip'];
    }

    /**
     * Sets client_ip
     *
     * @param string $client_ip App端公网ip
     *
     * @return $this
     */
    public function setClientIp($client_ip)
    {
        $this->container['client_ip'] = $client_ip;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string $tags 标签之间用半角逗号分隔
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

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
     * @param int $user_level 调度等级
     *
     * @return $this
     */
    public function setUserLevel($user_level)
    {
        $this->container['user_level'] = $user_level;

        return $this;
    }

    /**
     * Gets codec
     *
     * @return int
     */
    public function getCodec()
    {
        return $this->container['codec'];
    }

    /**
     * Sets codec
     *
     * @param int $codec 编码
     *
     * @return $this
     */
    public function setCodec($codec)
    {
        $this->container['codec'] = $codec;

        return $this;
    }

    /**
     * Gets resolution
     *
     * @return int
     */
    public function getResolution()
    {
        return $this->container['resolution'];
    }

    /**
     * Sets resolution
     *
     * @param int $resolution 画质
     *
     * @return $this
     */
    public function setResolution($resolution)
    {
        $this->container['resolution'] = $resolution;

        return $this;
    }

    /**
     * Gets bit_rate
     *
     * @return int
     */
    public function getBitRate()
    {
        return $this->container['bit_rate'];
    }

    /**
     * Sets bit_rate
     *
     * @param int $bit_rate 码率
     *
     * @return $this
     */
    public function setBitRate($bit_rate)
    {
        $this->container['bit_rate'] = $bit_rate;

        return $this;
    }

    /**
     * Gets fps
     *
     * @return int
     */
    public function getFps()
    {
        return $this->container['fps'];
    }

    /**
     * Sets fps
     *
     * @param int $fps 帧率
     *
     * @return $this
     */
    public function setFps($fps)
    {
        $this->container['fps'] = $fps;

        return $this;
    }

    /**
     * Gets game_cmd_param
     *
     * @return string
     */
    public function getGameCmdParam()
    {
        return $this->container['game_cmd_param'];
    }

    /**
     * Sets game_cmd_param
     *
     * @param string $game_cmd_param 启动命令，透传至ISV用于启动游戏
     *
     * @return $this
     */
    public function setGameCmdParam($game_cmd_param)
    {
        $this->container['game_cmd_param'] = $game_cmd_param;

        return $this;
    }

    /**
     * Gets start_param
     *
     * @return \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\TryToGetSlotFormsStartParam
     */
    public function getStartParam()
    {
        return $this->container['start_param'];
    }

    /**
     * Sets start_param
     *
     * @param \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\TryToGetSlotFormsStartParam $start_param 游戏启动设置参数
     *
     * @return $this
     */
    public function setStartParam($start_param)
    {
        $this->container['start_param'] = $start_param;

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
