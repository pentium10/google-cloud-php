<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [ModelService.CopyModel][google.cloud.aiplatform.v1.ModelService.CopyModel].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.CopyModelRequest</code>
 */
class CopyModelRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Location into which to copy the Model.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The resource name of the Model to copy. That Model must be in the
     * same Project. Format:
     * `projects/{project}/locations/{location}/models/{model}`
     *
     * Generated from protobuf field <code>string source_model = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $source_model = '';
    /**
     * Customer-managed encryption key options. If this is set,
     * then the Model copy will be encrypted with the provided encryption key.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.EncryptionSpec encryption_spec = 3;</code>
     */
    private $encryption_spec = null;
    protected $destination_model;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $model_id
     *           Optional. Copy source_model into a new Model with this ID. The ID will
     *           become the final component of the model resource name.
     *           This value may be up to 63 characters, and valid characters are
     *           `[a-z0-9_-]`. The first character cannot be a number or hyphen.
     *     @type string $parent_model
     *           Optional. Specify this field to copy source_model into this existing
     *           Model as a new version. Format:
     *           `projects/{project}/locations/{location}/models/{model}`
     *     @type string $parent
     *           Required. The resource name of the Location into which to copy the Model.
     *           Format: `projects/{project}/locations/{location}`
     *     @type string $source_model
     *           Required. The resource name of the Model to copy. That Model must be in the
     *           same Project. Format:
     *           `projects/{project}/locations/{location}/models/{model}`
     *     @type \Google\Cloud\AIPlatform\V1\EncryptionSpec $encryption_spec
     *           Customer-managed encryption key options. If this is set,
     *           then the Model copy will be encrypted with the provided encryption key.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ModelService::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Copy source_model into a new Model with this ID. The ID will
     * become the final component of the model resource name.
     * This value may be up to 63 characters, and valid characters are
     * `[a-z0-9_-]`. The first character cannot be a number or hyphen.
     *
     * Generated from protobuf field <code>string model_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getModelId()
    {
        return $this->readOneof(4);
    }

    public function hasModelId()
    {
        return $this->hasOneof(4);
    }

    /**
     * Optional. Copy source_model into a new Model with this ID. The ID will
     * become the final component of the model resource name.
     * This value may be up to 63 characters, and valid characters are
     * `[a-z0-9_-]`. The first character cannot be a number or hyphen.
     *
     * Generated from protobuf field <code>string model_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setModelId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Optional. Specify this field to copy source_model into this existing
     * Model as a new version. Format:
     * `projects/{project}/locations/{location}/models/{model}`
     *
     * Generated from protobuf field <code>string parent_model = 5 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParentModel()
    {
        return $this->readOneof(5);
    }

    public function hasParentModel()
    {
        return $this->hasOneof(5);
    }

    /**
     * Optional. Specify this field to copy source_model into this existing
     * Model as a new version. Format:
     * `projects/{project}/locations/{location}/models/{model}`
     *
     * Generated from protobuf field <code>string parent_model = 5 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParentModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Required. The resource name of the Location into which to copy the Model.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the Location into which to copy the Model.
     * Format: `projects/{project}/locations/{location}`
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
     * Required. The resource name of the Model to copy. That Model must be in the
     * same Project. Format:
     * `projects/{project}/locations/{location}/models/{model}`
     *
     * Generated from protobuf field <code>string source_model = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSourceModel()
    {
        return $this->source_model;
    }

    /**
     * Required. The resource name of the Model to copy. That Model must be in the
     * same Project. Format:
     * `projects/{project}/locations/{location}/models/{model}`
     *
     * Generated from protobuf field <code>string source_model = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSourceModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_model = $var;

        return $this;
    }

    /**
     * Customer-managed encryption key options. If this is set,
     * then the Model copy will be encrypted with the provided encryption key.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.EncryptionSpec encryption_spec = 3;</code>
     * @return \Google\Cloud\AIPlatform\V1\EncryptionSpec|null
     */
    public function getEncryptionSpec()
    {
        return $this->encryption_spec;
    }

    public function hasEncryptionSpec()
    {
        return isset($this->encryption_spec);
    }

    public function clearEncryptionSpec()
    {
        unset($this->encryption_spec);
    }

    /**
     * Customer-managed encryption key options. If this is set,
     * then the Model copy will be encrypted with the provided encryption key.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.EncryptionSpec encryption_spec = 3;</code>
     * @param \Google\Cloud\AIPlatform\V1\EncryptionSpec $var
     * @return $this
     */
    public function setEncryptionSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\EncryptionSpec::class);
        $this->encryption_spec = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getDestinationModel()
    {
        return $this->whichOneof("destination_model");
    }

}

