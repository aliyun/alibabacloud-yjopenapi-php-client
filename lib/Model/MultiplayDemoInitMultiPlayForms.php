<?php
/**
 * MultiplayDemoInitMultiPlayForms
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
 * MultiplayDemoInitMultiPlayForms Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class MultiplayDemoInitMultiPlayForms implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'MultiplayDemoInitMultiPlayForms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'game_id' => 'string',
'game_session' => 'string',
'app_key' => 'string',
'config' => 'string',
'scheduler_config' => 'string',
'tokens' => 'string',
'open_ak' => 'string',
'open_sk' => 'string',
'account_id' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'game_id' => null,
'game_session' => null,
'app_key' => null,
'config' => null,
'scheduler_config' => null,
'tokens' => null,
'open_ak' => null,
'open_sk' => null,
'account_id' => null    ];

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
'game_session' => 'gameSession',
'app_key' => 'appKey',
'config' => 'config',
'scheduler_config' => 'schedulerConfig',
'tokens' => 'tokens',
'open_ak' => 'openAk',
'open_sk' => 'openSk',
'account_id' => 'accountId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'game_id' => 'setGameId',
'game_session' => 'setGameSession',
'app_key' => 'setAppKey',
'config' => 'setConfig',
'scheduler_config' => 'setSchedulerConfig',
'tokens' => 'setTokens',
'open_ak' => 'setOpenAk',
'open_sk' => 'setOpenSk',
'account_id' => 'setAccountId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'game_id' => 'getGameId',
'game_session' => 'getGameSession',
'app_key' => 'getAppKey',
'config' => 'getConfig',
'scheduler_config' => 'getSchedulerConfig',
'tokens' => 'getTokens',
'open_ak' => 'getOpenAk',
'open_sk' => 'getOpenSk',
'account_id' => 'getAccountId'    ];

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
        $this->container['game_session'] = isset($data['game_session']) ? $data['game_session'] : null;
        $this->container['app_key'] = isset($data['app_key']) ? $data['app_key'] : null;
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['scheduler_config'] = isset($data['scheduler_config']) ? $data['scheduler_config'] : null;
        $this->container['tokens'] = isset($data['tokens']) ? $data['tokens'] : null;
        $this->container['open_ak'] = isset($data['open_ak']) ? $data['open_ak'] : null;
        $this->container['open_sk'] = isset($data['open_sk']) ? $data['open_sk'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
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
     * @param string $game_session game_session
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
     * Gets config
     *
     * @return string
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     *
     * @param string $config config
     *
     * @return $this
     */
    public function setConfig($config)
    {
        $this->container['config'] = $config;

        return $this;
    }

    /**
     * Gets scheduler_config
     *
     * @return string
     */
    public function getSchedulerConfig()
    {
        return $this->container['scheduler_config'];
    }

    /**
     * Sets scheduler_config
     *
     * @param string $scheduler_config scheduler_config
     *
     * @return $this
     */
    public function setSchedulerConfig($scheduler_config)
    {
        $this->container['scheduler_config'] = $scheduler_config;

        return $this;
    }

    /**
     * Gets tokens
     *
     * @return string
     */
    public function getTokens()
    {
        return $this->container['tokens'];
    }

    /**
     * Sets tokens
     *
     * @param string $tokens tokens
     *
     * @return $this
     */
    public function setTokens($tokens)
    {
        $this->container['tokens'] = $tokens;

        return $this;
    }

    /**
     * Gets open_ak
     *
     * @return string
     */
    public function getOpenAk()
    {
        return $this->container['open_ak'];
    }

    /**
     * Sets open_ak
     *
     * @param string $open_ak open_ak
     *
     * @return $this
     */
    public function setOpenAk($open_ak)
    {
        $this->container['open_ak'] = $open_ak;

        return $this;
    }

    /**
     * Gets open_sk
     *
     * @return string
     */
    public function getOpenSk()
    {
        return $this->container['open_sk'];
    }

    /**
     * Sets open_sk
     *
     * @param string $open_sk open_sk
     *
     * @return $this
     */
    public function setOpenSk($open_sk)
    {
        $this->container['open_sk'] = $open_sk;

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
