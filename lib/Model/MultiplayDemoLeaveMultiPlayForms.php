<?php
/**
 * MultiplayDemoLeaveMultiPlayForms
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
 * MultiplayDemoLeaveMultiPlayForms Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class MultiplayDemoLeaveMultiPlayForms implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'MultiplayDemoLeaveMultiPlayForms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'mp_id' => 'string',
'token_ids' => 'string',
'kick_out' => 'bool',
'reason' => 'string',
'open_ak' => 'string',
'open_sk' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'mp_id' => null,
'token_ids' => null,
'kick_out' => null,
'reason' => null,
'open_ak' => null,
'open_sk' => null    ];

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
'token_ids' => 'tokenIds',
'kick_out' => 'kickOut',
'reason' => 'reason',
'open_ak' => 'openAk',
'open_sk' => 'openSk'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mp_id' => 'setMpId',
'token_ids' => 'setTokenIds',
'kick_out' => 'setKickOut',
'reason' => 'setReason',
'open_ak' => 'setOpenAk',
'open_sk' => 'setOpenSk'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mp_id' => 'getMpId',
'token_ids' => 'getTokenIds',
'kick_out' => 'getKickOut',
'reason' => 'getReason',
'open_ak' => 'getOpenAk',
'open_sk' => 'getOpenSk'    ];

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
        $this->container['token_ids'] = isset($data['token_ids']) ? $data['token_ids'] : null;
        $this->container['kick_out'] = isset($data['kick_out']) ? $data['kick_out'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['open_ak'] = isset($data['open_ak']) ? $data['open_ak'] : null;
        $this->container['open_sk'] = isset($data['open_sk']) ? $data['open_sk'] : null;
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
     * Gets token_ids
     *
     * @return string
     */
    public function getTokenIds()
    {
        return $this->container['token_ids'];
    }

    /**
     * Sets token_ids
     *
     * @param string $token_ids token_ids
     *
     * @return $this
     */
    public function setTokenIds($token_ids)
    {
        $this->container['token_ids'] = $token_ids;

        return $this;
    }

    /**
     * Gets kick_out
     *
     * @return bool
     */
    public function getKickOut()
    {
        return $this->container['kick_out'];
    }

    /**
     * Sets kick_out
     *
     * @param bool $kick_out kick_out
     *
     * @return $this
     */
    public function setKickOut($kick_out)
    {
        $this->container['kick_out'] = $kick_out;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string $reason reason
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

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
