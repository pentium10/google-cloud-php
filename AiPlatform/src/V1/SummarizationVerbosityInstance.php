<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/evaluation_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Spec for summarization verbosity instance.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.SummarizationVerbosityInstance</code>
 */
class SummarizationVerbosityInstance extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Output of the evaluated model.
     *
     * Generated from protobuf field <code>optional string prediction = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $prediction = null;
    /**
     * Optional. Ground truth used to compare against the prediction.
     *
     * Generated from protobuf field <code>optional string reference = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $reference = null;
    /**
     * Required. Text to be summarized.
     *
     * Generated from protobuf field <code>optional string context = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $context = null;
    /**
     * Optional. Summarization prompt for LLM.
     *
     * Generated from protobuf field <code>optional string instruction = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $instruction = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $prediction
     *           Required. Output of the evaluated model.
     *     @type string $reference
     *           Optional. Ground truth used to compare against the prediction.
     *     @type string $context
     *           Required. Text to be summarized.
     *     @type string $instruction
     *           Optional. Summarization prompt for LLM.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\EvaluationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Output of the evaluated model.
     *
     * Generated from protobuf field <code>optional string prediction = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPrediction()
    {
        return isset($this->prediction) ? $this->prediction : '';
    }

    public function hasPrediction()
    {
        return isset($this->prediction);
    }

    public function clearPrediction()
    {
        unset($this->prediction);
    }

    /**
     * Required. Output of the evaluated model.
     *
     * Generated from protobuf field <code>optional string prediction = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPrediction($var)
    {
        GPBUtil::checkString($var, True);
        $this->prediction = $var;

        return $this;
    }

    /**
     * Optional. Ground truth used to compare against the prediction.
     *
     * Generated from protobuf field <code>optional string reference = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getReference()
    {
        return isset($this->reference) ? $this->reference : '';
    }

    public function hasReference()
    {
        return isset($this->reference);
    }

    public function clearReference()
    {
        unset($this->reference);
    }

    /**
     * Optional. Ground truth used to compare against the prediction.
     *
     * Generated from protobuf field <code>optional string reference = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setReference($var)
    {
        GPBUtil::checkString($var, True);
        $this->reference = $var;

        return $this;
    }

    /**
     * Required. Text to be summarized.
     *
     * Generated from protobuf field <code>optional string context = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getContext()
    {
        return isset($this->context) ? $this->context : '';
    }

    public function hasContext()
    {
        return isset($this->context);
    }

    public function clearContext()
    {
        unset($this->context);
    }

    /**
     * Required. Text to be summarized.
     *
     * Generated from protobuf field <code>optional string context = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setContext($var)
    {
        GPBUtil::checkString($var, True);
        $this->context = $var;

        return $this;
    }

    /**
     * Optional. Summarization prompt for LLM.
     *
     * Generated from protobuf field <code>optional string instruction = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getInstruction()
    {
        return isset($this->instruction) ? $this->instruction : '';
    }

    public function hasInstruction()
    {
        return isset($this->instruction);
    }

    public function clearInstruction()
    {
        unset($this->instruction);
    }

    /**
     * Optional. Summarization prompt for LLM.
     *
     * Generated from protobuf field <code>optional string instruction = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setInstruction($var)
    {
        GPBUtil::checkString($var, True);
        $this->instruction = $var;

        return $this;
    }

}

