<?php
/**
 * MultiplayDemoInitMultiPlayResultModelTokens
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
 * MultiplayDemoInitMultiPlayResultModelTokens Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class MultiplayDemoInitMultiPlayResultModelTokens implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'MultiplayDemoInitMultiPlayResultModelTokens';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'account_id' => 'string',
'token_id' => 'string',
'offline_ts' => 'int',
'session' => 'string',
'admin' => 'bool',
'control_id' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'account_id' => null,
'token_id' => null,
'offline_ts' => 'int64',
'session' => null,
'admin' => null,
'control_id' => null    ];

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
'token_id' => 'tokenId',
'offline_ts' => 'offlineTs',
'session' => 'session',
'admin' => 'admin',
'control_id' => 'controlId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
'token_id' => 'setTokenId',
'offline_ts' => 'setOfflineTs',
'session' => 'setSession',
'admin' => 'setAdmin',
'control_id' => 'setControlId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
'token_id' => 'getTokenId',
'offline_ts' => 'getOfflineTs',
'session' => 'getSession',
'admin' => 'getAdmin',
'control_id' => 'getControlId'    ];

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
        $this->container['token_id'] = isset($data['token_id']) ? $data['token_id'] : null;
        $this->container['offline_ts'] = isset($data['offline_ts']) ? $data['offline_ts'] : null;
        $this->container['session'] = isset($data['session']) ? $data['session'] : null;
        $this->container['admin'] = isset($data['admin']) ? $data['admin'] : null;
        $this->container['control_id'] = isset($data['control_id']) ? $data['control_id'] : null;
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
     * Gets token_id
     *
     * @return string
     */
    public function getTokenId()
    {
        return $this->container['token_id'];
    }

    /**
     * Sets token_id
     *
     * @param string $token_id token_id
     *
     * @return $this
     */
    public function setTokenId($token_id)
    {
        $this->container['token_id'] = $token_id;

        return $this;
    }

    /**
     * Gets offline_ts
     *
     * @return int
     */
    public function getOfflineTs()
    {
        return $this->container['offline_ts'];
    }

    /**
     * Sets offline_ts
     *
     * @param int $offline_ts offline_ts
     *
     * @return $this
     */
    public function setOfflineTs($offline_ts)
    {
        $this->container['offline_ts'] = $offline_ts;

        return $this;
    }

    /**
     * Gets session
     *
     * @return string
     */
    public function getSession()
    {
        return $this->container['session'];
    }

    /**
     * Sets session
     *
     * @param string $session session
     *
     * @return $this
     */
    public function setSession($session)
    {
        $this->container['session'] = $session;

        return $this;
    }

    /**
     * Gets admin
     *
     * @return bool
     */
    public function getAdmin()
    {
        return $this->container['admin'];
    }

    /**
     * Sets admin
     *
     * @param bool $admin admin
     *
     * @return $this
     */
    public function setAdmin($admin)
    {
        $this->container['admin'] = $admin;

        return $this;
    }

    /**
     * Gets control_id
     *
     * @return int
     */
    public function getControlId()
    {
        return $this->container['control_id'];
    }

    /**
     * Sets control_id
     *
     * @param int $control_id control_id
     *
     * @return $this
     */
    public function setControlId($control_id)
    {
        $this->container['control_id'] = $control_id;

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
