<?php
/**
 * ConsoleAdminGetOrderResultModel
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

namespace Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model;

use \ArrayAccess;
use \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Api\ObjectSerializer;

/**
 * ConsoleAdminGetOrderResultModel Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class ConsoleAdminGetOrderResultModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $serialModelName = 'ConsoleAdminGetOrderResultModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialTypes = [
        'order_type' => 'string',
'order_id' => 'string',
'attribute_list' => '\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\ConsoleAdminGetOrderResultModelAttributeList[]',
'charge_type' => 'string',
'discount_amount' => 'int',
'credit_pay_amount' => 'int',
'downgrade_refund_amount' => 'int',
'downgrade_credit_refund_amount' => 'int',
'discount_detail' => 'string',
'promotion_name' => 'string',
'instance_id' => 'string',
'pay_amount' => 'int',
'tenant_name' => 'string',
'commodity_code' => 'string',
'auto_renew' => 'bool',
'currency' => 'string',
'start_time' => 'int',
'downgrade_balance_refund_amount' => 'int',
'primary_price_type' => 'string',
'finish_time' => 'int',
'amount' => 'int',
'quantity' => 'int',
'delivery_end_time' => 'int',
'refund_time' => 'int',
'buy_duration_unit' => 'string',
'primary_charge_item_code' => 'string',
'pay_user_id' => 'string',
'category_code' => 'string',
'buy_duration' => 'int',
'balance_pay_amount' => 'int',
'actual_pay_amount' => 'int',
'create_time' => 'int',
'tenant_id' => 'int',
'payment_end_time' => 'int',
'buy_type' => 'string',
'voucher_pay_amount' => 'int',
'buyer_user_id' => 'string',
'end_time' => 'int',
'commodity_name' => 'string',
'status' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $serialFormats = [
        'order_type' => null,
'order_id' => null,
'attribute_list' => null,
'charge_type' => null,
'discount_amount' => 'int64',
'credit_pay_amount' => 'int64',
'downgrade_refund_amount' => 'int64',
'downgrade_credit_refund_amount' => 'int64',
'discount_detail' => null,
'promotion_name' => null,
'instance_id' => null,
'pay_amount' => 'int64',
'tenant_name' => null,
'commodity_code' => null,
'auto_renew' => null,
'currency' => null,
'start_time' => 'int64',
'downgrade_balance_refund_amount' => 'int64',
'primary_price_type' => null,
'finish_time' => 'int64',
'amount' => 'int64',
'quantity' => null,
'delivery_end_time' => 'int64',
'refund_time' => 'int64',
'buy_duration_unit' => null,
'primary_charge_item_code' => null,
'pay_user_id' => null,
'category_code' => null,
'buy_duration' => 'int64',
'balance_pay_amount' => 'int64',
'actual_pay_amount' => 'int64',
'create_time' => 'int64',
'tenant_id' => 'int64',
'payment_end_time' => 'int64',
'buy_type' => null,
'voucher_pay_amount' => 'int64',
'buyer_user_id' => null,
'end_time' => 'int64',
'commodity_name' => null,
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
        'order_type' => 'orderType',
'order_id' => 'orderId',
'attribute_list' => 'attributeList',
'charge_type' => 'chargeType',
'discount_amount' => 'discountAmount',
'credit_pay_amount' => 'creditPayAmount',
'downgrade_refund_amount' => 'downgradeRefundAmount',
'downgrade_credit_refund_amount' => 'downgradeCreditRefundAmount',
'discount_detail' => 'discountDetail',
'promotion_name' => 'promotionName',
'instance_id' => 'instanceId',
'pay_amount' => 'payAmount',
'tenant_name' => 'tenantName',
'commodity_code' => 'commodityCode',
'auto_renew' => 'autoRenew',
'currency' => 'currency',
'start_time' => 'startTime',
'downgrade_balance_refund_amount' => 'downgradeBalanceRefundAmount',
'primary_price_type' => 'primaryPriceType',
'finish_time' => 'finishTime',
'amount' => 'amount',
'quantity' => 'quantity',
'delivery_end_time' => 'deliveryEndTime',
'refund_time' => 'refundTime',
'buy_duration_unit' => 'buyDurationUnit',
'primary_charge_item_code' => 'primaryChargeItemCode',
'pay_user_id' => 'payUserId',
'category_code' => 'categoryCode',
'buy_duration' => 'buyDuration',
'balance_pay_amount' => 'balancePayAmount',
'actual_pay_amount' => 'actualPayAmount',
'create_time' => 'createTime',
'tenant_id' => 'tenantId',
'payment_end_time' => 'paymentEndTime',
'buy_type' => 'buyType',
'voucher_pay_amount' => 'voucherPayAmount',
'buyer_user_id' => 'buyerUserId',
'end_time' => 'endTime',
'commodity_name' => 'commodityName',
'status' => 'status'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_type' => 'setOrderType',
'order_id' => 'setOrderId',
'attribute_list' => 'setAttributeList',
'charge_type' => 'setChargeType',
'discount_amount' => 'setDiscountAmount',
'credit_pay_amount' => 'setCreditPayAmount',
'downgrade_refund_amount' => 'setDowngradeRefundAmount',
'downgrade_credit_refund_amount' => 'setDowngradeCreditRefundAmount',
'discount_detail' => 'setDiscountDetail',
'promotion_name' => 'setPromotionName',
'instance_id' => 'setInstanceId',
'pay_amount' => 'setPayAmount',
'tenant_name' => 'setTenantName',
'commodity_code' => 'setCommodityCode',
'auto_renew' => 'setAutoRenew',
'currency' => 'setCurrency',
'start_time' => 'setStartTime',
'downgrade_balance_refund_amount' => 'setDowngradeBalanceRefundAmount',
'primary_price_type' => 'setPrimaryPriceType',
'finish_time' => 'setFinishTime',
'amount' => 'setAmount',
'quantity' => 'setQuantity',
'delivery_end_time' => 'setDeliveryEndTime',
'refund_time' => 'setRefundTime',
'buy_duration_unit' => 'setBuyDurationUnit',
'primary_charge_item_code' => 'setPrimaryChargeItemCode',
'pay_user_id' => 'setPayUserId',
'category_code' => 'setCategoryCode',
'buy_duration' => 'setBuyDuration',
'balance_pay_amount' => 'setBalancePayAmount',
'actual_pay_amount' => 'setActualPayAmount',
'create_time' => 'setCreateTime',
'tenant_id' => 'setTenantId',
'payment_end_time' => 'setPaymentEndTime',
'buy_type' => 'setBuyType',
'voucher_pay_amount' => 'setVoucherPayAmount',
'buyer_user_id' => 'setBuyerUserId',
'end_time' => 'setEndTime',
'commodity_name' => 'setCommodityName',
'status' => 'setStatus'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_type' => 'getOrderType',
'order_id' => 'getOrderId',
'attribute_list' => 'getAttributeList',
'charge_type' => 'getChargeType',
'discount_amount' => 'getDiscountAmount',
'credit_pay_amount' => 'getCreditPayAmount',
'downgrade_refund_amount' => 'getDowngradeRefundAmount',
'downgrade_credit_refund_amount' => 'getDowngradeCreditRefundAmount',
'discount_detail' => 'getDiscountDetail',
'promotion_name' => 'getPromotionName',
'instance_id' => 'getInstanceId',
'pay_amount' => 'getPayAmount',
'tenant_name' => 'getTenantName',
'commodity_code' => 'getCommodityCode',
'auto_renew' => 'getAutoRenew',
'currency' => 'getCurrency',
'start_time' => 'getStartTime',
'downgrade_balance_refund_amount' => 'getDowngradeBalanceRefundAmount',
'primary_price_type' => 'getPrimaryPriceType',
'finish_time' => 'getFinishTime',
'amount' => 'getAmount',
'quantity' => 'getQuantity',
'delivery_end_time' => 'getDeliveryEndTime',
'refund_time' => 'getRefundTime',
'buy_duration_unit' => 'getBuyDurationUnit',
'primary_charge_item_code' => 'getPrimaryChargeItemCode',
'pay_user_id' => 'getPayUserId',
'category_code' => 'getCategoryCode',
'buy_duration' => 'getBuyDuration',
'balance_pay_amount' => 'getBalancePayAmount',
'actual_pay_amount' => 'getActualPayAmount',
'create_time' => 'getCreateTime',
'tenant_id' => 'getTenantId',
'payment_end_time' => 'getPaymentEndTime',
'buy_type' => 'getBuyType',
'voucher_pay_amount' => 'getVoucherPayAmount',
'buyer_user_id' => 'getBuyerUserId',
'end_time' => 'getEndTime',
'commodity_name' => 'getCommodityName',
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
        $this->container['order_type'] = isset($data['order_type']) ? $data['order_type'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['attribute_list'] = isset($data['attribute_list']) ? $data['attribute_list'] : null;
        $this->container['charge_type'] = isset($data['charge_type']) ? $data['charge_type'] : null;
        $this->container['discount_amount'] = isset($data['discount_amount']) ? $data['discount_amount'] : null;
        $this->container['credit_pay_amount'] = isset($data['credit_pay_amount']) ? $data['credit_pay_amount'] : null;
        $this->container['downgrade_refund_amount'] = isset($data['downgrade_refund_amount']) ? $data['downgrade_refund_amount'] : null;
        $this->container['downgrade_credit_refund_amount'] = isset($data['downgrade_credit_refund_amount']) ? $data['downgrade_credit_refund_amount'] : null;
        $this->container['discount_detail'] = isset($data['discount_detail']) ? $data['discount_detail'] : null;
        $this->container['promotion_name'] = isset($data['promotion_name']) ? $data['promotion_name'] : null;
        $this->container['instance_id'] = isset($data['instance_id']) ? $data['instance_id'] : null;
        $this->container['pay_amount'] = isset($data['pay_amount']) ? $data['pay_amount'] : null;
        $this->container['tenant_name'] = isset($data['tenant_name']) ? $data['tenant_name'] : null;
        $this->container['commodity_code'] = isset($data['commodity_code']) ? $data['commodity_code'] : null;
        $this->container['auto_renew'] = isset($data['auto_renew']) ? $data['auto_renew'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['downgrade_balance_refund_amount'] = isset($data['downgrade_balance_refund_amount']) ? $data['downgrade_balance_refund_amount'] : null;
        $this->container['primary_price_type'] = isset($data['primary_price_type']) ? $data['primary_price_type'] : null;
        $this->container['finish_time'] = isset($data['finish_time']) ? $data['finish_time'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['delivery_end_time'] = isset($data['delivery_end_time']) ? $data['delivery_end_time'] : null;
        $this->container['refund_time'] = isset($data['refund_time']) ? $data['refund_time'] : null;
        $this->container['buy_duration_unit'] = isset($data['buy_duration_unit']) ? $data['buy_duration_unit'] : null;
        $this->container['primary_charge_item_code'] = isset($data['primary_charge_item_code']) ? $data['primary_charge_item_code'] : null;
        $this->container['pay_user_id'] = isset($data['pay_user_id']) ? $data['pay_user_id'] : null;
        $this->container['category_code'] = isset($data['category_code']) ? $data['category_code'] : null;
        $this->container['buy_duration'] = isset($data['buy_duration']) ? $data['buy_duration'] : null;
        $this->container['balance_pay_amount'] = isset($data['balance_pay_amount']) ? $data['balance_pay_amount'] : null;
        $this->container['actual_pay_amount'] = isset($data['actual_pay_amount']) ? $data['actual_pay_amount'] : null;
        $this->container['create_time'] = isset($data['create_time']) ? $data['create_time'] : null;
        $this->container['tenant_id'] = isset($data['tenant_id']) ? $data['tenant_id'] : null;
        $this->container['payment_end_time'] = isset($data['payment_end_time']) ? $data['payment_end_time'] : null;
        $this->container['buy_type'] = isset($data['buy_type']) ? $data['buy_type'] : null;
        $this->container['voucher_pay_amount'] = isset($data['voucher_pay_amount']) ? $data['voucher_pay_amount'] : null;
        $this->container['buyer_user_id'] = isset($data['buyer_user_id']) ? $data['buyer_user_id'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['commodity_name'] = isset($data['commodity_name']) ? $data['commodity_name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
     * @param string $order_id 订单号
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets attribute_list
     *
     * @return \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\ConsoleAdminGetOrderResultModelAttributeList[]
     */
    public function getAttributeList()
    {
        return $this->container['attribute_list'];
    }

    /**
     * Sets attribute_list
     *
     * @param \Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Yjopenapi\Client\Model\ConsoleAdminGetOrderResultModelAttributeList[] $attribute_list 配置详情
     *
     * @return $this
     */
    public function setAttributeList($attribute_list)
    {
        $this->container['attribute_list'] = $attribute_list;

        return $this;
    }

    /**
     * Gets charge_type
     *
     * @return string
     */
    public function getChargeType()
    {
        return $this->container['charge_type'];
    }

    /**
     * Sets charge_type
     *
     * @param string $charge_type 付费方式
     *
     * @return $this
     */
    public function setChargeType($charge_type)
    {
        $this->container['charge_type'] = $charge_type;

        return $this;
    }

    /**
     * Gets discount_amount
     *
     * @return int
     */
    public function getDiscountAmount()
    {
        return $this->container['discount_amount'];
    }

    /**
     * Sets discount_amount
     *
     * @param int $discount_amount 优惠金额（单位：分）
     *
     * @return $this
     */
    public function setDiscountAmount($discount_amount)
    {
        $this->container['discount_amount'] = $discount_amount;

        return $this;
    }

    /**
     * Gets credit_pay_amount
     *
     * @return int
     */
    public function getCreditPayAmount()
    {
        return $this->container['credit_pay_amount'];
    }

    /**
     * Sets credit_pay_amount
     *
     * @param int $credit_pay_amount 信控支付金额（单位：分）
     *
     * @return $this
     */
    public function setCreditPayAmount($credit_pay_amount)
    {
        $this->container['credit_pay_amount'] = $credit_pay_amount;

        return $this;
    }

    /**
     * Gets downgrade_refund_amount
     *
     * @return int
     */
    public function getDowngradeRefundAmount()
    {
        return $this->container['downgrade_refund_amount'];
    }

    /**
     * Sets downgrade_refund_amount
     *
     * @param int $downgrade_refund_amount 降配退款金额
     *
     * @return $this
     */
    public function setDowngradeRefundAmount($downgrade_refund_amount)
    {
        $this->container['downgrade_refund_amount'] = $downgrade_refund_amount;

        return $this;
    }

    /**
     * Gets downgrade_credit_refund_amount
     *
     * @return int
     */
    public function getDowngradeCreditRefundAmount()
    {
        return $this->container['downgrade_credit_refund_amount'];
    }

    /**
     * Sets downgrade_credit_refund_amount
     *
     * @param int $downgrade_credit_refund_amount 降配信控应退款金额
     *
     * @return $this
     */
    public function setDowngradeCreditRefundAmount($downgrade_credit_refund_amount)
    {
        $this->container['downgrade_credit_refund_amount'] = $downgrade_credit_refund_amount;

        return $this;
    }

    /**
     * Gets discount_detail
     *
     * @return string
     */
    public function getDiscountDetail()
    {
        return $this->container['discount_detail'];
    }

    /**
     * Sets discount_detail
     *
     * @param string $discount_detail 优惠详细信息
     *
     * @return $this
     */
    public function setDiscountDetail($discount_detail)
    {
        $this->container['discount_detail'] = $discount_detail;

        return $this;
    }

    /**
     * Gets promotion_name
     *
     * @return string
     */
    public function getPromotionName()
    {
        return $this->container['promotion_name'];
    }

    /**
     * Sets promotion_name
     *
     * @param string $promotion_name 优惠名称
     *
     * @return $this
     */
    public function setPromotionName($promotion_name)
    {
        $this->container['promotion_name'] = $promotion_name;

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
     * @param int $pay_amount 应付金额（单位：分）
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
     * @param bool $auto_renew 是否自动续费
     *
     * @return $this
     */
    public function setAutoRenew($auto_renew)
    {
        $this->container['auto_renew'] = $auto_renew;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency 币种
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return int
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param int $start_time 开始时间
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets downgrade_balance_refund_amount
     *
     * @return int
     */
    public function getDowngradeBalanceRefundAmount()
    {
        return $this->container['downgrade_balance_refund_amount'];
    }

    /**
     * Sets downgrade_balance_refund_amount
     *
     * @param int $downgrade_balance_refund_amount 降配现金应退款金额
     *
     * @return $this
     */
    public function setDowngradeBalanceRefundAmount($downgrade_balance_refund_amount)
    {
        $this->container['downgrade_balance_refund_amount'] = $downgrade_balance_refund_amount;

        return $this;
    }

    /**
     * Gets primary_price_type
     *
     * @return string
     */
    public function getPrimaryPriceType()
    {
        return $this->container['primary_price_type'];
    }

    /**
     * Sets primary_price_type
     *
     * @param string $primary_price_type 主计费项价格类型
     *
     * @return $this
     */
    public function setPrimaryPriceType($primary_price_type)
    {
        $this->container['primary_price_type'] = $primary_price_type;

        return $this;
    }

    /**
     * Gets finish_time
     *
     * @return int
     */
    public function getFinishTime()
    {
        return $this->container['finish_time'];
    }

    /**
     * Sets finish_time
     *
     * @param int $finish_time 订单完成时间
     *
     * @return $this
     */
    public function setFinishTime($finish_time)
    {
        $this->container['finish_time'] = $finish_time;

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
     * @param int $amount 订单总金额（单位：分）
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity 数量
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets delivery_end_time
     *
     * @return int
     */
    public function getDeliveryEndTime()
    {
        return $this->container['delivery_end_time'];
    }

    /**
     * Sets delivery_end_time
     *
     * @param int $delivery_end_time 发货完成时间
     *
     * @return $this
     */
    public function setDeliveryEndTime($delivery_end_time)
    {
        $this->container['delivery_end_time'] = $delivery_end_time;

        return $this;
    }

    /**
     * Gets refund_time
     *
     * @return int
     */
    public function getRefundTime()
    {
        return $this->container['refund_time'];
    }

    /**
     * Sets refund_time
     *
     * @param int $refund_time 售中退款时间
     *
     * @return $this
     */
    public function setRefundTime($refund_time)
    {
        $this->container['refund_time'] = $refund_time;

        return $this;
    }

    /**
     * Gets buy_duration_unit
     *
     * @return string
     */
    public function getBuyDurationUnit()
    {
        return $this->container['buy_duration_unit'];
    }

    /**
     * Sets buy_duration_unit
     *
     * @param string $buy_duration_unit 购买时长单位
     *
     * @return $this
     */
    public function setBuyDurationUnit($buy_duration_unit)
    {
        $this->container['buy_duration_unit'] = $buy_duration_unit;

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
     * Gets pay_user_id
     *
     * @return string
     */
    public function getPayUserId()
    {
        return $this->container['pay_user_id'];
    }

    /**
     * Sets pay_user_id
     *
     * @param string $pay_user_id 支付用户ID
     *
     * @return $this
     */
    public function setPayUserId($pay_user_id)
    {
        $this->container['pay_user_id'] = $pay_user_id;

        return $this;
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
     * Gets buy_duration
     *
     * @return int
     */
    public function getBuyDuration()
    {
        return $this->container['buy_duration'];
    }

    /**
     * Sets buy_duration
     *
     * @param int $buy_duration 购买时长
     *
     * @return $this
     */
    public function setBuyDuration($buy_duration)
    {
        $this->container['buy_duration'] = $buy_duration;

        return $this;
    }

    /**
     * Gets balance_pay_amount
     *
     * @return int
     */
    public function getBalancePayAmount()
    {
        return $this->container['balance_pay_amount'];
    }

    /**
     * Sets balance_pay_amount
     *
     * @param int $balance_pay_amount 余额支付金额（单位：分）
     *
     * @return $this
     */
    public function setBalancePayAmount($balance_pay_amount)
    {
        $this->container['balance_pay_amount'] = $balance_pay_amount;

        return $this;
    }

    /**
     * Gets actual_pay_amount
     *
     * @return int
     */
    public function getActualPayAmount()
    {
        return $this->container['actual_pay_amount'];
    }

    /**
     * Sets actual_pay_amount
     *
     * @param int $actual_pay_amount 实付金额（单位：分）
     *
     * @return $this
     */
    public function setActualPayAmount($actual_pay_amount)
    {
        $this->container['actual_pay_amount'] = $actual_pay_amount;

        return $this;
    }

    /**
     * Gets create_time
     *
     * @return int
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time
     *
     * @param int $create_time 订单创建时间
     *
     * @return $this
     */
    public function setCreateTime($create_time)
    {
        $this->container['create_time'] = $create_time;

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
     * Gets payment_end_time
     *
     * @return int
     */
    public function getPaymentEndTime()
    {
        return $this->container['payment_end_time'];
    }

    /**
     * Sets payment_end_time
     *
     * @param int $payment_end_time 支付完成时间
     *
     * @return $this
     */
    public function setPaymentEndTime($payment_end_time)
    {
        $this->container['payment_end_time'] = $payment_end_time;

        return $this;
    }

    /**
     * Gets buy_type
     *
     * @return string
     */
    public function getBuyType()
    {
        return $this->container['buy_type'];
    }

    /**
     * Sets buy_type
     *
     * @param string $buy_type 售卖类型
     *
     * @return $this
     */
    public function setBuyType($buy_type)
    {
        $this->container['buy_type'] = $buy_type;

        return $this;
    }

    /**
     * Gets voucher_pay_amount
     *
     * @return int
     */
    public function getVoucherPayAmount()
    {
        return $this->container['voucher_pay_amount'];
    }

    /**
     * Sets voucher_pay_amount
     *
     * @param int $voucher_pay_amount 代金券抵扣金额（单位：分）
     *
     * @return $this
     */
    public function setVoucherPayAmount($voucher_pay_amount)
    {
        $this->container['voucher_pay_amount'] = $voucher_pay_amount;

        return $this;
    }

    /**
     * Gets buyer_user_id
     *
     * @return string
     */
    public function getBuyerUserId()
    {
        return $this->container['buyer_user_id'];
    }

    /**
     * Sets buyer_user_id
     *
     * @param string $buyer_user_id 下单用户ID
     *
     * @return $this
     */
    public function setBuyerUserId($buyer_user_id)
    {
        $this->container['buyer_user_id'] = $buyer_user_id;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return int
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param int $end_time 截止时间
     *
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

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
     * @param string $commodity_name 商品名称
     *
     * @return $this
     */
    public function setCommodityName($commodity_name)
    {
        $this->container['commodity_name'] = $commodity_name;

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
     * @param string $status 订单状态
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
