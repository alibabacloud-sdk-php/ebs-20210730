<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\CreateEnterpriseSnapshotPolicyRequest;

use AlibabaCloud\Tea\Model;

class retainRule extends Model
{
    /**
     * @description Maximum number of retained snapshots.
     *
     * @example 10
     *
     * @var int
     */
    public $number;

    /**
     * @description The time interval , valid value greater than 1.
     *
     * @example 14
     *
     * @var int
     */
    public $timeInterval;

    /**
     * @description The unit of time, valid values:
     *
     * - WEEKS
     * @example DAYS
     *
     * @var string
     */
    public $timeUnit;
    protected $_name = [
        'number'       => 'Number',
        'timeInterval' => 'TimeInterval',
        'timeUnit'     => 'TimeUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->timeInterval) {
            $res['TimeInterval'] = $this->timeInterval;
        }
        if (null !== $this->timeUnit) {
            $res['TimeUnit'] = $this->timeUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return retainRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['TimeInterval'])) {
            $model->timeInterval = $map['TimeInterval'];
        }
        if (isset($map['TimeUnit'])) {
            $model->timeUnit = $map['TimeUnit'];
        }

        return $model;
    }
}
