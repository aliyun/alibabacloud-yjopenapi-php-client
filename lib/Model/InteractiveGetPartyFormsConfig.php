<?php
/**
 * InteractiveGetPartyFormsConfig
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
 * InteractiveGetPartyFormsConfig Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class InteractiveGetPartyFormsConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'InteractiveGetPartyFormsConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'owner_disconnect_keep_alive_time' => 'int',
'joiner_disconnect_keep_alive_time' => 'int',
'no_action_keep_alive_time' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'owner_disconnect_keep_alive_time' => null,
'joiner_disconnect_keep_alive_time' => null,
'no_action_keep_alive_time' => null    ];

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
        'owner_disconnect_keep_alive_time' => 'ownerDisconnectKeepAliveTime',
'joiner_disconnect_keep_alive_time' => 'joinerDisconnectKeepAliveTime',
'no_action_keep_alive_time' => 'noActionKeepAliveTime'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'owner_disconnect_keep_alive_time' => 'setOwnerDisconnectKeepAliveTime',
'joiner_disconnect_keep_alive_time' => 'setJoinerDisconnectKeepAliveTime',
'no_action_keep_alive_time' => 'setNoActionKeepAliveTime'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'owner_disconnect_keep_alive_time' => 'getOwnerDisconnectKeepAliveTime',
'joiner_disconnect_keep_alive_time' => 'getJoinerDisconnectKeepAliveTime',
'no_action_keep_alive_time' => 'getNoActionKeepAliveTime'    ];

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
        $this->container['owner_disconnect_keep_alive_time'] = isset($data['owner_disconnect_keep_alive_time']) ? $data['owner_disconnect_keep_alive_time'] : null;
        $this->container['joiner_disconnect_keep_alive_time'] = isset($data['joiner_disconnect_keep_alive_time']) ? $data['joiner_disconnect_keep_alive_time'] : null;
        $this->container['no_action_keep_alive_time'] = isset($data['no_action_keep_alive_time']) ? $data['no_action_keep_alive_time'] : null;
    }


    /**
     * Gets owner_disconnect_keep_alive_time
     *
     * @return int
     */
    public function getOwnerDisconnectKeepAliveTime()
    {
        return $this->container['owner_disconnect_keep_alive_time'];
    }

    /**
     * Sets owner_disconnect_keep_alive_time
     *
     * @param int $owner_disconnect_keep_alive_time 派对创建者断线保活时间
     *
     * @return $this
     */
    public function setOwnerDisconnectKeepAliveTime($owner_disconnect_keep_alive_time)
    {
        $this->container['owner_disconnect_keep_alive_time'] = $owner_disconnect_keep_alive_time;

        return $this;
    }

    /**
     * Gets joiner_disconnect_keep_alive_time
     *
     * @return int
     */
    public function getJoinerDisconnectKeepAliveTime()
    {
        return $this->container['joiner_disconnect_keep_alive_time'];
    }

    /**
     * Sets joiner_disconnect_keep_alive_time
     *
     * @param int $joiner_disconnect_keep_alive_time 加入派对玩家断线保活时间
     *
     * @return $this
     */
    public function setJoinerDisconnectKeepAliveTime($joiner_disconnect_keep_alive_time)
    {
        $this->container['joiner_disconnect_keep_alive_time'] = $joiner_disconnect_keep_alive_time;

        return $this;
    }

    /**
     * Gets no_action_keep_alive_time
     *
     * @return int
     */
    public function getNoActionKeepAliveTime()
    {
        return $this->container['no_action_keep_alive_time'];
    }

    /**
     * Sets no_action_keep_alive_time
     *
     * @param int $no_action_keep_alive_time 无操作保活时间
     *
     * @return $this
     */
    public function setNoActionKeepAliveTime($no_action_keep_alive_time)
    {
        $this->container['no_action_keep_alive_time'] = $no_action_keep_alive_time;

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
