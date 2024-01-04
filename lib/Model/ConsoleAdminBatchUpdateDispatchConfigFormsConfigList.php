<?php
/**
 * ConsoleAdminBatchUpdateDispatchConfigFormsConfigList
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

namespace Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model;

use \ArrayAccess;
use \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ObjectSerializer;

/**
 * ConsoleAdminBatchUpdateDispatchConfigFormsConfigList Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class ConsoleAdminBatchUpdateDispatchConfigFormsConfigList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'ConsoleAdminBatchUpdateDispatchConfigFormsConfigList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'mix_game_id' => 'string',
'exclusive_concurrency' => 'int',
'max_concurrency_percent' => 'string',
'exclusive_concurrency_percent' => 'string',
'priority' => 'int',
'max_concurrency' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'mix_game_id' => null,
'exclusive_concurrency' => null,
'max_concurrency_percent' => null,
'exclusive_concurrency_percent' => null,
'priority' => null,
'max_concurrency' => null    ];

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
        'mix_game_id' => 'mixGameId',
'exclusive_concurrency' => 'exclusiveConcurrency',
'max_concurrency_percent' => 'maxConcurrencyPercent',
'exclusive_concurrency_percent' => 'exclusiveConcurrencyPercent',
'priority' => 'priority',
'max_concurrency' => 'maxConcurrency'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mix_game_id' => 'setMixGameId',
'exclusive_concurrency' => 'setExclusiveConcurrency',
'max_concurrency_percent' => 'setMaxConcurrencyPercent',
'exclusive_concurrency_percent' => 'setExclusiveConcurrencyPercent',
'priority' => 'setPriority',
'max_concurrency' => 'setMaxConcurrency'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mix_game_id' => 'getMixGameId',
'exclusive_concurrency' => 'getExclusiveConcurrency',
'max_concurrency_percent' => 'getMaxConcurrencyPercent',
'exclusive_concurrency_percent' => 'getExclusiveConcurrencyPercent',
'priority' => 'getPriority',
'max_concurrency' => 'getMaxConcurrency'    ];

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
        $this->container['mix_game_id'] = isset($data['mix_game_id']) ? $data['mix_game_id'] : null;
        $this->container['exclusive_concurrency'] = isset($data['exclusive_concurrency']) ? $data['exclusive_concurrency'] : null;
        $this->container['max_concurrency_percent'] = isset($data['max_concurrency_percent']) ? $data['max_concurrency_percent'] : null;
        $this->container['exclusive_concurrency_percent'] = isset($data['exclusive_concurrency_percent']) ? $data['exclusive_concurrency_percent'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['max_concurrency'] = isset($data['max_concurrency']) ? $data['max_concurrency'] : null;
    }


    /**
     * Gets mix_game_id
     *
     * @return string
     */
    public function getMixGameId()
    {
        return $this->container['mix_game_id'];
    }

    /**
     * Sets mix_game_id
     *
     * @param string $mix_game_id 编码游戏id
     *
     * @return $this
     */
    public function setMixGameId($mix_game_id)
    {
        $this->container['mix_game_id'] = $mix_game_id;

        return $this;
    }

    /**
     * Gets exclusive_concurrency
     *
     * @return int
     */
    public function getExclusiveConcurrency()
    {
        return $this->container['exclusive_concurrency'];
    }

    /**
     * Sets exclusive_concurrency
     *
     * @param int $exclusive_concurrency 独占并发数
     *
     * @return $this
     */
    public function setExclusiveConcurrency($exclusive_concurrency)
    {
        $this->container['exclusive_concurrency'] = $exclusive_concurrency;

        return $this;
    }

    /**
     * Gets max_concurrency_percent
     *
     * @return string
     */
    public function getMaxConcurrencyPercent()
    {
        return $this->container['max_concurrency_percent'];
    }

    /**
     * Sets max_concurrency_percent
     *
     * @param string $max_concurrency_percent 最大并发百分比-Double类型[0.0,1.0]
     *
     * @return $this
     */
    public function setMaxConcurrencyPercent($max_concurrency_percent)
    {
        $this->container['max_concurrency_percent'] = $max_concurrency_percent;

        return $this;
    }

    /**
     * Gets exclusive_concurrency_percent
     *
     * @return string
     */
    public function getExclusiveConcurrencyPercent()
    {
        return $this->container['exclusive_concurrency_percent'];
    }

    /**
     * Sets exclusive_concurrency_percent
     *
     * @param string $exclusive_concurrency_percent 独占并发百分比--Double类型[0.0,1.0]
     *
     * @return $this
     */
    public function setExclusiveConcurrencyPercent($exclusive_concurrency_percent)
    {
        $this->container['exclusive_concurrency_percent'] = $exclusive_concurrency_percent;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int $priority 调度等级
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets max_concurrency
     *
     * @return int
     */
    public function getMaxConcurrency()
    {
        return $this->container['max_concurrency'];
    }

    /**
     * Sets max_concurrency
     *
     * @param int $max_concurrency 最大并发数
     *
     * @return $this
     */
    public function setMaxConcurrency($max_concurrency)
    {
        $this->container['max_concurrency'] = $max_concurrency;

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
