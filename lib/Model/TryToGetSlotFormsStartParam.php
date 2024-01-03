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

namespace Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model;

use \ArrayAccess;
use \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ObjectSerializer;

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
        'schedule_user_levels' => 'string',
'keep_alive' => 'int',
'device_resolution' => 'string',
'device_dpi' => 'int',
'archive_url' => 'string',
'game_input' => 'string',
'resolution' => 'string',
'keep_disconnect_alive' => 'int',
'app_channel' => 'string',
'device_dpr' => 'int',
'cloud_init' => 'string',
'script_id' => 'int',
'bit_rate_self_adaption' => 'int',
'keep_no_play_alive' => 'int',
'ssaid' => 'string',
'archive_md5' => 'string',
'sys_device_id' => 'string',
'device_model' => 'string',
'device_brand' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'schedule_user_levels' => null,
'keep_alive' => 'int64',
'device_resolution' => null,
'device_dpi' => null,
'archive_url' => null,
'game_input' => null,
'resolution' => null,
'keep_disconnect_alive' => 'int64',
'app_channel' => null,
'device_dpr' => null,
'cloud_init' => null,
'script_id' => null,
'bit_rate_self_adaption' => null,
'keep_no_play_alive' => 'int64',
'ssaid' => null,
'archive_md5' => null,
'sys_device_id' => null,
'device_model' => null,
'device_brand' => null    ];

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
        'schedule_user_levels' => 'scheduleUserLevels',
'keep_alive' => 'keepAlive',
'device_resolution' => 'deviceResolution',
'device_dpi' => 'deviceDpi',
'archive_url' => 'archiveUrl',
'game_input' => 'gameInput',
'resolution' => 'resolution',
'keep_disconnect_alive' => 'keepDisconnectAlive',
'app_channel' => 'appChannel',
'device_dpr' => 'deviceDpr',
'cloud_init' => 'cloudInit',
'script_id' => 'scriptId',
'bit_rate_self_adaption' => 'bitRateSelfAdaption',
'keep_no_play_alive' => 'keepNoPlayAlive',
'ssaid' => 'ssaid',
'archive_md5' => 'archiveMd5',
'sys_device_id' => 'sysDeviceId',
'device_model' => 'deviceModel',
'device_brand' => 'deviceBrand'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'schedule_user_levels' => 'setScheduleUserLevels',
'keep_alive' => 'setKeepAlive',
'device_resolution' => 'setDeviceResolution',
'device_dpi' => 'setDeviceDpi',
'archive_url' => 'setArchiveUrl',
'game_input' => 'setGameInput',
'resolution' => 'setResolution',
'keep_disconnect_alive' => 'setKeepDisconnectAlive',
'app_channel' => 'setAppChannel',
'device_dpr' => 'setDeviceDpr',
'cloud_init' => 'setCloudInit',
'script_id' => 'setScriptId',
'bit_rate_self_adaption' => 'setBitRateSelfAdaption',
'keep_no_play_alive' => 'setKeepNoPlayAlive',
'ssaid' => 'setSsaid',
'archive_md5' => 'setArchiveMd5',
'sys_device_id' => 'setSysDeviceId',
'device_model' => 'setDeviceModel',
'device_brand' => 'setDeviceBrand'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'schedule_user_levels' => 'getScheduleUserLevels',
'keep_alive' => 'getKeepAlive',
'device_resolution' => 'getDeviceResolution',
'device_dpi' => 'getDeviceDpi',
'archive_url' => 'getArchiveUrl',
'game_input' => 'getGameInput',
'resolution' => 'getResolution',
'keep_disconnect_alive' => 'getKeepDisconnectAlive',
'app_channel' => 'getAppChannel',
'device_dpr' => 'getDeviceDpr',
'cloud_init' => 'getCloudInit',
'script_id' => 'getScriptId',
'bit_rate_self_adaption' => 'getBitRateSelfAdaption',
'keep_no_play_alive' => 'getKeepNoPlayAlive',
'ssaid' => 'getSsaid',
'archive_md5' => 'getArchiveMd5',
'sys_device_id' => 'getSysDeviceId',
'device_model' => 'getDeviceModel',
'device_brand' => 'getDeviceBrand'    ];

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
        $this->container['schedule_user_levels'] = isset($data['schedule_user_levels']) ? $data['schedule_user_levels'] : null;
        $this->container['keep_alive'] = isset($data['keep_alive']) ? $data['keep_alive'] : null;
        $this->container['device_resolution'] = isset($data['device_resolution']) ? $data['device_resolution'] : null;
        $this->container['device_dpi'] = isset($data['device_dpi']) ? $data['device_dpi'] : null;
        $this->container['archive_url'] = isset($data['archive_url']) ? $data['archive_url'] : null;
        $this->container['game_input'] = isset($data['game_input']) ? $data['game_input'] : null;
        $this->container['resolution'] = isset($data['resolution']) ? $data['resolution'] : null;
        $this->container['keep_disconnect_alive'] = isset($data['keep_disconnect_alive']) ? $data['keep_disconnect_alive'] : null;
        $this->container['app_channel'] = isset($data['app_channel']) ? $data['app_channel'] : null;
        $this->container['device_dpr'] = isset($data['device_dpr']) ? $data['device_dpr'] : null;
        $this->container['cloud_init'] = isset($data['cloud_init']) ? $data['cloud_init'] : null;
        $this->container['script_id'] = isset($data['script_id']) ? $data['script_id'] : null;
        $this->container['bit_rate_self_adaption'] = isset($data['bit_rate_self_adaption']) ? $data['bit_rate_self_adaption'] : null;
        $this->container['keep_no_play_alive'] = isset($data['keep_no_play_alive']) ? $data['keep_no_play_alive'] : null;
        $this->container['ssaid'] = isset($data['ssaid']) ? $data['ssaid'] : null;
        $this->container['archive_md5'] = isset($data['archive_md5']) ? $data['archive_md5'] : null;
        $this->container['sys_device_id'] = isset($data['sys_device_id']) ? $data['sys_device_id'] : null;
        $this->container['device_model'] = isset($data['device_model']) ? $data['device_model'] : null;
        $this->container['device_brand'] = isset($data['device_brand']) ? $data['device_brand'] : null;
    }


    /**
     * Gets schedule_user_levels
     *
     * @return string
     */
    public function getScheduleUserLevels()
    {
        return $this->container['schedule_user_levels'];
    }

    /**
     * Sets schedule_user_levels
     *
     * @param string $schedule_user_levels 游戏调度实例等级
     *
     * @return $this
     */
    public function setScheduleUserLevels($schedule_user_levels)
    {
        $this->container['schedule_user_levels'] = $schedule_user_levels;

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
     * @param int $device_dpi deviceDpi
     *
     * @return $this
     */
    public function setDeviceDpi($device_dpi)
    {
        $this->container['device_dpi'] = $device_dpi;

        return $this;
    }

    /**
     * Gets archive_url
     *
     * @return string
     */
    public function getArchiveUrl()
    {
        return $this->container['archive_url'];
    }

    /**
     * Sets archive_url
     *
     * @param string $archive_url archive_url
     *
     * @return $this
     */
    public function setArchiveUrl($archive_url)
    {
        $this->container['archive_url'] = $archive_url;

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
     * Gets app_channel
     *
     * @return string
     */
    public function getAppChannel()
    {
        return $this->container['app_channel'];
    }

    /**
     * Sets app_channel
     *
     * @param string $app_channel 应用渠道
     *
     * @return $this
     */
    public function setAppChannel($app_channel)
    {
        $this->container['app_channel'] = $app_channel;

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
     * Gets cloud_init
     *
     * @return string
     */
    public function getCloudInit()
    {
        return $this->container['cloud_init'];
    }

    /**
     * Sets cloud_init
     *
     * @param string $cloud_init 游戏初始化路径
     *
     * @return $this
     */
    public function setCloudInit($cloud_init)
    {
        $this->container['cloud_init'] = $cloud_init;

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
     * Gets ssaid
     *
     * @return string
     */
    public function getSsaid()
    {
        return $this->container['ssaid'];
    }

    /**
     * Sets ssaid
     *
     * @param string $ssaid 设备号Android
     *
     * @return $this
     */
    public function setSsaid($ssaid)
    {
        $this->container['ssaid'] = $ssaid;

        return $this;
    }

    /**
     * Gets archive_md5
     *
     * @return string
     */
    public function getArchiveMd5()
    {
        return $this->container['archive_md5'];
    }

    /**
     * Sets archive_md5
     *
     * @param string $archive_md5 archive_md5
     *
     * @return $this
     */
    public function setArchiveMd5($archive_md5)
    {
        $this->container['archive_md5'] = $archive_md5;

        return $this;
    }

    /**
     * Gets sys_device_id
     *
     * @return string
     */
    public function getSysDeviceId()
    {
        return $this->container['sys_device_id'];
    }

    /**
     * Sets sys_device_id
     *
     * @param string $sys_device_id 设备id
     *
     * @return $this
     */
    public function setSysDeviceId($sys_device_id)
    {
        $this->container['sys_device_id'] = $sys_device_id;

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
