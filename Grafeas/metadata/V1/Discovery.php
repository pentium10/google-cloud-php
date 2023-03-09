<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/discovery.proto

namespace GPBMetadata\Grafeas\V1;

class Discovery
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Grafeas\V1\Common::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
grafeas/v1/discovery.proto
grafeas.v1google/protobuf/timestamp.protogoogle/rpc/status.protografeas/v1/common.proto"<
DiscoveryNote+
analysis_kind (2.grafeas.v1.NoteKind"�
DiscoveryOccurrenceO
continuous_analysis (22.grafeas.v1.DiscoveryOccurrence.ContinuousAnalysisG
analysis_status (2..grafeas.v1.DiscoveryOccurrence.AnalysisStatusM
analysis_completed (21.grafeas.v1.DiscoveryOccurrence.AnalysisCompleted*
analysis_error (2.google.rpc.Status1
analysis_status_error (2.google.rpc.Status
cpe (	2
last_scan_time (2.google.protobuf.Timestamp5
archive_time (2.google.protobuf.TimestampB�A*
AnalysisCompleted
analysis_type (	"S
ContinuousAnalysis#
CONTINUOUS_ANALYSIS_UNSPECIFIED 

ACTIVE
INACTIVE"�
AnalysisStatus
ANALYSIS_STATUS_UNSPECIFIED 
PENDING
SCANNING
FINISHED_SUCCESS
COMPLETE
FINISHED_FAILED
FINISHED_UNSUPPORTEDBQ
io.grafeas.v1PZ8google.golang.org/genproto/googleapis/grafeas/v1;grafeas�GRAbproto3'
        , true);

        static::$is_initialized = true;
    }
}

