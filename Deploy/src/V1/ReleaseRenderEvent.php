<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/release_render_payload.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Payload proto for "clouddeploy.googleapis.com/release_render"
 * Platform Log event that describes the render status change.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.ReleaseRenderEvent</code>
 */
class ReleaseRenderEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Debug message for when a render transition occurs. Provides further
     * details as rendering progresses through render states.
     *
     * Generated from protobuf field <code>string message = 1;</code>
     */
    private $message = '';
    /**
     * Unique identifier of the `DeliveryPipeline`.
     *
     * Generated from protobuf field <code>string pipeline_uid = 4;</code>
     */
    private $pipeline_uid = '';
    /**
     * The name of the release.
     * release_uid is not in this log message because we write some of these log
     * messages at release creation time, before we've generated the uid.
     *
     * Generated from protobuf field <code>string release = 2;</code>
     */
    private $release = '';
    /**
     * Type of this notification, e.g. for a release render state change event.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Type type = 5;</code>
     */
    private $type = 0;
    /**
     * The state of the release render.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Release.RenderState release_render_state = 3;</code>
     */
    private $release_render_state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $message
     *           Debug message for when a render transition occurs. Provides further
     *           details as rendering progresses through render states.
     *     @type string $pipeline_uid
     *           Unique identifier of the `DeliveryPipeline`.
     *     @type string $release
     *           The name of the release.
     *           release_uid is not in this log message because we write some of these log
     *           messages at release creation time, before we've generated the uid.
     *     @type int $type
     *           Type of this notification, e.g. for a release render state change event.
     *     @type int $release_render_state
     *           The state of the release render.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\ReleaseRenderPayload::initOnce();
        parent::__construct($data);
    }

    /**
     * Debug message for when a render transition occurs. Provides further
     * details as rendering progresses through render states.
     *
     * Generated from protobuf field <code>string message = 1;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Debug message for when a render transition occurs. Provides further
     * details as rendering progresses through render states.
     *
     * Generated from protobuf field <code>string message = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * Unique identifier of the `DeliveryPipeline`.
     *
     * Generated from protobuf field <code>string pipeline_uid = 4;</code>
     * @return string
     */
    public function getPipelineUid()
    {
        return $this->pipeline_uid;
    }

    /**
     * Unique identifier of the `DeliveryPipeline`.
     *
     * Generated from protobuf field <code>string pipeline_uid = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPipelineUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->pipeline_uid = $var;

        return $this;
    }

    /**
     * The name of the release.
     * release_uid is not in this log message because we write some of these log
     * messages at release creation time, before we've generated the uid.
     *
     * Generated from protobuf field <code>string release = 2;</code>
     * @return string
     */
    public function getRelease()
    {
        return $this->release;
    }

    /**
     * The name of the release.
     * release_uid is not in this log message because we write some of these log
     * messages at release creation time, before we've generated the uid.
     *
     * Generated from protobuf field <code>string release = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRelease($var)
    {
        GPBUtil::checkString($var, True);
        $this->release = $var;

        return $this;
    }

    /**
     * Type of this notification, e.g. for a release render state change event.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Type type = 5;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of this notification, e.g. for a release render state change event.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Type type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Deploy\V1\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * The state of the release render.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Release.RenderState release_render_state = 3;</code>
     * @return int
     */
    public function getReleaseRenderState()
    {
        return $this->release_render_state;
    }

    /**
     * The state of the release render.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Release.RenderState release_render_state = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setReleaseRenderState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Deploy\V1\Release\RenderState::class);
        $this->release_render_state = $var;

        return $this;
    }

}

