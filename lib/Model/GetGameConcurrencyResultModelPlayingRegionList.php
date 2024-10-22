<?php
/**
 * GetGameConcurrencyResultModelPlayingRegionList
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

namespace Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model;

use \ArrayAccess;
use \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ObjectSerializer;

/**
 * GetGameConcurrencyResultModelPlayingRegionList Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class GetGameConcurrencyResultModelPlayingRegionList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'GetGameConcurrencyResultModelPlayingRegionList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'ccu' => 'int',
'region_id' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'ccu' => 'int64',
'region_id' => null    ];

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
        'ccu' => 'ccu',
'region_id' => 'regionId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ccu' => 'setCcu',
'region_id' => 'setRegionId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ccu' => 'getCcu',
'region_id' => 'getRegionId'    ];

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
        $this->container['ccu'] = isset($data['ccu']) ? $data['ccu'] : null;
        $this->container['region_id'] = isset($data['region_id']) ? $data['region_id'] : null;
    }


    /**
     * Gets ccu
     *
     * @return int
     */
    public function getCcu()
    {
        return $this->container['ccu'];
    }

    /**
     * Sets ccu
     *
     * @param int $ccu 当前游戏指定region游戏中人数
     *
     * @return $this
     */
    public function setCcu($ccu)
    {
        $this->container['ccu'] = $ccu;

        return $this;
    }

    /**
     * Gets region_id
     *
     * @return string
     */
    public function getRegionId()
    {
        return $this->container['region_id'];
    }

    /**
     * Sets region_id
     *
     * @param string $region_id 当前统计的regionId
     *
     * @return $this
     */
    public function setRegionId($region_id)
    {
        $this->container['region_id'] = $region_id;

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
