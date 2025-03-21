<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeSendFileResultsResponseBody\invocations\invocation\invokeNodes;

use AlibabaCloud\Tea\Model;

class invokeNode extends Model
{
    /**
     * @description The creation time of the file distribution task.
     *
     * @example 2023-02-06T07:12:50Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The failure reason code for file distribution. Possible values:
     * - Empty: The file was distributed normally.
     * - NodeNotExists: The specified instance does not exist or has been released.
     * - NodeReleased: The instance was released during the file distribution process.
     * - NodeNotRunning: The instance was not running when the file distribution task was created.
     * - AccountNotExists: The specified account does not exist.
     * - ClientNotRunning: The Cloud Assistant Agent is not running.
     * - ClientNotResponse: The Cloud Assistant Agent is not responding.
     * - ClientIsUpgrading: The Cloud Assistant Agent is currently being upgraded.
     * - ClientNeedUpgrade: The Cloud Assistant Agent needs to be upgraded.
     * - DeliveryTimeout: File delivery timed out.
     * - FileCreateFail: Failed to create the file.
     * - FileAlreadyExists: A file with the same name already exists at the specified path.
     * - FileContentInvalid: The file content is invalid.
     * - FileNameInvalid: The file name is invalid.
     * - FilePathInvalid: The file path is invalid.
     * - FileAuthorityInvalid: The file permissions are invalid.
     * - UserGroupNotExists: The user group specified for file delivery does not exist.
     *
     * @example AccountNotExists
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description Details of the reason for command delivery failure or execution failure, possible values:
     * - Empty: The command executed normally.
     * - the specified instance does not exist: The specified instance does not exist or has been released.
     * - the node has been released when creating task: The instance was released during the command execution.
     * - the node is not running when creating task: The instance was not in a running state when the command was executed.
     * - the command is not applicable: The command is not applicable to the specified instance.
     * - the specified account does not exist: The specified account does not exist.
     * - the specified directory does not exist: The specified directory does not exist.
     * - the cron job expression is invalid: The specified execution time expression is invalid.
     * - the aliyun service is not running on the instance: The Cloud Assistant Agent is not running.
     * - the aliyun service in the instance does not respond: The Cloud Assistant Agent is not responding.
     * - the aliyun service in the node is upgrading now: The Cloud Assistant Agent is currently being upgraded.
     * - the aliyun service in the node needs upgrade: The Cloud Assistant Agent needs an upgrade.
     * - the command delivery has timed out: Command delivery has timed out.
     * - the command execution has timed out: Command execution has timed out.
     * - the command execution got an exception: An exception occurred during command execution.
     * - the command execution has been interrupted: The command execution was interrupted.
     * - the command execution exit code is not zero: The command execution completed with a non-zero exit code.
     * - the specified instance has been released: The instance was released during file delivery.
     *
     * @example the specified instance does not exists
     *
     * @var string
     */
    public $errorInfo;

    /**
     * @description Completion time, format: "2020-05-22T17:04:18".
     *
     * @example 2023-04-10T10:53:46.156+08:00
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description Status of the task on a single instance. Possible values:
     * - Pending: The system is validating or distributing the file.
     * - Invalid: The specified file parameters are incorrect, and validation failed.
     * - Running: The file is being distributed to the instance.
     * - Aborted: Failed to distribute the file to the instance.
     * - Success: The file distribution is complete.
     * - Failed: The file creation failed within the instance.
     * - Error: An exception occurred during file distribution and could not continue.
     * - Timeout: The file distribution timed out.
     *
     * @example Success
     *
     * @var string
     */
    public $invocationStatus;

    /**
     * @description Node ID.
     *
     * @example e01-cn-9lb3c15m81j
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description Start Time
     *
     * @example 2023-03-30T16:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description Update Time
     *
     * @example 2023-03-30T16:00:00Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'errorCode' => 'ErrorCode',
        'errorInfo' => 'ErrorInfo',
        'finishTime' => 'FinishTime',
        'invocationStatus' => 'InvocationStatus',
        'nodeId' => 'NodeId',
        'startTime' => 'StartTime',
        'updateTime' => 'UpdateTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorInfo) {
            $res['ErrorInfo'] = $this->errorInfo;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->invocationStatus) {
            $res['InvocationStatus'] = $this->invocationStatus;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invokeNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorInfo'])) {
            $model->errorInfo = $map['ErrorInfo'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['InvocationStatus'])) {
            $model->invocationStatus = $map['InvocationStatus'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
