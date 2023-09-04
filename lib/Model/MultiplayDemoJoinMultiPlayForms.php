<?php
/**
 * MultiplayDemoJoinMultiPlayForms
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
 * MultiplayDemoJoinMultiPlayForms Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class MultiplayDemoJoinMultiPlayForms implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'MultiplayDemoJoinMultiPlayForms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'mp_id' => 'string',
'control_id' => 'int',
'open_ak' => 'string',
'open_sk' => 'string',
'account_id' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'mp_id' => null,
'control_id' => 'int32',
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
        'mp_id' => 'mpId',
'control_id' => 'controlId',
'open_ak' => 'openAk',
'open_sk' => 'openSk',
'account_id' => 'accountId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mp_id' => 'setMpId',
'control_id' => 'setControlId',
'open_ak' => 'setOpenAk',
'open_sk' => 'setOpenSk',
'account_id' => 'setAccountId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mp_id' => 'getMpId',
'control_id' => 'getControlId',
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
        $this->container['mp_id'] = isset($data['mp_id']) ? $data['mp_id'] : null;
        $this->container['control_id'] = isset($data['control_id']) ? $data['control_id'] : null;
        $this->container['open_ak'] = isset($data['open_ak']) ? $data['open_ak'] : null;
        $this->container['open_sk'] = isset($data['open_sk']) ? $data['open_sk'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
    }


    /**
     * Gets mp_id
     *
     * @return string
     */
    public function getMpId()
    {
        return $this->container['mp_id'];
    }

    /**
     * Sets mp_id
     *
     * @param string $mp_id mp_id
     *
     * @return $this
     */
    public function setMpId($mp_id)
    {
        $this->container['mp_id'] = $mp_id;

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
