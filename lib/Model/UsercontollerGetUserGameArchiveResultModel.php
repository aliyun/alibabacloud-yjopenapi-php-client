<?php
/**
 * UsercontollerGetUserGameArchiveResultModel
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
 * UsercontollerGetUserGameArchiveResultModel Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class UsercontollerGetUserGameArchiveResultModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'UsercontollerGetUserGameArchiveResultModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'download_url' => 'string',
'object_md5' => 'string',
'user_game_archive_dto' => '\Yjopenapi\Client\Model\UsercontollerGetUserGameArchiveResultModelUserGameArchiveDTO'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'download_url' => null,
'object_md5' => null,
'user_game_archive_dto' => null    ];

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
        'download_url' => 'downloadUrl',
'object_md5' => 'objectMD5',
'user_game_archive_dto' => 'userGameArchiveDTO'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'download_url' => 'setDownloadUrl',
'object_md5' => 'setObjectMd5',
'user_game_archive_dto' => 'setUserGameArchiveDto'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'download_url' => 'getDownloadUrl',
'object_md5' => 'getObjectMd5',
'user_game_archive_dto' => 'getUserGameArchiveDto'    ];

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
        $this->container['download_url'] = isset($data['download_url']) ? $data['download_url'] : null;
        $this->container['object_md5'] = isset($data['object_md5']) ? $data['object_md5'] : null;
        $this->container['user_game_archive_dto'] = isset($data['user_game_archive_dto']) ? $data['user_game_archive_dto'] : null;
    }


    /**
     * Gets download_url
     *
     * @return string
     */
    public function getDownloadUrl()
    {
        return $this->container['download_url'];
    }

    /**
     * Sets download_url
     *
     * @param string $download_url 下载链接
     *
     * @return $this
     */
    public function setDownloadUrl($download_url)
    {
        $this->container['download_url'] = $download_url;

        return $this;
    }

    /**
     * Gets object_md5
     *
     * @return string
     */
    public function getObjectMd5()
    {
        return $this->container['object_md5'];
    }

    /**
     * Sets object_md5
     *
     * @param string $object_md5 存档MD5
     *
     * @return $this
     */
    public function setObjectMd5($object_md5)
    {
        $this->container['object_md5'] = $object_md5;

        return $this;
    }

    /**
     * Gets user_game_archive_dto
     *
     * @return \Yjopenapi\Client\Model\UsercontollerGetUserGameArchiveResultModelUserGameArchiveDTO
     */
    public function getUserGameArchiveDto()
    {
        return $this->container['user_game_archive_dto'];
    }

    /**
     * Sets user_game_archive_dto
     *
     * @param \Yjopenapi\Client\Model\UsercontollerGetUserGameArchiveResultModelUserGameArchiveDTO $user_game_archive_dto user_game_archive_dto
     *
     * @return $this
     */
    public function setUserGameArchiveDto($user_game_archive_dto)
    {
        $this->container['user_game_archive_dto'] = $user_game_archive_dto;

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
