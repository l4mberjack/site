<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/keyword_plan_campaign.proto

namespace Google\Ads\GoogleAds\V14\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A geo target.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.resources.KeywordPlanGeoTarget</code>
 */
class KeywordPlanGeoTarget extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the geo target.
     *
     * Generated from protobuf field <code>optional string geo_target_constant = 2 [(.google.api.resource_reference) = {</code>
     */
    protected $geo_target_constant = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $geo_target_constant
     *           Required. The resource name of the geo target.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Resources\KeywordPlanCampaign::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the geo target.
     *
     * Generated from protobuf field <code>optional string geo_target_constant = 2 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getGeoTargetConstant()
    {
        return isset($this->geo_target_constant) ? $this->geo_target_constant : '';
    }

    public function hasGeoTargetConstant()
    {
        return isset($this->geo_target_constant);
    }

    public function clearGeoTargetConstant()
    {
        unset($this->geo_target_constant);
    }

    /**
     * Required. The resource name of the geo target.
     *
     * Generated from protobuf field <code>optional string geo_target_constant = 2 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setGeoTargetConstant($var)
    {
        GPBUtil::checkString($var, True);
        $this->geo_target_constant = $var;

        return $this;
    }

}

