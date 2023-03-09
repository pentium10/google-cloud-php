<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/session.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The top-level message returned from the
 * `StreamingDetectIntent` method.
 * Multiple response messages can be returned in order:
 * 1.  If the `StreamingDetectIntentRequest.input_audio` field was
 *     set, the `recognition_result` field is populated for one
 *     or more messages.
 *     See the
 *     [StreamingRecognitionResult][google.cloud.dialogflow.v2.StreamingRecognitionResult]
 *     message for details about the result message sequence.
 * 2.  The next message contains `response_id`, `query_result`
 *     and optionally `webhook_status` if a WebHook was called.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.StreamingDetectIntentResponse</code>
 */
class StreamingDetectIntentResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique identifier of the response. It can be used to
     * locate a response in the training example set or for reporting issues.
     *
     * Generated from protobuf field <code>string response_id = 1;</code>
     */
    private $response_id = '';
    /**
     * The result of speech recognition.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.StreamingRecognitionResult recognition_result = 2;</code>
     */
    private $recognition_result = null;
    /**
     * The result of the conversational query or event processing.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.QueryResult query_result = 3;</code>
     */
    private $query_result = null;
    /**
     * Specifies the status of the webhook request.
     *
     * Generated from protobuf field <code>.google.rpc.Status webhook_status = 4;</code>
     */
    private $webhook_status = null;
    /**
     * The audio data bytes encoded as specified in the request.
     * Note: The output audio is generated based on the values of default platform
     * text responses found in the `query_result.fulfillment_messages` field. If
     * multiple default text responses exist, they will be concatenated when
     * generating audio. If no default platform text responses exist, the
     * generated audio content will be empty.
     * In some scenarios, multiple output audio fields may be present in the
     * response structure. In these cases, only the top-most-level audio output
     * has content.
     *
     * Generated from protobuf field <code>bytes output_audio = 5;</code>
     */
    private $output_audio = '';
    /**
     * The config used by the speech synthesizer to generate the output audio.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.OutputAudioConfig output_audio_config = 6;</code>
     */
    private $output_audio_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $response_id
     *           The unique identifier of the response. It can be used to
     *           locate a response in the training example set or for reporting issues.
     *     @type \Google\Cloud\Dialogflow\V2\StreamingRecognitionResult $recognition_result
     *           The result of speech recognition.
     *     @type \Google\Cloud\Dialogflow\V2\QueryResult $query_result
     *           The result of the conversational query or event processing.
     *     @type \Google\Rpc\Status $webhook_status
     *           Specifies the status of the webhook request.
     *     @type string $output_audio
     *           The audio data bytes encoded as specified in the request.
     *           Note: The output audio is generated based on the values of default platform
     *           text responses found in the `query_result.fulfillment_messages` field. If
     *           multiple default text responses exist, they will be concatenated when
     *           generating audio. If no default platform text responses exist, the
     *           generated audio content will be empty.
     *           In some scenarios, multiple output audio fields may be present in the
     *           response structure. In these cases, only the top-most-level audio output
     *           has content.
     *     @type \Google\Cloud\Dialogflow\V2\OutputAudioConfig $output_audio_config
     *           The config used by the speech synthesizer to generate the output audio.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Session::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique identifier of the response. It can be used to
     * locate a response in the training example set or for reporting issues.
     *
     * Generated from protobuf field <code>string response_id = 1;</code>
     * @return string
     */
    public function getResponseId()
    {
        return $this->response_id;
    }

    /**
     * The unique identifier of the response. It can be used to
     * locate a response in the training example set or for reporting issues.
     *
     * Generated from protobuf field <code>string response_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResponseId($var)
    {
        GPBUtil::checkString($var, True);
        $this->response_id = $var;

        return $this;
    }

    /**
     * The result of speech recognition.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.StreamingRecognitionResult recognition_result = 2;</code>
     * @return \Google\Cloud\Dialogflow\V2\StreamingRecognitionResult|null
     */
    public function getRecognitionResult()
    {
        return $this->recognition_result;
    }

    public function hasRecognitionResult()
    {
        return isset($this->recognition_result);
    }

    public function clearRecognitionResult()
    {
        unset($this->recognition_result);
    }

    /**
     * The result of speech recognition.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.StreamingRecognitionResult recognition_result = 2;</code>
     * @param \Google\Cloud\Dialogflow\V2\StreamingRecognitionResult $var
     * @return $this
     */
    public function setRecognitionResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\StreamingRecognitionResult::class);
        $this->recognition_result = $var;

        return $this;
    }

    /**
     * The result of the conversational query or event processing.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.QueryResult query_result = 3;</code>
     * @return \Google\Cloud\Dialogflow\V2\QueryResult|null
     */
    public function getQueryResult()
    {
        return $this->query_result;
    }

    public function hasQueryResult()
    {
        return isset($this->query_result);
    }

    public function clearQueryResult()
    {
        unset($this->query_result);
    }

    /**
     * The result of the conversational query or event processing.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.QueryResult query_result = 3;</code>
     * @param \Google\Cloud\Dialogflow\V2\QueryResult $var
     * @return $this
     */
    public function setQueryResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\QueryResult::class);
        $this->query_result = $var;

        return $this;
    }

    /**
     * Specifies the status of the webhook request.
     *
     * Generated from protobuf field <code>.google.rpc.Status webhook_status = 4;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getWebhookStatus()
    {
        return $this->webhook_status;
    }

    public function hasWebhookStatus()
    {
        return isset($this->webhook_status);
    }

    public function clearWebhookStatus()
    {
        unset($this->webhook_status);
    }

    /**
     * Specifies the status of the webhook request.
     *
     * Generated from protobuf field <code>.google.rpc.Status webhook_status = 4;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setWebhookStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->webhook_status = $var;

        return $this;
    }

    /**
     * The audio data bytes encoded as specified in the request.
     * Note: The output audio is generated based on the values of default platform
     * text responses found in the `query_result.fulfillment_messages` field. If
     * multiple default text responses exist, they will be concatenated when
     * generating audio. If no default platform text responses exist, the
     * generated audio content will be empty.
     * In some scenarios, multiple output audio fields may be present in the
     * response structure. In these cases, only the top-most-level audio output
     * has content.
     *
     * Generated from protobuf field <code>bytes output_audio = 5;</code>
     * @return string
     */
    public function getOutputAudio()
    {
        return $this->output_audio;
    }

    /**
     * The audio data bytes encoded as specified in the request.
     * Note: The output audio is generated based on the values of default platform
     * text responses found in the `query_result.fulfillment_messages` field. If
     * multiple default text responses exist, they will be concatenated when
     * generating audio. If no default platform text responses exist, the
     * generated audio content will be empty.
     * In some scenarios, multiple output audio fields may be present in the
     * response structure. In these cases, only the top-most-level audio output
     * has content.
     *
     * Generated from protobuf field <code>bytes output_audio = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setOutputAudio($var)
    {
        GPBUtil::checkString($var, False);
        $this->output_audio = $var;

        return $this;
    }

    /**
     * The config used by the speech synthesizer to generate the output audio.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.OutputAudioConfig output_audio_config = 6;</code>
     * @return \Google\Cloud\Dialogflow\V2\OutputAudioConfig|null
     */
    public function getOutputAudioConfig()
    {
        return $this->output_audio_config;
    }

    public function hasOutputAudioConfig()
    {
        return isset($this->output_audio_config);
    }

    public function clearOutputAudioConfig()
    {
        unset($this->output_audio_config);
    }

    /**
     * The config used by the speech synthesizer to generate the output audio.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.OutputAudioConfig output_audio_config = 6;</code>
     * @param \Google\Cloud\Dialogflow\V2\OutputAudioConfig $var
     * @return $this
     */
    public function setOutputAudioConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\OutputAudioConfig::class);
        $this->output_audio_config = $var;

        return $this;
    }

}

