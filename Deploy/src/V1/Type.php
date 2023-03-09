<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/log_enums.proto

namespace Google\Cloud\Deploy\V1;

use UnexpectedValueException;

/**
 * Type indicates the type of the log entry and can be used as a filter.
 *
 * Protobuf type <code>google.cloud.deploy.v1.Type</code>
 */
class Type
{
    /**
     * Type is unspecified.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * A Pub/Sub notification failed to be sent.
     *
     * Generated from protobuf enum <code>TYPE_PUBSUB_NOTIFICATION_FAILURE = 1;</code>
     */
    const TYPE_PUBSUB_NOTIFICATION_FAILURE = 1;
    /**
     * Release render status changed notification.
     *
     * Generated from protobuf enum <code>TYPE_RENDER_STATUES_CHANGE = 2;</code>
     */
    const TYPE_RENDER_STATUES_CHANGE = 2;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::TYPE_PUBSUB_NOTIFICATION_FAILURE => 'TYPE_PUBSUB_NOTIFICATION_FAILURE',
        self::TYPE_RENDER_STATUES_CHANGE => 'TYPE_RENDER_STATUES_CHANGE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

