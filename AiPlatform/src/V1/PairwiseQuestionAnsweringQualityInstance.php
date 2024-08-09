<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/evaluation_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Spec for pairwise question answering quality instance.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.PairwiseQuestionAnsweringQualityInstance</code>
 */
class PairwiseQuestionAnsweringQualityInstance extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Output of the candidate model.
     *
     * Generated from protobuf field <code>optional string prediction = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $prediction = null;
    /**
     * Required. Output of the baseline model.
     *
     * Generated from protobuf field <code>optional string baseline_prediction = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $baseline_prediction = null;
    /**
     * Optional. Ground truth used to compare against the prediction.
     *
     * Generated from protobuf field <code>optional string reference = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $reference = null;
    /**
     * Required. Text to answer the question.
     *
     * Generated from protobuf field <code>optional string context = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $context = null;
    /**
     * Required. Question Answering prompt for LLM.
     *
     * Generated from protobuf field <code>optional string instruction = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $instruction = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $prediction
     *           Required. Output of the candidate model.
     *     @type string $baseline_prediction
     *           Required. Output of the baseline model.
     *     @type string $reference
     *           Optional. Ground truth used to compare against the prediction.
     *     @type string $context
     *           Required. Text to answer the question.
     *     @type string $instruction
     *           Required. Question Answering prompt for LLM.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\EvaluationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Output of the candidate model.
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
     * Required. Output of the candidate model.
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
     * Required. Output of the baseline model.
     *
     * Generated from protobuf field <code>optional string baseline_prediction = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getBaselinePrediction()
    {
        return isset($this->baseline_prediction) ? $this->baseline_prediction : '';
    }

    public function hasBaselinePrediction()
    {
        return isset($this->baseline_prediction);
    }

    public function clearBaselinePrediction()
    {
        unset($this->baseline_prediction);
    }

    /**
     * Required. Output of the baseline model.
     *
     * Generated from protobuf field <code>optional string baseline_prediction = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setBaselinePrediction($var)
    {
        GPBUtil::checkString($var, True);
        $this->baseline_prediction = $var;

        return $this;
    }

    /**
     * Optional. Ground truth used to compare against the prediction.
     *
     * Generated from protobuf field <code>optional string reference = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Generated from protobuf field <code>optional string reference = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Required. Text to answer the question.
     *
     * Generated from protobuf field <code>optional string context = 4 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. Text to answer the question.
     *
     * Generated from protobuf field <code>optional string context = 4 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. Question Answering prompt for LLM.
     *
     * Generated from protobuf field <code>optional string instruction = 5 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. Question Answering prompt for LLM.
     *
     * Generated from protobuf field <code>optional string instruction = 5 [(.google.api.field_behavior) = REQUIRED];</code>
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

