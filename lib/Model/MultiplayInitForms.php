<?php
/**
 * MultiplayInitForms
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
 * MultiplayInitForms Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class MultiplayInitForms implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'MultiplayInitForms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'game_session' => 'string',
'app_key' => 'string',
'config' => '\Yjopenapi\Client\Model\MultiplayInitConfig',
'tokens' => '\Yjopenapi\Client\Model\MultiplayInitTokens[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'game_session' => null,
'app_key' => null,
'config' => null,
'tokens' => null    ];

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
        'game_session' => 'gameSession',
'app_key' => 'appKey',
'config' => 'config',
'tokens' => 'tokens'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'game_session' => 'setGameSession',
'app_key' => 'setAppKey',
'config' => 'setConfig',
'tokens' => 'setTokens'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'game_session' => 'getGameSession',
'app_key' => 'getAppKey',
'config' => 'getConfig',
'tokens' => 'getTokens'    ];

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
        $this->container['game_session'] = isset($data['game_session']) ? $data['game_session'] : null;
        $this->container['app_key'] = isset($data['app_key']) ? $data['app_key'] : null;
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['tokens'] = isset($data['tokens']) ? $data['tokens'] : null;
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
     * @param string $game_session 游戏会话Id
     *
     * @return $this
     */
    public function setGameSession($game_session)
    {
        $this->container['game_session'] = $game_session;

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
     * @param string $app_key 分配的项目ak
     *
     * @return $this
     */
    public function setAppKey($app_key)
    {
        $this->container['app_key'] = $app_key;

        return $this;
    }

    /**
     * Gets config
     *
     * @return \Yjopenapi\Client\Model\MultiplayInitConfig
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     *
     * @param \Yjopenapi\Client\Model\MultiplayInitConfig $config 联机基础配置
     *
     * @return $this
     */
    public function setConfig($config)
    {
        $this->container['config'] = $config;

        return $this;
    }

    /**
     * Gets tokens
     *
     * @return \Yjopenapi\Client\Model\MultiplayInitTokens[]
     */
    public function getTokens()
    {
        return $this->container['tokens'];
    }

    /**
     * Sets tokens
     *
     * @param \Yjopenapi\Client\Model\MultiplayInitTokens[] $tokens tokens
     *
     * @return $this
     */
    public function setTokens($tokens)
    {
        $this->container['tokens'] = $tokens;

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
