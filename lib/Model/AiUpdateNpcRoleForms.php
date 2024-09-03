<?php
/**
 * AiUpdateNpcRoleForms
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

namespace Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model;

use \ArrayAccess;
use \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ObjectSerializer;

/**
 * AiUpdateNpcRoleForms Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class AiUpdateNpcRoleForms implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'AiUpdateNpcRoleForms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'id' => 'int',
'name' => 'string',
'description' => 'string',
'figure_id' => 'int',
'voice_id' => 'int',
'characters' => 'string',
'greetings' => 'string',
'guidance' => 'string[]',
'knowledge_bases' => '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUpdateNpcRoleFormsKnowledgeBases[]',
'plugin_ids' => 'int[]',
'short_memory_round' => 'int',
'operator' => 'string',
'llm_model_id' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'id' => 'int64',
'name' => null,
'description' => null,
'figure_id' => 'int64',
'voice_id' => 'int64',
'characters' => null,
'greetings' => null,
'guidance' => null,
'knowledge_bases' => null,
'plugin_ids' => 'int64',
'short_memory_round' => 'int32',
'operator' => null,
'llm_model_id' => 'int64'    ];

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
        'id' => 'id',
'name' => 'name',
'description' => 'description',
'figure_id' => 'figureId',
'voice_id' => 'voiceId',
'characters' => 'characters',
'greetings' => 'greetings',
'guidance' => 'guidance',
'knowledge_bases' => 'knowledgeBases',
'plugin_ids' => 'pluginIds',
'short_memory_round' => 'shortMemoryRound',
'operator' => 'operator',
'llm_model_id' => 'llmModelId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'description' => 'setDescription',
'figure_id' => 'setFigureId',
'voice_id' => 'setVoiceId',
'characters' => 'setCharacters',
'greetings' => 'setGreetings',
'guidance' => 'setGuidance',
'knowledge_bases' => 'setKnowledgeBases',
'plugin_ids' => 'setPluginIds',
'short_memory_round' => 'setShortMemoryRound',
'operator' => 'setOperator',
'llm_model_id' => 'setLlmModelId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'description' => 'getDescription',
'figure_id' => 'getFigureId',
'voice_id' => 'getVoiceId',
'characters' => 'getCharacters',
'greetings' => 'getGreetings',
'guidance' => 'getGuidance',
'knowledge_bases' => 'getKnowledgeBases',
'plugin_ids' => 'getPluginIds',
'short_memory_round' => 'getShortMemoryRound',
'operator' => 'getOperator',
'llm_model_id' => 'getLlmModelId'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['figure_id'] = isset($data['figure_id']) ? $data['figure_id'] : null;
        $this->container['voice_id'] = isset($data['voice_id']) ? $data['voice_id'] : null;
        $this->container['characters'] = isset($data['characters']) ? $data['characters'] : null;
        $this->container['greetings'] = isset($data['greetings']) ? $data['greetings'] : null;
        $this->container['guidance'] = isset($data['guidance']) ? $data['guidance'] : null;
        $this->container['knowledge_bases'] = isset($data['knowledge_bases']) ? $data['knowledge_bases'] : null;
        $this->container['plugin_ids'] = isset($data['plugin_ids']) ? $data['plugin_ids'] : null;
        $this->container['short_memory_round'] = isset($data['short_memory_round']) ? $data['short_memory_round'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['llm_model_id'] = isset($data['llm_model_id']) ? $data['llm_model_id'] : null;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets figure_id
     *
     * @return int
     */
    public function getFigureId()
    {
        return $this->container['figure_id'];
    }

    /**
     * Sets figure_id
     *
     * @param int $figure_id figure_id
     *
     * @return $this
     */
    public function setFigureId($figure_id)
    {
        $this->container['figure_id'] = $figure_id;

        return $this;
    }

    /**
     * Gets voice_id
     *
     * @return int
     */
    public function getVoiceId()
    {
        return $this->container['voice_id'];
    }

    /**
     * Sets voice_id
     *
     * @param int $voice_id voice_id
     *
     * @return $this
     */
    public function setVoiceId($voice_id)
    {
        $this->container['voice_id'] = $voice_id;

        return $this;
    }

    /**
     * Gets characters
     *
     * @return string
     */
    public function getCharacters()
    {
        return $this->container['characters'];
    }

    /**
     * Sets characters
     *
     * @param string $characters characters
     *
     * @return $this
     */
    public function setCharacters($characters)
    {
        $this->container['characters'] = $characters;

        return $this;
    }

    /**
     * Gets greetings
     *
     * @return string
     */
    public function getGreetings()
    {
        return $this->container['greetings'];
    }

    /**
     * Sets greetings
     *
     * @param string $greetings greetings
     *
     * @return $this
     */
    public function setGreetings($greetings)
    {
        $this->container['greetings'] = $greetings;

        return $this;
    }

    /**
     * Gets guidance
     *
     * @return string[]
     */
    public function getGuidance()
    {
        return $this->container['guidance'];
    }

    /**
     * Sets guidance
     *
     * @param string[] $guidance guidance
     *
     * @return $this
     */
    public function setGuidance($guidance)
    {
        $this->container['guidance'] = $guidance;

        return $this;
    }

    /**
     * Gets knowledge_bases
     *
     * @return \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUpdateNpcRoleFormsKnowledgeBases[]
     */
    public function getKnowledgeBases()
    {
        return $this->container['knowledge_bases'];
    }

    /**
     * Sets knowledge_bases
     *
     * @param \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\AiUpdateNpcRoleFormsKnowledgeBases[] $knowledge_bases knowledge_bases
     *
     * @return $this
     */
    public function setKnowledgeBases($knowledge_bases)
    {
        $this->container['knowledge_bases'] = $knowledge_bases;

        return $this;
    }

    /**
     * Gets plugin_ids
     *
     * @return int[]
     */
    public function getPluginIds()
    {
        return $this->container['plugin_ids'];
    }

    /**
     * Sets plugin_ids
     *
     * @param int[] $plugin_ids plugin_ids
     *
     * @return $this
     */
    public function setPluginIds($plugin_ids)
    {
        $this->container['plugin_ids'] = $plugin_ids;

        return $this;
    }

    /**
     * Gets short_memory_round
     *
     * @return int
     */
    public function getShortMemoryRound()
    {
        return $this->container['short_memory_round'];
    }

    /**
     * Sets short_memory_round
     *
     * @param int $short_memory_round short_memory_round
     *
     * @return $this
     */
    public function setShortMemoryRound($short_memory_round)
    {
        $this->container['short_memory_round'] = $short_memory_round;

        return $this;
    }

    /**
     * Gets operator
     *
     * @return string
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     *
     * @param string $operator operator
     *
     * @return $this
     */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;

        return $this;
    }

    /**
     * Gets llm_model_id
     *
     * @return int
     */
    public function getLlmModelId()
    {
        return $this->container['llm_model_id'];
    }

    /**
     * Sets llm_model_id
     *
     * @param int $llm_model_id llm_model_id
     *
     * @return $this
     */
    public function setLlmModelId($llm_model_id)
    {
        $this->container['llm_model_id'] = $llm_model_id;

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
