<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/certificatemanager/v1/certificate_manager.proto

namespace Google\Cloud\CertificateManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `ListCertificates` method.
 *
 * Generated from protobuf message <code>google.cloud.certificatemanager.v1.ListCertificatesRequest</code>
 */
class ListCertificatesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project and location from which the certificate should be
     * listed, specified in the format `projects/&#42;&#47;locations/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Maximum number of certificates to return per call.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * The value returned by the last `ListCertificatesResponse`. Indicates that
     * this is a continuation of a prior `ListCertificates` call, and that the
     * system should return the next page of data.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';
    /**
     * Filter expression to restrict the Certificates returned.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     */
    protected $filter = '';
    /**
     * A list of Certificate field names used to specify the order of the returned
     * results. The default sorting order is ascending. To specify descending
     * order for a field, add a suffix `" desc"`.
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     */
    protected $order_by = '';

    /**
     * @param string $parent Required. The project and location from which the certificate should be
     *                       listed, specified in the format `projects/&#42;/locations/*`. Please see
     *                       {@see CertificateManagerClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\CertificateManager\V1\ListCertificatesRequest
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
     *           Required. The project and location from which the certificate should be
     *           listed, specified in the format `projects/&#42;&#47;locations/&#42;`.
     *     @type int $page_size
     *           Maximum number of certificates to return per call.
     *     @type string $page_token
     *           The value returned by the last `ListCertificatesResponse`. Indicates that
     *           this is a continuation of a prior `ListCertificates` call, and that the
     *           system should return the next page of data.
     *     @type string $filter
     *           Filter expression to restrict the Certificates returned.
     *     @type string $order_by
     *           A list of Certificate field names used to specify the order of the returned
     *           results. The default sorting order is ascending. To specify descending
     *           order for a field, add a suffix `" desc"`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Certificatemanager\V1\CertificateManager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The project and location from which the certificate should be
     * listed, specified in the format `projects/&#42;&#47;locations/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The project and location from which the certificate should be
     * listed, specified in the format `projects/&#42;&#47;locations/&#42;`.
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
     * Maximum number of certificates to return per call.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Maximum number of certificates to return per call.
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
     * The value returned by the last `ListCertificatesResponse`. Indicates that
     * this is a continuation of a prior `ListCertificates` call, and that the
     * system should return the next page of data.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The value returned by the last `ListCertificatesResponse`. Indicates that
     * this is a continuation of a prior `ListCertificates` call, and that the
     * system should return the next page of data.
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
     * Filter expression to restrict the Certificates returned.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Filter expression to restrict the Certificates returned.
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

    /**
     * A list of Certificate field names used to specify the order of the returned
     * results. The default sorting order is ascending. To specify descending
     * order for a field, add a suffix `" desc"`.
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * A list of Certificate field names used to specify the order of the returned
     * results. The default sorting order is ascending. To specify descending
     * order for a field, add a suffix `" desc"`.
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

}

