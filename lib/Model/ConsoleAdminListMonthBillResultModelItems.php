<?php
/**
 * ConsoleAdminListMonthBillResultModelItems
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

namespace Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model;

use \ArrayAccess;
use \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ObjectSerializer;

/**
 * ConsoleAdminListMonthBillResultModelItems Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class ConsoleAdminListMonthBillResultModelItems implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'ConsoleAdminListMonthBillResultModelItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'latest_paid_time' => 'string',
'tenant_name' => 'string',
'tenant_id' => 'int',
'bill_status' => 'string',
'accounting_period' => 'string',
'bill_outgoing_time' => 'string',
'cash_pay_amount' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'latest_paid_time' => null,
'tenant_name' => null,
'tenant_id' => 'int64',
'bill_status' => null,
'accounting_period' => null,
'bill_outgoing_time' => null,
'cash_pay_amount' => 'int64'    ];

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
        'latest_paid_time' => 'latestPaidTime',
'tenant_name' => 'tenantName',
'tenant_id' => 'tenantId',
'bill_status' => 'billStatus',
'accounting_period' => 'accountingPeriod',
'bill_outgoing_time' => 'billOutgoingTime',
'cash_pay_amount' => 'cashPayAmount'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'latest_paid_time' => 'setLatestPaidTime',
'tenant_name' => 'setTenantName',
'tenant_id' => 'setTenantId',
'bill_status' => 'setBillStatus',
'accounting_period' => 'setAccountingPeriod',
'bill_outgoing_time' => 'setBillOutgoingTime',
'cash_pay_amount' => 'setCashPayAmount'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'latest_paid_time' => 'getLatestPaidTime',
'tenant_name' => 'getTenantName',
'tenant_id' => 'getTenantId',
'bill_status' => 'getBillStatus',
'accounting_period' => 'getAccountingPeriod',
'bill_outgoing_time' => 'getBillOutgoingTime',
'cash_pay_amount' => 'getCashPayAmount'    ];

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
        $this->container['latest_paid_time'] = isset($data['latest_paid_time']) ? $data['latest_paid_time'] : null;
        $this->container['tenant_name'] = isset($data['tenant_name']) ? $data['tenant_name'] : null;
        $this->container['tenant_id'] = isset($data['tenant_id']) ? $data['tenant_id'] : null;
        $this->container['bill_status'] = isset($data['bill_status']) ? $data['bill_status'] : null;
        $this->container['accounting_period'] = isset($data['accounting_period']) ? $data['accounting_period'] : null;
        $this->container['bill_outgoing_time'] = isset($data['bill_outgoing_time']) ? $data['bill_outgoing_time'] : null;
        $this->container['cash_pay_amount'] = isset($data['cash_pay_amount']) ? $data['cash_pay_amount'] : null;
    }


    /**
     * Gets latest_paid_time
     *
     * @return string
     */
    public function getLatestPaidTime()
    {
        return $this->container['latest_paid_time'];
    }

    /**
     * Sets latest_paid_time
     *
     * @param string $latest_paid_time 到期还款日期
     *
     * @return $this
     */
    public function setLatestPaidTime($latest_paid_time)
    {
        $this->container['latest_paid_time'] = $latest_paid_time;

        return $this;
    }

    /**
     * Gets tenant_name
     *
     * @return string
     */
    public function getTenantName()
    {
        return $this->container['tenant_name'];
    }

    /**
     * Sets tenant_name
     *
     * @param string $tenant_name 租户名称
     *
     * @return $this
     */
    public function setTenantName($tenant_name)
    {
        $this->container['tenant_name'] = $tenant_name;

        return $this;
    }

    /**
     * Gets tenant_id
     *
     * @return int
     */
    public function getTenantId()
    {
        return $this->container['tenant_id'];
    }

    /**
     * Sets tenant_id
     *
     * @param int $tenant_id 租户ID
     *
     * @return $this
     */
    public function setTenantId($tenant_id)
    {
        $this->container['tenant_id'] = $tenant_id;

        return $this;
    }

    /**
     * Gets bill_status
     *
     * @return string
     */
    public function getBillStatus()
    {
        return $this->container['bill_status'];
    }

    /**
     * Sets bill_status
     *
     * @param string $bill_status 账单状态
     *
     * @return $this
     */
    public function setBillStatus($bill_status)
    {
        $this->container['bill_status'] = $bill_status;

        return $this;
    }

    /**
     * Gets accounting_period
     *
     * @return string
     */
    public function getAccountingPeriod()
    {
        return $this->container['accounting_period'];
    }

    /**
     * Sets accounting_period
     *
     * @param string $accounting_period 账期
     *
     * @return $this
     */
    public function setAccountingPeriod($accounting_period)
    {
        $this->container['accounting_period'] = $accounting_period;

        return $this;
    }

    /**
     * Gets bill_outgoing_time
     *
     * @return string
     */
    public function getBillOutgoingTime()
    {
        return $this->container['bill_outgoing_time'];
    }

    /**
     * Sets bill_outgoing_time
     *
     * @param string $bill_outgoing_time 已出账的日期
     *
     * @return $this
     */
    public function setBillOutgoingTime($bill_outgoing_time)
    {
        $this->container['bill_outgoing_time'] = $bill_outgoing_time;

        return $this;
    }

    /**
     * Gets cash_pay_amount
     *
     * @return int
     */
    public function getCashPayAmount()
    {
        return $this->container['cash_pay_amount'];
    }

    /**
     * Sets cash_pay_amount
     *
     * @param int $cash_pay_amount 消费金额
     *
     * @return $this
     */
    public function setCashPayAmount($cash_pay_amount)
    {
        $this->container['cash_pay_amount'] = $cash_pay_amount;

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
