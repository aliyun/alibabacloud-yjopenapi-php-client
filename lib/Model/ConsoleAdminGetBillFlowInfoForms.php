<?php
/**
 * ConsoleAdminGetBillFlowInfoForms
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
 * ConsoleAdminGetBillFlowInfoForms Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class ConsoleAdminGetBillFlowInfoForms implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'ConsoleAdminGetBillFlowInfoForms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'accounting_period_from' => 'string',
'accounting_period_to' => 'string',
'commodity_code' => 'string',
'tenant_id' => 'string',
'order_id' => 'string',
'status' => 'string',
'consume_type' => 'string',
'bill_type' => 'string',
'page_number' => 'int',
'page_size' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'accounting_period_from' => null,
'accounting_period_to' => null,
'commodity_code' => null,
'tenant_id' => null,
'order_id' => null,
'status' => null,
'consume_type' => null,
'bill_type' => null,
'page_number' => 'int32',
'page_size' => 'int32'    ];

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
        'accounting_period_from' => 'accountingPeriodFrom',
'accounting_period_to' => 'accountingPeriodTo',
'commodity_code' => 'commodityCode',
'tenant_id' => 'tenantId',
'order_id' => 'orderId',
'status' => 'status',
'consume_type' => 'consumeType',
'bill_type' => 'billType',
'page_number' => 'pageNumber',
'page_size' => 'pageSize'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accounting_period_from' => 'setAccountingPeriodFrom',
'accounting_period_to' => 'setAccountingPeriodTo',
'commodity_code' => 'setCommodityCode',
'tenant_id' => 'setTenantId',
'order_id' => 'setOrderId',
'status' => 'setStatus',
'consume_type' => 'setConsumeType',
'bill_type' => 'setBillType',
'page_number' => 'setPageNumber',
'page_size' => 'setPageSize'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accounting_period_from' => 'getAccountingPeriodFrom',
'accounting_period_to' => 'getAccountingPeriodTo',
'commodity_code' => 'getCommodityCode',
'tenant_id' => 'getTenantId',
'order_id' => 'getOrderId',
'status' => 'getStatus',
'consume_type' => 'getConsumeType',
'bill_type' => 'getBillType',
'page_number' => 'getPageNumber',
'page_size' => 'getPageSize'    ];

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
        $this->container['accounting_period_from'] = isset($data['accounting_period_from']) ? $data['accounting_period_from'] : null;
        $this->container['accounting_period_to'] = isset($data['accounting_period_to']) ? $data['accounting_period_to'] : null;
        $this->container['commodity_code'] = isset($data['commodity_code']) ? $data['commodity_code'] : null;
        $this->container['tenant_id'] = isset($data['tenant_id']) ? $data['tenant_id'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['consume_type'] = isset($data['consume_type']) ? $data['consume_type'] : null;
        $this->container['bill_type'] = isset($data['bill_type']) ? $data['bill_type'] : null;
        $this->container['page_number'] = isset($data['page_number']) ? $data['page_number'] : null;
        $this->container['page_size'] = isset($data['page_size']) ? $data['page_size'] : null;
    }


    /**
     * Gets accounting_period_from
     *
     * @return string
     */
    public function getAccountingPeriodFrom()
    {
        return $this->container['accounting_period_from'];
    }

    /**
     * Sets accounting_period_from
     *
     * @param string $accounting_period_from accounting_period_from
     *
     * @return $this
     */
    public function setAccountingPeriodFrom($accounting_period_from)
    {
        $this->container['accounting_period_from'] = $accounting_period_from;

        return $this;
    }

    /**
     * Gets accounting_period_to
     *
     * @return string
     */
    public function getAccountingPeriodTo()
    {
        return $this->container['accounting_period_to'];
    }

    /**
     * Sets accounting_period_to
     *
     * @param string $accounting_period_to accounting_period_to
     *
     * @return $this
     */
    public function setAccountingPeriodTo($accounting_period_to)
    {
        $this->container['accounting_period_to'] = $accounting_period_to;

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
     * @param string $commodity_code commodity_code
     *
     * @return $this
     */
    public function setCommodityCode($commodity_code)
    {
        $this->container['commodity_code'] = $commodity_code;

        return $this;
    }

    /**
     * Gets tenant_id
     *
     * @return string
     */
    public function getTenantId()
    {
        return $this->container['tenant_id'];
    }

    /**
     * Sets tenant_id
     *
     * @param string $tenant_id tenant_id
     *
     * @return $this
     */
    public function setTenantId($tenant_id)
    {
        $this->container['tenant_id'] = $tenant_id;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id order_id
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

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
     * Gets consume_type
     *
     * @return string
     */
    public function getConsumeType()
    {
        return $this->container['consume_type'];
    }

    /**
     * Sets consume_type
     *
     * @param string $consume_type consume_type
     *
     * @return $this
     */
    public function setConsumeType($consume_type)
    {
        $this->container['consume_type'] = $consume_type;

        return $this;
    }

    /**
     * Gets bill_type
     *
     * @return string
     */
    public function getBillType()
    {
        return $this->container['bill_type'];
    }

    /**
     * Sets bill_type
     *
     * @param string $bill_type bill_type
     *
     * @return $this
     */
    public function setBillType($bill_type)
    {
        $this->container['bill_type'] = $bill_type;

        return $this;
    }

    /**
     * Gets page_number
     *
     * @return int
     */
    public function getPageNumber()
    {
        return $this->container['page_number'];
    }

    /**
     * Sets page_number
     *
     * @param int $page_number page_number
     *
     * @return $this
     */
    public function setPageNumber($page_number)
    {
        $this->container['page_number'] = $page_number;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return int
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param int $page_size page_size
     *
     * @return $this
     */
    public function setPageSize($page_size)
    {
        $this->container['page_size'] = $page_size;

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
