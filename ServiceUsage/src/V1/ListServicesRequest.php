<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/serviceusage/v1/serviceusage.proto

namespace Google\Cloud\ServiceUsage\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the `ListServices` method.
 *
 * Generated from protobuf message <code>google.api.serviceusage.v1.ListServicesRequest</code>
 */
class ListServicesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Parent to search for services on.
     * An example name would be:
     * `projects/123` where `123` is the project number.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * Requested size of the next page of data.
     * Requested page size cannot exceed 200.
     * If not set, the default page size is 50.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * Token identifying which result to start with, which is returned by a
     * previous list call.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';
    /**
     * Only list services that conform to the given filter.
     * The allowed filter strings are `state:ENABLED` and `state:DISABLED`.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     */
    private $filter = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Parent to search for services on.
     *           An example name would be:
     *           `projects/123` where `123` is the project number.
     *     @type int $page_size
     *           Requested size of the next page of data.
     *           Requested page size cannot exceed 200.
     *           If not set, the default page size is 50.
     *     @type string $page_token
     *           Token identifying which result to start with, which is returned by a
     *           previous list call.
     *     @type string $filter
     *           Only list services that conform to the given filter.
     *           The allowed filter strings are `state:ENABLED` and `state:DISABLED`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Serviceusage\V1\Serviceusage::initOnce();
        parent::__construct($data);
    }

    /**
     * Parent to search for services on.
     * An example name would be:
     * `projects/123` where `123` is the project number.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Parent to search for services on.
     * An example name would be:
     * `projects/123` where `123` is the project number.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
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
     * Requested size of the next page of data.
     * Requested page size cannot exceed 200.
     * If not set, the default page size is 50.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Requested size of the next page of data.
     * Requested page size cannot exceed 200.
     * If not set, the default page size is 50.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Token identifying which result to start with, which is returned by a
     * previous list call.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Token identifying which result to start with, which is returned by a
     * previous list call.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Only list services that conform to the given filter.
     * The allowed filter strings are `state:ENABLED` and `state:DISABLED`.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Only list services that conform to the given filter.
     * The allowed filter strings are `state:ENABLED` and `state:DISABLED`.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}

