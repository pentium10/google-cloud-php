<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iot/v1/resources.proto

namespace Google\Cloud\Iot\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details of an X.509 certificate. For informational purposes only.
 *
 * Generated from protobuf message <code>google.cloud.iot.v1.X509CertificateDetails</code>
 */
class X509CertificateDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * The entity that signed the certificate.
     *
     * Generated from protobuf field <code>string issuer = 1;</code>
     */
    private $issuer = '';
    /**
     * The entity the certificate and public key belong to.
     *
     * Generated from protobuf field <code>string subject = 2;</code>
     */
    private $subject = '';
    /**
     * The time the certificate becomes valid.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 3;</code>
     */
    private $start_time = null;
    /**
     * The time the certificate becomes invalid.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiry_time = 4;</code>
     */
    private $expiry_time = null;
    /**
     * The algorithm used to sign the certificate.
     *
     * Generated from protobuf field <code>string signature_algorithm = 5;</code>
     */
    private $signature_algorithm = '';
    /**
     * The type of public key in the certificate.
     *
     * Generated from protobuf field <code>string public_key_type = 6;</code>
     */
    private $public_key_type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $issuer
     *           The entity that signed the certificate.
     *     @type string $subject
     *           The entity the certificate and public key belong to.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           The time the certificate becomes valid.
     *     @type \Google\Protobuf\Timestamp $expiry_time
     *           The time the certificate becomes invalid.
     *     @type string $signature_algorithm
     *           The algorithm used to sign the certificate.
     *     @type string $public_key_type
     *           The type of public key in the certificate.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Iot\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The entity that signed the certificate.
     *
     * Generated from protobuf field <code>string issuer = 1;</code>
     * @return string
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * The entity that signed the certificate.
     *
     * Generated from protobuf field <code>string issuer = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setIssuer($var)
    {
        GPBUtil::checkString($var, True);
        $this->issuer = $var;

        return $this;
    }

    /**
     * The entity the certificate and public key belong to.
     *
     * Generated from protobuf field <code>string subject = 2;</code>
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The entity the certificate and public key belong to.
     *
     * Generated from protobuf field <code>string subject = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSubject($var)
    {
        GPBUtil::checkString($var, True);
        $this->subject = $var;

        return $this;
    }

    /**
     * The time the certificate becomes valid.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * The time the certificate becomes valid.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * The time the certificate becomes invalid.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiry_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpiryTime()
    {
        return $this->expiry_time;
    }

    public function hasExpiryTime()
    {
        return isset($this->expiry_time);
    }

    public function clearExpiryTime()
    {
        unset($this->expiry_time);
    }

    /**
     * The time the certificate becomes invalid.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiry_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpiryTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expiry_time = $var;

        return $this;
    }

    /**
     * The algorithm used to sign the certificate.
     *
     * Generated from protobuf field <code>string signature_algorithm = 5;</code>
     * @return string
     */
    public function getSignatureAlgorithm()
    {
        return $this->signature_algorithm;
    }

    /**
     * The algorithm used to sign the certificate.
     *
     * Generated from protobuf field <code>string signature_algorithm = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setSignatureAlgorithm($var)
    {
        GPBUtil::checkString($var, True);
        $this->signature_algorithm = $var;

        return $this;
    }

    /**
     * The type of public key in the certificate.
     *
     * Generated from protobuf field <code>string public_key_type = 6;</code>
     * @return string
     */
    public function getPublicKeyType()
    {
        return $this->public_key_type;
    }

    /**
     * The type of public key in the certificate.
     *
     * Generated from protobuf field <code>string public_key_type = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setPublicKeyType($var)
    {
        GPBUtil::checkString($var, True);
        $this->public_key_type = $var;

        return $this;
    }

}

