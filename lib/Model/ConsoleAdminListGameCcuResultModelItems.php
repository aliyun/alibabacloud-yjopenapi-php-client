<?php
/**
 * ConsoleAdminListGameCcuResultModelItems
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
 * ConsoleAdminListGameCcuResultModelItems Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class ConsoleAdminListGameCcuResultModelItems implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'ConsoleAdminListGameCcuResultModelItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'ccu_value' => 'string',
'game_name' => 'string',
'mix_game_id' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'ccu_value' => null,
'game_name' => null,
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
        'ccu_value' => 'ccuValue',
'game_name' => 'gameName',
'mix_game_id' => 'mixGameId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ccu_value' => 'setCcuValue',
'game_name' => 'setGameName',
'mix_game_id' => 'setMixGameId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ccu_value' => 'getCcuValue',
'game_name' => 'getGameName',
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
        $this->container['ccu_value'] = isset($data['ccu_value']) ? $data['ccu_value'] : null;
        $this->container['game_name'] = isset($data['game_name']) ? $data['game_name'] : null;
        $this->container['mix_game_id'] = isset($data['mix_game_id']) ? $data['mix_game_id'] : null;
    }


    /**
     * Gets ccu_value
     *
     * @return string
     */
    public function getCcuValue()
    {
        return $this->container['ccu_value'];
    }

    /**
     * Sets ccu_value
     *
     * @param string $ccu_value ccu_value
     *
     * @return $this
     */
    public function setCcuValue($ccu_value)
    {
        $this->container['ccu_value'] = $ccu_value;

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
