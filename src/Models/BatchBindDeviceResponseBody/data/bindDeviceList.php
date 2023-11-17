<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20230630\Models\BatchBindDeviceResponseBody\data;

use AlibabaCloud\Tea\Model;

class bindDeviceList extends Model
{
    /**
     * @var int
     */
    public $bindResultCode;

    /**
     * @var string
     */
    public $bindResultMessage;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $iotId;

    /**
     * @var string
     */
    public $productKey;
    protected $_name = [
        'bindResultCode'    => 'BindResultCode',
        'bindResultMessage' => 'BindResultMessage',
        'deviceName'        => 'DeviceName',
        'iotId'             => 'IotId',
        'productKey'        => 'ProductKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindResultCode) {
            $res['BindResultCode'] = $this->bindResultCode;
        }
        if (null !== $this->bindResultMessage) {
            $res['BindResultMessage'] = $this->bindResultMessage;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bindDeviceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindResultCode'])) {
            $model->bindResultCode = $map['BindResultCode'];
        }
        if (isset($map['BindResultMessage'])) {
            $model->bindResultMessage = $map['BindResultMessage'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        return $model;
    }
}
