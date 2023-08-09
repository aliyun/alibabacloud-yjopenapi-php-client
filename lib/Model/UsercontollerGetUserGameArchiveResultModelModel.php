<?php
/**
 * UsercontollerGetUserGameArchiveResultModelModel
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
 * UsercontollerGetUserGameArchiveResultModelModel Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class UsercontollerGetUserGameArchiveResultModelModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'UsercontollerGetUserGameArchiveResultModelModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'game_id' => 'int',
'game_session_id' => 'string',
'tenant_id' => 'int',
'project_id' => 'int',
'gmt_create' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'game_id' => 'int64',
'game_session_id' => null,
'tenant_id' => 'int64',
'project_id' => 'int64',
'gmt_create' => 'int64'    ];

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
'game_session_id' => 'gameSessionId',
'tenant_id' => 'tenantId',
'project_id' => 'projectId',
'gmt_create' => 'gmtCreate'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'game_id' => 'setGameId',
'game_session_id' => 'setGameSessionId',
'tenant_id' => 'setTenantId',
'project_id' => 'setProjectId',
'gmt_create' => 'setGmtCreate'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'game_id' => 'getGameId',
'game_session_id' => 'getGameSessionId',
'tenant_id' => 'getTenantId',
'project_id' => 'getProjectId',
'gmt_create' => 'getGmtCreate'    ];

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
        $this->container['game_session_id'] = isset($data['game_session_id']) ? $data['game_session_id'] : null;
        $this->container['tenant_id'] = isset($data['tenant_id']) ? $data['tenant_id'] : null;
        $this->container['project_id'] = isset($data['project_id']) ? $data['project_id'] : null;
        $this->container['gmt_create'] = isset($data['gmt_create']) ? $data['gmt_create'] : null;
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
     * @param int $game_id 游戏ID
     *
     * @return $this
     */
    public function setGameId($game_id)
    {
        $this->container['game_id'] = $game_id;

        return $this;
    }

    /**
     * Gets game_session_id
     *
     * @return string
     */
    public function getGameSessionId()
    {
        return $this->container['game_session_id'];
    }

    /**
     * Sets game_session_id
     *
     * @param string $game_session_id 游戏会话ID
     *
     * @return $this
     */
    public function setGameSessionId($game_session_id)
    {
        $this->container['game_session_id'] = $game_session_id;

        return $this;
    }

    /**
     * Gets tenant_id
     *
     * @return int
     */
    public function getTenantId()
    {
        return $this->container['tenant_id'];
    }

    /**
     * Sets tenant_id
     *
     * @param int $tenant_id 租户ID
     *
     * @return $this
     */
    public function setTenantId($tenant_id)
    {
        $this->container['tenant_id'] = $tenant_id;

        return $this;
    }

    /**
     * Gets project_id
     *
     * @return int
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param int $project_id 项目ID
     *
     * @return $this
     */
    public function setProjectId($project_id)
    {
        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets gmt_create
     *
     * @return int
     */
    public function getGmtCreate()
    {
        return $this->container['gmt_create'];
    }

    /**
     * Sets gmt_create
     *
     * @param int $gmt_create 存档生成时间
     *
     * @return $this
     */
    public function setGmtCreate($gmt_create)
    {
        $this->container['gmt_create'] = $gmt_create;

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
