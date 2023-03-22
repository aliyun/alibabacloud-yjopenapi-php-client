<?php
/**
 * InteractiveJoinPartyResultModel
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
 * InteractiveJoinPartyResultModel Class Doc Comment
 *
 * @category Class
 * @description 获取结果
 * @package  Yjopenapi\Client
 */
class InteractiveJoinPartyResultModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'InteractiveJoinPartyResultModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'player_list' => '\Yjopenapi\Client\Model\InteractiveJoinPartyResultModelPlayerList[]',
'ext_info' => '\Yjopenapi\Client\Model\InteractiveJoinPartyResultExtInfo'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'player_list' => null,
'ext_info' => null    ];

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
        'player_list' => 'playerList',
'ext_info' => 'extInfo'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'player_list' => 'setPlayerList',
'ext_info' => 'setExtInfo'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'player_list' => 'getPlayerList',
'ext_info' => 'getExtInfo'    ];

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
        $this->container['player_list'] = isset($data['player_list']) ? $data['player_list'] : null;
        $this->container['ext_info'] = isset($data['ext_info']) ? $data['ext_info'] : null;
    }


    /**
     * Gets player_list
     *
     * @return \Yjopenapi\Client\Model\InteractiveJoinPartyResultModelPlayerList[]
     */
    public function getPlayerList()
    {
        return $this->container['player_list'];
    }

    /**
     * Sets player_list
     *
     * @param \Yjopenapi\Client\Model\InteractiveJoinPartyResultModelPlayerList[] $player_list player_list
     *
     * @return $this
     */
    public function setPlayerList($player_list)
    {
        $this->container['player_list'] = $player_list;

        return $this;
    }

    /**
     * Gets ext_info
     *
     * @return \Yjopenapi\Client\Model\InteractiveJoinPartyResultExtInfo
     */
    public function getExtInfo()
    {
        return $this->container['ext_info'];
    }

    /**
     * Sets ext_info
     *
     * @param \Yjopenapi\Client\Model\InteractiveJoinPartyResultExtInfo $ext_info ext_info
     *
     * @return $this
     */
    public function setExtInfo($ext_info)
    {
        $this->container['ext_info'] = $ext_info;

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
