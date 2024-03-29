<?php
/**
 * MultiplayQueryResultModel
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
 * MultiplayQueryResultModel Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class MultiplayQueryResultModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'MultiplayQueryResultModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'data_ver' => 'string',
'mp_id' => 'string',
'config' => '\Yjopenapi\Client\Model\MultiplayQueryResultModelConfig',
'creator_token_id' => 'string',
'end_ts' => 'int',
'tokens' => '\Yjopenapi\Client\Model\MultiplayQueryResultModelTokens[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'data_ver' => null,
'mp_id' => null,
'config' => null,
'creator_token_id' => null,
'end_ts' => 'int64',
'tokens' => null    ];

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
        'data_ver' => 'dataVer',
'mp_id' => 'mpId',
'config' => 'config',
'creator_token_id' => 'creatorTokenId',
'end_ts' => 'endTs',
'tokens' => 'tokens'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data_ver' => 'setDataVer',
'mp_id' => 'setMpId',
'config' => 'setConfig',
'creator_token_id' => 'setCreatorTokenId',
'end_ts' => 'setEndTs',
'tokens' => 'setTokens'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data_ver' => 'getDataVer',
'mp_id' => 'getMpId',
'config' => 'getConfig',
'creator_token_id' => 'getCreatorTokenId',
'end_ts' => 'getEndTs',
'tokens' => 'getTokens'    ];

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
        $this->container['data_ver'] = isset($data['data_ver']) ? $data['data_ver'] : null;
        $this->container['mp_id'] = isset($data['mp_id']) ? $data['mp_id'] : null;
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['creator_token_id'] = isset($data['creator_token_id']) ? $data['creator_token_id'] : null;
        $this->container['end_ts'] = isset($data['end_ts']) ? $data['end_ts'] : null;
        $this->container['tokens'] = isset($data['tokens']) ? $data['tokens'] : null;
    }


    /**
     * Gets data_ver
     *
     * @return string
     */
    public function getDataVer()
    {
        return $this->container['data_ver'];
    }

    /**
     * Sets data_ver
     *
     * @param string $data_ver 当前联机数据版本号
     *
     * @return $this
     */
    public function setDataVer($data_ver)
    {
        $this->container['data_ver'] = $data_ver;

        return $this;
    }

    /**
     * Gets mp_id
     *
     * @return string
     */
    public function getMpId()
    {
        return $this->container['mp_id'];
    }

    /**
     * Sets mp_id
     *
     * @param string $mp_id 联机Id
     *
     * @return $this
     */
    public function setMpId($mp_id)
    {
        $this->container['mp_id'] = $mp_id;

        return $this;
    }

    /**
     * Gets config
     *
     * @return \Yjopenapi\Client\Model\MultiplayQueryResultModelConfig
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     *
     * @param \Yjopenapi\Client\Model\MultiplayQueryResultModelConfig $config config
     *
     * @return $this
     */
    public function setConfig($config)
    {
        $this->container['config'] = $config;

        return $this;
    }

    /**
     * Gets creator_token_id
     *
     * @return string
     */
    public function getCreatorTokenId()
    {
        return $this->container['creator_token_id'];
    }

    /**
     * Sets creator_token_id
     *
     * @param string $creator_token_id 创建者tokenId
     *
     * @return $this
     */
    public function setCreatorTokenId($creator_token_id)
    {
        $this->container['creator_token_id'] = $creator_token_id;

        return $this;
    }

    /**
     * Gets end_ts
     *
     * @return int
     */
    public function getEndTs()
    {
        return $this->container['end_ts'];
    }

    /**
     * Sets end_ts
     *
     * @param int $end_ts 联机结束时间
     *
     * @return $this
     */
    public function setEndTs($end_ts)
    {
        $this->container['end_ts'] = $end_ts;

        return $this;
    }

    /**
     * Gets tokens
     *
     * @return \Yjopenapi\Client\Model\MultiplayQueryResultModelTokens[]
     */
    public function getTokens()
    {
        return $this->container['tokens'];
    }

    /**
     * Sets tokens
     *
     * @param \Yjopenapi\Client\Model\MultiplayQueryResultModelTokens[] $tokens 当前联机玩家列表
     *
     * @return $this
     */
    public function setTokens($tokens)
    {
        $this->container['tokens'] = $tokens;

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
