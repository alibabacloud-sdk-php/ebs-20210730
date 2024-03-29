<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeEnterpriseSnapshotPolicyResponseBody\policies\crossRegionCopyInfo;

use AlibabaCloud\Tea\Model;

class regions extends Model
{
    /**
     * @description The ID of the destination region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The retention period of snapshot copies in the destination region. Unit: day.
     *
     * @example 7
     *
     * @var int
     */
    public $retainDays;
    protected $_name = [
        'regionId'   => 'RegionId',
        'retainDays' => 'RetainDays',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->retainDays) {
            $res['RetainDays'] = $this->retainDays;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RetainDays'])) {
            $model->retainDays = $map['RetainDays'];
        }

        return $model;
    }
}
