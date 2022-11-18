<?php
/**
 * TryToGetSlotFormsStartParam
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
 * TryToGetSlotFormsStartParam Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class TryToGetSlotFormsStartParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'TryToGetSlotFormsStartParam';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'resolution' => 'string',
'picture_quality' => 'string',
'keep_alive' => 'int',
'keep_disconnect_alive' => 'int',
'keep_no_play_alive' => 'int',
'device_brand' => 'string',
'device_model' => 'string',
'device_dpi' => 'int',
'device_dpr' => 'int',
'device_resolution' => 'string',
'game_input' => 'string',
'script_id' => 'int',
'bit_rate_self_adaption' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'resolution' => null,
'picture_quality' => null,
'keep_alive' => 'int64',
'keep_disconnect_alive' => 'int64',
'keep_no_play_alive' => 'int64',
'device_brand' => null,
'device_model' => null,
'device_dpi' => null,
'device_dpr' => null,
'device_resolution' => null,
'game_input' => null,
'script_id' => null,
'bit_rate_self_adaption' => null    ];

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
        'resolution' => 'resolution',
'picture_quality' => 'pictureQuality',
'keep_alive' => 'keepAlive',
'keep_disconnect_alive' => 'keepDisconnectAlive',
'keep_no_play_alive' => 'keepNoPlayAlive',
'device_brand' => 'deviceBrand',
'device_model' => 'deviceModel',
'device_dpi' => 'deviceDpi',
'device_dpr' => 'deviceDpr',
'device_resolution' => 'deviceResolution',
'game_input' => 'gameInput',
'script_id' => 'scriptId',
'bit_rate_self_adaption' => 'bitRateSelfAdaption'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'resolution' => 'setResolution',
'picture_quality' => 'setPictureQuality',
'keep_alive' => 'setKeepAlive',
'keep_disconnect_alive' => 'setKeepDisconnectAlive',
'keep_no_play_alive' => 'setKeepNoPlayAlive',
'device_brand' => 'setDeviceBrand',
'device_model' => 'setDeviceModel',
'device_dpi' => 'setDeviceDpi',
'device_dpr' => 'setDeviceDpr',
'device_resolution' => 'setDeviceResolution',
'game_input' => 'setGameInput',
'script_id' => 'setScriptId',
'bit_rate_self_adaption' => 'setBitRateSelfAdaption'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'resolution' => 'getResolution',
'picture_quality' => 'getPictureQuality',
'keep_alive' => 'getKeepAlive',
'keep_disconnect_alive' => 'getKeepDisconnectAlive',
'keep_no_play_alive' => 'getKeepNoPlayAlive',
'device_brand' => 'getDeviceBrand',
'device_model' => 'getDeviceModel',
'device_dpi' => 'getDeviceDpi',
'device_dpr' => 'getDeviceDpr',
'device_resolution' => 'getDeviceResolution',
'game_input' => 'getGameInput',
'script_id' => 'getScriptId',
'bit_rate_self_adaption' => 'getBitRateSelfAdaption'    ];

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
        $this->container['resolution'] = isset($data['resolution']) ? $data['resolution'] : null;
        $this->container['picture_quality'] = isset($data['picture_quality']) ? $data['picture_quality'] : null;
        $this->container['keep_alive'] = isset($data['keep_alive']) ? $data['keep_alive'] : null;
        $this->container['keep_disconnect_alive'] = isset($data['keep_disconnect_alive']) ? $data['keep_disconnect_alive'] : null;
        $this->container['keep_no_play_alive'] = isset($data['keep_no_play_alive']) ? $data['keep_no_play_alive'] : null;
        $this->container['device_brand'] = isset($data['device_brand']) ? $data['device_brand'] : null;
        $this->container['device_model'] = isset($data['device_model']) ? $data['device_model'] : null;
        $this->container['device_dpi'] = isset($data['device_dpi']) ? $data['device_dpi'] : null;
        $this->container['device_dpr'] = isset($data['device_dpr']) ? $data['device_dpr'] : null;
        $this->container['device_resolution'] = isset($data['device_resolution']) ? $data['device_resolution'] : null;
        $this->container['game_input'] = isset($data['game_input']) ? $data['game_input'] : null;
        $this->container['script_id'] = isset($data['script_id']) ? $data['script_id'] : null;
        $this->container['bit_rate_self_adaption'] = isset($data['bit_rate_self_adaption']) ? $data['bit_rate_self_adaption'] : null;
    }


    /**
     * Gets resolution
     *
     * @return string
     */
    public function getResolution()
    {
        return $this->container['resolution'];
    }

    /**
     * Sets resolution
     *
     * @param string $resolution 启动待缩放分辨率
     *
     * @return $this
     */
    public function setResolution($resolution)
    {
        $this->container['resolution'] = $resolution;

        return $this;
    }

    /**
     * Gets picture_quality
     *
     * @return string
     */
    public function getPictureQuality()
    {
        return $this->container['picture_quality'];
    }

    /**
     * Sets picture_quality
     *
     * @param string $picture_quality 画质
     *
     * @return $this
     */
    public function setPictureQuality($picture_quality)
    {
        $this->container['picture_quality'] = $picture_quality;

        return $this;
    }

    /**
     * Gets keep_alive
     *
     * @return int
     */
    public function getKeepAlive()
    {
        return $this->container['keep_alive'];
    }

    /**
     * Sets keep_alive
     *
     * @param int $keep_alive 控制游戏运行时长
     *
     * @return $this
     */
    public function setKeepAlive($keep_alive)
    {
        $this->container['keep_alive'] = $keep_alive;

        return $this;
    }

    /**
     * Gets keep_disconnect_alive
     *
     * @return int
     */
    public function getKeepDisconnectAlive()
    {
        return $this->container['keep_disconnect_alive'];
    }

    /**
     * Sets keep_disconnect_alive
     *
     * @param int $keep_disconnect_alive 游戏中设备掉线后会话保活时长
     *
     * @return $this
     */
    public function setKeepDisconnectAlive($keep_disconnect_alive)
    {
        $this->container['keep_disconnect_alive'] = $keep_disconnect_alive;

        return $this;
    }

    /**
     * Gets keep_no_play_alive
     *
     * @return int
     */
    public function getKeepNoPlayAlive()
    {
        return $this->container['keep_no_play_alive'];
    }

    /**
     * Sets keep_no_play_alive
     *
     * @param int $keep_no_play_alive 游戏中无操作时会话保活时长
     *
     * @return $this
     */
    public function setKeepNoPlayAlive($keep_no_play_alive)
    {
        $this->container['keep_no_play_alive'] = $keep_no_play_alive;

        return $this;
    }

    /**
     * Gets device_brand
     *
     * @return string
     */
    public function getDeviceBrand()
    {
        return $this->container['device_brand'];
    }

    /**
     * Sets device_brand
     *
     * @param string $device_brand 设备品牌
     *
     * @return $this
     */
    public function setDeviceBrand($device_brand)
    {
        $this->container['device_brand'] = $device_brand;

        return $this;
    }

    /**
     * Gets device_model
     *
     * @return string
     */
    public function getDeviceModel()
    {
        return $this->container['device_model'];
    }

    /**
     * Sets device_model
     *
     * @param string $device_model 设备型号
     *
     * @return $this
     */
    public function setDeviceModel($device_model)
    {
        $this->container['device_model'] = $device_model;

        return $this;
    }

    /**
     * Gets device_dpi
     *
     * @return int
     */
    public function getDeviceDpi()
    {
        return $this->container['device_dpi'];
    }

    /**
     * Sets device_dpi
     *
     * @param int $device_dpi 设备DPI
     *
     * @return $this
     */
    public function setDeviceDpi($device_dpi)
    {
        $this->container['device_dpi'] = $device_dpi;

        return $this;
    }

    /**
     * Gets device_dpr
     *
     * @return int
     */
    public function getDeviceDpr()
    {
        return $this->container['device_dpr'];
    }

    /**
     * Sets device_dpr
     *
     * @param int $device_dpr 设备DPR
     *
     * @return $this
     */
    public function setDeviceDpr($device_dpr)
    {
        $this->container['device_dpr'] = $device_dpr;

        return $this;
    }

    /**
     * Gets device_resolution
     *
     * @return string
     */
    public function getDeviceResolution()
    {
        return $this->container['device_resolution'];
    }

    /**
     * Sets device_resolution
     *
     * @param string $device_resolution 设备分辨率
     *
     * @return $this
     */
    public function setDeviceResolution($device_resolution)
    {
        $this->container['device_resolution'] = $device_resolution;

        return $this;
    }

    /**
     * Gets game_input
     *
     * @return string
     */
    public function getGameInput()
    {
        return $this->container['game_input'];
    }

    /**
     * Sets game_input
     *
     * @param string $game_input 手游输入法控制
     *
     * @return $this
     */
    public function setGameInput($game_input)
    {
        $this->container['game_input'] = $game_input;

        return $this;
    }

    /**
     * Gets script_id
     *
     * @return int
     */
    public function getScriptId()
    {
        return $this->container['script_id'];
    }

    /**
     * Sets script_id
     *
     * @param int $script_id 游戏脚本id
     *
     * @return $this
     */
    public function setScriptId($script_id)
    {
        $this->container['script_id'] = $script_id;

        return $this;
    }

    /**
     * Gets bit_rate_self_adaption
     *
     * @return int
     */
    public function getBitRateSelfAdaption()
    {
        return $this->container['bit_rate_self_adaption'];
    }

    /**
     * Sets bit_rate_self_adaption
     *
     * @param int $bit_rate_self_adaption 码率自适应开关
     *
     * @return $this
     */
    public function setBitRateSelfAdaption($bit_rate_self_adaption)
    {
        $this->container['bit_rate_self_adaption'] = $bit_rate_self_adaption;

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
