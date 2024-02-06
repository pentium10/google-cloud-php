<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging.proto

namespace GPBMetadata\Google\Logging\V2;

class Logging
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\MonitoredResource::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Logging\V2\LogEntry::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
� 
google/logging/v2/logging.protogoogle.logging.v2google/api/client.protogoogle/api/field_behavior.proto#google/api/monitored_resource.protogoogle/api/resource.proto!google/logging/v2/log_entry.protogoogle/protobuf/duration.protogoogle/protobuf/empty.protogoogle/rpc/status.proto"H
DeleteLogRequest4
log_name (	B"�A�A
logging.googleapis.com/Log"�
WriteLogEntriesRequest4
log_name (	B"�A�A
logging.googleapis.com/Log4
resource (2.google.api.MonitoredResourceB�AJ
labels (25.google.logging.v2.WriteLogEntriesRequest.LabelsEntryB�A1
entries (2.google.logging.v2.LogEntryB�A
partial_success (B�A
dry_run (B�A-
LabelsEntry
key (	
value (	:8"
WriteLogEntriesResponse"�
WriteLogEntriesPartialErrors]
log_entry_errors (2C.google.logging.v2.WriteLogEntriesPartialErrors.LogEntryErrorsEntryI
LogEntryErrorsEntry
key (!
value (2.google.rpc.Status:8"�
ListLogEntriesRequest:
resource_names (	B"�A�Alogging.googleapis.com/Log
filter (	B�A
order_by (	B�A
	page_size (B�A

page_token (	B�A"_
ListLogEntriesResponse,
entries (2.google.logging.v2.LogEntry
next_page_token (	"Z
\'ListMonitoredResourceDescriptorsRequest
	page_size (B�A

page_token (	B�A"�
(ListMonitoredResourceDescriptorsResponseE
resource_descriptors (2\'.google.api.MonitoredResourceDescriptor
next_page_token (	"�
ListLogsRequest2
parent (	B"�A�Alogging.googleapis.com/Log:
resource_names (	B"�A�Alogging.googleapis.com/Log
	page_size (B�A

page_token (	B�A">
ListLogsResponse
	log_names (	
next_page_token (	"�
TailLogEntriesRequest
resource_names (	B�A
filter (	B�A5
buffer_window (2.google.protobuf.DurationB�A"�
TailLogEntriesResponse,
entries (2.google.logging.v2.LogEntryS
suppression_info (29.google.logging.v2.TailLogEntriesResponse.SuppressionInfo�
SuppressionInfoP
reason (2@.google.logging.v2.TailLogEntriesResponse.SuppressionInfo.Reason
suppressed_count ("B
Reason
REASON_UNSPECIFIED 

RATE_LIMIT
NOT_CONSUMED2�
LoggingServiceV2�
	DeleteLog#.google.logging.v2.DeleteLogRequest.google.protobuf.Empty"��Alog_name����* /v2/{log_name=projects/*/logs/*}Z*/v2/{log_name=*/*/logs/*}Z\'*%/v2/{log_name=organizations/*/logs/*}Z!*/v2/{log_name=folders/*/logs/*}Z)*\'/v2/{log_name=billingAccounts/*/logs/*}�
WriteLogEntries).google.logging.v2.WriteLogEntriesRequest*.google.logging.v2.WriteLogEntriesResponse"?�A log_name,resource,labels,entries���"/v2/entries:write:*�
ListLogEntries(.google.logging.v2.ListLogEntriesRequest).google.logging.v2.ListLogEntriesResponse"<�Aresource_names,filter,order_by���"/v2/entries:list:*�
 ListMonitoredResourceDescriptors:.google.logging.v2.ListMonitoredResourceDescriptorsRequest;.google.logging.v2.ListMonitoredResourceDescriptorsResponse"(���" /v2/monitoredResourceDescriptors�
ListLogs".google.logging.v2.ListLogsRequest#.google.logging.v2.ListLogsResponse"��Aparent����/v2/{parent=*/*}/logsZ/v2/{parent=projects/*}/logsZ#!/v2/{parent=organizations/*}/logsZ/v2/{parent=folders/*}/logsZ%#/v2/{parent=billingAccounts/*}/logsZ<:/v2/{parent=projects/*/locations/*/buckets/*/views/*}/logsZA?/v2/{parent=organizations/*/locations/*/buckets/*/views/*}/logsZ;9/v2/{parent=folders/*/locations/*/buckets/*/views/*}/logsZCA/v2/{parent=billingAccounts/*/locations/*/buckets/*/views/*}/logs�
TailLogEntries(.google.logging.v2.TailLogEntriesRequest).google.logging.v2.TailLogEntriesResponse"���"/v2/entries:tail:*(0��Alogging.googleapis.com�A�https://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/cloud-platform.read-only,https://www.googleapis.com/auth/logging.admin,https://www.googleapis.com/auth/logging.read,https://www.googleapis.com/auth/logging.writeB�
com.google.logging.v2BLoggingProtoPZ5cloud.google.com/go/logging/apiv2/loggingpb;loggingpb��Google.Cloud.Logging.V2�Google\\Cloud\\Logging\\V2�Google::Cloud::Logging::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

