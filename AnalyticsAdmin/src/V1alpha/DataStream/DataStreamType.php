<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto

namespace Google\Analytics\Admin\V1alpha\DataStream;

use UnexpectedValueException;

/**
 * The type of the data stream.
 *
 * Protobuf type <code>google.analytics.admin.v1alpha.DataStream.DataStreamType</code>
 */
class DataStreamType
{
    /**
     * Type unknown or not specified.
     *
     * Generated from protobuf enum <code>DATA_STREAM_TYPE_UNSPECIFIED = 0;</code>
     */
    const DATA_STREAM_TYPE_UNSPECIFIED = 0;
    /**
     * Web data stream.
     *
     * Generated from protobuf enum <code>WEB_DATA_STREAM = 1;</code>
     */
    const WEB_DATA_STREAM = 1;
    /**
     * Android app data stream.
     *
     * Generated from protobuf enum <code>ANDROID_APP_DATA_STREAM = 2;</code>
     */
    const ANDROID_APP_DATA_STREAM = 2;
    /**
     * iOS app data stream.
     *
     * Generated from protobuf enum <code>IOS_APP_DATA_STREAM = 3;</code>
     */
    const IOS_APP_DATA_STREAM = 3;

    private static $valueToName = [
        self::DATA_STREAM_TYPE_UNSPECIFIED => 'DATA_STREAM_TYPE_UNSPECIFIED',
        self::WEB_DATA_STREAM => 'WEB_DATA_STREAM',
        self::ANDROID_APP_DATA_STREAM => 'ANDROID_APP_DATA_STREAM',
        self::IOS_APP_DATA_STREAM => 'IOS_APP_DATA_STREAM',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DataStreamType::class, \Google\Analytics\Admin\V1alpha\DataStream_DataStreamType::class);

