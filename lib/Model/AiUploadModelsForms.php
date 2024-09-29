<?php
/**
 * AiUploadModelsForms
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
 * AiUploadModelsForms Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class AiUploadModelsForms implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'AiUploadModelsForms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'model_type' => 'string',
'model_file_type' => 'string',
'model_series' => 'string',
'model_file_name' => 'string',
'desc' => 'string',
'url' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'model_type' => null,
'model_file_type' => null,
'model_series' => null,
'model_file_name' => null,
'desc' => null,
'url' => null    ];

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
        'model_type' => 'modelType',
'model_file_type' => 'modelFileType',
'model_series' => 'modelSeries',
'model_file_name' => 'modelFileName',
'desc' => 'desc',
'url' => 'url'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'model_type' => 'setModelType',
'model_file_type' => 'setModelFileType',
'model_series' => 'setModelSeries',
'model_file_name' => 'setModelFileName',
'desc' => 'setDesc',
'url' => 'setUrl'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'model_type' => 'getModelType',
'model_file_type' => 'getModelFileType',
'model_series' => 'getModelSeries',
'model_file_name' => 'getModelFileName',
'desc' => 'getDesc',
'url' => 'getUrl'    ];

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
        $this->container['model_type'] = isset($data['model_type']) ? $data['model_type'] : null;
        $this->container['model_file_type'] = isset($data['model_file_type']) ? $data['model_file_type'] : null;
        $this->container['model_series'] = isset($data['model_series']) ? $data['model_series'] : null;
        $this->container['model_file_name'] = isset($data['model_file_name']) ? $data['model_file_name'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
    }


    /**
     * Gets model_type
     *
     * @return string
     */
    public function getModelType()
    {
        return $this->container['model_type'];
    }

    /**
     * Sets model_type
     *
     * @param string $model_type model_type
     *
     * @return $this
     */
    public function setModelType($model_type)
    {
        $this->container['model_type'] = $model_type;

        return $this;
    }

    /**
     * Gets model_file_type
     *
     * @return string
     */
    public function getModelFileType()
    {
        return $this->container['model_file_type'];
    }

    /**
     * Sets model_file_type
     *
     * @param string $model_file_type model_file_type
     *
     * @return $this
     */
    public function setModelFileType($model_file_type)
    {
        $this->container['model_file_type'] = $model_file_type;

        return $this;
    }

    /**
     * Gets model_series
     *
     * @return string
     */
    public function getModelSeries()
    {
        return $this->container['model_series'];
    }

    /**
     * Sets model_series
     *
     * @param string $model_series model_series
     *
     * @return $this
     */
    public function setModelSeries($model_series)
    {
        $this->container['model_series'] = $model_series;

        return $this;
    }

    /**
     * Gets model_file_name
     *
     * @return string
     */
    public function getModelFileName()
    {
        return $this->container['model_file_name'];
    }

    /**
     * Sets model_file_name
     *
     * @param string $model_file_name model_file_name
     *
     * @return $this
     */
    public function setModelFileName($model_file_name)
    {
        $this->container['model_file_name'] = $model_file_name;

        return $this;
    }

    /**
     * Gets desc
     *
     * @return string
     */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
     * Sets desc
     *
     * @param string $desc desc
     *
     * @return $this
     */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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
