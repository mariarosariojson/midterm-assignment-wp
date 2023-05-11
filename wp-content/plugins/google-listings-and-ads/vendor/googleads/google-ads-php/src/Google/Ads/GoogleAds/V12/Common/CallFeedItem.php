<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/common/extensions.proto

namespace Google\Ads\GoogleAds\V12\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Call extension.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.common.CallFeedItem</code>
 */
class CallFeedItem extends \Google\Protobuf\Internal\Message
{
    /**
     * The advertiser's phone number to append to the ad.
     * This string must not be empty.
     *
     * Generated from protobuf field <code>optional string phone_number = 7;</code>
     */
    protected $phone_number = null;
    /**
     * Uppercase two-letter country code of the advertiser's phone number.
     * This string must not be empty.
     *
     * Generated from protobuf field <code>optional string country_code = 8;</code>
     */
    protected $country_code = null;
    /**
     * Indicates whether call tracking is enabled. By default, call tracking is
     * not enabled.
     *
     * Generated from protobuf field <code>optional bool call_tracking_enabled = 9;</code>
     */
    protected $call_tracking_enabled = null;
    /**
     * The conversion action to attribute a call conversion to. If not set a
     * default conversion action is used. This field only has effect if
     * call_tracking_enabled is set to true. Otherwise this field is ignored.
     *
     * Generated from protobuf field <code>optional string call_conversion_action = 10;</code>
     */
    protected $call_conversion_action = null;
    /**
     * If true, disable call conversion tracking. call_conversion_action should
     * not be set if this is true. Optional.
     *
     * Generated from protobuf field <code>optional bool call_conversion_tracking_disabled = 11;</code>
     */
    protected $call_conversion_tracking_disabled = null;
    /**
     * Enum value that indicates whether this call extension uses its own call
     * conversion setting (or just have call conversion disabled), or following
     * the account level setting.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.CallConversionReportingStateEnum.CallConversionReportingState call_conversion_reporting_state = 6;</code>
     */
    protected $call_conversion_reporting_state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $phone_number
     *           The advertiser's phone number to append to the ad.
     *           This string must not be empty.
     *     @type string $country_code
     *           Uppercase two-letter country code of the advertiser's phone number.
     *           This string must not be empty.
     *     @type bool $call_tracking_enabled
     *           Indicates whether call tracking is enabled. By default, call tracking is
     *           not enabled.
     *     @type string $call_conversion_action
     *           The conversion action to attribute a call conversion to. If not set a
     *           default conversion action is used. This field only has effect if
     *           call_tracking_enabled is set to true. Otherwise this field is ignored.
     *     @type bool $call_conversion_tracking_disabled
     *           If true, disable call conversion tracking. call_conversion_action should
     *           not be set if this is true. Optional.
     *     @type int $call_conversion_reporting_state
     *           Enum value that indicates whether this call extension uses its own call
     *           conversion setting (or just have call conversion disabled), or following
     *           the account level setting.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Common\Extensions::initOnce();
        parent::__construct($data);
    }

    /**
     * The advertiser's phone number to append to the ad.
     * This string must not be empty.
     *
     * Generated from protobuf field <code>optional string phone_number = 7;</code>
     * @return string
     */
    public function getPhoneNumber()
    {
        return isset($this->phone_number) ? $this->phone_number : '';
    }

    public function hasPhoneNumber()
    {
        return isset($this->phone_number);
    }

    public function clearPhoneNumber()
    {
        unset($this->phone_number);
    }

    /**
     * The advertiser's phone number to append to the ad.
     * This string must not be empty.
     *
     * Generated from protobuf field <code>optional string phone_number = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setPhoneNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->phone_number = $var;

        return $this;
    }

    /**
     * Uppercase two-letter country code of the advertiser's phone number.
     * This string must not be empty.
     *
     * Generated from protobuf field <code>optional string country_code = 8;</code>
     * @return string
     */
    public function getCountryCode()
    {
        return isset($this->country_code) ? $this->country_code : '';
    }

    public function hasCountryCode()
    {
        return isset($this->country_code);
    }

    public function clearCountryCode()
    {
        unset($this->country_code);
    }

    /**
     * Uppercase two-letter country code of the advertiser's phone number.
     * This string must not be empty.
     *
     * Generated from protobuf field <code>optional string country_code = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setCountryCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->country_code = $var;

        return $this;
    }

    /**
     * Indicates whether call tracking is enabled. By default, call tracking is
     * not enabled.
     *
     * Generated from protobuf field <code>optional bool call_tracking_enabled = 9;</code>
     * @return bool
     */
    public function getCallTrackingEnabled()
    {
        return isset($this->call_tracking_enabled) ? $this->call_tracking_enabled : false;
    }

    public function hasCallTrackingEnabled()
    {
        return isset($this->call_tracking_enabled);
    }

    public function clearCallTrackingEnabled()
    {
        unset($this->call_tracking_enabled);
    }

    /**
     * Indicates whether call tracking is enabled. By default, call tracking is
     * not enabled.
     *
     * Generated from protobuf field <code>optional bool call_tracking_enabled = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setCallTrackingEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->call_tracking_enabled = $var;

        return $this;
    }

    /**
     * The conversion action to attribute a call conversion to. If not set a
     * default conversion action is used. This field only has effect if
     * call_tracking_enabled is set to true. Otherwise this field is ignored.
     *
     * Generated from protobuf field <code>optional string call_conversion_action = 10;</code>
     * @return string
     */
    public function getCallConversionAction()
    {
        return isset($this->call_conversion_action) ? $this->call_conversion_action : '';
    }

    public function hasCallConversionAction()
    {
        return isset($this->call_conversion_action);
    }

    public function clearCallConversionAction()
    {
        unset($this->call_conversion_action);
    }

    /**
     * The conversion action to attribute a call conversion to. If not set a
     * default conversion action is used. This field only has effect if
     * call_tracking_enabled is set to true. Otherwise this field is ignored.
     *
     * Generated from protobuf field <code>optional string call_conversion_action = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setCallConversionAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->call_conversion_action = $var;

        return $this;
    }

    /**
     * If true, disable call conversion tracking. call_conversion_action should
     * not be set if this is true. Optional.
     *
     * Generated from protobuf field <code>optional bool call_conversion_tracking_disabled = 11;</code>
     * @return bool
     */
    public function getCallConversionTrackingDisabled()
    {
        return isset($this->call_conversion_tracking_disabled) ? $this->call_conversion_tracking_disabled : false;
    }

    public function hasCallConversionTrackingDisabled()
    {
        return isset($this->call_conversion_tracking_disabled);
    }

    public function clearCallConversionTrackingDisabled()
    {
        unset($this->call_conversion_tracking_disabled);
    }

    /**
     * If true, disable call conversion tracking. call_conversion_action should
     * not be set if this is true. Optional.
     *
     * Generated from protobuf field <code>optional bool call_conversion_tracking_disabled = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setCallConversionTrackingDisabled($var)
    {
        GPBUtil::checkBool($var);
        $this->call_conversion_tracking_disabled = $var;

        return $this;
    }

    /**
     * Enum value that indicates whether this call extension uses its own call
     * conversion setting (or just have call conversion disabled), or following
     * the account level setting.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.CallConversionReportingStateEnum.CallConversionReportingState call_conversion_reporting_state = 6;</code>
     * @return int
     */
    public function getCallConversionReportingState()
    {
        return $this->call_conversion_reporting_state;
    }

    /**
     * Enum value that indicates whether this call extension uses its own call
     * conversion setting (or just have call conversion disabled), or following
     * the account level setting.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.CallConversionReportingStateEnum.CallConversionReportingState call_conversion_reporting_state = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setCallConversionReportingState($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V12\Enums\CallConversionReportingStateEnum\CallConversionReportingState::class);
        $this->call_conversion_reporting_state = $var;

        return $this;
    }

}
