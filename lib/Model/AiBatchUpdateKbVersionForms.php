<?php
/**
 * AiBatchUpdateKbVersionForms
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

namespace Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model;

use \ArrayAccess;
use \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ObjectSerializer;

/**
 * AiBatchUpdateKbVersionForms Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class AiBatchUpdateKbVersionForms implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'AiBatchUpdateKbVersionForms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'role_ids' => 'int[]',
'kb_id' => 'int',
'kb_version_id' => 'int',
'operator' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'role_ids' => 'int64',
'kb_id' => 'int64',
'kb_version_id' => 'int64',
'operator' => null    ];

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
        'role_ids' => 'roleIds',
'kb_id' => 'kbId',
'kb_version_id' => 'kbVersionId',
'operator' => 'operator'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'role_ids' => 'setRoleIds',
'kb_id' => 'setKbId',
'kb_version_id' => 'setKbVersionId',
'operator' => 'setOperator'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'role_ids' => 'getRoleIds',
'kb_id' => 'getKbId',
'kb_version_id' => 'getKbVersionId',
'operator' => 'getOperator'    ];

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
        $this->container['role_ids'] = isset($data['role_ids']) ? $data['role_ids'] : null;
        $this->container['kb_id'] = isset($data['kb_id']) ? $data['kb_id'] : null;
        $this->container['kb_version_id'] = isset($data['kb_version_id']) ? $data['kb_version_id'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
    }


    /**
     * Gets role_ids
     *
     * @return int[]
     */
    public function getRoleIds()
    {
        return $this->container['role_ids'];
    }

    /**
     * Sets role_ids
     *
     * @param int[] $role_ids role_ids
     *
     * @return $this
     */
    public function setRoleIds($role_ids)
    {
        $this->container['role_ids'] = $role_ids;

        return $this;
    }

    /**
     * Gets kb_id
     *
     * @return int
     */
    public function getKbId()
    {
        return $this->container['kb_id'];
    }

    /**
     * Sets kb_id
     *
     * @param int $kb_id kb_id
     *
     * @return $this
     */
    public function setKbId($kb_id)
    {
        $this->container['kb_id'] = $kb_id;

        return $this;
    }

    /**
     * Gets kb_version_id
     *
     * @return int
     */
    public function getKbVersionId()
    {
        return $this->container['kb_version_id'];
    }

    /**
     * Sets kb_version_id
     *
     * @param int $kb_version_id kb_version_id
     *
     * @return $this
     */
    public function setKbVersionId($kb_version_id)
    {
        $this->container['kb_version_id'] = $kb_version_id;

        return $this;
    }

    /**
     * Gets operator
     *
     * @return string
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     *
     * @param string $operator operator
     *
     * @return $this
     */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;

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
