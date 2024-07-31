<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for CreateStoredInfoType.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.CreateStoredInfoTypeRequest</code>
 */
class CreateStoredInfoTypeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Parent resource name.
     * The format of this value varies depending on the scope of the request
     * (project or organization) and whether you have [specified a processing
     * location](https://cloud.google.com/sensitive-data-protection/docs/specifying-location):
     * + Projects scope, location specified:
     *   `projects/{project_id}/locations/{location_id}`
     * + Projects scope, no location specified (defaults to global):
     *   `projects/{project_id}`
     * + Organizations scope, location specified:
     *   `organizations/{org_id}/locations/{location_id}`
     * + Organizations scope, no location specified (defaults to global):
     *   `organizations/{org_id}`
     * The following example `parent` string specifies a parent project with the
     * identifier `example-project`, and specifies the `europe-west3` location
     * for processing data:
     *     parent=projects/example-project/locations/europe-west3
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. Configuration of the storedInfoType to create.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.StoredInfoTypeConfig config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $config = null;
    /**
     * The storedInfoType ID can contain uppercase and lowercase letters,
     * numbers, and hyphens; that is, it must match the regular
     * expression: `[a-zA-Z\d-_]+`. The maximum length is 100
     * characters. Can be empty to allow the system to generate one.
     *
     * Generated from protobuf field <code>string stored_info_type_id = 3;</code>
     */
    private $stored_info_type_id = '';
    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf field <code>string location_id = 4;</code>
     */
    private $location_id = '';

    /**
     * @param string                                    $parent Required. Parent resource name.
     *
     *                                                          The format of this value varies depending on the scope of the request
     *                                                          (project or organization) and whether you have [specified a processing
     *                                                          location](https://cloud.google.com/sensitive-data-protection/docs/specifying-location):
     *
     *                                                          + Projects scope, location specified:
     *                                                          `projects/{project_id}/locations/{location_id}`
     *                                                          + Projects scope, no location specified (defaults to global):
     *                                                          `projects/{project_id}`
     *                                                          + Organizations scope, location specified:
     *                                                          `organizations/{org_id}/locations/{location_id}`
     *                                                          + Organizations scope, no location specified (defaults to global):
     *                                                          `organizations/{org_id}`
     *
     *                                                          The following example `parent` string specifies a parent project with the
     *                                                          identifier `example-project`, and specifies the `europe-west3` location
     *                                                          for processing data:
     *
     *                                                          parent=projects/example-project/locations/europe-west3
     *                                                          Please see {@see DlpServiceClient::organizationLocationName()} for help formatting this field.
     * @param \Google\Cloud\Dlp\V2\StoredInfoTypeConfig $config Required. Configuration of the storedInfoType to create.
     *
     * @return \Google\Cloud\Dlp\V2\CreateStoredInfoTypeRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Dlp\V2\StoredInfoTypeConfig $config): self
    {
        return (new self())
            ->setParent($parent)
            ->setConfig($config);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Parent resource name.
     *           The format of this value varies depending on the scope of the request
     *           (project or organization) and whether you have [specified a processing
     *           location](https://cloud.google.com/sensitive-data-protection/docs/specifying-location):
     *           + Projects scope, location specified:
     *             `projects/{project_id}/locations/{location_id}`
     *           + Projects scope, no location specified (defaults to global):
     *             `projects/{project_id}`
     *           + Organizations scope, location specified:
     *             `organizations/{org_id}/locations/{location_id}`
     *           + Organizations scope, no location specified (defaults to global):
     *             `organizations/{org_id}`
     *           The following example `parent` string specifies a parent project with the
     *           identifier `example-project`, and specifies the `europe-west3` location
     *           for processing data:
     *               parent=projects/example-project/locations/europe-west3
     *     @type \Google\Cloud\Dlp\V2\StoredInfoTypeConfig $config
     *           Required. Configuration of the storedInfoType to create.
     *     @type string $stored_info_type_id
     *           The storedInfoType ID can contain uppercase and lowercase letters,
     *           numbers, and hyphens; that is, it must match the regular
     *           expression: `[a-zA-Z\d-_]+`. The maximum length is 100
     *           characters. Can be empty to allow the system to generate one.
     *     @type string $location_id
     *           Deprecated. This field has no effect.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Parent resource name.
     * The format of this value varies depending on the scope of the request
     * (project or organization) and whether you have [specified a processing
     * location](https://cloud.google.com/sensitive-data-protection/docs/specifying-location):
     * + Projects scope, location specified:
     *   `projects/{project_id}/locations/{location_id}`
     * + Projects scope, no location specified (defaults to global):
     *   `projects/{project_id}`
     * + Organizations scope, location specified:
     *   `organizations/{org_id}/locations/{location_id}`
     * + Organizations scope, no location specified (defaults to global):
     *   `organizations/{org_id}`
     * The following example `parent` string specifies a parent project with the
     * identifier `example-project`, and specifies the `europe-west3` location
     * for processing data:
     *     parent=projects/example-project/locations/europe-west3
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Parent resource name.
     * The format of this value varies depending on the scope of the request
     * (project or organization) and whether you have [specified a processing
     * location](https://cloud.google.com/sensitive-data-protection/docs/specifying-location):
     * + Projects scope, location specified:
     *   `projects/{project_id}/locations/{location_id}`
     * + Projects scope, no location specified (defaults to global):
     *   `projects/{project_id}`
     * + Organizations scope, location specified:
     *   `organizations/{org_id}/locations/{location_id}`
     * + Organizations scope, no location specified (defaults to global):
     *   `organizations/{org_id}`
     * The following example `parent` string specifies a parent project with the
     * identifier `example-project`, and specifies the `europe-west3` location
     * for processing data:
     *     parent=projects/example-project/locations/europe-west3
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. Configuration of the storedInfoType to create.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.StoredInfoTypeConfig config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dlp\V2\StoredInfoTypeConfig|null
     */
    public function getConfig()
    {
        return $this->config;
    }

    public function hasConfig()
    {
        return isset($this->config);
    }

    public function clearConfig()
    {
        unset($this->config);
    }

    /**
     * Required. Configuration of the storedInfoType to create.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.StoredInfoTypeConfig config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dlp\V2\StoredInfoTypeConfig $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\StoredInfoTypeConfig::class);
        $this->config = $var;

        return $this;
    }

    /**
     * The storedInfoType ID can contain uppercase and lowercase letters,
     * numbers, and hyphens; that is, it must match the regular
     * expression: `[a-zA-Z\d-_]+`. The maximum length is 100
     * characters. Can be empty to allow the system to generate one.
     *
     * Generated from protobuf field <code>string stored_info_type_id = 3;</code>
     * @return string
     */
    public function getStoredInfoTypeId()
    {
        return $this->stored_info_type_id;
    }

    /**
     * The storedInfoType ID can contain uppercase and lowercase letters,
     * numbers, and hyphens; that is, it must match the regular
     * expression: `[a-zA-Z\d-_]+`. The maximum length is 100
     * characters. Can be empty to allow the system to generate one.
     *
     * Generated from protobuf field <code>string stored_info_type_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setStoredInfoTypeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->stored_info_type_id = $var;

        return $this;
    }

    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf field <code>string location_id = 4;</code>
     * @return string
     */
    public function getLocationId()
    {
        return $this->location_id;
    }

    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf field <code>string location_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setLocationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->location_id = $var;

        return $this;
    }

}

