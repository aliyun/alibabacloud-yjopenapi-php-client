<?php
/**
 * ConsoleAdminListGameVersionsResultModelDataList
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

namespace Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model;

use \ArrayAccess;
use \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ObjectSerializer;

/**
 * ConsoleAdminListGameVersionsResultModelDataList Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class ConsoleAdminListGameVersionsResultModelDataList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'ConsoleAdminListGameVersionsResultModelDataList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'version_id' => 'string',
'adapt_state' => 'string',
'adapt_finish_time' => 'int',
'version_name' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'version_id' => null,
'adapt_state' => null,
'adapt_finish_time' => 'int64',
'version_name' => null    ];

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
        'version_id' => 'versionId',
'adapt_state' => 'adaptState',
'adapt_finish_time' => 'adaptFinishTime',
'version_name' => 'versionName'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'version_id' => 'setVersionId',
'adapt_state' => 'setAdaptState',
'adapt_finish_time' => 'setAdaptFinishTime',
'version_name' => 'setVersionName'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'version_id' => 'getVersionId',
'adapt_state' => 'getAdaptState',
'adapt_finish_time' => 'getAdaptFinishTime',
'version_name' => 'getVersionName'    ];

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
        $this->container['version_id'] = isset($data['version_id']) ? $data['version_id'] : null;
        $this->container['adapt_state'] = isset($data['adapt_state']) ? $data['adapt_state'] : null;
        $this->container['adapt_finish_time'] = isset($data['adapt_finish_time']) ? $data['adapt_finish_time'] : null;
        $this->container['version_name'] = isset($data['version_name']) ? $data['version_name'] : null;
    }


    /**
     * Gets version_id
     *
     * @return string
     */
    public function getVersionId()
    {
        return $this->container['version_id'];
    }

    /**
     * Sets version_id
     *
     * @param string $version_id version_id
     *
     * @return $this
     */
    public function setVersionId($version_id)
    {
        $this->container['version_id'] = $version_id;

        return $this;
    }

    /**
     * Gets adapt_state
     *
     * @return string
     */
    public function getAdaptState()
    {
        return $this->container['adapt_state'];
    }

    /**
     * Sets adapt_state
     *
     * @param string $adapt_state adapt_state
     *
     * @return $this
     */
    public function setAdaptState($adapt_state)
    {
        $this->container['adapt_state'] = $adapt_state;

        return $this;
    }

    /**
     * Gets adapt_finish_time
     *
     * @return int
     */
    public function getAdaptFinishTime()
    {
        return $this->container['adapt_finish_time'];
    }

    /**
     * Sets adapt_finish_time
     *
     * @param int $adapt_finish_time adapt_finish_time
     *
     * @return $this
     */
    public function setAdaptFinishTime($adapt_finish_time)
    {
        $this->container['adapt_finish_time'] = $adapt_finish_time;

        return $this;
    }

    /**
     * Gets version_name
     *
     * @return string
     */
    public function getVersionName()
    {
        return $this->container['version_name'];
    }

    /**
     * Sets version_name
     *
     * @param string $version_name version_name
     *
     * @return $this
     */
    public function setVersionName($version_name)
    {
        $this->container['version_name'] = $version_name;

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
