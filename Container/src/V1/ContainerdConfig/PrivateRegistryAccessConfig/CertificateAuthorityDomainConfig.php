<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1\ContainerdConfig\PrivateRegistryAccessConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CertificateAuthorityDomainConfig configures one or more fully qualified
 * domain names (FQDN) to a specific certificate.
 *
 * Generated from protobuf message <code>google.container.v1.ContainerdConfig.PrivateRegistryAccessConfig.CertificateAuthorityDomainConfig</code>
 */
class CertificateAuthorityDomainConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * List of fully qualified domain names (FQDN).
     * Specifying port is supported.
     * Wilcards are NOT supported.
     * Examples:
     * - my.customdomain.com
     * - 10.0.1.2:5000
     *
     * Generated from protobuf field <code>repeated string fqdns = 1;</code>
     */
    private $fqdns;
    protected $certificate_config;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $fqdns
     *           List of fully qualified domain names (FQDN).
     *           Specifying port is supported.
     *           Wilcards are NOT supported.
     *           Examples:
     *           - my.customdomain.com
     *           - 10.0.1.2:5000
     *     @type \Google\Cloud\Container\V1\ContainerdConfig\PrivateRegistryAccessConfig\CertificateAuthorityDomainConfig\GCPSecretManagerCertificateConfig $gcp_secret_manager_certificate_config
     *           Google Secret Manager (GCP) certificate configuration.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * List of fully qualified domain names (FQDN).
     * Specifying port is supported.
     * Wilcards are NOT supported.
     * Examples:
     * - my.customdomain.com
     * - 10.0.1.2:5000
     *
     * Generated from protobuf field <code>repeated string fqdns = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFqdns()
    {
        return $this->fqdns;
    }

    /**
     * List of fully qualified domain names (FQDN).
     * Specifying port is supported.
     * Wilcards are NOT supported.
     * Examples:
     * - my.customdomain.com
     * - 10.0.1.2:5000
     *
     * Generated from protobuf field <code>repeated string fqdns = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFqdns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->fqdns = $arr;

        return $this;
    }

    /**
     * Google Secret Manager (GCP) certificate configuration.
     *
     * Generated from protobuf field <code>.google.container.v1.ContainerdConfig.PrivateRegistryAccessConfig.CertificateAuthorityDomainConfig.GCPSecretManagerCertificateConfig gcp_secret_manager_certificate_config = 2;</code>
     * @return \Google\Cloud\Container\V1\ContainerdConfig\PrivateRegistryAccessConfig\CertificateAuthorityDomainConfig\GCPSecretManagerCertificateConfig|null
     */
    public function getGcpSecretManagerCertificateConfig()
    {
        return $this->readOneof(2);
    }

    public function hasGcpSecretManagerCertificateConfig()
    {
        return $this->hasOneof(2);
    }

    /**
     * Google Secret Manager (GCP) certificate configuration.
     *
     * Generated from protobuf field <code>.google.container.v1.ContainerdConfig.PrivateRegistryAccessConfig.CertificateAuthorityDomainConfig.GCPSecretManagerCertificateConfig gcp_secret_manager_certificate_config = 2;</code>
     * @param \Google\Cloud\Container\V1\ContainerdConfig\PrivateRegistryAccessConfig\CertificateAuthorityDomainConfig\GCPSecretManagerCertificateConfig $var
     * @return $this
     */
    public function setGcpSecretManagerCertificateConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\ContainerdConfig\PrivateRegistryAccessConfig\CertificateAuthorityDomainConfig\GCPSecretManagerCertificateConfig::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getCertificateConfig()
    {
        return $this->whichOneof("certificate_config");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CertificateAuthorityDomainConfig::class, \Google\Cloud\Container\V1\ContainerdConfig_PrivateRegistryAccessConfig_CertificateAuthorityDomainConfig::class);

