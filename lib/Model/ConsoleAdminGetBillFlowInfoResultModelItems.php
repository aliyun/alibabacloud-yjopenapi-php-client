<?php
/**
 * ConsoleAdminGetBillFlowInfoResultModelItems
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

namespace Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model;

use \ArrayAccess;
use \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ObjectSerializer;

/**
 * ConsoleAdminGetBillFlowInfoResultModelItems Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class ConsoleAdminGetBillFlowInfoResultModelItems implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'ConsoleAdminGetBillFlowInfoResultModelItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'consume_period_start_time' => 'int',
'total_unclear_amount' => 'string',
'amount' => 'int',
'order_id' => 'string',
'bill_type' => 'string',
'discount_amount' => 'string',
'actual_total_pay_amount' => 'int',
'refund_order_id' => 'string',
'consume_period_end_time' => 'int',
'pay_amount' => 'int',
'tenant_name' => 'string',
'settlement_status' => 'string',
'voucher_pay_amount' => 'string',
'accounting_period' => 'string',
'consume_type' => 'string',
'commodity_name' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'consume_period_start_time' => 'int64',
'total_unclear_amount' => null,
'amount' => 'int64',
'order_id' => null,
'bill_type' => null,
'discount_amount' => null,
'actual_total_pay_amount' => 'int64',
'refund_order_id' => null,
'consume_period_end_time' => 'int64',
'pay_amount' => 'int64',
'tenant_name' => null,
'settlement_status' => null,
'voucher_pay_amount' => null,
'accounting_period' => null,
'consume_type' => null,
'commodity_name' => null    ];

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
        'consume_period_start_time' => 'consumePeriodStartTime',
'total_unclear_amount' => 'totalUnclearAmount',
'amount' => 'amount',
'order_id' => 'orderId',
'bill_type' => 'billType',
'discount_amount' => 'discountAmount',
'actual_total_pay_amount' => 'actualTotalPayAmount',
'refund_order_id' => 'refundOrderId',
'consume_period_end_time' => 'consumePeriodEndTime',
'pay_amount' => 'payAmount',
'tenant_name' => 'tenantName',
'settlement_status' => 'settlementStatus',
'voucher_pay_amount' => 'voucherPayAmount',
'accounting_period' => 'accountingPeriod',
'consume_type' => 'consumeType',
'commodity_name' => 'commodityName'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'consume_period_start_time' => 'setConsumePeriodStartTime',
'total_unclear_amount' => 'setTotalUnclearAmount',
'amount' => 'setAmount',
'order_id' => 'setOrderId',
'bill_type' => 'setBillType',
'discount_amount' => 'setDiscountAmount',
'actual_total_pay_amount' => 'setActualTotalPayAmount',
'refund_order_id' => 'setRefundOrderId',
'consume_period_end_time' => 'setConsumePeriodEndTime',
'pay_amount' => 'setPayAmount',
'tenant_name' => 'setTenantName',
'settlement_status' => 'setSettlementStatus',
'voucher_pay_amount' => 'setVoucherPayAmount',
'accounting_period' => 'setAccountingPeriod',
'consume_type' => 'setConsumeType',
'commodity_name' => 'setCommodityName'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'consume_period_start_time' => 'getConsumePeriodStartTime',
'total_unclear_amount' => 'getTotalUnclearAmount',
'amount' => 'getAmount',
'order_id' => 'getOrderId',
'bill_type' => 'getBillType',
'discount_amount' => 'getDiscountAmount',
'actual_total_pay_amount' => 'getActualTotalPayAmount',
'refund_order_id' => 'getRefundOrderId',
'consume_period_end_time' => 'getConsumePeriodEndTime',
'pay_amount' => 'getPayAmount',
'tenant_name' => 'getTenantName',
'settlement_status' => 'getSettlementStatus',
'voucher_pay_amount' => 'getVoucherPayAmount',
'accounting_period' => 'getAccountingPeriod',
'consume_type' => 'getConsumeType',
'commodity_name' => 'getCommodityName'    ];

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
        $this->container['consume_period_start_time'] = isset($data['consume_period_start_time']) ? $data['consume_period_start_time'] : null;
        $this->container['total_unclear_amount'] = isset($data['total_unclear_amount']) ? $data['total_unclear_amount'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['bill_type'] = isset($data['bill_type']) ? $data['bill_type'] : null;
        $this->container['discount_amount'] = isset($data['discount_amount']) ? $data['discount_amount'] : null;
        $this->container['actual_total_pay_amount'] = isset($data['actual_total_pay_amount']) ? $data['actual_total_pay_amount'] : null;
        $this->container['refund_order_id'] = isset($data['refund_order_id']) ? $data['refund_order_id'] : null;
        $this->container['consume_period_end_time'] = isset($data['consume_period_end_time']) ? $data['consume_period_end_time'] : null;
        $this->container['pay_amount'] = isset($data['pay_amount']) ? $data['pay_amount'] : null;
        $this->container['tenant_name'] = isset($data['tenant_name']) ? $data['tenant_name'] : null;
        $this->container['settlement_status'] = isset($data['settlement_status']) ? $data['settlement_status'] : null;
        $this->container['voucher_pay_amount'] = isset($data['voucher_pay_amount']) ? $data['voucher_pay_amount'] : null;
        $this->container['accounting_period'] = isset($data['accounting_period']) ? $data['accounting_period'] : null;
        $this->container['consume_type'] = isset($data['consume_type']) ? $data['consume_type'] : null;
        $this->container['commodity_name'] = isset($data['commodity_name']) ? $data['commodity_name'] : null;
    }


    /**
     * Gets consume_period_start_time
     *
     * @return int
     */
    public function getConsumePeriodStartTime()
    {
        return $this->container['consume_period_start_time'];
    }

    /**
     * Sets consume_period_start_time
     *
     * @param int $consume_period_start_time consume_period_start_time
     *
     * @return $this
     */
    public function setConsumePeriodStartTime($consume_period_start_time)
    {
        $this->container['consume_period_start_time'] = $consume_period_start_time;

        return $this;
    }

    /**
     * Gets total_unclear_amount
     *
     * @return string
     */
    public function getTotalUnclearAmount()
    {
        return $this->container['total_unclear_amount'];
    }

    /**
     * Sets total_unclear_amount
     *
     * @param string $total_unclear_amount total_unclear_amount
     *
     * @return $this
     */
    public function setTotalUnclearAmount($total_unclear_amount)
    {
        $this->container['total_unclear_amount'] = $total_unclear_amount;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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
     * Gets discount_amount
     *
     * @return string
     */
    public function getDiscountAmount()
    {
        return $this->container['discount_amount'];
    }

    /**
     * Sets discount_amount
     *
     * @param string $discount_amount discount_amount
     *
     * @return $this
     */
    public function setDiscountAmount($discount_amount)
    {
        $this->container['discount_amount'] = $discount_amount;

        return $this;
    }

    /**
     * Gets actual_total_pay_amount
     *
     * @return int
     */
    public function getActualTotalPayAmount()
    {
        return $this->container['actual_total_pay_amount'];
    }

    /**
     * Sets actual_total_pay_amount
     *
     * @param int $actual_total_pay_amount actual_total_pay_amount
     *
     * @return $this
     */
    public function setActualTotalPayAmount($actual_total_pay_amount)
    {
        $this->container['actual_total_pay_amount'] = $actual_total_pay_amount;

        return $this;
    }

    /**
     * Gets refund_order_id
     *
     * @return string
     */
    public function getRefundOrderId()
    {
        return $this->container['refund_order_id'];
    }

    /**
     * Sets refund_order_id
     *
     * @param string $refund_order_id refund_order_id
     *
     * @return $this
     */
    public function setRefundOrderId($refund_order_id)
    {
        $this->container['refund_order_id'] = $refund_order_id;

        return $this;
    }

    /**
     * Gets consume_period_end_time
     *
     * @return int
     */
    public function getConsumePeriodEndTime()
    {
        return $this->container['consume_period_end_time'];
    }

    /**
     * Sets consume_period_end_time
     *
     * @param int $consume_period_end_time consume_period_end_time
     *
     * @return $this
     */
    public function setConsumePeriodEndTime($consume_period_end_time)
    {
        $this->container['consume_period_end_time'] = $consume_period_end_time;

        return $this;
    }

    /**
     * Gets pay_amount
     *
     * @return int
     */
    public function getPayAmount()
    {
        return $this->container['pay_amount'];
    }

    /**
     * Sets pay_amount
     *
     * @param int $pay_amount pay_amount
     *
     * @return $this
     */
    public function setPayAmount($pay_amount)
    {
        $this->container['pay_amount'] = $pay_amount;

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
     * @param string $tenant_name tenant_name
     *
     * @return $this
     */
    public function setTenantName($tenant_name)
    {
        $this->container['tenant_name'] = $tenant_name;

        return $this;
    }

    /**
     * Gets settlement_status
     *
     * @return string
     */
    public function getSettlementStatus()
    {
        return $this->container['settlement_status'];
    }

    /**
     * Sets settlement_status
     *
     * @param string $settlement_status settlement_status
     *
     * @return $this
     */
    public function setSettlementStatus($settlement_status)
    {
        $this->container['settlement_status'] = $settlement_status;

        return $this;
    }

    /**
     * Gets voucher_pay_amount
     *
     * @return string
     */
    public function getVoucherPayAmount()
    {
        return $this->container['voucher_pay_amount'];
    }

    /**
     * Sets voucher_pay_amount
     *
     * @param string $voucher_pay_amount voucher_pay_amount
     *
     * @return $this
     */
    public function setVoucherPayAmount($voucher_pay_amount)
    {
        $this->container['voucher_pay_amount'] = $voucher_pay_amount;

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
     * @param string $accounting_period accounting_period
     *
     * @return $this
     */
    public function setAccountingPeriod($accounting_period)
    {
        $this->container['accounting_period'] = $accounting_period;

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
     * Gets commodity_name
     *
     * @return string
     */
    public function getCommodityName()
    {
        return $this->container['commodity_name'];
    }

    /**
     * Sets commodity_name
     *
     * @param string $commodity_name commodity_name
     *
     * @return $this
     */
    public function setCommodityName($commodity_name)
    {
        $this->container['commodity_name'] = $commodity_name;

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
