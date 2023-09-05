<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskMonitorDataResponseBody\monitorData;
use AlibabaCloud\Tea\Model;

class DescribeDiskMonitorDataResponseBody extends Model
{
    /**
     * @description The near real-time monitoring data of the disk.
     *
     * @var monitorData[]
     */
    public $monitorData;

    /**
     * @description The request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 15
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'monitorData' => 'MonitorData',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->monitorData) {
            $res['MonitorData'] = [];
            if (null !== $this->monitorData && \is_array($this->monitorData)) {
                $n = 0;
                foreach ($this->monitorData as $item) {
                    $res['MonitorData'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDiskMonitorDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MonitorData'])) {
            if (!empty($map['MonitorData'])) {
                $model->monitorData = [];
                $n                  = 0;
                foreach ($map['MonitorData'] as $item) {
                    $model->monitorData[$n++] = null !== $item ? monitorData::fromMap($item) : $item;
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
