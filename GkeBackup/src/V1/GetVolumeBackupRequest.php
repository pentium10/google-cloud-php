<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/gkebackup.proto

namespace Google\Cloud\GkeBackup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for GetVolumeBackup.
 *
 * Generated from protobuf message <code>google.cloud.gkebackup.v1.GetVolumeBackupRequest</code>
 */
class GetVolumeBackupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Full name of the VolumeBackup resource.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;backupPlans/&#42;&#47;backups/&#42;&#47;volumeBackups/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. Full name of the VolumeBackup resource.
     *                     Format: `projects/&#42;/locations/&#42;/backupPlans/&#42;/backups/&#42;/volumeBackups/*`
     *                     Please see {@see BackupForGKEClient::volumeBackupName()} for help formatting this field.
     *
     * @return \Google\Cloud\GkeBackup\V1\GetVolumeBackupRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Full name of the VolumeBackup resource.
     *           Format: `projects/&#42;&#47;locations/&#42;&#47;backupPlans/&#42;&#47;backups/&#42;&#47;volumeBackups/&#42;`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkebackup\V1\Gkebackup::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Full name of the VolumeBackup resource.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;backupPlans/&#42;&#47;backups/&#42;&#47;volumeBackups/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Full name of the VolumeBackup resource.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;backupPlans/&#42;&#47;backups/&#42;&#47;volumeBackups/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

