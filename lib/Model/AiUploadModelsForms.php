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

namespace Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model;

use \ArrayAccess;
use \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ObjectSerializer;

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
'model_name' => 'string',
'model_file_path' => 'string',
'model_files' => '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUploadModelsFormsModelFiles[]',
'desc' => 'string',
'model_file_type' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'model_type' => null,
'model_name' => null,
'model_file_path' => null,
'model_files' => null,
'desc' => null,
'model_file_type' => null    ];

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
'model_name' => 'modelName',
'model_file_path' => 'modelFilePath',
'model_files' => 'modelFiles',
'desc' => 'desc',
'model_file_type' => 'modelFileType'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'model_type' => 'setModelType',
'model_name' => 'setModelName',
'model_file_path' => 'setModelFilePath',
'model_files' => 'setModelFiles',
'desc' => 'setDesc',
'model_file_type' => 'setModelFileType'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'model_type' => 'getModelType',
'model_name' => 'getModelName',
'model_file_path' => 'getModelFilePath',
'model_files' => 'getModelFiles',
'desc' => 'getDesc',
'model_file_type' => 'getModelFileType'    ];

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
        $this->container['model_name'] = isset($data['model_name']) ? $data['model_name'] : null;
        $this->container['model_file_path'] = isset($data['model_file_path']) ? $data['model_file_path'] : null;
        $this->container['model_files'] = isset($data['model_files']) ? $data['model_files'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['model_file_type'] = isset($data['model_file_type']) ? $data['model_file_type'] : null;
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
     * Gets model_name
     *
     * @return string
     */
    public function getModelName()
    {
        return $this->container['model_name'];
    }

    /**
     * Sets model_name
     *
     * @param string $model_name model_name
     *
     * @return $this
     */
    public function setModelName($model_name)
    {
        $this->container['model_name'] = $model_name;

        return $this;
    }

    /**
     * Gets model_file_path
     *
     * @return string
     */
    public function getModelFilePath()
    {
        return $this->container['model_file_path'];
    }

    /**
     * Sets model_file_path
     *
     * @param string $model_file_path model_file_path
     *
     * @return $this
     */
    public function setModelFilePath($model_file_path)
    {
        $this->container['model_file_path'] = $model_file_path;

        return $this;
    }

    /**
     * Gets model_files
     *
     * @return \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUploadModelsFormsModelFiles[]
     */
    public function getModelFiles()
    {
        return $this->container['model_files'];
    }

    /**
     * Sets model_files
     *
     * @param \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUploadModelsFormsModelFiles[] $model_files model_files
     *
     * @return $this
     */
    public function setModelFiles($model_files)
    {
        $this->container['model_files'] = $model_files;

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
