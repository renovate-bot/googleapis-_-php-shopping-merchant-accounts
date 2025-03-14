<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/accounts/v1beta/online_return_policy.proto

namespace Google\Shopping\Merchant\Accounts\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * [Online return policy](https://support.google.com/merchants/answer/10220642)
 * object. This is currently used to represent return policies for ads and free
 * listings programs.
 *
 * Generated from protobuf message <code>google.shopping.merchant.accounts.v1beta.OnlineReturnPolicy</code>
 */
class OnlineReturnPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. The name of the `OnlineReturnPolicy` resource.
     * Format: `accounts/{account}/onlineReturnPolicies/{return_policy}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Output only. Return policy ID generated by Google.
     *
     * Generated from protobuf field <code>string return_policy_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $return_policy_id = '';
    /**
     * Required. Immutable. This field represents the unique user-defined label of
     * the return policy. It is important to note that the same label cannot be
     * used in different return policies for the same country. Unless a product
     * specifies a specific label attribute, policies will be automatically
     * labeled as 'default'. To assign a custom return policy to certain product
     * groups, follow the instructions provided in the [Return policy label]
     * (https://support.google.com/merchants/answer/9445425).
     * The label can contain up to 50 characters.
     *
     * Generated from protobuf field <code>string label = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $label = '';
    /**
     * Required. Immutable. The countries of sale where the return policy applies.
     * The values must be a valid 2 letter ISO 3166 code.
     *
     * Generated from protobuf field <code>repeated string countries = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $countries;
    /**
     * The return policy.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.accounts.v1beta.OnlineReturnPolicy.Policy policy = 5;</code>
     */
    protected $policy = null;
    /**
     * Optional. Overrides to the general policy for orders placed during a
     * specific set of time intervals.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.accounts.v1beta.OnlineReturnPolicy.SeasonalOverride seasonal_overrides = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $seasonal_overrides;
    /**
     * The restocking fee that applies to all return reason categories. This would
     * be treated as a free restocking fee if the value is not set.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.accounts.v1beta.OnlineReturnPolicy.RestockingFee restocking_fee = 6;</code>
     */
    protected $restocking_fee = null;
    /**
     * The return methods of how customers can return an item. This value is
     * required to not be empty unless the type of return policy is noReturns.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.accounts.v1beta.OnlineReturnPolicy.ReturnMethod return_methods = 7;</code>
     */
    private $return_methods;
    /**
     * The item conditions accepted for returns must not be empty unless the type
     * of return policy is 'noReturns'.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.accounts.v1beta.OnlineReturnPolicy.ItemCondition item_conditions = 8;</code>
     */
    private $item_conditions;
    /**
     * The return shipping fee. Should be set only when customer need to download
     * and print the return label.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.accounts.v1beta.OnlineReturnPolicy.ReturnShippingFee return_shipping_fee = 9;</code>
     */
    protected $return_shipping_fee = null;
    /**
     * Required. The return policy uri. This can used by Google to do a sanity
     * check for the policy. It must be a valid URL.
     *
     * Generated from protobuf field <code>string return_policy_uri = 10 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $return_policy_uri = '';
    /**
     * This field specifies if merchant only accepts defective products for
     * returns, and this field is required.
     *
     * Generated from protobuf field <code>optional bool accept_defective_only = 11;</code>
     */
    protected $accept_defective_only = null;
    /**
     * The field specifies the number of days it takes for merchants to process
     * refunds, field is optional.
     *
     * Generated from protobuf field <code>optional int32 process_refund_days = 12;</code>
     */
    protected $process_refund_days = null;
    /**
     * This field specifies if merchant allows customers to exchange products,
     * this field is required.
     *
     * Generated from protobuf field <code>optional bool accept_exchange = 13;</code>
     */
    protected $accept_exchange = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. The name of the `OnlineReturnPolicy` resource.
     *           Format: `accounts/{account}/onlineReturnPolicies/{return_policy}`
     *     @type string $return_policy_id
     *           Output only. Return policy ID generated by Google.
     *     @type string $label
     *           Required. Immutable. This field represents the unique user-defined label of
     *           the return policy. It is important to note that the same label cannot be
     *           used in different return policies for the same country. Unless a product
     *           specifies a specific label attribute, policies will be automatically
     *           labeled as 'default'. To assign a custom return policy to certain product
     *           groups, follow the instructions provided in the [Return policy label]
     *           (https://support.google.com/merchants/answer/9445425).
     *           The label can contain up to 50 characters.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $countries
     *           Required. Immutable. The countries of sale where the return policy applies.
     *           The values must be a valid 2 letter ISO 3166 code.
     *     @type \Google\Shopping\Merchant\Accounts\V1beta\OnlineReturnPolicy\Policy $policy
     *           The return policy.
     *     @type array<\Google\Shopping\Merchant\Accounts\V1beta\OnlineReturnPolicy\SeasonalOverride>|\Google\Protobuf\Internal\RepeatedField $seasonal_overrides
     *           Optional. Overrides to the general policy for orders placed during a
     *           specific set of time intervals.
     *     @type \Google\Shopping\Merchant\Accounts\V1beta\OnlineReturnPolicy\RestockingFee $restocking_fee
     *           The restocking fee that applies to all return reason categories. This would
     *           be treated as a free restocking fee if the value is not set.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $return_methods
     *           The return methods of how customers can return an item. This value is
     *           required to not be empty unless the type of return policy is noReturns.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $item_conditions
     *           The item conditions accepted for returns must not be empty unless the type
     *           of return policy is 'noReturns'.
     *     @type \Google\Shopping\Merchant\Accounts\V1beta\OnlineReturnPolicy\ReturnShippingFee $return_shipping_fee
     *           The return shipping fee. Should be set only when customer need to download
     *           and print the return label.
     *     @type string $return_policy_uri
     *           Required. The return policy uri. This can used by Google to do a sanity
     *           check for the policy. It must be a valid URL.
     *     @type bool $accept_defective_only
     *           This field specifies if merchant only accepts defective products for
     *           returns, and this field is required.
     *     @type int $process_refund_days
     *           The field specifies the number of days it takes for merchants to process
     *           refunds, field is optional.
     *     @type bool $accept_exchange
     *           This field specifies if merchant allows customers to exchange products,
     *           this field is required.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Accounts\V1Beta\OnlineReturnPolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. The name of the `OnlineReturnPolicy` resource.
     * Format: `accounts/{account}/onlineReturnPolicies/{return_policy}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. The name of the `OnlineReturnPolicy` resource.
     * Format: `accounts/{account}/onlineReturnPolicies/{return_policy}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. Return policy ID generated by Google.
     *
     * Generated from protobuf field <code>string return_policy_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getReturnPolicyId()
    {
        return $this->return_policy_id;
    }

    /**
     * Output only. Return policy ID generated by Google.
     *
     * Generated from protobuf field <code>string return_policy_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setReturnPolicyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->return_policy_id = $var;

        return $this;
    }

    /**
     * Required. Immutable. This field represents the unique user-defined label of
     * the return policy. It is important to note that the same label cannot be
     * used in different return policies for the same country. Unless a product
     * specifies a specific label attribute, policies will be automatically
     * labeled as 'default'. To assign a custom return policy to certain product
     * groups, follow the instructions provided in the [Return policy label]
     * (https://support.google.com/merchants/answer/9445425).
     * The label can contain up to 50 characters.
     *
     * Generated from protobuf field <code>string label = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Required. Immutable. This field represents the unique user-defined label of
     * the return policy. It is important to note that the same label cannot be
     * used in different return policies for the same country. Unless a product
     * specifies a specific label attribute, policies will be automatically
     * labeled as 'default'. To assign a custom return policy to certain product
     * groups, follow the instructions provided in the [Return policy label]
     * (https://support.google.com/merchants/answer/9445425).
     * The label can contain up to 50 characters.
     *
     * Generated from protobuf field <code>string label = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->label = $var;

        return $this;
    }

    /**
     * Required. Immutable. The countries of sale where the return policy applies.
     * The values must be a valid 2 letter ISO 3166 code.
     *
     * Generated from protobuf field <code>repeated string countries = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * Required. Immutable. The countries of sale where the return policy applies.
     * The values must be a valid 2 letter ISO 3166 code.
     *
     * Generated from protobuf field <code>repeated string countries = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCountries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->countries = $arr;

        return $this;
    }

    /**
     * The return policy.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.accounts.v1beta.OnlineReturnPolicy.Policy policy = 5;</code>
     * @return \Google\Shopping\Merchant\Accounts\V1beta\OnlineReturnPolicy\Policy|null
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    public function hasPolicy()
    {
        return isset($this->policy);
    }

    public function clearPolicy()
    {
        unset($this->policy);
    }

    /**
     * The return policy.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.accounts.v1beta.OnlineReturnPolicy.Policy policy = 5;</code>
     * @param \Google\Shopping\Merchant\Accounts\V1beta\OnlineReturnPolicy\Policy $var
     * @return $this
     */
    public function setPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Merchant\Accounts\V1beta\OnlineReturnPolicy\Policy::class);
        $this->policy = $var;

        return $this;
    }

    /**
     * Optional. Overrides to the general policy for orders placed during a
     * specific set of time intervals.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.accounts.v1beta.OnlineReturnPolicy.SeasonalOverride seasonal_overrides = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSeasonalOverrides()
    {
        return $this->seasonal_overrides;
    }

    /**
     * Optional. Overrides to the general policy for orders placed during a
     * specific set of time intervals.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.accounts.v1beta.OnlineReturnPolicy.SeasonalOverride seasonal_overrides = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Shopping\Merchant\Accounts\V1beta\OnlineReturnPolicy\SeasonalOverride>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSeasonalOverrides($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Shopping\Merchant\Accounts\V1beta\OnlineReturnPolicy\SeasonalOverride::class);
        $this->seasonal_overrides = $arr;

        return $this;
    }

    /**
     * The restocking fee that applies to all return reason categories. This would
     * be treated as a free restocking fee if the value is not set.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.accounts.v1beta.OnlineReturnPolicy.RestockingFee restocking_fee = 6;</code>
     * @return \Google\Shopping\Merchant\Accounts\V1beta\OnlineReturnPolicy\RestockingFee|null
     */
    public function getRestockingFee()
    {
        return $this->restocking_fee;
    }

    public function hasRestockingFee()
    {
        return isset($this->restocking_fee);
    }

    public function clearRestockingFee()
    {
        unset($this->restocking_fee);
    }

    /**
     * The restocking fee that applies to all return reason categories. This would
     * be treated as a free restocking fee if the value is not set.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.accounts.v1beta.OnlineReturnPolicy.RestockingFee restocking_fee = 6;</code>
     * @param \Google\Shopping\Merchant\Accounts\V1beta\OnlineReturnPolicy\RestockingFee $var
     * @return $this
     */
    public function setRestockingFee($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Merchant\Accounts\V1beta\OnlineReturnPolicy\RestockingFee::class);
        $this->restocking_fee = $var;

        return $this;
    }

    /**
     * The return methods of how customers can return an item. This value is
     * required to not be empty unless the type of return policy is noReturns.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.accounts.v1beta.OnlineReturnPolicy.ReturnMethod return_methods = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReturnMethods()
    {
        return $this->return_methods;
    }

    /**
     * The return methods of how customers can return an item. This value is
     * required to not be empty unless the type of return policy is noReturns.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.accounts.v1beta.OnlineReturnPolicy.ReturnMethod return_methods = 7;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReturnMethods($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Shopping\Merchant\Accounts\V1beta\OnlineReturnPolicy\ReturnMethod::class);
        $this->return_methods = $arr;

        return $this;
    }

    /**
     * The item conditions accepted for returns must not be empty unless the type
     * of return policy is 'noReturns'.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.accounts.v1beta.OnlineReturnPolicy.ItemCondition item_conditions = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItemConditions()
    {
        return $this->item_conditions;
    }

    /**
     * The item conditions accepted for returns must not be empty unless the type
     * of return policy is 'noReturns'.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.accounts.v1beta.OnlineReturnPolicy.ItemCondition item_conditions = 8;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItemConditions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Shopping\Merchant\Accounts\V1beta\OnlineReturnPolicy\ItemCondition::class);
        $this->item_conditions = $arr;

        return $this;
    }

    /**
     * The return shipping fee. Should be set only when customer need to download
     * and print the return label.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.accounts.v1beta.OnlineReturnPolicy.ReturnShippingFee return_shipping_fee = 9;</code>
     * @return \Google\Shopping\Merchant\Accounts\V1beta\OnlineReturnPolicy\ReturnShippingFee|null
     */
    public function getReturnShippingFee()
    {
        return $this->return_shipping_fee;
    }

    public function hasReturnShippingFee()
    {
        return isset($this->return_shipping_fee);
    }

    public function clearReturnShippingFee()
    {
        unset($this->return_shipping_fee);
    }

    /**
     * The return shipping fee. Should be set only when customer need to download
     * and print the return label.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.accounts.v1beta.OnlineReturnPolicy.ReturnShippingFee return_shipping_fee = 9;</code>
     * @param \Google\Shopping\Merchant\Accounts\V1beta\OnlineReturnPolicy\ReturnShippingFee $var
     * @return $this
     */
    public function setReturnShippingFee($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Merchant\Accounts\V1beta\OnlineReturnPolicy\ReturnShippingFee::class);
        $this->return_shipping_fee = $var;

        return $this;
    }

    /**
     * Required. The return policy uri. This can used by Google to do a sanity
     * check for the policy. It must be a valid URL.
     *
     * Generated from protobuf field <code>string return_policy_uri = 10 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getReturnPolicyUri()
    {
        return $this->return_policy_uri;
    }

    /**
     * Required. The return policy uri. This can used by Google to do a sanity
     * check for the policy. It must be a valid URL.
     *
     * Generated from protobuf field <code>string return_policy_uri = 10 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setReturnPolicyUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->return_policy_uri = $var;

        return $this;
    }

    /**
     * This field specifies if merchant only accepts defective products for
     * returns, and this field is required.
     *
     * Generated from protobuf field <code>optional bool accept_defective_only = 11;</code>
     * @return bool
     */
    public function getAcceptDefectiveOnly()
    {
        return isset($this->accept_defective_only) ? $this->accept_defective_only : false;
    }

    public function hasAcceptDefectiveOnly()
    {
        return isset($this->accept_defective_only);
    }

    public function clearAcceptDefectiveOnly()
    {
        unset($this->accept_defective_only);
    }

    /**
     * This field specifies if merchant only accepts defective products for
     * returns, and this field is required.
     *
     * Generated from protobuf field <code>optional bool accept_defective_only = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setAcceptDefectiveOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->accept_defective_only = $var;

        return $this;
    }

    /**
     * The field specifies the number of days it takes for merchants to process
     * refunds, field is optional.
     *
     * Generated from protobuf field <code>optional int32 process_refund_days = 12;</code>
     * @return int
     */
    public function getProcessRefundDays()
    {
        return isset($this->process_refund_days) ? $this->process_refund_days : 0;
    }

    public function hasProcessRefundDays()
    {
        return isset($this->process_refund_days);
    }

    public function clearProcessRefundDays()
    {
        unset($this->process_refund_days);
    }

    /**
     * The field specifies the number of days it takes for merchants to process
     * refunds, field is optional.
     *
     * Generated from protobuf field <code>optional int32 process_refund_days = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setProcessRefundDays($var)
    {
        GPBUtil::checkInt32($var);
        $this->process_refund_days = $var;

        return $this;
    }

    /**
     * This field specifies if merchant allows customers to exchange products,
     * this field is required.
     *
     * Generated from protobuf field <code>optional bool accept_exchange = 13;</code>
     * @return bool
     */
    public function getAcceptExchange()
    {
        return isset($this->accept_exchange) ? $this->accept_exchange : false;
    }

    public function hasAcceptExchange()
    {
        return isset($this->accept_exchange);
    }

    public function clearAcceptExchange()
    {
        unset($this->accept_exchange);
    }

    /**
     * This field specifies if merchant allows customers to exchange products,
     * this field is required.
     *
     * Generated from protobuf field <code>optional bool accept_exchange = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setAcceptExchange($var)
    {
        GPBUtil::checkBool($var);
        $this->accept_exchange = $var;

        return $this;
    }

}

