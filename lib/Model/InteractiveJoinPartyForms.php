<?php
/**
 * InteractiveJoinPartyForms
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
 * InteractiveJoinPartyForms Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class InteractiveJoinPartyForms implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'InteractiveJoinPartyForms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'party_id' => 'string',
'user_id' => 'string',
'seat_id' => 'int',
'control_id' => 'int',
're_connect' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'party_id' => null,
'user_id' => null,
'seat_id' => 'int32',
'control_id' => 'int32',
're_connect' => 'int32'    ];

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
        'party_id' => 'partyId',
'user_id' => 'userId',
'seat_id' => 'seatId',
'control_id' => 'controlId',
're_connect' => 'reConnect'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'party_id' => 'setPartyId',
'user_id' => 'setUserId',
'seat_id' => 'setSeatId',
'control_id' => 'setControlId',
're_connect' => 'setReConnect'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'party_id' => 'getPartyId',
'user_id' => 'getUserId',
'seat_id' => 'getSeatId',
'control_id' => 'getControlId',
're_connect' => 'getReConnect'    ];

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
        $this->container['party_id'] = isset($data['party_id']) ? $data['party_id'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['seat_id'] = isset($data['seat_id']) ? $data['seat_id'] : null;
        $this->container['control_id'] = isset($data['control_id']) ? $data['control_id'] : null;
        $this->container['re_connect'] = isset($data['re_connect']) ? $data['re_connect'] : null;
    }


    /**
     * Gets party_id
     *
     * @return string
     */
    public function getPartyId()
    {
        return $this->container['party_id'];
    }

    /**
     * Sets party_id
     *
     * @param string $party_id 派对id
     *
     * @return $this
     */
    public function setPartyId($party_id)
    {
        $this->container['party_id'] = $party_id;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id 用户ID
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets seat_id
     *
     * @return int
     */
    public function getSeatId()
    {
        return $this->container['seat_id'];
    }

    /**
     * Sets seat_id
     *
     * @param int $seat_id 派对坐次
     *
     * @return $this
     */
    public function setSeatId($seat_id)
    {
        $this->container['seat_id'] = $seat_id;

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
     * @param int $control_id 项目
     *
     * @return $this
     */
    public function setControlId($control_id)
    {
        $this->container['control_id'] = $control_id;

        return $this;
    }

    /**
     * Gets re_connect
     *
     * @return int
     */
    public function getReConnect()
    {
        return $this->container['re_connect'];
    }

    /**
     * Sets re_connect
     *
     * @param int $re_connect re_connect
     *
     * @return $this
     */
    public function setReConnect($re_connect)
    {
        $this->container['re_connect'] = $re_connect;

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
