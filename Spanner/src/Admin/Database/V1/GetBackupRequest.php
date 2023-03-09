<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/backup.proto

namespace Google\Cloud\Spanner\Admin\Database\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [GetBackup][google.spanner.admin.database.v1.DatabaseAdmin.GetBackup].
 *
 * Generated from protobuf message <code>google.spanner.admin.database.v1.GetBackupRequest</code>
 */
class GetBackupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the backup.
     * Values are of the form
     * `projects/<project>/instances/<instance>/backups/<backup>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the backup.
     *           Values are of the form
     *           `projects/<project>/instances/<instance>/backups/<backup>`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Database\V1\Backup::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the backup.
     * Values are of the form
     * `projects/<project>/instances/<instance>/backups/<backup>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the backup.
     * Values are of the form
     * `projects/<project>/instances/<instance>/backups/<backup>`.
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

