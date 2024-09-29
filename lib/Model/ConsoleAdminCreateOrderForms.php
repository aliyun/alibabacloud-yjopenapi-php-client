<?php
/**
 * ConsoleAdminCreateOrderForms
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
 * ConsoleAdminCreateOrderForms Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class ConsoleAdminCreateOrderForms implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'ConsoleAdminCreateOrderForms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'category_code' => 'string',
'commodity_code' => 'string',
'instance_id' => 'string',
'primary_charge_item_code' => 'string',
'attribute_request_list' => '\Yjopenapi\Client\Model\ConsoleAdminCreateOrderFormsAttributeRequestList[]',
'order_type' => 'string',
'auto_renew' => 'bool',
'create_order_ext_params' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'category_code' => null,
'commodity_code' => null,
'instance_id' => null,
'primary_charge_item_code' => null,
'attribute_request_list' => null,
'order_type' => null,
'auto_renew' => null,
'create_order_ext_params' => null    ];

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
        'category_code' => 'categoryCode',
'commodity_code' => 'commodityCode',
'instance_id' => 'instanceId',
'primary_charge_item_code' => 'primaryChargeItemCode',
'attribute_request_list' => 'attributeRequestList',
'order_type' => 'orderType',
'auto_renew' => 'autoRenew',
'create_order_ext_params' => 'createOrderExtParams'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category_code' => 'setCategoryCode',
'commodity_code' => 'setCommodityCode',
'instance_id' => 'setInstanceId',
'primary_charge_item_code' => 'setPrimaryChargeItemCode',
'attribute_request_list' => 'setAttributeRequestList',
'order_type' => 'setOrderType',
'auto_renew' => 'setAutoRenew',
'create_order_ext_params' => 'setCreateOrderExtParams'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category_code' => 'getCategoryCode',
'commodity_code' => 'getCommodityCode',
'instance_id' => 'getInstanceId',
'primary_charge_item_code' => 'getPrimaryChargeItemCode',
'attribute_request_list' => 'getAttributeRequestList',
'order_type' => 'getOrderType',
'auto_renew' => 'getAutoRenew',
'create_order_ext_params' => 'getCreateOrderExtParams'    ];

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
        $this->container['category_code'] = isset($data['category_code']) ? $data['category_code'] : null;
        $this->container['commodity_code'] = isset($data['commodity_code']) ? $data['commodity_code'] : null;
        $this->container['instance_id'] = isset($data['instance_id']) ? $data['instance_id'] : null;
        $this->container['primary_charge_item_code'] = isset($data['primary_charge_item_code']) ? $data['primary_charge_item_code'] : null;
        $this->container['attribute_request_list'] = isset($data['attribute_request_list']) ? $data['attribute_request_list'] : null;
        $this->container['order_type'] = isset($data['order_type']) ? $data['order_type'] : null;
        $this->container['auto_renew'] = isset($data['auto_renew']) ? $data['auto_renew'] : null;
        $this->container['create_order_ext_params'] = isset($data['create_order_ext_params']) ? $data['create_order_ext_params'] : null;
    }


    /**
     * Gets category_code
     *
     * @return string
     */
    public function getCategoryCode()
    {
        return $this->container['category_code'];
    }

    /**
     * Sets category_code
     *
     * @param string $category_code 类目编码
     *
     * @return $this
     */
    public function setCategoryCode($category_code)
    {
        $this->container['category_code'] = $category_code;

        return $this;
    }

    /**
     * Gets commodity_code
     *
     * @return string
     */
    public function getCommodityCode()
    {
        return $this->container['commodity_code'];
    }

    /**
     * Sets commodity_code
     *
     * @param string $commodity_code 商品编码
     *
     * @return $this
     */
    public function setCommodityCode($commodity_code)
    {
        $this->container['commodity_code'] = $commodity_code;

        return $this;
    }

    /**
     * Gets instance_id
     *
     * @return string
     */
    public function getInstanceId()
    {
        return $this->container['instance_id'];
    }

    /**
     * Sets instance_id
     *
     * @param string $instance_id 实例ID
     *
     * @return $this
     */
    public function setInstanceId($instance_id)
    {
        $this->container['instance_id'] = $instance_id;

        return $this;
    }

    /**
     * Gets primary_charge_item_code
     *
     * @return string
     */
    public function getPrimaryChargeItemCode()
    {
        return $this->container['primary_charge_item_code'];
    }

    /**
     * Sets primary_charge_item_code
     *
     * @param string $primary_charge_item_code 主计费项编码
     *
     * @return $this
     */
    public function setPrimaryChargeItemCode($primary_charge_item_code)
    {
        $this->container['primary_charge_item_code'] = $primary_charge_item_code;

        return $this;
    }

    /**
     * Gets attribute_request_list
     *
     * @return \Yjopenapi\Client\Model\ConsoleAdminCreateOrderFormsAttributeRequestList[]
     */
    public function getAttributeRequestList()
    {
        return $this->container['attribute_request_list'];
    }

    /**
     * Sets attribute_request_list
     *
     * @param \Yjopenapi\Client\Model\ConsoleAdminCreateOrderFormsAttributeRequestList[] $attribute_request_list attribute_request_list
     *
     * @return $this
     */
    public function setAttributeRequestList($attribute_request_list)
    {
        $this->container['attribute_request_list'] = $attribute_request_list;

        return $this;
    }

    /**
     * Gets order_type
     *
     * @return string
     */
    public function getOrderType()
    {
        return $this->container['order_type'];
    }

    /**
     * Sets order_type
     *
     * @param string $order_type 订单类型
     *
     * @return $this
     */
    public function setOrderType($order_type)
    {
        $this->container['order_type'] = $order_type;

        return $this;
    }

    /**
     * Gets auto_renew
     *
     * @return bool
     */
    public function getAutoRenew()
    {
        return $this->container['auto_renew'];
    }

    /**
     * Sets auto_renew
     *
     * @param bool $auto_renew 是否开启自动续费
     *
     * @return $this
     */
    public function setAutoRenew($auto_renew)
    {
        $this->container['auto_renew'] = $auto_renew;

        return $this;
    }

    /**
     * Gets create_order_ext_params
     *
     * @return string
     */
    public function getCreateOrderExtParams()
    {
        return $this->container['create_order_ext_params'];
    }

    /**
     * Sets create_order_ext_params
     *
     * @param string $create_order_ext_params 下单扩展信息
     *
     * @return $this
     */
    public function setCreateOrderExtParams($create_order_ext_params)
    {
        $this->container['create_order_ext_params'] = $create_order_ext_params;

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
