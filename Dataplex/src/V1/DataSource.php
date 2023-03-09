<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/processing.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The data source for DataScan.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.DataSource</code>
 */
class DataSource extends \Google\Protobuf\Internal\Message
{
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $entity
     *           Immutable. The dataplex entity that contains the data for DataScan, of
     *           the form:
     *           `projects/{project_number}/locations/{location_id}/lakes/{lake_id}/zones/{zone_id}/entities/{entity_id}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Processing::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The dataplex entity that contains the data for DataScan, of
     * the form:
     * `projects/{project_number}/locations/{location_id}/lakes/{lake_id}/zones/{zone_id}/entities/{entity_id}`.
     *
     * Generated from protobuf field <code>string entity = 100 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getEntity()
    {
        return $this->readOneof(100);
    }

    public function hasEntity()
    {
        return $this->hasOneof(100);
    }

    /**
     * Immutable. The dataplex entity that contains the data for DataScan, of
     * the form:
     * `projects/{project_number}/locations/{location_id}/lakes/{lake_id}/zones/{zone_id}/entities/{entity_id}`.
     *
     * Generated from protobuf field <code>string entity = 100 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setEntity($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(100, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

