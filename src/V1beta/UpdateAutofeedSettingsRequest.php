<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/accounts/v1beta/autofeedsettings.proto

namespace Google\Shopping\Merchant\Accounts\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the `UpdateAutofeedSettings` method.
 *
 * Generated from protobuf message <code>google.shopping.merchant.accounts.v1beta.UpdateAutofeedSettingsRequest</code>
 */
class UpdateAutofeedSettingsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The new version of the autofeed setting.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.accounts.v1beta.AutofeedSettings autofeed_settings = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $autofeed_settings = null;
    /**
     * Required. List of fields being updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Shopping\Merchant\Accounts\V1beta\AutofeedSettings $autofeedSettings Required. The new version of the autofeed setting.
     * @param \Google\Protobuf\FieldMask                                 $updateMask       Required. List of fields being updated.
     *
     * @return \Google\Shopping\Merchant\Accounts\V1beta\UpdateAutofeedSettingsRequest
     *
     * @experimental
     */
    public static function build(\Google\Shopping\Merchant\Accounts\V1beta\AutofeedSettings $autofeedSettings, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setAutofeedSettings($autofeedSettings)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Shopping\Merchant\Accounts\V1beta\AutofeedSettings $autofeed_settings
     *           Required. The new version of the autofeed setting.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. List of fields being updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Accounts\V1Beta\Autofeedsettings::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The new version of the autofeed setting.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.accounts.v1beta.AutofeedSettings autofeed_settings = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Shopping\Merchant\Accounts\V1beta\AutofeedSettings|null
     */
    public function getAutofeedSettings()
    {
        return $this->autofeed_settings;
    }

    public function hasAutofeedSettings()
    {
        return isset($this->autofeed_settings);
    }

    public function clearAutofeedSettings()
    {
        unset($this->autofeed_settings);
    }

    /**
     * Required. The new version of the autofeed setting.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.accounts.v1beta.AutofeedSettings autofeed_settings = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Shopping\Merchant\Accounts\V1beta\AutofeedSettings $var
     * @return $this
     */
    public function setAutofeedSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Merchant\Accounts\V1beta\AutofeedSettings::class);
        $this->autofeed_settings = $var;

        return $this;
    }

    /**
     * Required. List of fields being updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. List of fields being updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

