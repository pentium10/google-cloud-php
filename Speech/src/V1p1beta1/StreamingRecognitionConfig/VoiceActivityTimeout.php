<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1p1beta1/cloud_speech.proto

namespace Google\Cloud\Speech\V1p1beta1\StreamingRecognitionConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Events that a timeout can be set on for voice activity.
 *
 * Generated from protobuf message <code>google.cloud.speech.v1p1beta1.StreamingRecognitionConfig.VoiceActivityTimeout</code>
 */
class VoiceActivityTimeout extends \Google\Protobuf\Internal\Message
{
    /**
     * Duration to timeout the stream if no speech begins.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration speech_start_timeout = 1;</code>
     */
    private $speech_start_timeout = null;
    /**
     * Duration to timeout the stream after speech ends.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration speech_end_timeout = 2;</code>
     */
    private $speech_end_timeout = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $speech_start_timeout
     *           Duration to timeout the stream if no speech begins.
     *     @type \Google\Protobuf\Duration $speech_end_timeout
     *           Duration to timeout the stream after speech ends.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V1P1Beta1\CloudSpeech::initOnce();
        parent::__construct($data);
    }

    /**
     * Duration to timeout the stream if no speech begins.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration speech_start_timeout = 1;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getSpeechStartTimeout()
    {
        return $this->speech_start_timeout;
    }

    public function hasSpeechStartTimeout()
    {
        return isset($this->speech_start_timeout);
    }

    public function clearSpeechStartTimeout()
    {
        unset($this->speech_start_timeout);
    }

    /**
     * Duration to timeout the stream if no speech begins.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration speech_start_timeout = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setSpeechStartTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->speech_start_timeout = $var;

        return $this;
    }

    /**
     * Duration to timeout the stream after speech ends.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration speech_end_timeout = 2;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getSpeechEndTimeout()
    {
        return $this->speech_end_timeout;
    }

    public function hasSpeechEndTimeout()
    {
        return isset($this->speech_end_timeout);
    }

    public function clearSpeechEndTimeout()
    {
        unset($this->speech_end_timeout);
    }

    /**
     * Duration to timeout the stream after speech ends.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration speech_end_timeout = 2;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setSpeechEndTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->speech_end_timeout = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VoiceActivityTimeout::class, \Google\Cloud\Speech\V1p1beta1\StreamingRecognitionConfig_VoiceActivityTimeout::class);

