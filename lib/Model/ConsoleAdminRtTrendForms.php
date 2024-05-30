<?php
/**
 * ConsoleAdminRtTrendForms
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

namespace Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model;

use \ArrayAccess;
use \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ObjectSerializer;

/**
 * ConsoleAdminRtTrendForms Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class ConsoleAdminRtTrendForms implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'ConsoleAdminRtTrendForms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'group_type' => 'string',
'indicator_types' => 'string',
'mix_game_ids' => 'string',
'project_ids' => 'string',
'query_time_start' => 'int',
'query_time_end' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'group_type' => null,
'indicator_types' => null,
'mix_game_ids' => null,
'project_ids' => null,
'query_time_start' => 'int64',
'query_time_end' => 'int64'    ];

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
        'group_type' => 'groupType',
'indicator_types' => 'indicatorTypes',
'mix_game_ids' => 'mixGameIds',
'project_ids' => 'projectIds',
'query_time_start' => 'queryTimeStart',
'query_time_end' => 'queryTimeEnd'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'group_type' => 'setGroupType',
'indicator_types' => 'setIndicatorTypes',
'mix_game_ids' => 'setMixGameIds',
'project_ids' => 'setProjectIds',
'query_time_start' => 'setQueryTimeStart',
'query_time_end' => 'setQueryTimeEnd'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'group_type' => 'getGroupType',
'indicator_types' => 'getIndicatorTypes',
'mix_game_ids' => 'getMixGameIds',
'project_ids' => 'getProjectIds',
'query_time_start' => 'getQueryTimeStart',
'query_time_end' => 'getQueryTimeEnd'    ];

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
        $this->container['group_type'] = isset($data['group_type']) ? $data['group_type'] : null;
        $this->container['indicator_types'] = isset($data['indicator_types']) ? $data['indicator_types'] : null;
        $this->container['mix_game_ids'] = isset($data['mix_game_ids']) ? $data['mix_game_ids'] : null;
        $this->container['project_ids'] = isset($data['project_ids']) ? $data['project_ids'] : null;
        $this->container['query_time_start'] = isset($data['query_time_start']) ? $data['query_time_start'] : null;
        $this->container['query_time_end'] = isset($data['query_time_end']) ? $data['query_time_end'] : null;
    }


    /**
     * Gets group_type
     *
     * @return string
     */
    public function getGroupType()
    {
        return $this->container['group_type'];
    }

    /**
     * Sets group_type
     *
     * @param string $group_type group_type
     *
     * @return $this
     */
    public function setGroupType($group_type)
    {
        $this->container['group_type'] = $group_type;

        return $this;
    }

    /**
     * Gets indicator_types
     *
     * @return string
     */
    public function getIndicatorTypes()
    {
        return $this->container['indicator_types'];
    }

    /**
     * Sets indicator_types
     *
     * @param string $indicator_types indicator_types
     *
     * @return $this
     */
    public function setIndicatorTypes($indicator_types)
    {
        $this->container['indicator_types'] = $indicator_types;

        return $this;
    }

    /**
     * Gets mix_game_ids
     *
     * @return string
     */
    public function getMixGameIds()
    {
        return $this->container['mix_game_ids'];
    }

    /**
     * Sets mix_game_ids
     *
     * @param string $mix_game_ids mix_game_ids
     *
     * @return $this
     */
    public function setMixGameIds($mix_game_ids)
    {
        $this->container['mix_game_ids'] = $mix_game_ids;

        return $this;
    }

    /**
     * Gets project_ids
     *
     * @return string
     */
    public function getProjectIds()
    {
        return $this->container['project_ids'];
    }

    /**
     * Sets project_ids
     *
     * @param string $project_ids project_ids
     *
     * @return $this
     */
    public function setProjectIds($project_ids)
    {
        $this->container['project_ids'] = $project_ids;

        return $this;
    }

    /**
     * Gets query_time_start
     *
     * @return int
     */
    public function getQueryTimeStart()
    {
        return $this->container['query_time_start'];
    }

    /**
     * Sets query_time_start
     *
     * @param int $query_time_start query_time_start
     *
     * @return $this
     */
    public function setQueryTimeStart($query_time_start)
    {
        $this->container['query_time_start'] = $query_time_start;

        return $this;
    }

    /**
     * Gets query_time_end
     *
     * @return int
     */
    public function getQueryTimeEnd()
    {
        return $this->container['query_time_end'];
    }

    /**
     * Sets query_time_end
     *
     * @param int $query_time_end query_time_end
     *
     * @return $this
     */
    public function setQueryTimeEnd($query_time_end)
    {
        $this->container['query_time_end'] = $query_time_end;

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
