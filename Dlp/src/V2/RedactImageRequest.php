<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to search for potentially sensitive info in an image and redact it
 * by covering it with a colored rectangle.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.RedactImageRequest</code>
 */
class RedactImageRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Parent resource name.
     * The format of this value varies depending on whether you have [specified a
     * processing
     * location](https://cloud.google.com/sensitive-data-protection/docs/specifying-location):
     * + Projects scope, location specified:
     *   `projects/{project_id}/locations/{location_id}`
     * + Projects scope, no location specified (defaults to global):
     *   `projects/{project_id}`
     * The following example `parent` string specifies a parent project with the
     * identifier `example-project`, and specifies the `europe-west3` location
     * for processing data:
     *     parent=projects/example-project/locations/europe-west3
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf field <code>string location_id = 8;</code>
     */
    private $location_id = '';
    /**
     * Configuration for the inspector.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InspectConfig inspect_config = 2;</code>
     */
    private $inspect_config = null;
    /**
     * The configuration for specifying what content to redact from images.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.RedactImageRequest.ImageRedactionConfig image_redaction_configs = 5;</code>
     */
    private $image_redaction_configs;
    /**
     * Whether the response should include findings along with the redacted
     * image.
     *
     * Generated from protobuf field <code>bool include_findings = 6;</code>
     */
    private $include_findings = false;
    /**
     * The content must be PNG, JPEG, SVG or BMP.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ByteContentItem byte_item = 7;</code>
     */
    private $byte_item = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Parent resource name.
     *           The format of this value varies depending on whether you have [specified a
     *           processing
     *           location](https://cloud.google.com/sensitive-data-protection/docs/specifying-location):
     *           + Projects scope, location specified:
     *             `projects/{project_id}/locations/{location_id}`
     *           + Projects scope, no location specified (defaults to global):
     *             `projects/{project_id}`
     *           The following example `parent` string specifies a parent project with the
     *           identifier `example-project`, and specifies the `europe-west3` location
     *           for processing data:
     *               parent=projects/example-project/locations/europe-west3
     *     @type string $location_id
     *           Deprecated. This field has no effect.
     *     @type \Google\Cloud\Dlp\V2\InspectConfig $inspect_config
     *           Configuration for the inspector.
     *     @type array<\Google\Cloud\Dlp\V2\RedactImageRequest\ImageRedactionConfig>|\Google\Protobuf\Internal\RepeatedField $image_redaction_configs
     *           The configuration for specifying what content to redact from images.
     *     @type bool $include_findings
     *           Whether the response should include findings along with the redacted
     *           image.
     *     @type \Google\Cloud\Dlp\V2\ByteContentItem $byte_item
     *           The content must be PNG, JPEG, SVG or BMP.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Parent resource name.
     * The format of this value varies depending on whether you have [specified a
     * processing
     * location](https://cloud.google.com/sensitive-data-protection/docs/specifying-location):
     * + Projects scope, location specified:
     *   `projects/{project_id}/locations/{location_id}`
     * + Projects scope, no location specified (defaults to global):
     *   `projects/{project_id}`
     * The following example `parent` string specifies a parent project with the
     * identifier `example-project`, and specifies the `europe-west3` location
     * for processing data:
     *     parent=projects/example-project/locations/europe-west3
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Parent resource name.
     * The format of this value varies depending on whether you have [specified a
     * processing
     * location](https://cloud.google.com/sensitive-data-protection/docs/specifying-location):
     * + Projects scope, location specified:
     *   `projects/{project_id}/locations/{location_id}`
     * + Projects scope, no location specified (defaults to global):
     *   `projects/{project_id}`
     * The following example `parent` string specifies a parent project with the
     * identifier `example-project`, and specifies the `europe-west3` location
     * for processing data:
     *     parent=projects/example-project/locations/europe-west3
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf field <code>string location_id = 8;</code>
     * @return string
     */
    public function getLocationId()
    {
        return $this->location_id;
    }

    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf field <code>string location_id = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setLocationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->location_id = $var;

        return $this;
    }

    /**
     * Configuration for the inspector.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InspectConfig inspect_config = 2;</code>
     * @return \Google\Cloud\Dlp\V2\InspectConfig|null
     */
    public function getInspectConfig()
    {
        return $this->inspect_config;
    }

    public function hasInspectConfig()
    {
        return isset($this->inspect_config);
    }

    public function clearInspectConfig()
    {
        unset($this->inspect_config);
    }

    /**
     * Configuration for the inspector.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InspectConfig inspect_config = 2;</code>
     * @param \Google\Cloud\Dlp\V2\InspectConfig $var
     * @return $this
     */
    public function setInspectConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\InspectConfig::class);
        $this->inspect_config = $var;

        return $this;
    }

    /**
     * The configuration for specifying what content to redact from images.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.RedactImageRequest.ImageRedactionConfig image_redaction_configs = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getImageRedactionConfigs()
    {
        return $this->image_redaction_configs;
    }

    /**
     * The configuration for specifying what content to redact from images.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.RedactImageRequest.ImageRedactionConfig image_redaction_configs = 5;</code>
     * @param array<\Google\Cloud\Dlp\V2\RedactImageRequest\ImageRedactionConfig>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setImageRedactionConfigs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\RedactImageRequest\ImageRedactionConfig::class);
        $this->image_redaction_configs = $arr;

        return $this;
    }

    /**
     * Whether the response should include findings along with the redacted
     * image.
     *
     * Generated from protobuf field <code>bool include_findings = 6;</code>
     * @return bool
     */
    public function getIncludeFindings()
    {
        return $this->include_findings;
    }

    /**
     * Whether the response should include findings along with the redacted
     * image.
     *
     * Generated from protobuf field <code>bool include_findings = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeFindings($var)
    {
        GPBUtil::checkBool($var);
        $this->include_findings = $var;

        return $this;
    }

    /**
     * The content must be PNG, JPEG, SVG or BMP.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ByteContentItem byte_item = 7;</code>
     * @return \Google\Cloud\Dlp\V2\ByteContentItem|null
     */
    public function getByteItem()
    {
        return $this->byte_item;
    }

    public function hasByteItem()
    {
        return isset($this->byte_item);
    }

    public function clearByteItem()
    {
        unset($this->byte_item);
    }

    /**
     * The content must be PNG, JPEG, SVG or BMP.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ByteContentItem byte_item = 7;</code>
     * @param \Google\Cloud\Dlp\V2\ByteContentItem $var
     * @return $this
     */
    public function setByteItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\ByteContentItem::class);
        $this->byte_item = $var;

        return $this;
    }

}

