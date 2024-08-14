<?php
/**
 * ReplaceSlotForms
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
 * ReplaceSlotForms Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class ReplaceSlotForms implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'ReplaceSlotForms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'replace_session' => 'string',
'account_id' => 'string',
'game_id' => 'string',
'app_key' => 'string',
'biz_param' => 'string',
'client_ip' => 'string',
'tags' => 'string',
'codec' => 'int',
'resolution' => 'int',
'bit_rate' => 'int',
'fps' => 'int',
'game_cmd_param' => 'string',
'user_level' => 'int',
'start_param' => '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\ReplaceSlotFormsStartParam'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'replace_session' => null,
'account_id' => null,
'game_id' => null,
'app_key' => null,
'biz_param' => null,
'client_ip' => null,
'tags' => null,
'codec' => 'int32',
'resolution' => 'int32',
'bit_rate' => 'int32',
'fps' => 'int32',
'game_cmd_param' => null,
'user_level' => 'int32',
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
        'replace_session' => 'replaceSession',
'account_id' => 'accountId',
'game_id' => 'gameId',
'app_key' => 'appKey',
'biz_param' => 'bizParam',
'client_ip' => 'clientIp',
'tags' => 'tags',
'codec' => 'codec',
'resolution' => 'resolution',
'bit_rate' => 'bitRate',
'fps' => 'fps',
'game_cmd_param' => 'gameCmdParam',
'user_level' => 'userLevel',
'start_param' => 'startParam'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'replace_session' => 'setReplaceSession',
'account_id' => 'setAccountId',
'game_id' => 'setGameId',
'app_key' => 'setAppKey',
'biz_param' => 'setBizParam',
'client_ip' => 'setClientIp',
'tags' => 'setTags',
'codec' => 'setCodec',
'resolution' => 'setResolution',
'bit_rate' => 'setBitRate',
'fps' => 'setFps',
'game_cmd_param' => 'setGameCmdParam',
'user_level' => 'setUserLevel',
'start_param' => 'setStartParam'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'replace_session' => 'getReplaceSession',
'account_id' => 'getAccountId',
'game_id' => 'getGameId',
'app_key' => 'getAppKey',
'biz_param' => 'getBizParam',
'client_ip' => 'getClientIp',
'tags' => 'getTags',
'codec' => 'getCodec',
'resolution' => 'getResolution',
'bit_rate' => 'getBitRate',
'fps' => 'getFps',
'game_cmd_param' => 'getGameCmdParam',
'user_level' => 'getUserLevel',
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
        $this->container['replace_session'] = isset($data['replace_session']) ? $data['replace_session'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['game_id'] = isset($data['game_id']) ? $data['game_id'] : null;
        $this->container['app_key'] = isset($data['app_key']) ? $data['app_key'] : null;
        $this->container['biz_param'] = isset($data['biz_param']) ? $data['biz_param'] : null;
        $this->container['client_ip'] = isset($data['client_ip']) ? $data['client_ip'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['codec'] = isset($data['codec']) ? $data['codec'] : null;
        $this->container['resolution'] = isset($data['resolution']) ? $data['resolution'] : null;
        $this->container['bit_rate'] = isset($data['bit_rate']) ? $data['bit_rate'] : null;
        $this->container['fps'] = isset($data['fps']) ? $data['fps'] : null;
        $this->container['game_cmd_param'] = isset($data['game_cmd_param']) ? $data['game_cmd_param'] : null;
        $this->container['user_level'] = isset($data['user_level']) ? $data['user_level'] : null;
        $this->container['start_param'] = isset($data['start_param']) ? $data['start_param'] : null;
    }


    /**
     * Gets replace_session
     *
     * @return string
     */
    public function getReplaceSession()
    {
        return $this->container['replace_session'];
    }

    /**
     * Sets replace_session
     *
     * @param string $replace_session replace_session
     *
     * @return $this
     */
    public function setReplaceSession($replace_session)
    {
        $this->container['replace_session'] = $replace_session;

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
     * @param string $app_key app_key
     *
     * @return $this
     */
    public function setAppKey($app_key)
    {
        $this->container['app_key'] = $app_key;

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
     * @return \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\ReplaceSlotFormsStartParam
     */
    public function getStartParam()
    {
        return $this->container['start_param'];
    }

    /**
     * Sets start_param
     *
     * @param \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\ReplaceSlotFormsStartParam $start_param start_param
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
