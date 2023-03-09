<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_table_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata type for the operation returned by
 * [CreateBackup][google.bigtable.admin.v2.BigtableTableAdmin.CreateBackup].
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.CreateBackupMetadata</code>
 */
class CreateBackupMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the backup being created.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The name of the table the backup is created from.
     *
     * Generated from protobuf field <code>string source_table = 2;</code>
     */
    private $source_table = '';
    /**
     * The time at which this operation started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 3;</code>
     */
    private $start_time = null;
    /**
     * If set, the time at which this operation finished or was cancelled.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 4;</code>
     */
    private $end_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the backup being created.
     *     @type string $source_table
     *           The name of the table the backup is created from.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           The time at which this operation started.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           If set, the time at which this operation finished or was cancelled.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableTableAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the backup being created.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the backup being created.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The name of the table the backup is created from.
     *
     * Generated from protobuf field <code>string source_table = 2;</code>
     * @return string
     */
    public function getSourceTable()
    {
        return $this->source_table;
    }

    /**
     * The name of the table the backup is created from.
     *
     * Generated from protobuf field <code>string source_table = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceTable($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_table = $var;

        return $this;
    }

    /**
     * The time at which this operation started.
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
     * The time at which this operation started.
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
     * If set, the time at which this operation finished or was cancelled.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * If set, the time at which this operation finished or was cancelled.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

}

