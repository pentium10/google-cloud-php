<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/resourcemanager/v3/tag_holds.proto

namespace Google\Cloud\ResourceManager\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for listing the TagHolds under a TagValue.
 *
 * Generated from protobuf message <code>google.cloud.resourcemanager.v3.ListTagHoldsRequest</code>
 */
class ListTagHoldsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the parent TagValue. Must be of the form:
     * `tagValues/{tag-value-id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. The maximum number of TagHolds to return in the response. The
     * server allows a maximum of 300 TagHolds to return. If unspecified, the
     * server will use 100 as the default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. A pagination token returned from a previous call to
     * `ListTagHolds` that indicates where this listing should continue from.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';
    /**
     * Optional. Criteria used to select a subset of TagHolds parented by the
     * TagValue to return. This field follows the syntax defined by aip.dev/160;
     * the `holder` and `origin` fields are supported for filtering. Currently
     * only `AND` syntax is supported. Some example queries are:
     *   * `holder =
     *     //compute.googleapis.com/compute/projects/myproject/regions/us-east-1/instanceGroupManagers/instance-group`
     *   * `origin = 35678234`
     *   * `holder =
     *     //compute.googleapis.com/compute/projects/myproject/regions/us-east-1/instanceGroupManagers/instance-group
     *     AND origin = 35678234`
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $filter = '';

    /**
     * @param string $parent Required. The resource name of the parent TagValue. Must be of the form:
     *                       `tagValues/{tag-value-id}`. Please see
     *                       {@see TagHoldsClient::tagValueName()} for help formatting this field.
     *
     * @return \Google\Cloud\ResourceManager\V3\ListTagHoldsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the parent TagValue. Must be of the form:
     *           `tagValues/{tag-value-id}`.
     *     @type int $page_size
     *           Optional. The maximum number of TagHolds to return in the response. The
     *           server allows a maximum of 300 TagHolds to return. If unspecified, the
     *           server will use 100 as the default.
     *     @type string $page_token
     *           Optional. A pagination token returned from a previous call to
     *           `ListTagHolds` that indicates where this listing should continue from.
     *     @type string $filter
     *           Optional. Criteria used to select a subset of TagHolds parented by the
     *           TagValue to return. This field follows the syntax defined by aip.dev/160;
     *           the `holder` and `origin` fields are supported for filtering. Currently
     *           only `AND` syntax is supported. Some example queries are:
     *             * `holder =
     *               //compute.googleapis.com/compute/projects/myproject/regions/us-east-1/instanceGroupManagers/instance-group`
     *             * `origin = 35678234`
     *             * `holder =
     *               //compute.googleapis.com/compute/projects/myproject/regions/us-east-1/instanceGroupManagers/instance-group
     *               AND origin = 35678234`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Resourcemanager\V3\TagHolds::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the parent TagValue. Must be of the form:
     * `tagValues/{tag-value-id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the parent TagValue. Must be of the form:
     * `tagValues/{tag-value-id}`.
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
     * Optional. The maximum number of TagHolds to return in the response. The
     * server allows a maximum of 300 TagHolds to return. If unspecified, the
     * server will use 100 as the default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of TagHolds to return in the response. The
     * server allows a maximum of 300 TagHolds to return. If unspecified, the
     * server will use 100 as the default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. A pagination token returned from a previous call to
     * `ListTagHolds` that indicates where this listing should continue from.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A pagination token returned from a previous call to
     * `ListTagHolds` that indicates where this listing should continue from.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. Criteria used to select a subset of TagHolds parented by the
     * TagValue to return. This field follows the syntax defined by aip.dev/160;
     * the `holder` and `origin` fields are supported for filtering. Currently
     * only `AND` syntax is supported. Some example queries are:
     *   * `holder =
     *     //compute.googleapis.com/compute/projects/myproject/regions/us-east-1/instanceGroupManagers/instance-group`
     *   * `origin = 35678234`
     *   * `holder =
     *     //compute.googleapis.com/compute/projects/myproject/regions/us-east-1/instanceGroupManagers/instance-group
     *     AND origin = 35678234`
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. Criteria used to select a subset of TagHolds parented by the
     * TagValue to return. This field follows the syntax defined by aip.dev/160;
     * the `holder` and `origin` fields are supported for filtering. Currently
     * only `AND` syntax is supported. Some example queries are:
     *   * `holder =
     *     //compute.googleapis.com/compute/projects/myproject/regions/us-east-1/instanceGroupManagers/instance-group`
     *   * `origin = 35678234`
     *   * `holder =
     *     //compute.googleapis.com/compute/projects/myproject/regions/us-east-1/instanceGroupManagers/instance-group
     *     AND origin = 35678234`
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
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

