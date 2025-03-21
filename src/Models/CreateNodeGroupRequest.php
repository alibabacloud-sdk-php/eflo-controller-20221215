<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateNodeGroupRequest\nodeGroup;
use AlibabaCloud\Tea\Model;

class CreateNodeGroupRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example i118191731740041623425
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description This parameter is required.
     *
     * @var nodeGroup
     */
    public $nodeGroup;

    /**
     * @var mixed[]
     */
    public $nodeUnit;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'nodeGroup' => 'NodeGroup',
        'nodeUnit' => 'NodeUnit',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->nodeGroup) {
            $res['NodeGroup'] = null !== $this->nodeGroup ? $this->nodeGroup->toMap() : null;
        }
        if (null !== $this->nodeUnit) {
            $res['NodeUnit'] = $this->nodeUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNodeGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['NodeGroup'])) {
            $model->nodeGroup = nodeGroup::fromMap($map['NodeGroup']);
        }
        if (isset($map['NodeUnit'])) {
            $model->nodeUnit = $map['NodeUnit'];
        }

        return $model;
    }
}
