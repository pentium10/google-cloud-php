<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_connect.proto

namespace GPBMetadata\Google\Cloud\Sql\V1Beta4;

class CloudSqlConnect
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
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSqlResources::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
0google/cloud/sql/v1beta4/cloud_sql_connect.protogoogle.cloud.sql.v1beta4google/api/client.protogoogle/api/field_behavior.proto2google/cloud/sql/v1beta4/cloud_sql_resources.protogoogle/protobuf/duration.protogoogle/protobuf/timestamp.proto"r
GetConnectSettingsRequest
instance (	
project (	2
	read_time (2.google.protobuf.TimestampB�A"�
ConnectSettings
kind (	9
server_ca_cert (2!.google.cloud.sql.v1beta4.SslCert9
ip_addresses (2#.google.cloud.sql.v1beta4.IpMapping
region (	F
database_version (2,.google.cloud.sql.v1beta4.SqlDatabaseVersion>
backend_type  (2(.google.cloud.sql.v1beta4.SqlBackendType"�
GenerateEphemeralCertRequest
instance (	
project (	

public_key (	
access_token (	B�A2
	read_time (2.google.protobuf.TimestampB�A6
valid_duration (2.google.protobuf.DurationB�A"Z
GenerateEphemeralCertResponse9
ephemeral_cert (2!.google.cloud.sql.v1beta4.SslCert2�
SqlConnectService�
GetConnectSettings3.google.cloud.sql.v1beta4.GetConnectSettingsRequest).google.cloud.sql.v1beta4.ConnectSettings"L���FD/sql/v1beta4/projects/{project}/instances/{instance}/connectSettings�
GenerateEphemeralCert6.google.cloud.sql.v1beta4.GenerateEphemeralCertRequest7.google.cloud.sql.v1beta4.GenerateEphemeralCertResponse"U���O"J/sql/v1beta4/projects/{project}/instances/{instance}:generateEphemeralCert:*|�Asqladmin.googleapis.com�A_https://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/sqlservice.adminBf
com.google.cloud.sql.v1beta4BCloudSqlConnectProtoPZ.cloud.google.com/go/sql/apiv1beta4/sqlpb;sqlpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

