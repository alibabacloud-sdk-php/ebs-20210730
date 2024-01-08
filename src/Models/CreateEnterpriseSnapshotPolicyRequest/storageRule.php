<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\CreateEnterpriseSnapshotPolicyRequest;

use AlibabaCloud\Tea\Model;

class storageRule extends Model
{
    /**
     * @description Whether to enable the rapid availability of snapshots. The range of values:
     *
     * - false
     * @example false
     *
     * @var bool
     */
    public $enableImmediateAccess;
    protected $_name = [
        'enableImmediateAccess' => 'EnableImmediateAccess',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableImmediateAccess) {
            $res['EnableImmediateAccess'] = $this->enableImmediateAccess;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storageRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableImmediateAccess'])) {
            $model->enableImmediateAccess = $map['EnableImmediateAccess'];
        }

        return $model;
    }
}
