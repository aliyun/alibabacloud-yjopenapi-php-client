<?php
/**
 * InteractiveGetPartyStatusResultModel
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
 * InteractiveGetPartyStatusResultModel Class Doc Comment
 *
 * @category Class
 * @description 获取结果
 * @package  Yjopenapi\Client
 */
class InteractiveGetPartyStatusResultModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'InteractiveGetPartyStatusResultModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'party_id' => 'string',
'mix_game_id' => 'string',
'creator' => 'string',
'max_player_num' => 'int',
'current_player_num' => 'int',
'status' => 'int',
'project_id' => 'string',
'player_list' => '\Yjopenapi\Client\Model\InteractiveGetPartyStatusResultModelPlayList[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'party_id' => null,
'mix_game_id' => null,
'creator' => null,
'max_player_num' => null,
'current_player_num' => null,
'status' => null,
'project_id' => null,
'player_list' => null    ];

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
        'party_id' => 'partyId',
'mix_game_id' => 'mixGameId',
'creator' => 'creator',
'max_player_num' => 'maxPlayerNum',
'current_player_num' => 'currentPlayerNum',
'status' => 'status',
'project_id' => 'projectId',
'player_list' => 'playerList'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'party_id' => 'setPartyId',
'mix_game_id' => 'setMixGameId',
'creator' => 'setCreator',
'max_player_num' => 'setMaxPlayerNum',
'current_player_num' => 'setCurrentPlayerNum',
'status' => 'setStatus',
'project_id' => 'setProjectId',
'player_list' => 'setPlayerList'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'party_id' => 'getPartyId',
'mix_game_id' => 'getMixGameId',
'creator' => 'getCreator',
'max_player_num' => 'getMaxPlayerNum',
'current_player_num' => 'getCurrentPlayerNum',
'status' => 'getStatus',
'project_id' => 'getProjectId',
'player_list' => 'getPlayerList'    ];

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
        $this->container['party_id'] = isset($data['party_id']) ? $data['party_id'] : null;
        $this->container['mix_game_id'] = isset($data['mix_game_id']) ? $data['mix_game_id'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['max_player_num'] = isset($data['max_player_num']) ? $data['max_player_num'] : null;
        $this->container['current_player_num'] = isset($data['current_player_num']) ? $data['current_player_num'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['project_id'] = isset($data['project_id']) ? $data['project_id'] : null;
        $this->container['player_list'] = isset($data['player_list']) ? $data['player_list'] : null;
    }


    /**
     * Gets party_id
     *
     * @return string
     */
    public function getPartyId()
    {
        return $this->container['party_id'];
    }

    /**
     * Sets party_id
     *
     * @param string $party_id 派对Id
     *
     * @return $this
     */
    public function setPartyId($party_id)
    {
        $this->container['party_id'] = $party_id;

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
     * @param string $mix_game_id 游戏Id
     *
     * @return $this
     */
    public function setMixGameId($mix_game_id)
    {
        $this->container['mix_game_id'] = $mix_game_id;

        return $this;
    }

    /**
     * Gets creator
     *
     * @return string
     */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
     * Sets creator
     *
     * @param string $creator 派对创建者
     *
     * @return $this
     */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;

        return $this;
    }

    /**
     * Gets max_player_num
     *
     * @return int
     */
    public function getMaxPlayerNum()
    {
        return $this->container['max_player_num'];
    }

    /**
     * Sets max_player_num
     *
     * @param int $max_player_num 最大游戏人数
     *
     * @return $this
     */
    public function setMaxPlayerNum($max_player_num)
    {
        $this->container['max_player_num'] = $max_player_num;

        return $this;
    }

    /**
     * Gets current_player_num
     *
     * @return int
     */
    public function getCurrentPlayerNum()
    {
        return $this->container['current_player_num'];
    }

    /**
     * Sets current_player_num
     *
     * @param int $current_player_num 当前派对人数
     *
     * @return $this
     */
    public function setCurrentPlayerNum($current_player_num)
    {
        $this->container['current_player_num'] = $current_player_num;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status 派对状态
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets project_id
     *
     * @return string
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param string $project_id 派对绑定项目ID
     *
     * @return $this
     */
    public function setProjectId($project_id)
    {
        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets player_list
     *
     * @return \Yjopenapi\Client\Model\InteractiveGetPartyStatusResultModelPlayList[]
     */
    public function getPlayerList()
    {
        return $this->container['player_list'];
    }

    /**
     * Sets player_list
     *
     * @param \Yjopenapi\Client\Model\InteractiveGetPartyStatusResultModelPlayList[] $player_list player_list
     *
     * @return $this
     */
    public function setPlayerList($player_list)
    {
        $this->container['player_list'] = $player_list;

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
