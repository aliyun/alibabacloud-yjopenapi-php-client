<?php
/**
 * AiCreateNpcRoleFormsKnowledgeBases
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
 * AiCreateNpcRoleFormsKnowledgeBases Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class AiCreateNpcRoleFormsKnowledgeBases implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'AiCreateNpcRoleFormsKnowledgeBases';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'knowledge_base_version_id' => 'int',
'knowledge_base_id' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'knowledge_base_version_id' => 'int64',
'knowledge_base_id' => 'int64'    ];

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
        'knowledge_base_version_id' => 'knowledgeBaseVersionId',
'knowledge_base_id' => 'knowledgeBaseId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'knowledge_base_version_id' => 'setKnowledgeBaseVersionId',
'knowledge_base_id' => 'setKnowledgeBaseId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'knowledge_base_version_id' => 'getKnowledgeBaseVersionId',
'knowledge_base_id' => 'getKnowledgeBaseId'    ];

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
        $this->container['knowledge_base_version_id'] = isset($data['knowledge_base_version_id']) ? $data['knowledge_base_version_id'] : null;
        $this->container['knowledge_base_id'] = isset($data['knowledge_base_id']) ? $data['knowledge_base_id'] : null;
    }


    /**
     * Gets knowledge_base_version_id
     *
     * @return int
     */
    public function getKnowledgeBaseVersionId()
    {
        return $this->container['knowledge_base_version_id'];
    }

    /**
     * Sets knowledge_base_version_id
     *
     * @param int $knowledge_base_version_id knowledge_base_version_id
     *
     * @return $this
     */
    public function setKnowledgeBaseVersionId($knowledge_base_version_id)
    {
        $this->container['knowledge_base_version_id'] = $knowledge_base_version_id;

        return $this;
    }

    /**
     * Gets knowledge_base_id
     *
     * @return int
     */
    public function getKnowledgeBaseId()
    {
        return $this->container['knowledge_base_id'];
    }

    /**
     * Sets knowledge_base_id
     *
     * @param int $knowledge_base_id knowledge_base_id
     *
     * @return $this
     */
    public function setKnowledgeBaseId($knowledge_base_id)
    {
        $this->container['knowledge_base_id'] = $knowledge_base_id;

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
