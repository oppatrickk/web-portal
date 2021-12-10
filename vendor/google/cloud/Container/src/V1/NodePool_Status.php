<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

/**
 * The current status of the node pool instance.
 *
 * Protobuf enum <code>Google\Container\V1\NodePool\Status</code>
 */
class NodePool_Status
{
    /**
     * Not set.
     *
     * Generated from protobuf enum <code>STATUS_UNSPECIFIED = 0;</code>
     */
    const STATUS_UNSPECIFIED = 0;
    /**
     * The PROVISIONING state indicates the node pool is being created.
     *
     * Generated from protobuf enum <code>PROVISIONING = 1;</code>
     */
    const PROVISIONING = 1;
    /**
     * The RUNNING state indicates the node pool has been created
     * and is fully usable.
     *
     * Generated from protobuf enum <code>RUNNING = 2;</code>
     */
    const RUNNING = 2;
    /**
     * The RUNNING_WITH_ERROR state indicates the node pool has been created
     * and is partially usable. Some error state has occurred and some
     * functionality may be impaired. Customer may need to reissue a request
     * or trigger a new update.
     *
     * Generated from protobuf enum <code>RUNNING_WITH_ERROR = 3;</code>
     */
    const RUNNING_WITH_ERROR = 3;
    /**
     * The RECONCILING state indicates that some work is actively being done on
     * the node pool, such as upgrading node software. Details can
     * be found in the `statusMessage` field.
     *
     * Generated from protobuf enum <code>RECONCILING = 4;</code>
     */
    const RECONCILING = 4;
    /**
     * The STOPPING state indicates the node pool is being deleted.
     *
     * Generated from protobuf enum <code>STOPPING = 5;</code>
     */
    const STOPPING = 5;
    /**
     * The ERROR state indicates the node pool may be unusable. Details
     * can be found in the `statusMessage` field.
     *
     * Generated from protobuf enum <code>ERROR = 6;</code>
     */
    const ERROR = 6;
}

