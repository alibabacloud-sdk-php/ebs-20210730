<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Dara\Model;

class ClearPairDrillRequest extends Model
{
    /**
     * @var string
     */
    public $drillId;

    /**
     * @var string
     */
    public $pairId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'drillId' => 'DrillId',
        'pairId' => 'PairId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->drillId) {
            $res['DrillId'] = $this->drillId;
        }

        if (null !== $this->pairId) {
            $res['PairId'] = $this->pairId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrillId'])) {
            $model->drillId = $map['DrillId'];
        }

        if (isset($map['PairId'])) {
            $model->pairId = $map['PairId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
