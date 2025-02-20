<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V11\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Data for display call to action. The call to action is a piece of the ad
 * that prompts the user to do something. Like clicking a link or making a phone
 * call.
 *
 * Generated from protobuf message <code>google.ads.googleads.v11.common.DisplayCallToAction</code>
 */
class DisplayCallToAction extends \Google\Protobuf\Internal\Message
{
    /**
     * Text for the display-call-to-action.
     *
     * Generated from protobuf field <code>optional string text = 5;</code>
     */
    protected $text = null;
    /**
     * Text color for the display-call-to-action in hexadecimal, for example,
     * # ffffff for white.
     *
     * Generated from protobuf field <code>optional string text_color = 6;</code>
     */
    protected $text_color = null;
    /**
     * Identifies the URL collection in the `ad.url_collections` field. If not
     * set, the URL defaults to `final_url`.
     *
     * Generated from protobuf field <code>optional string url_collection_id = 7;</code>
     */
    protected $url_collection_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $text
     *           Text for the display-call-to-action.
     *     @type string $text_color
     *           Text color for the display-call-to-action in hexadecimal, for example,
     *           # ffffff for white.
     *     @type string $url_collection_id
     *           Identifies the URL collection in the `ad.url_collections` field. If not
     *           set, the URL defaults to `final_url`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V11\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * Text for the display-call-to-action.
     *
     * Generated from protobuf field <code>optional string text = 5;</code>
     * @return string
     */
    public function getText()
    {
        return isset($this->text) ? $this->text : '';
    }

    public function hasText()
    {
        return isset($this->text);
    }

    public function clearText()
    {
        unset($this->text);
    }

    /**
     * Text for the display-call-to-action.
     *
     * Generated from protobuf field <code>optional string text = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;

        return $this;
    }

    /**
     * Text color for the display-call-to-action in hexadecimal, for example,
     * # ffffff for white.
     *
     * Generated from protobuf field <code>optional string text_color = 6;</code>
     * @return string
     */
    public function getTextColor()
    {
        return isset($this->text_color) ? $this->text_color : '';
    }

    public function hasTextColor()
    {
        return isset($this->text_color);
    }

    public function clearTextColor()
    {
        unset($this->text_color);
    }

    /**
     * Text color for the display-call-to-action in hexadecimal, for example,
     * # ffffff for white.
     *
     * Generated from protobuf field <code>optional string text_color = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setTextColor($var)
    {
        GPBUtil::checkString($var, True);
        $this->text_color = $var;

        return $this;
    }

    /**
     * Identifies the URL collection in the `ad.url_collections` field. If not
     * set, the URL defaults to `final_url`.
     *
     * Generated from protobuf field <code>optional string url_collection_id = 7;</code>
     * @return string
     */
    public function getUrlCollectionId()
    {
        return isset($this->url_collection_id) ? $this->url_collection_id : '';
    }

    public function hasUrlCollectionId()
    {
        return isset($this->url_collection_id);
    }

    public function clearUrlCollectionId()
    {
        unset($this->url_collection_id);
    }

    /**
     * Identifies the URL collection in the `ad.url_collections` field. If not
     * set, the URL defaults to `final_url`.
     *
     * Generated from protobuf field <code>optional string url_collection_id = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setUrlCollectionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->url_collection_id = $var;

        return $this;
    }

}

