<?php
/**
 * AiGetPromptResultModel
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

namespace Yjopenapi\Client\Yjopenapi\Client\Model;

use \ArrayAccess;
use \Yjopenapi\Client\Yjopenapi\Client\Api\ObjectSerializer;

/**
 * AiGetPromptResultModel Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class AiGetPromptResultModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'AiGetPromptResultModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'queue_num' => 'int',
'response' => 'string',
'request_id' => 'string',
'executed_list' => 'string',
'execution_result' => 'string',
'resources' => '\Yjopenapi\Client\Yjopenapi\Client\Model\AiGetPromptResultModelResources[]',
'status' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'queue_num' => 'int64',
'response' => null,
'request_id' => null,
'executed_list' => null,
'execution_result' => null,
'resources' => null,
'status' => null    ];

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
        'queue_num' => 'queueNum',
'response' => 'response',
'request_id' => 'requestId',
'executed_list' => 'executedList',
'execution_result' => 'executionResult',
'resources' => 'resources',
'status' => 'status'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'queue_num' => 'setQueueNum',
'response' => 'setResponse',
'request_id' => 'setRequestId',
'executed_list' => 'setExecutedList',
'execution_result' => 'setExecutionResult',
'resources' => 'setResources',
'status' => 'setStatus'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'queue_num' => 'getQueueNum',
'response' => 'getResponse',
'request_id' => 'getRequestId',
'executed_list' => 'getExecutedList',
'execution_result' => 'getExecutionResult',
'resources' => 'getResources',
'status' => 'getStatus'    ];

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
        $this->container['queue_num'] = isset($data['queue_num']) ? $data['queue_num'] : null;
        $this->container['response'] = isset($data['response']) ? $data['response'] : null;
        $this->container['request_id'] = isset($data['request_id']) ? $data['request_id'] : null;
        $this->container['executed_list'] = isset($data['executed_list']) ? $data['executed_list'] : null;
        $this->container['execution_result'] = isset($data['execution_result']) ? $data['execution_result'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }


    /**
     * Gets queue_num
     *
     * @return int
     */
    public function getQueueNum()
    {
        return $this->container['queue_num'];
    }

    /**
     * Sets queue_num
     *
     * @param int $queue_num queue_num
     *
     * @return $this
     */
    public function setQueueNum($queue_num)
    {
        $this->container['queue_num'] = $queue_num;

        return $this;
    }

    /**
     * Gets response
     *
     * @return string
     */
    public function getResponse()
    {
        return $this->container['response'];
    }

    /**
     * Sets response
     *
     * @param string $response response
     *
     * @return $this
     */
    public function setResponse($response)
    {
        $this->container['response'] = $response;

        return $this;
    }

    /**
     * Gets request_id
     *
     * @return string
     */
    public function getRequestId()
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id
     *
     * @param string $request_id request_id
     *
     * @return $this
     */
    public function setRequestId($request_id)
    {
        $this->container['request_id'] = $request_id;

        return $this;
    }

    /**
     * Gets executed_list
     *
     * @return string
     */
    public function getExecutedList()
    {
        return $this->container['executed_list'];
    }

    /**
     * Sets executed_list
     *
     * @param string $executed_list executed_list
     *
     * @return $this
     */
    public function setExecutedList($executed_list)
    {
        $this->container['executed_list'] = $executed_list;

        return $this;
    }

    /**
     * Gets execution_result
     *
     * @return string
     */
    public function getExecutionResult()
    {
        return $this->container['execution_result'];
    }

    /**
     * Sets execution_result
     *
     * @param string $execution_result execution_result
     *
     * @return $this
     */
    public function setExecutionResult($execution_result)
    {
        $this->container['execution_result'] = $execution_result;

        return $this;
    }

    /**
     * Gets resources
     *
     * @return \Yjopenapi\Client\Yjopenapi\Client\Model\AiGetPromptResultModelResources[]
     */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
     * Sets resources
     *
     * @param \Yjopenapi\Client\Yjopenapi\Client\Model\AiGetPromptResultModelResources[] $resources resources
     *
     * @return $this
     */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
