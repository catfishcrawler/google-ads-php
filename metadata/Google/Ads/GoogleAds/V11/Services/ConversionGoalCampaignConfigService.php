<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/services/conversion_goal_campaign_config_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V11\Services;

class ConversionGoalCampaignConfigService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
6google/ads/googleads/v11/enums/goal_config_level.protogoogle.ads.googleads.v11.enums"b
GoalConfigLevelEnum"K
GoalConfigLevel
UNSPECIFIED 
UNKNOWN
CUSTOMER
CAMPAIGNB�
"com.google.ads.googleads.v11.enumsBGoalConfigLevelProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�
:google/ads/googleads/v11/enums/response_content_type.protogoogle.ads.googleads.v11.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
"com.google.ads.googleads.v11.enumsBResponseContentTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�
Hgoogle/ads/googleads/v11/resources/conversion_goal_campaign_config.proto"google.ads.googleads.v11.resourcesgoogle/api/field_behavior.protogoogle/api/resource.proto"�
ConversionGoalCampaignConfigT
resource_name (	B=�A�A7
5googleads.googleapis.com/ConversionGoalCampaignConfig;
campaign (	B)�A�A#
!googleads.googleapis.com/Campaign^
goal_config_level (2C.google.ads.googleads.v11.enums.GoalConfigLevelEnum.GoalConfigLevelR
custom_conversion_goal (	B2�A/
-googleads.googleapis.com/CustomConversionGoal:�A|
5googleads.googleapis.com/ConversionGoalCampaignConfigCcustomers/{customer_id}/conversionGoalCampaignConfigs/{campaign_id}B�
&com.google.ads.googleads.v11.resourcesB!ConversionGoalCampaignConfigProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v11/resources;resources�GAA�"Google.Ads.GoogleAds.V11.Resources�"Google\\Ads\\GoogleAds\\V11\\Resources�&Google::Ads::GoogleAds::V11::Resourcesbproto3
�
Ogoogle/ads/googleads/v11/services/conversion_goal_campaign_config_service.proto!google.ads.googleads.v11.servicesHgoogle/ads/googleads/v11/resources/conversion_goal_campaign_config.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.proto"�
*MutateConversionGoalCampaignConfigsRequest
customer_id (	B�Aa

operations (2H.google.ads.googleads.v11.services.ConversionGoalCampaignConfigOperationB�A
validate_only (j
response_content_type (2K.google.ads.googleads.v11.enums.ResponseContentTypeEnum.ResponseContentType"�
%ConversionGoalCampaignConfigOperation/
update_mask (2.google.protobuf.FieldMaskR
update (2@.google.ads.googleads.v11.resources.ConversionGoalCampaignConfigH B
	operation"�
+MutateConversionGoalCampaignConfigsResponse\\
results (2K.google.ads.googleads.v11.services.MutateConversionGoalCampaignConfigResult"�
(MutateConversionGoalCampaignConfigResultQ
resource_name (	B:�A7
5googleads.googleapis.com/ConversionGoalCampaignConfigi
conversion_goal_campaign_config (2@.google.ads.googleads.v11.resources.ConversionGoalCampaignConfig2�
#ConversionGoalCampaignConfigService�
#MutateConversionGoalCampaignConfigsM.google.ads.googleads.v11.services.MutateConversionGoalCampaignConfigsRequestN.google.ads.googleads.v11.services.MutateConversionGoalCampaignConfigsResponse"g���H"C/v11/customers/{customer_id=*}/conversionGoalCampaignConfigs:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v11.servicesB(ConversionGoalCampaignConfigServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v11/services;services�GAA�!Google.Ads.GoogleAds.V11.Services�!Google\\Ads\\GoogleAds\\V11\\Services�%Google::Ads::GoogleAds::V11::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

