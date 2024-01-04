<?php
/**
 * AdaptCreateAndSubmitAllForms
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
 * AdaptCreateAndSubmitAllForms Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class AdaptCreateAndSubmitAllForms implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'AdaptCreateAndSubmitAllForms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'game_id' => 'int',
'game_name' => 'string',
'game_version_id' => 'int',
'game_version' => 'string',
'resolution_list' => 'string',
'frame_rate_list' => 'string',
'platform_type' => 'int',
'source_platform' => 'int',
'records' => 'string',
'mix_game_version_id' => 'string',
'mix_game_id' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'game_id' => 'int32',
'game_name' => null,
'game_version_id' => 'int32',
'game_version' => null,
'resolution_list' => null,
'frame_rate_list' => null,
'platform_type' => 'int32',
'source_platform' => 'int32',
'records' => null,
'mix_game_version_id' => null,
'mix_game_id' => null    ];

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
        'game_id' => 'gameId',
'game_name' => 'gameName',
'game_version_id' => 'gameVersionId',
'game_version' => 'gameVersion',
'resolution_list' => 'resolutionList',
'frame_rate_list' => 'frameRateList',
'platform_type' => 'platformType',
'source_platform' => 'sourcePlatform',
'records' => 'records',
'mix_game_version_id' => 'mixGameVersionId',
'mix_game_id' => 'mixGameId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'game_id' => 'setGameId',
'game_name' => 'setGameName',
'game_version_id' => 'setGameVersionId',
'game_version' => 'setGameVersion',
'resolution_list' => 'setResolutionList',
'frame_rate_list' => 'setFrameRateList',
'platform_type' => 'setPlatformType',
'source_platform' => 'setSourcePlatform',
'records' => 'setRecords',
'mix_game_version_id' => 'setMixGameVersionId',
'mix_game_id' => 'setMixGameId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'game_id' => 'getGameId',
'game_name' => 'getGameName',
'game_version_id' => 'getGameVersionId',
'game_version' => 'getGameVersion',
'resolution_list' => 'getResolutionList',
'frame_rate_list' => 'getFrameRateList',
'platform_type' => 'getPlatformType',
'source_platform' => 'getSourcePlatform',
'records' => 'getRecords',
'mix_game_version_id' => 'getMixGameVersionId',
'mix_game_id' => 'getMixGameId'    ];

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
        $this->container['game_id'] = isset($data['game_id']) ? $data['game_id'] : null;
        $this->container['game_name'] = isset($data['game_name']) ? $data['game_name'] : null;
        $this->container['game_version_id'] = isset($data['game_version_id']) ? $data['game_version_id'] : null;
        $this->container['game_version'] = isset($data['game_version']) ? $data['game_version'] : null;
        $this->container['resolution_list'] = isset($data['resolution_list']) ? $data['resolution_list'] : null;
        $this->container['frame_rate_list'] = isset($data['frame_rate_list']) ? $data['frame_rate_list'] : null;
        $this->container['platform_type'] = isset($data['platform_type']) ? $data['platform_type'] : null;
        $this->container['source_platform'] = isset($data['source_platform']) ? $data['source_platform'] : null;
        $this->container['records'] = isset($data['records']) ? $data['records'] : null;
        $this->container['mix_game_version_id'] = isset($data['mix_game_version_id']) ? $data['mix_game_version_id'] : null;
        $this->container['mix_game_id'] = isset($data['mix_game_id']) ? $data['mix_game_id'] : null;
    }


    /**
     * Gets game_id
     *
     * @return int
     */
    public function getGameId()
    {
        return $this->container['game_id'];
    }

    /**
     * Sets game_id
     *
     * @param int $game_id game_id
     *
     * @return $this
     */
    public function setGameId($game_id)
    {
        $this->container['game_id'] = $game_id;

        return $this;
    }

    /**
     * Gets game_name
     *
     * @return string
     */
    public function getGameName()
    {
        return $this->container['game_name'];
    }

    /**
     * Sets game_name
     *
     * @param string $game_name game_name
     *
     * @return $this
     */
    public function setGameName($game_name)
    {
        $this->container['game_name'] = $game_name;

        return $this;
    }

    /**
     * Gets game_version_id
     *
     * @return int
     */
    public function getGameVersionId()
    {
        return $this->container['game_version_id'];
    }

    /**
     * Sets game_version_id
     *
     * @param int $game_version_id game_version_id
     *
     * @return $this
     */
    public function setGameVersionId($game_version_id)
    {
        $this->container['game_version_id'] = $game_version_id;

        return $this;
    }

    /**
     * Gets game_version
     *
     * @return string
     */
    public function getGameVersion()
    {
        return $this->container['game_version'];
    }

    /**
     * Sets game_version
     *
     * @param string $game_version game_version
     *
     * @return $this
     */
    public function setGameVersion($game_version)
    {
        $this->container['game_version'] = $game_version;

        return $this;
    }

    /**
     * Gets resolution_list
     *
     * @return string
     */
    public function getResolutionList()
    {
        return $this->container['resolution_list'];
    }

    /**
     * Sets resolution_list
     *
     * @param string $resolution_list resolution_list
     *
     * @return $this
     */
    public function setResolutionList($resolution_list)
    {
        $this->container['resolution_list'] = $resolution_list;

        return $this;
    }

    /**
     * Gets frame_rate_list
     *
     * @return string
     */
    public function getFrameRateList()
    {
        return $this->container['frame_rate_list'];
    }

    /**
     * Sets frame_rate_list
     *
     * @param string $frame_rate_list frame_rate_list
     *
     * @return $this
     */
    public function setFrameRateList($frame_rate_list)
    {
        $this->container['frame_rate_list'] = $frame_rate_list;

        return $this;
    }

    /**
     * Gets platform_type
     *
     * @return int
     */
    public function getPlatformType()
    {
        return $this->container['platform_type'];
    }

    /**
     * Sets platform_type
     *
     * @param int $platform_type platform_type
     *
     * @return $this
     */
    public function setPlatformType($platform_type)
    {
        $this->container['platform_type'] = $platform_type;

        return $this;
    }

    /**
     * Gets source_platform
     *
     * @return int
     */
    public function getSourcePlatform()
    {
        return $this->container['source_platform'];
    }

    /**
     * Sets source_platform
     *
     * @param int $source_platform source_platform
     *
     * @return $this
     */
    public function setSourcePlatform($source_platform)
    {
        $this->container['source_platform'] = $source_platform;

        return $this;
    }

    /**
     * Gets records
     *
     * @return string
     */
    public function getRecords()
    {
        return $this->container['records'];
    }

    /**
     * Sets records
     *
     * @param string $records records
     *
     * @return $this
     */
    public function setRecords($records)
    {
        $this->container['records'] = $records;

        return $this;
    }

    /**
     * Gets mix_game_version_id
     *
     * @return string
     */
    public function getMixGameVersionId()
    {
        return $this->container['mix_game_version_id'];
    }

    /**
     * Sets mix_game_version_id
     *
     * @param string $mix_game_version_id mix_game_version_id
     *
     * @return $this
     */
    public function setMixGameVersionId($mix_game_version_id)
    {
        $this->container['mix_game_version_id'] = $mix_game_version_id;

        return $this;
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
     * @param string $mix_game_id mix_game_id
     *
     * @return $this
     */
    public function setMixGameId($mix_game_id)
    {
        $this->container['mix_game_id'] = $mix_game_id;

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
