<?php
/**
 * GetStockResultModelInstanceStockList
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
 * GetStockResultModelInstanceStockList Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class GetStockResultModelInstanceStockList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'GetStockResultModelInstanceStockList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'instance_id' => 'string',
'instance_game_available_total' => 'int',
'instance_total' => 'int',
'instance_available_total' => 'int',
'instance_game_total' => 'int',
'instance_used_total' => 'int',
'instance_game_used_total' => 'int',
'instance_region_id' => 'string',
'instance_user_level' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'instance_id' => null,
'instance_game_available_total' => null,
'instance_total' => null,
'instance_available_total' => null,
'instance_game_total' => null,
'instance_used_total' => null,
'instance_game_used_total' => null,
'instance_region_id' => null,
'instance_user_level' => null    ];

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
        'instance_id' => 'instanceId',
'instance_game_available_total' => 'instanceGameAvailableTotal',
'instance_total' => 'instanceTotal',
'instance_available_total' => 'instanceAvailableTotal',
'instance_game_total' => 'instanceGameTotal',
'instance_used_total' => 'instanceUsedTotal',
'instance_game_used_total' => 'instanceGameUsedTotal',
'instance_region_id' => 'instanceRegionId',
'instance_user_level' => 'instanceUserLevel'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'instance_id' => 'setInstanceId',
'instance_game_available_total' => 'setInstanceGameAvailableTotal',
'instance_total' => 'setInstanceTotal',
'instance_available_total' => 'setInstanceAvailableTotal',
'instance_game_total' => 'setInstanceGameTotal',
'instance_used_total' => 'setInstanceUsedTotal',
'instance_game_used_total' => 'setInstanceGameUsedTotal',
'instance_region_id' => 'setInstanceRegionId',
'instance_user_level' => 'setInstanceUserLevel'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'instance_id' => 'getInstanceId',
'instance_game_available_total' => 'getInstanceGameAvailableTotal',
'instance_total' => 'getInstanceTotal',
'instance_available_total' => 'getInstanceAvailableTotal',
'instance_game_total' => 'getInstanceGameTotal',
'instance_used_total' => 'getInstanceUsedTotal',
'instance_game_used_total' => 'getInstanceGameUsedTotal',
'instance_region_id' => 'getInstanceRegionId',
'instance_user_level' => 'getInstanceUserLevel'    ];

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
        $this->container['instance_id'] = isset($data['instance_id']) ? $data['instance_id'] : null;
        $this->container['instance_game_available_total'] = isset($data['instance_game_available_total']) ? $data['instance_game_available_total'] : null;
        $this->container['instance_total'] = isset($data['instance_total']) ? $data['instance_total'] : null;
        $this->container['instance_available_total'] = isset($data['instance_available_total']) ? $data['instance_available_total'] : null;
        $this->container['instance_game_total'] = isset($data['instance_game_total']) ? $data['instance_game_total'] : null;
        $this->container['instance_used_total'] = isset($data['instance_used_total']) ? $data['instance_used_total'] : null;
        $this->container['instance_game_used_total'] = isset($data['instance_game_used_total']) ? $data['instance_game_used_total'] : null;
        $this->container['instance_region_id'] = isset($data['instance_region_id']) ? $data['instance_region_id'] : null;
        $this->container['instance_user_level'] = isset($data['instance_user_level']) ? $data['instance_user_level'] : null;
    }


    /**
     * Gets instance_id
     *
     * @return string
     */
    public function getInstanceId()
    {
        return $this->container['instance_id'];
    }

    /**
     * Sets instance_id
     *
     * @param string $instance_id 实例id
     *
     * @return $this
     */
    public function setInstanceId($instance_id)
    {
        $this->container['instance_id'] = $instance_id;

        return $this;
    }

    /**
     * Gets instance_game_available_total
     *
     * @return int
     */
    public function getInstanceGameAvailableTotal()
    {
        return $this->container['instance_game_available_total'];
    }

    /**
     * Sets instance_game_available_total
     *
     * @param int $instance_game_available_total 实例游戏当前可使用路数
     *
     * @return $this
     */
    public function setInstanceGameAvailableTotal($instance_game_available_total)
    {
        $this->container['instance_game_available_total'] = $instance_game_available_total;

        return $this;
    }

    /**
     * Gets instance_total
     *
     * @return int
     */
    public function getInstanceTotal()
    {
        return $this->container['instance_total'];
    }

    /**
     * Sets instance_total
     *
     * @param int $instance_total 实例总路数
     *
     * @return $this
     */
    public function setInstanceTotal($instance_total)
    {
        $this->container['instance_total'] = $instance_total;

        return $this;
    }

    /**
     * Gets instance_available_total
     *
     * @return int
     */
    public function getInstanceAvailableTotal()
    {
        return $this->container['instance_available_total'];
    }

    /**
     * Sets instance_available_total
     *
     * @param int $instance_available_total 实例可用路数
     *
     * @return $this
     */
    public function setInstanceAvailableTotal($instance_available_total)
    {
        $this->container['instance_available_total'] = $instance_available_total;

        return $this;
    }

    /**
     * Gets instance_game_total
     *
     * @return int
     */
    public function getInstanceGameTotal()
    {
        return $this->container['instance_game_total'];
    }

    /**
     * Sets instance_game_total
     *
     * @param int $instance_game_total 实例配置游戏总路数
     *
     * @return $this
     */
    public function setInstanceGameTotal($instance_game_total)
    {
        $this->container['instance_game_total'] = $instance_game_total;

        return $this;
    }

    /**
     * Gets instance_used_total
     *
     * @return int
     */
    public function getInstanceUsedTotal()
    {
        return $this->container['instance_used_total'];
    }

    /**
     * Sets instance_used_total
     *
     * @param int $instance_used_total 实例已用路数
     *
     * @return $this
     */
    public function setInstanceUsedTotal($instance_used_total)
    {
        $this->container['instance_used_total'] = $instance_used_total;

        return $this;
    }

    /**
     * Gets instance_game_used_total
     *
     * @return int
     */
    public function getInstanceGameUsedTotal()
    {
        return $this->container['instance_game_used_total'];
    }

    /**
     * Sets instance_game_used_total
     *
     * @param int $instance_game_used_total 实例游戏当前已使用路数
     *
     * @return $this
     */
    public function setInstanceGameUsedTotal($instance_game_used_total)
    {
        $this->container['instance_game_used_total'] = $instance_game_used_total;

        return $this;
    }

    /**
     * Gets instance_region_id
     *
     * @return string
     */
    public function getInstanceRegionId()
    {
        return $this->container['instance_region_id'];
    }

    /**
     * Sets instance_region_id
     *
     * @param string $instance_region_id 实例大区ID
     *
     * @return $this
     */
    public function setInstanceRegionId($instance_region_id)
    {
        $this->container['instance_region_id'] = $instance_region_id;

        return $this;
    }

    /**
     * Gets instance_user_level
     *
     * @return int
     */
    public function getInstanceUserLevel()
    {
        return $this->container['instance_user_level'];
    }

    /**
     * Sets instance_user_level
     *
     * @param int $instance_user_level 实例调度等级
     *
     * @return $this
     */
    public function setInstanceUserLevel($instance_user_level)
    {
        $this->container['instance_user_level'] = $instance_user_level;

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
