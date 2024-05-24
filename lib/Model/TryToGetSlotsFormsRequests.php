<?php
/**
 * TryToGetSlotsFormsRequests
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

namespace Yjopenapi\Client\Yjopenapi\Client\Model;

use \ArrayAccess;
use \Yjopenapi\Client\Yjopenapi\Client\Api\ObjectSerializer;

/**
 * TryToGetSlotsFormsRequests Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class TryToGetSlotsFormsRequests implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'TryToGetSlotsFormsRequests';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'game_id' => 'string',
'fps' => 'int',
're_connect' => 'bool',
'resolution' => 'int',
'tags' => 'string',
'game_cmd_param' => 'string',
'account_id' => 'string',
'codec' => 'int',
'user_level' => 'int',
'start_param' => '\Yjopenapi\Client\Yjopenapi\Client\Model\TryToGetSlotsFormsRequestsStartParam',
'region_id' => 'string',
'bit_rate' => 'int',
'client_ip' => 'string',
'biz_param' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'game_id' => null,
'fps' => null,
're_connect' => null,
'resolution' => null,
'tags' => null,
'game_cmd_param' => null,
'account_id' => null,
'codec' => null,
'user_level' => null,
'start_param' => null,
'region_id' => null,
'bit_rate' => null,
'client_ip' => null,
'biz_param' => null    ];

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
'fps' => 'fps',
're_connect' => 'reConnect',
'resolution' => 'resolution',
'tags' => 'tags',
'game_cmd_param' => 'gameCmdParam',
'account_id' => 'accountId',
'codec' => 'codec',
'user_level' => 'userLevel',
'start_param' => 'startParam',
'region_id' => 'regionId',
'bit_rate' => 'bitRate',
'client_ip' => 'clientIp',
'biz_param' => 'bizParam'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'game_id' => 'setGameId',
'fps' => 'setFps',
're_connect' => 'setReConnect',
'resolution' => 'setResolution',
'tags' => 'setTags',
'game_cmd_param' => 'setGameCmdParam',
'account_id' => 'setAccountId',
'codec' => 'setCodec',
'user_level' => 'setUserLevel',
'start_param' => 'setStartParam',
'region_id' => 'setRegionId',
'bit_rate' => 'setBitRate',
'client_ip' => 'setClientIp',
'biz_param' => 'setBizParam'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'game_id' => 'getGameId',
'fps' => 'getFps',
're_connect' => 'getReConnect',
'resolution' => 'getResolution',
'tags' => 'getTags',
'game_cmd_param' => 'getGameCmdParam',
'account_id' => 'getAccountId',
'codec' => 'getCodec',
'user_level' => 'getUserLevel',
'start_param' => 'getStartParam',
'region_id' => 'getRegionId',
'bit_rate' => 'getBitRate',
'client_ip' => 'getClientIp',
'biz_param' => 'getBizParam'    ];

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
        $this->container['fps'] = isset($data['fps']) ? $data['fps'] : null;
        $this->container['re_connect'] = isset($data['re_connect']) ? $data['re_connect'] : null;
        $this->container['resolution'] = isset($data['resolution']) ? $data['resolution'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['game_cmd_param'] = isset($data['game_cmd_param']) ? $data['game_cmd_param'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['codec'] = isset($data['codec']) ? $data['codec'] : null;
        $this->container['user_level'] = isset($data['user_level']) ? $data['user_level'] : null;
        $this->container['start_param'] = isset($data['start_param']) ? $data['start_param'] : null;
        $this->container['region_id'] = isset($data['region_id']) ? $data['region_id'] : null;
        $this->container['bit_rate'] = isset($data['bit_rate']) ? $data['bit_rate'] : null;
        $this->container['client_ip'] = isset($data['client_ip']) ? $data['client_ip'] : null;
        $this->container['biz_param'] = isset($data['biz_param']) ? $data['biz_param'] : null;
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
     * @param string $game_id game_id
     *
     * @return $this
     */
    public function setGameId($game_id)
    {
        $this->container['game_id'] = $game_id;

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
     * @param int $fps fps
     *
     * @return $this
     */
    public function setFps($fps)
    {
        $this->container['fps'] = $fps;

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
     * @param bool $re_connect re_connect
     *
     * @return $this
     */
    public function setReConnect($re_connect)
    {
        $this->container['re_connect'] = $re_connect;

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
     * @param int $resolution resolution
     *
     * @return $this
     */
    public function setResolution($resolution)
    {
        $this->container['resolution'] = $resolution;

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
     * @param string $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

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
     * @param string $game_cmd_param game_cmd_param
     *
     * @return $this
     */
    public function setGameCmdParam($game_cmd_param)
    {
        $this->container['game_cmd_param'] = $game_cmd_param;

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
     * @param string $account_id account_id
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

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
     * @param int $codec codec
     *
     * @return $this
     */
    public function setCodec($codec)
    {
        $this->container['codec'] = $codec;

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
     * @param int $user_level user_level
     *
     * @return $this
     */
    public function setUserLevel($user_level)
    {
        $this->container['user_level'] = $user_level;

        return $this;
    }

    /**
     * Gets start_param
     *
     * @return \Yjopenapi\Client\Yjopenapi\Client\Model\TryToGetSlotsFormsRequestsStartParam
     */
    public function getStartParam()
    {
        return $this->container['start_param'];
    }

    /**
     * Sets start_param
     *
     * @param \Yjopenapi\Client\Yjopenapi\Client\Model\TryToGetSlotsFormsRequestsStartParam $start_param start_param
     *
     * @return $this
     */
    public function setStartParam($start_param)
    {
        $this->container['start_param'] = $start_param;

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
     * @param string $region_id region_id
     *
     * @return $this
     */
    public function setRegionId($region_id)
    {
        $this->container['region_id'] = $region_id;

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
     * @param int $bit_rate bit_rate
     *
     * @return $this
     */
    public function setBitRate($bit_rate)
    {
        $this->container['bit_rate'] = $bit_rate;

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
     * @param string $client_ip client_ip
     *
     * @return $this
     */
    public function setClientIp($client_ip)
    {
        $this->container['client_ip'] = $client_ip;

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
     * @param string $biz_param biz_param
     *
     * @return $this
     */
    public function setBizParam($biz_param)
    {
        $this->container['biz_param'] = $biz_param;

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
