<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskReplicaPairsResponseBody\replicaPairs;
use AlibabaCloud\Tea\Model;

class DescribeDiskReplicaPairsResponseBody extends Model
{
    /**
     * @description 查询凭证（Token）。取值为上一次调用该接口返回的NextToken参数值，初次调用接口时无需设置该参数。如果设置了NextToken，则请求参数PageSize和PageNumber将失效，且返回数据中的TotalCount无效。
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 参数页码。
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 参数页行数。
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var replicaPairs[]
     */
    public $replicaPairs;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 分页查询时的结果总条数。
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'nextToken'    => 'NextToken',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'replicaPairs' => 'ReplicaPairs',
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->replicaPairs) {
            $res['ReplicaPairs'] = [];
            if (null !== $this->replicaPairs && \is_array($this->replicaPairs)) {
                $n = 0;
                foreach ($this->replicaPairs as $item) {
                    $res['ReplicaPairs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiskReplicaPairsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ReplicaPairs'])) {
            if (!empty($map['ReplicaPairs'])) {
                $model->replicaPairs = [];
                $n                   = 0;
                foreach ($map['ReplicaPairs'] as $item) {
                    $model->replicaPairs[$n++] = null !== $item ? replicaPairs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
