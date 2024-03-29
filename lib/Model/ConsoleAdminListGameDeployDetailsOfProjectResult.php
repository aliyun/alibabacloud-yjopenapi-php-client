<?php
/**
 * ConsoleAdminListGameDeployDetailsOfProjectResult
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
 * ConsoleAdminListGameDeployDetailsOfProjectResult Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class ConsoleAdminListGameDeployDetailsOfProjectResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'ConsoleAdminListGameDeployDetailsOfProjectResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'msg_code' => 'string',
'msg_info' => 'string',
'success' => 'bool',
'model' => '\Yjopenapi\Client\Model\ConsoleAdminListGameDeployDetailsOfProjectModel'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'msg_code' => null,
'msg_info' => null,
'success' => null,
'model' => null    ];

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
        'msg_code' => 'msgCode',
'msg_info' => 'msgInfo',
'success' => 'success',
'model' => 'model'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'msg_code' => 'setMsgCode',
'msg_info' => 'setMsgInfo',
'success' => 'setSuccess',
'model' => 'setModel'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'msg_code' => 'getMsgCode',
'msg_info' => 'getMsgInfo',
'success' => 'getSuccess',
'model' => 'getModel'    ];

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
        $this->container['msg_code'] = isset($data['msg_code']) ? $data['msg_code'] : null;
        $this->container['msg_info'] = isset($data['msg_info']) ? $data['msg_info'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
    }


    /**
     * Gets msg_code
     *
     * @return string
     */
    public function getMsgCode()
    {
        return $this->container['msg_code'];
    }

    /**
     * Sets msg_code
     *
     * @param string $msg_code 服务端状态码
     *
     * @return $this
     */
    public function setMsgCode($msg_code)
    {
        $this->container['msg_code'] = $msg_code;

        return $this;
    }

    /**
     * Gets msg_info
     *
     * @return string
     */
    public function getMsgInfo()
    {
        return $this->container['msg_info'];
    }

    /**
     * Sets msg_info
     *
     * @param string $msg_info 服务端描述信息
     *
     * @return $this
     */
    public function setMsgInfo($msg_info)
    {
        $this->container['msg_info'] = $msg_info;

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
     * @param bool $success 是否成功
     *
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

        return $this;
    }

    /**
     * Gets model
     *
     * @return \Yjopenapi\Client\Model\ConsoleAdminListGameDeployDetailsOfProjectModel
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param \Yjopenapi\Client\Model\ConsoleAdminListGameDeployDetailsOfProjectModel $model model
     *
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

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
