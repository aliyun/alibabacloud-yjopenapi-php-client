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

namespace Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model;

use \ArrayAccess;
use \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ObjectSerializer;

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
        'prompt_result' => 'string',
'request_id' => 'string',
'prompt_response' => 'string',
'resources' => '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiGetPromptResultModelResources[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'prompt_result' => null,
'request_id' => null,
'prompt_response' => null,
'resources' => null    ];

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
        'prompt_result' => 'promptResult',
'request_id' => 'requestId',
'prompt_response' => 'promptResponse',
'resources' => 'resources'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'prompt_result' => 'setPromptResult',
'request_id' => 'setRequestId',
'prompt_response' => 'setPromptResponse',
'resources' => 'setResources'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'prompt_result' => 'getPromptResult',
'request_id' => 'getRequestId',
'prompt_response' => 'getPromptResponse',
'resources' => 'getResources'    ];

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
        $this->container['prompt_result'] = isset($data['prompt_result']) ? $data['prompt_result'] : null;
        $this->container['request_id'] = isset($data['request_id']) ? $data['request_id'] : null;
        $this->container['prompt_response'] = isset($data['prompt_response']) ? $data['prompt_response'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
    }


    /**
     * Gets prompt_result
     *
     * @return string
     */
    public function getPromptResult()
    {
        return $this->container['prompt_result'];
    }

    /**
     * Sets prompt_result
     *
     * @param string $prompt_result prompt_result
     *
     * @return $this
     */
    public function setPromptResult($prompt_result)
    {
        $this->container['prompt_result'] = $prompt_result;

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
     * Gets prompt_response
     *
     * @return string
     */
    public function getPromptResponse()
    {
        return $this->container['prompt_response'];
    }

    /**
     * Sets prompt_response
     *
     * @param string $prompt_response prompt_response
     *
     * @return $this
     */
    public function setPromptResponse($prompt_response)
    {
        $this->container['prompt_response'] = $prompt_response;

        return $this;
    }

    /**
     * Gets resources
     *
     * @return \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiGetPromptResultModelResources[]
     */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
     * Sets resources
     *
     * @param \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiGetPromptResultModelResources[] $resources resources
     *
     * @return $this
     */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;

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
