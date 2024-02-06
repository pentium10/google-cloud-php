<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oslogin/v1/oslogin.proto

namespace GPBMetadata\Google\Cloud\Oslogin\V1;

class Oslogin
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
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Oslogin\Common\Common::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
%google/cloud/oslogin/v1/oslogin.protogoogle.cloud.oslogin.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto(google/cloud/oslogin/common/common.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"�
LoginProfile
name (	B�AA
posix_accounts (2).google.cloud.oslogin.common.PosixAccountQ
ssh_public_keys (28.google.cloud.oslogin.v1.LoginProfile.SshPublicKeysEntry_
SshPublicKeysEntry
key (	8
value (2).google.cloud.oslogin.common.SshPublicKey:8"�
CreateSshPublicKeyRequest;
parent (	B+�A�A%#oslogin.googleapis.com/SshPublicKeyF
ssh_public_key (2).google.cloud.oslogin.common.SshPublicKeyB�A"V
DeletePosixAccountRequest9
name (	B+�A�A%
#oslogin.googleapis.com/PosixAccount"V
DeleteSshPublicKeyRequest9
name (	B+�A�A%
#oslogin.googleapis.com/SshPublicKey"z
GetLoginProfileRequest9
name (	B+�A�A%#oslogin.googleapis.com/PosixAccount

project_id (	
	system_id (	"S
GetSshPublicKeyRequest9
name (	B+�A�A%
#oslogin.googleapis.com/SshPublicKey"�
ImportSshPublicKeyRequest;
parent (	B+�A�A%#oslogin.googleapis.com/SshPublicKeyF
ssh_public_key (2).google.cloud.oslogin.common.SshPublicKeyB�A

project_id (	
regions (	B�A"k
ImportSshPublicKeyResponse<
login_profile (2%.google.cloud.oslogin.v1.LoginProfile
details (	"�
UpdateSshPublicKeyRequest9
name (	B+�A�A%
#oslogin.googleapis.com/SshPublicKeyF
ssh_public_key (2).google.cloud.oslogin.common.SshPublicKeyB�A/
update_mask (2.google.protobuf.FieldMask2�
OsLoginService�
CreateSshPublicKey2.google.cloud.oslogin.v1.CreateSshPublicKeyRequest).google.cloud.oslogin.common.SshPublicKey"R�Aparent,ssh_public_key���4""/v1/{parent=users/*}/sshPublicKeys:ssh_public_key�
DeletePosixAccount2.google.cloud.oslogin.v1.DeletePosixAccountRequest.google.protobuf.Empty",�Aname���*/v1/{name=users/*/projects/*}�
DeleteSshPublicKey2.google.cloud.oslogin.v1.DeleteSshPublicKeyRequest.google.protobuf.Empty"1�Aname���$*"/v1/{name=users/*/sshPublicKeys/*}�
GetLoginProfile/.google.cloud.oslogin.v1.GetLoginProfileRequest%.google.cloud.oslogin.v1.LoginProfile".�Aname���!/v1/{name=users/*}/loginProfile�
GetSshPublicKey/.google.cloud.oslogin.v1.GetSshPublicKeyRequest).google.cloud.oslogin.common.SshPublicKey"1�Aname���$"/v1/{name=users/*/sshPublicKeys/*}�
ImportSshPublicKey2.google.cloud.oslogin.v1.ImportSshPublicKeyRequest3.google.cloud.oslogin.v1.ImportSshPublicKeyResponse"z�Aparent,ssh_public_key�A parent,ssh_public_key,project_id���9"\'/v1/{parent=users/*}:importSshPublicKey:ssh_public_key�
UpdateSshPublicKey2.google.cloud.oslogin.v1.UpdateSshPublicKeyRequest).google.cloud.oslogin.common.SshPublicKey"r�Aname,ssh_public_key�Aname,ssh_public_key,update_mask���42"/v1/{name=users/*/sshPublicKeys/*}:ssh_public_key��Aoslogin.googleapis.com�A�https://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/cloud-platform.read-only,https://www.googleapis.com/auth/compute,https://www.googleapis.com/auth/compute.readonlyB�
com.google.cloud.oslogin.v1BOsLoginProtoPZ5cloud.google.com/go/oslogin/apiv1/osloginpb;osloginpb�Google.Cloud.OsLogin.V1�Google\\Cloud\\OsLogin\\V1�Google::Cloud::OsLogin::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

