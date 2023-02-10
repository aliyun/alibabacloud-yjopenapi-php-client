<?php
/**
 * UsercontollerListLatestGameArchiveResultModelItems
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
 * UsercontollerListLatestGameArchiveResultModelItems Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class UsercontollerListLatestGameArchiveResultModelItems implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'UsercontollerListLatestGameArchiveResultModelItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'account_id' => 'string',
'game_id' => 'string',
'archive_id' => 'string',
'archive_time' => 'int',
'tag_status' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'account_id' => null,
'game_id' => null,
'archive_id' => null,
'archive_time' => 'int64',
'tag_status' => null    ];

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
        'account_id' => 'accountId',
'game_id' => 'gameId',
'archive_id' => 'archiveId',
'archive_time' => 'archiveTime',
'tag_status' => 'tagStatus'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
'game_id' => 'setGameId',
'archive_id' => 'setArchiveId',
'archive_time' => 'setArchiveTime',
'tag_status' => 'setTagStatus'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
'game_id' => 'getGameId',
'archive_id' => 'getArchiveId',
'archive_time' => 'getArchiveTime',
'tag_status' => 'getTagStatus'    ];

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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['game_id'] = isset($data['game_id']) ? $data['game_id'] : null;
        $this->container['archive_id'] = isset($data['archive_id']) ? $data['archive_id'] : null;
        $this->container['archive_time'] = isset($data['archive_time']) ? $data['archive_time'] : null;
        $this->container['tag_status'] = isset($data['tag_status']) ? $data['tag_status'] : null;
    }


    /**
     * Gets account_id
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string $account_id 用户ID
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets game_id
     *
     * @return string
     */
    public function getGameId()
    {
        return $this->container['game_id'];
    }

    /**
     * Sets game_id
     *
     * @param string $game_id 游戏ID
     *
     * @return $this
     */
    public function setGameId($game_id)
    {
        $this->container['game_id'] = $game_id;

        return $this;
    }

    /**
     * Gets archive_id
     *
     * @return string
     */
    public function getArchiveId()
    {
        return $this->container['archive_id'];
    }

    /**
     * Sets archive_id
     *
     * @param string $archive_id 存档ID
     *
     * @return $this
     */
    public function setArchiveId($archive_id)
    {
        $this->container['archive_id'] = $archive_id;

        return $this;
    }

    /**
     * Gets archive_time
     *
     * @return int
     */
    public function getArchiveTime()
    {
        return $this->container['archive_time'];
    }

    /**
     * Sets archive_time
     *
     * @param int $archive_time 存档时间，时间戳
     *
     * @return $this
     */
    public function setArchiveTime($archive_time)
    {
        $this->container['archive_time'] = $archive_time;

        return $this;
    }

    /**
     * Gets tag_status
     *
     * @return int
     */
    public function getTagStatus()
    {
        return $this->container['tag_status'];
    }

    /**
     * Sets tag_status
     *
     * @param int $tag_status 打标状态
     *
     * @return $this
     */
    public function setTagStatus($tag_status)
    {
        $this->container['tag_status'] = $tag_status;

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
