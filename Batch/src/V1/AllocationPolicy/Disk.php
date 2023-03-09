<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/batch/v1/job.proto

namespace Google\Cloud\Batch\V1\AllocationPolicy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A new persistent disk or a local ssd.
 * A VM can only have one local SSD setting but multiple local SSD partitions.
 * https://cloud.google.com/compute/docs/disks#pdspecs.
 * https://cloud.google.com/compute/docs/disks#localssds.
 *
 * Generated from protobuf message <code>google.cloud.batch.v1.AllocationPolicy.Disk</code>
 */
class Disk extends \Google\Protobuf\Internal\Message
{
    /**
     * Disk type as shown in `gcloud compute disk-types list`.
     * For example, local SSD uses type "local-ssd".
     * Persistent disks and boot disks use "pd-balanced", "pd-extreme", "pd-ssd"
     * or "pd-standard".
     *
     * Generated from protobuf field <code>string type = 1;</code>
     */
    private $type = '';
    /**
     * Disk size in GB.
     * For persistent disk, this field is ignored if `data_source` is `image` or
     * `snapshot`.
     * For local SSD, size_gb should be a multiple of 375GB,
     * otherwise, the final size will be the next greater multiple of 375 GB.
     * For boot disk, Batch will calculate the boot disk size based on source
     * image and task requirements if you do not speicify the size.
     * If both this field and the boot_disk_mib field in task spec's
     * compute_resource are defined, Batch will only honor this field.
     *
     * Generated from protobuf field <code>int64 size_gb = 2;</code>
     */
    private $size_gb = 0;
    /**
     * Local SSDs are available through both "SCSI" and "NVMe" interfaces.
     * If not indicated, "NVMe" will be the default one for local ssds.
     * We only support "SCSI" for persistent disks now.
     *
     * Generated from protobuf field <code>string disk_interface = 6;</code>
     */
    private $disk_interface = '';
    protected $data_source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $image
     *           Name of a public or custom image used as the data source.
     *           For example, the following are all valid URLs:
     *           (1) Specify the image by its family name:
     *           projects/{project}/global/images/family/{image_family}
     *           (2) Specify the image version:
     *           projects/{project}/global/images/{image_version}
     *           You can also use Batch customized image in short names.
     *           The following image values are supported for a boot disk:
     *           "batch-debian": use Batch Debian images.
     *           "batch-centos": use Batch CentOS images.
     *           "batch-cos": use Batch Container-Optimized images.
     *     @type string $snapshot
     *           Name of a snapshot used as the data source.
     *     @type string $type
     *           Disk type as shown in `gcloud compute disk-types list`.
     *           For example, local SSD uses type "local-ssd".
     *           Persistent disks and boot disks use "pd-balanced", "pd-extreme", "pd-ssd"
     *           or "pd-standard".
     *     @type int|string $size_gb
     *           Disk size in GB.
     *           For persistent disk, this field is ignored if `data_source` is `image` or
     *           `snapshot`.
     *           For local SSD, size_gb should be a multiple of 375GB,
     *           otherwise, the final size will be the next greater multiple of 375 GB.
     *           For boot disk, Batch will calculate the boot disk size based on source
     *           image and task requirements if you do not speicify the size.
     *           If both this field and the boot_disk_mib field in task spec's
     *           compute_resource are defined, Batch will only honor this field.
     *     @type string $disk_interface
     *           Local SSDs are available through both "SCSI" and "NVMe" interfaces.
     *           If not indicated, "NVMe" will be the default one for local ssds.
     *           We only support "SCSI" for persistent disks now.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Batch\V1\Job::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of a public or custom image used as the data source.
     * For example, the following are all valid URLs:
     * (1) Specify the image by its family name:
     * projects/{project}/global/images/family/{image_family}
     * (2) Specify the image version:
     * projects/{project}/global/images/{image_version}
     * You can also use Batch customized image in short names.
     * The following image values are supported for a boot disk:
     * "batch-debian": use Batch Debian images.
     * "batch-centos": use Batch CentOS images.
     * "batch-cos": use Batch Container-Optimized images.
     *
     * Generated from protobuf field <code>string image = 4;</code>
     * @return string
     */
    public function getImage()
    {
        return $this->readOneof(4);
    }

    public function hasImage()
    {
        return $this->hasOneof(4);
    }

    /**
     * Name of a public or custom image used as the data source.
     * For example, the following are all valid URLs:
     * (1) Specify the image by its family name:
     * projects/{project}/global/images/family/{image_family}
     * (2) Specify the image version:
     * projects/{project}/global/images/{image_version}
     * You can also use Batch customized image in short names.
     * The following image values are supported for a boot disk:
     * "batch-debian": use Batch Debian images.
     * "batch-centos": use Batch CentOS images.
     * "batch-cos": use Batch Container-Optimized images.
     *
     * Generated from protobuf field <code>string image = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Name of a snapshot used as the data source.
     *
     * Generated from protobuf field <code>string snapshot = 5;</code>
     * @return string
     */
    public function getSnapshot()
    {
        return $this->readOneof(5);
    }

    public function hasSnapshot()
    {
        return $this->hasOneof(5);
    }

    /**
     * Name of a snapshot used as the data source.
     *
     * Generated from protobuf field <code>string snapshot = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setSnapshot($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Disk type as shown in `gcloud compute disk-types list`.
     * For example, local SSD uses type "local-ssd".
     * Persistent disks and boot disks use "pd-balanced", "pd-extreme", "pd-ssd"
     * or "pd-standard".
     *
     * Generated from protobuf field <code>string type = 1;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Disk type as shown in `gcloud compute disk-types list`.
     * For example, local SSD uses type "local-ssd".
     * Persistent disks and boot disks use "pd-balanced", "pd-extreme", "pd-ssd"
     * or "pd-standard".
     *
     * Generated from protobuf field <code>string type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Disk size in GB.
     * For persistent disk, this field is ignored if `data_source` is `image` or
     * `snapshot`.
     * For local SSD, size_gb should be a multiple of 375GB,
     * otherwise, the final size will be the next greater multiple of 375 GB.
     * For boot disk, Batch will calculate the boot disk size based on source
     * image and task requirements if you do not speicify the size.
     * If both this field and the boot_disk_mib field in task spec's
     * compute_resource are defined, Batch will only honor this field.
     *
     * Generated from protobuf field <code>int64 size_gb = 2;</code>
     * @return int|string
     */
    public function getSizeGb()
    {
        return $this->size_gb;
    }

    /**
     * Disk size in GB.
     * For persistent disk, this field is ignored if `data_source` is `image` or
     * `snapshot`.
     * For local SSD, size_gb should be a multiple of 375GB,
     * otherwise, the final size will be the next greater multiple of 375 GB.
     * For boot disk, Batch will calculate the boot disk size based on source
     * image and task requirements if you do not speicify the size.
     * If both this field and the boot_disk_mib field in task spec's
     * compute_resource are defined, Batch will only honor this field.
     *
     * Generated from protobuf field <code>int64 size_gb = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSizeGb($var)
    {
        GPBUtil::checkInt64($var);
        $this->size_gb = $var;

        return $this;
    }

    /**
     * Local SSDs are available through both "SCSI" and "NVMe" interfaces.
     * If not indicated, "NVMe" will be the default one for local ssds.
     * We only support "SCSI" for persistent disks now.
     *
     * Generated from protobuf field <code>string disk_interface = 6;</code>
     * @return string
     */
    public function getDiskInterface()
    {
        return $this->disk_interface;
    }

    /**
     * Local SSDs are available through both "SCSI" and "NVMe" interfaces.
     * If not indicated, "NVMe" will be the default one for local ssds.
     * We only support "SCSI" for persistent disks now.
     *
     * Generated from protobuf field <code>string disk_interface = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDiskInterface($var)
    {
        GPBUtil::checkString($var, True);
        $this->disk_interface = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getDataSource()
    {
        return $this->whichOneof("data_source");
    }

}


