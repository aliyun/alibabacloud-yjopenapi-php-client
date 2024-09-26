<?php
/**
 * ReplaceSlotFormsStartParam
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

namespace Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model;

use \ArrayAccess;
use \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ObjectSerializer;

/**
 * ReplaceSlotFormsStartParam Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class ReplaceSlotFormsStartParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'ReplaceSlotFormsStartParam';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'keep_alive' => 'int',
'cloud_init' => 'string',
'device_resolution' => 'string',
'device_dpi' => 'int',
'archive_url' => 'string',
'game_input' => 'string',
'resolution' => 'string',
'keep_disconnect_alive' => 'int',
'archive_id' => 'string',
'keep_hold_alive' => 'int',
'app_channel' => 'string',
'device_dpr' => 'int',
'script_id' => 'string',
'game_version_id' => 'string',
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
        'keep_alive' => 'int64',
'cloud_init' => null,
'device_resolution' => null,
'device_dpi' => null,
'archive_url' => null,
'game_input' => null,
'resolution' => null,
'keep_disconnect_alive' => 'int64',
'archive_id' => null,
'keep_hold_alive' => 'int64',
'app_channel' => null,
'device_dpr' => null,
'script_id' => null,
'game_version_id' => null,
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
        'keep_alive' => 'keepAlive',
'cloud_init' => 'cloudInit ',
'device_resolution' => 'deviceResolution',
'device_dpi' => 'deviceDpi',
'archive_url' => 'archiveUrl',
'game_input' => 'gameInput',
'resolution' => 'resolution',
'keep_disconnect_alive' => 'keepDisconnectAlive',
'archive_id' => 'archiveId',
'keep_hold_alive' => 'keepHoldAlive ',
'app_channel' => 'appChannel',
'device_dpr' => 'deviceDpr',
'script_id' => 'scriptId',
'game_version_id' => 'gameVersionId',
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
        'keep_alive' => 'setKeepAlive',
'cloud_init' => 'setCloudInit',
'device_resolution' => 'setDeviceResolution',
'device_dpi' => 'setDeviceDpi',
'archive_url' => 'setArchiveUrl',
'game_input' => 'setGameInput',
'resolution' => 'setResolution',
'keep_disconnect_alive' => 'setKeepDisconnectAlive',
'archive_id' => 'setArchiveId',
'keep_hold_alive' => 'setKeepHoldAlive',
'app_channel' => 'setAppChannel',
'device_dpr' => 'setDeviceDpr',
'script_id' => 'setScriptId',
'game_version_id' => 'setGameVersionId',
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
        'keep_alive' => 'getKeepAlive',
'cloud_init' => 'getCloudInit',
'device_resolution' => 'getDeviceResolution',
'device_dpi' => 'getDeviceDpi',
'archive_url' => 'getArchiveUrl',
'game_input' => 'getGameInput',
'resolution' => 'getResolution',
'keep_disconnect_alive' => 'getKeepDisconnectAlive',
'archive_id' => 'getArchiveId',
'keep_hold_alive' => 'getKeepHoldAlive',
'app_channel' => 'getAppChannel',
'device_dpr' => 'getDeviceDpr',
'script_id' => 'getScriptId',
'game_version_id' => 'getGameVersionId',
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
        $this->container['keep_alive'] = isset($data['keep_alive']) ? $data['keep_alive'] : null;
        $this->container['cloud_init'] = isset($data['cloud_init']) ? $data['cloud_init'] : null;
        $this->container['device_resolution'] = isset($data['device_resolution']) ? $data['device_resolution'] : null;
        $this->container['device_dpi'] = isset($data['device_dpi']) ? $data['device_dpi'] : null;
        $this->container['archive_url'] = isset($data['archive_url']) ? $data['archive_url'] : null;
        $this->container['game_input'] = isset($data['game_input']) ? $data['game_input'] : null;
        $this->container['resolution'] = isset($data['resolution']) ? $data['resolution'] : null;
        $this->container['keep_disconnect_alive'] = isset($data['keep_disconnect_alive']) ? $data['keep_disconnect_alive'] : null;
        $this->container['archive_id'] = isset($data['archive_id']) ? $data['archive_id'] : null;
        $this->container['keep_hold_alive'] = isset($data['keep_hold_alive']) ? $data['keep_hold_alive'] : null;
        $this->container['app_channel'] = isset($data['app_channel']) ? $data['app_channel'] : null;
        $this->container['device_dpr'] = isset($data['device_dpr']) ? $data['device_dpr'] : null;
        $this->container['script_id'] = isset($data['script_id']) ? $data['script_id'] : null;
        $this->container['game_version_id'] = isset($data['game_version_id']) ? $data['game_version_id'] : null;
        $this->container['bit_rate_self_adaption'] = isset($data['bit_rate_self_adaption']) ? $data['bit_rate_self_adaption'] : null;
        $this->container['keep_no_play_alive'] = isset($data['keep_no_play_alive']) ? $data['keep_no_play_alive'] : null;
        $this->container['ssaid'] = isset($data['ssaid']) ? $data['ssaid'] : null;
        $this->container['archive_md5'] = isset($data['archive_md5']) ? $data['archive_md5'] : null;
        $this->container['sys_device_id'] = isset($data['sys_device_id']) ? $data['sys_device_id'] : null;
        $this->container['device_model'] = isset($data['device_model']) ? $data['device_model'] : null;
        $this->container['device_brand'] = isset($data['device_brand']) ? $data['device_brand'] : null;
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
     * @param int $keep_alive keep_alive
     *
     * @return $this
     */
    public function setKeepAlive($keep_alive)
    {
        $this->container['keep_alive'] = $keep_alive;

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
     * @param string $cloud_init cloud_init
     *
     * @return $this
     */
    public function setCloudInit($cloud_init)
    {
        $this->container['cloud_init'] = $cloud_init;

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
     * @param string $device_resolution device_resolution
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
     * @param int $device_dpi device_dpi
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
     * @param string $game_input game_input
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
     * @param string $resolution resolution
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
     * @param int $keep_disconnect_alive keep_disconnect_alive
     *
     * @return $this
     */
    public function setKeepDisconnectAlive($keep_disconnect_alive)
    {
        $this->container['keep_disconnect_alive'] = $keep_disconnect_alive;

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
     * @param string $archive_id archive_id
     *
     * @return $this
     */
    public function setArchiveId($archive_id)
    {
        $this->container['archive_id'] = $archive_id;

        return $this;
    }

    /**
     * Gets keep_hold_alive
     *
     * @return int
     */
    public function getKeepHoldAlive()
    {
        return $this->container['keep_hold_alive'];
    }

    /**
     * Sets keep_hold_alive
     *
     * @param int $keep_hold_alive keep_hold_alive
     *
     * @return $this
     */
    public function setKeepHoldAlive($keep_hold_alive)
    {
        $this->container['keep_hold_alive'] = $keep_hold_alive;

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
     * @param string $app_channel app_channel
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
     * @param int $device_dpr device_dpr
     *
     * @return $this
     */
    public function setDeviceDpr($device_dpr)
    {
        $this->container['device_dpr'] = $device_dpr;

        return $this;
    }

    /**
     * Gets script_id
     *
     * @return string
     */
    public function getScriptId()
    {
        return $this->container['script_id'];
    }

    /**
     * Sets script_id
     *
     * @param string $script_id script_id
     *
     * @return $this
     */
    public function setScriptId($script_id)
    {
        $this->container['script_id'] = $script_id;

        return $this;
    }

    /**
     * Gets game_version_id
     *
     * @return string
     */
    public function getGameVersionId()
    {
        return $this->container['game_version_id'];
    }

    /**
     * Sets game_version_id
     *
     * @param string $game_version_id game_version_id
     *
     * @return $this
     */
    public function setGameVersionId($game_version_id)
    {
        $this->container['game_version_id'] = $game_version_id;

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
     * @param int $bit_rate_self_adaption bit_rate_self_adaption
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
     * @param int $keep_no_play_alive keep_no_play_alive
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
     * @param string $ssaid ssaid
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
     * @param string $sys_device_id sys_device_id
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
     * @param string $device_model device_model
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
     * @param string $device_brand device_brand
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
