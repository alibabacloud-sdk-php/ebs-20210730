<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiskReplicaPairProgressResponseBody extends Model
{
    /**
     * @description The replication progress of the replication pair.
     *
     * @example 100
     *
     * @var int
     */
    public $progress;

    /**
     * @description The timestamp that indicates the last recovery point in time. The value is returned only after the replication pair works for replicating data.
     *
     * @example 1661917424
     *
     * @var int
     */
    public $recoverPoint;

    /**
     * @description The request ID.
     *
     * @example AAA478A0-BEE6-1D42-BEB6-A9CFEAD6****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'progress'     => 'Progress',
        'recoverPoint' => 'RecoverPoint',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->recoverPoint) {
            $res['RecoverPoint'] = $this->recoverPoint;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiskReplicaPairProgressResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['RecoverPoint'])) {
            $model->recoverPoint = $map['RecoverPoint'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
