<?php
/**
 * ConsoleAdminListActivateableInstancesResultModelDataList
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

namespace Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model;

use \ArrayAccess;
use \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ObjectSerializer;

/**
 * ConsoleAdminListActivateableInstancesResultModelDataList Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class ConsoleAdminListActivateableInstancesResultModelDataList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'ConsoleAdminListActivateableInstancesResultModelDataList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'cloud_game_instance_id' => 'string',
'cloud_game_instance_name' => 'string',
'container_count' => 'int',
'max_concurrency' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'cloud_game_instance_id' => null,
'cloud_game_instance_name' => null,
'container_count' => null,
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
        'cloud_game_instance_id' => 'cloudGameInstanceId',
'cloud_game_instance_name' => 'cloudGameInstanceName',
'container_count' => 'containerCount',
'max_concurrency' => 'maxConcurrency'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cloud_game_instance_id' => 'setCloudGameInstanceId',
'cloud_game_instance_name' => 'setCloudGameInstanceName',
'container_count' => 'setContainerCount',
'max_concurrency' => 'setMaxConcurrency'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cloud_game_instance_id' => 'getCloudGameInstanceId',
'cloud_game_instance_name' => 'getCloudGameInstanceName',
'container_count' => 'getContainerCount',
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
        $this->container['cloud_game_instance_id'] = isset($data['cloud_game_instance_id']) ? $data['cloud_game_instance_id'] : null;
        $this->container['cloud_game_instance_name'] = isset($data['cloud_game_instance_name']) ? $data['cloud_game_instance_name'] : null;
        $this->container['container_count'] = isset($data['container_count']) ? $data['container_count'] : null;
        $this->container['max_concurrency'] = isset($data['max_concurrency']) ? $data['max_concurrency'] : null;
    }


    /**
     * Gets cloud_game_instance_id
     *
     * @return string
     */
    public function getCloudGameInstanceId()
    {
        return $this->container['cloud_game_instance_id'];
    }

    /**
     * Sets cloud_game_instance_id
     *
     * @param string $cloud_game_instance_id cloud_game_instance_id
     *
     * @return $this
     */
    public function setCloudGameInstanceId($cloud_game_instance_id)
    {
        $this->container['cloud_game_instance_id'] = $cloud_game_instance_id;

        return $this;
    }

    /**
     * Gets cloud_game_instance_name
     *
     * @return string
     */
    public function getCloudGameInstanceName()
    {
        return $this->container['cloud_game_instance_name'];
    }

    /**
     * Sets cloud_game_instance_name
     *
     * @param string $cloud_game_instance_name cloud_game_instance_name
     *
     * @return $this
     */
    public function setCloudGameInstanceName($cloud_game_instance_name)
    {
        $this->container['cloud_game_instance_name'] = $cloud_game_instance_name;

        return $this;
    }

    /**
     * Gets container_count
     *
     * @return int
     */
    public function getContainerCount()
    {
        return $this->container['container_count'];
    }

    /**
     * Sets container_count
     *
     * @param int $container_count container_count
     *
     * @return $this
     */
    public function setContainerCount($container_count)
    {
        $this->container['container_count'] = $container_count;

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
     * @param int $max_concurrency max_concurrency
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
