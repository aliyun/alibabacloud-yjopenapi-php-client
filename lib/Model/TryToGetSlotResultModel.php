<?php
/**
 * TryToGetSlotResultModel
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
 * TryToGetSlotResultModel Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class TryToGetSlotResultModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'TryToGetSlotResultModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'game_id' => 'string',
'account_id' => 'string',
'country' => 'string',
'code' => 'string',
'province' => 'string',
'region_id' => 'string',
'city' => 'string',
'operators' => '\Yjopenapi\Client\Model\TryToGetSlotResultModelOperators[]',
'success' => 'bool',
'message' => 'string',
'slot_data' => 'string',
'game_session' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'game_id' => null,
'account_id' => null,
'country' => null,
'code' => null,
'province' => null,
'region_id' => null,
'city' => null,
'operators' => null,
'success' => null,
'message' => null,
'slot_data' => null,
'game_session' => null    ];

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
'account_id' => 'accountId',
'country' => 'country',
'code' => 'code',
'province' => 'province',
'region_id' => 'regionId',
'city' => 'city',
'operators' => 'operators',
'success' => 'success',
'message' => 'message',
'slot_data' => 'slotData',
'game_session' => 'gameSession'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'game_id' => 'setGameId',
'account_id' => 'setAccountId',
'country' => 'setCountry',
'code' => 'setCode',
'province' => 'setProvince',
'region_id' => 'setRegionId',
'city' => 'setCity',
'operators' => 'setOperators',
'success' => 'setSuccess',
'message' => 'setMessage',
'slot_data' => 'setSlotData',
'game_session' => 'setGameSession'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'game_id' => 'getGameId',
'account_id' => 'getAccountId',
'country' => 'getCountry',
'code' => 'getCode',
'province' => 'getProvince',
'region_id' => 'getRegionId',
'city' => 'getCity',
'operators' => 'getOperators',
'success' => 'getSuccess',
'message' => 'getMessage',
'slot_data' => 'getSlotData',
'game_session' => 'getGameSession'    ];

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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['province'] = isset($data['province']) ? $data['province'] : null;
        $this->container['region_id'] = isset($data['region_id']) ? $data['region_id'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['operators'] = isset($data['operators']) ? $data['operators'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['slot_data'] = isset($data['slot_data']) ? $data['slot_data'] : null;
        $this->container['game_session'] = isset($data['game_session']) ? $data['game_session'] : null;
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
     * @param string $game_id Paas平台游戏ID
     *
     * @return $this
     */
    public function setGameId($game_id)
    {
        $this->container['game_id'] = $game_id;

        return $this;
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
     * @param string $account_id 用户id，给到Paas平台和SDK，两者保持一致，全局唯一
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country 调度资源所在国家
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code 返回码
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets province
     *
     * @return string
     */
    public function getProvince()
    {
        return $this->container['province'];
    }

    /**
     * Sets province
     *
     * @param string $province 调度资源所在省份
     *
     * @return $this
     */
    public function setProvince($province)
    {
        $this->container['province'] = $province;

        return $this;
    }

    /**
     * Gets region_id
     *
     * @return string
     */
    public function getRegionId()
    {
        return $this->container['region_id'];
    }

    /**
     * Sets region_id
     *
     * @param string $region_id 分配的region
     *
     * @return $this
     */
    public function setRegionId($region_id)
    {
        $this->container['region_id'] = $region_id;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city 调度资源所在城市
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets operators
     *
     * @return \Yjopenapi\Client\Model\TryToGetSlotResultModelOperators[]
     */
    public function getOperators()
    {
        return $this->container['operators'];
    }

    /**
     * Sets operators
     *
     * @param \Yjopenapi\Client\Model\TryToGetSlotResultModelOperators[] $operators 调度资源运营商信息
     *
     * @return $this
     */
    public function setOperators($operators)
    {
        $this->container['operators'] = $operators;

        return $this;
    }

    /**
     * Gets success
     *
     * @return bool
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     *
     * @param bool $success 调度执行结果
     *
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message 返回信息
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets slot_data
     *
     * @return string
     */
    public function getSlotData()
    {
        return $this->container['slot_data'];
    }

    /**
     * Sets slot_data
     *
     * @param string $slot_data 调度结果集
     *
     * @return $this
     */
    public function setSlotData($slot_data)
    {
        $this->container['slot_data'] = $slot_data;

        return $this;
    }

    /**
     * Gets game_session
     *
     * @return string
     */
    public function getGameSession()
    {
        return $this->container['game_session'];
    }

    /**
     * Sets game_session
     *
     * @param string $game_session 会话标识
     *
     * @return $this
     */
    public function setGameSession($game_session)
    {
        $this->container['game_session'] = $game_session;

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
