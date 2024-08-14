<?php
/**
 * ConsoleAdminQueryAdaptResultByVersionIdResultModel
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

namespace Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model;

use \ArrayAccess;
use \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ObjectSerializer;

/**
 * ConsoleAdminQueryAdaptResultByVersionIdResultModel Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class ConsoleAdminQueryAdaptResultByVersionIdResultModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'ConsoleAdminQueryAdaptResultByVersionIdResultModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'adapt_file_source_name' => 'string',
'dict_frame_rate' => 'string',
'dict_machine_type_vm' => 'string',
'container_type' => 'int',
'sandbox' => 'int',
'platform_type' => 'int',
'priority' => 'int',
'resolution' => 'string',
'adapt_file_source' => 'string',
'required' => 'int',
'max_concurrency' => 'int',
'state' => 'int',
'pipeline_type' => 'int',
'dict_pic_quality' => 'string',
'dict_isv_name' => 'string',
'calculation_evaluation' => 'map[string,string]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'adapt_file_source_name' => null,
'dict_frame_rate' => null,
'dict_machine_type_vm' => null,
'container_type' => null,
'sandbox' => null,
'platform_type' => null,
'priority' => null,
'resolution' => null,
'adapt_file_source' => null,
'required' => null,
'max_concurrency' => null,
'state' => null,
'pipeline_type' => null,
'dict_pic_quality' => null,
'dict_isv_name' => null,
'calculation_evaluation' => null    ];

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
        'adapt_file_source_name' => 'adaptFileSourceName',
'dict_frame_rate' => 'dictFrameRate',
'dict_machine_type_vm' => 'dictMachineTypeVm',
'container_type' => 'containerType',
'sandbox' => 'sandbox',
'platform_type' => 'platformType',
'priority' => 'priority',
'resolution' => 'resolution',
'adapt_file_source' => 'adaptFileSource',
'required' => 'required',
'max_concurrency' => 'maxConcurrency',
'state' => 'state',
'pipeline_type' => 'pipelineType',
'dict_pic_quality' => 'dictPicQuality',
'dict_isv_name' => 'dictIsvName',
'calculation_evaluation' => 'calculationEvaluation'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adapt_file_source_name' => 'setAdaptFileSourceName',
'dict_frame_rate' => 'setDictFrameRate',
'dict_machine_type_vm' => 'setDictMachineTypeVm',
'container_type' => 'setContainerType',
'sandbox' => 'setSandbox',
'platform_type' => 'setPlatformType',
'priority' => 'setPriority',
'resolution' => 'setResolution',
'adapt_file_source' => 'setAdaptFileSource',
'required' => 'setRequired',
'max_concurrency' => 'setMaxConcurrency',
'state' => 'setState',
'pipeline_type' => 'setPipelineType',
'dict_pic_quality' => 'setDictPicQuality',
'dict_isv_name' => 'setDictIsvName',
'calculation_evaluation' => 'setCalculationEvaluation'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adapt_file_source_name' => 'getAdaptFileSourceName',
'dict_frame_rate' => 'getDictFrameRate',
'dict_machine_type_vm' => 'getDictMachineTypeVm',
'container_type' => 'getContainerType',
'sandbox' => 'getSandbox',
'platform_type' => 'getPlatformType',
'priority' => 'getPriority',
'resolution' => 'getResolution',
'adapt_file_source' => 'getAdaptFileSource',
'required' => 'getRequired',
'max_concurrency' => 'getMaxConcurrency',
'state' => 'getState',
'pipeline_type' => 'getPipelineType',
'dict_pic_quality' => 'getDictPicQuality',
'dict_isv_name' => 'getDictIsvName',
'calculation_evaluation' => 'getCalculationEvaluation'    ];

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
        $this->container['adapt_file_source_name'] = isset($data['adapt_file_source_name']) ? $data['adapt_file_source_name'] : null;
        $this->container['dict_frame_rate'] = isset($data['dict_frame_rate']) ? $data['dict_frame_rate'] : null;
        $this->container['dict_machine_type_vm'] = isset($data['dict_machine_type_vm']) ? $data['dict_machine_type_vm'] : null;
        $this->container['container_type'] = isset($data['container_type']) ? $data['container_type'] : null;
        $this->container['sandbox'] = isset($data['sandbox']) ? $data['sandbox'] : null;
        $this->container['platform_type'] = isset($data['platform_type']) ? $data['platform_type'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['resolution'] = isset($data['resolution']) ? $data['resolution'] : null;
        $this->container['adapt_file_source'] = isset($data['adapt_file_source']) ? $data['adapt_file_source'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['max_concurrency'] = isset($data['max_concurrency']) ? $data['max_concurrency'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['pipeline_type'] = isset($data['pipeline_type']) ? $data['pipeline_type'] : null;
        $this->container['dict_pic_quality'] = isset($data['dict_pic_quality']) ? $data['dict_pic_quality'] : null;
        $this->container['dict_isv_name'] = isset($data['dict_isv_name']) ? $data['dict_isv_name'] : null;
        $this->container['calculation_evaluation'] = isset($data['calculation_evaluation']) ? $data['calculation_evaluation'] : null;
    }


    /**
     * Gets adapt_file_source_name
     *
     * @return string
     */
    public function getAdaptFileSourceName()
    {
        return $this->container['adapt_file_source_name'];
    }

    /**
     * Sets adapt_file_source_name
     *
     * @param string $adapt_file_source_name adapt_file_source_name
     *
     * @return $this
     */
    public function setAdaptFileSourceName($adapt_file_source_name)
    {
        $this->container['adapt_file_source_name'] = $adapt_file_source_name;

        return $this;
    }

    /**
     * Gets dict_frame_rate
     *
     * @return string
     */
    public function getDictFrameRate()
    {
        return $this->container['dict_frame_rate'];
    }

    /**
     * Sets dict_frame_rate
     *
     * @param string $dict_frame_rate dict_frame_rate
     *
     * @return $this
     */
    public function setDictFrameRate($dict_frame_rate)
    {
        $this->container['dict_frame_rate'] = $dict_frame_rate;

        return $this;
    }

    /**
     * Gets dict_machine_type_vm
     *
     * @return string
     */
    public function getDictMachineTypeVm()
    {
        return $this->container['dict_machine_type_vm'];
    }

    /**
     * Sets dict_machine_type_vm
     *
     * @param string $dict_machine_type_vm dict_machine_type_vm
     *
     * @return $this
     */
    public function setDictMachineTypeVm($dict_machine_type_vm)
    {
        $this->container['dict_machine_type_vm'] = $dict_machine_type_vm;

        return $this;
    }

    /**
     * Gets container_type
     *
     * @return int
     */
    public function getContainerType()
    {
        return $this->container['container_type'];
    }

    /**
     * Sets container_type
     *
     * @param int $container_type container_type
     *
     * @return $this
     */
    public function setContainerType($container_type)
    {
        $this->container['container_type'] = $container_type;

        return $this;
    }

    /**
     * Gets sandbox
     *
     * @return int
     */
    public function getSandbox()
    {
        return $this->container['sandbox'];
    }

    /**
     * Sets sandbox
     *
     * @param int $sandbox sandbox
     *
     * @return $this
     */
    public function setSandbox($sandbox)
    {
        $this->container['sandbox'] = $sandbox;

        return $this;
    }

    /**
     * Gets platform_type
     *
     * @return int
     */
    public function getPlatformType()
    {
        return $this->container['platform_type'];
    }

    /**
     * Sets platform_type
     *
     * @param int $platform_type platform_type
     *
     * @return $this
     */
    public function setPlatformType($platform_type)
    {
        $this->container['platform_type'] = $platform_type;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int $priority priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

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
     * Gets adapt_file_source
     *
     * @return string
     */
    public function getAdaptFileSource()
    {
        return $this->container['adapt_file_source'];
    }

    /**
     * Sets adapt_file_source
     *
     * @param string $adapt_file_source adapt_file_source
     *
     * @return $this
     */
    public function setAdaptFileSource($adapt_file_source)
    {
        $this->container['adapt_file_source'] = $adapt_file_source;

        return $this;
    }

    /**
     * Gets required
     *
     * @return int
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param int $required required
     *
     * @return $this
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets max_concurrency
     *
     * @return int
     */
    public function getMaxConcurrency()
    {
        return $this->container['max_concurrency'];
    }

    /**
     * Sets max_concurrency
     *
     * @param int $max_concurrency max_concurrency
     *
     * @return $this
     */
    public function setMaxConcurrency($max_concurrency)
    {
        $this->container['max_concurrency'] = $max_concurrency;

        return $this;
    }

    /**
     * Gets state
     *
     * @return int
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param int $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets pipeline_type
     *
     * @return int
     */
    public function getPipelineType()
    {
        return $this->container['pipeline_type'];
    }

    /**
     * Sets pipeline_type
     *
     * @param int $pipeline_type pipeline_type
     *
     * @return $this
     */
    public function setPipelineType($pipeline_type)
    {
        $this->container['pipeline_type'] = $pipeline_type;

        return $this;
    }

    /**
     * Gets dict_pic_quality
     *
     * @return string
     */
    public function getDictPicQuality()
    {
        return $this->container['dict_pic_quality'];
    }

    /**
     * Sets dict_pic_quality
     *
     * @param string $dict_pic_quality dict_pic_quality
     *
     * @return $this
     */
    public function setDictPicQuality($dict_pic_quality)
    {
        $this->container['dict_pic_quality'] = $dict_pic_quality;

        return $this;
    }

    /**
     * Gets dict_isv_name
     *
     * @return string
     */
    public function getDictIsvName()
    {
        return $this->container['dict_isv_name'];
    }

    /**
     * Sets dict_isv_name
     *
     * @param string $dict_isv_name dict_isv_name
     *
     * @return $this
     */
    public function setDictIsvName($dict_isv_name)
    {
        $this->container['dict_isv_name'] = $dict_isv_name;

        return $this;
    }

    /**
     * Gets calculation_evaluation
     *
     * @return map[string,string]
     */
    public function getCalculationEvaluation()
    {
        return $this->container['calculation_evaluation'];
    }

    /**
     * Sets calculation_evaluation
     *
     * @param map[string,string] $calculation_evaluation calculation_evaluation
     *
     * @return $this
     */
    public function setCalculationEvaluation($calculation_evaluation)
    {
        $this->container['calculation_evaluation'] = $calculation_evaluation;

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
