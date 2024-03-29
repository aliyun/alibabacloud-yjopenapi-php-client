<?php
/**
 * ConsoleAdminListVersionDeployInstancesModelDataList
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
 * ConsoleAdminListVersionDeployInstancesModelDataList Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class ConsoleAdminListVersionDeployInstancesModelDataList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'ConsoleAdminListVersionDeployInstancesModelDataList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'cloud_game_instance_id' => 'string',
'cloud_game_instance_name' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'cloud_game_instance_id' => null,
'cloud_game_instance_name' => null    ];

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
'cloud_game_instance_name' => 'cloudGameInstanceName'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cloud_game_instance_id' => 'setCloudGameInstanceId',
'cloud_game_instance_name' => 'setCloudGameInstanceName'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cloud_game_instance_id' => 'getCloudGameInstanceId',
'cloud_game_instance_name' => 'getCloudGameInstanceName'    ];

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
     * @param string $cloud_game_instance_id 实例ID
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
     * @param string $cloud_game_instance_name 实例名称
     *
     * @return $this
     */
    public function setCloudGameInstanceName($cloud_game_instance_name)
    {
        $this->container['cloud_game_instance_name'] = $cloud_game_instance_name;

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
