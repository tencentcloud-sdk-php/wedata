<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 离线任务实例读取节点的运行指标
 *
 * @method string getNodeName() 获取节点名称
 * @method void setNodeName(string $NodeName) 设置节点名称
 * @method string getDataSource() 获取数据来源
 * @method void setDataSource(string $DataSource) 设置数据来源
 * @method integer getTotalReadRecords() 获取总条数
 * @method void setTotalReadRecords(integer $TotalReadRecords) 设置总条数
 * @method integer getTotalReadBytes() 获取总字节数
 * @method void setTotalReadBytes(integer $TotalReadBytes) 设置总字节数
 * @method integer getRecordSpeed() 获取速度（条/秒）
 * @method void setRecordSpeed(integer $RecordSpeed) 设置速度（条/秒）
 * @method float getByteSpeed() 获取吞吐（Byte/秒）
 * @method void setByteSpeed(float $ByteSpeed) 设置吞吐（Byte/秒）
 * @method integer getTotalErrorRecords() 获取脏数据条数
 * @method void setTotalErrorRecords(integer $TotalErrorRecords) 设置脏数据条数
 * @method float getWaitWriterTime() 获取等待数据发送到下游的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWaitWriterTime(float $WaitWriterTime) 设置等待数据发送到下游的时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceReportReadNode extends AbstractModel
{
    /**
     * @var string 节点名称
     */
    public $NodeName;

    /**
     * @var string 数据来源
     */
    public $DataSource;

    /**
     * @var integer 总条数
     */
    public $TotalReadRecords;

    /**
     * @var integer 总字节数
     */
    public $TotalReadBytes;

    /**
     * @var integer 速度（条/秒）
     */
    public $RecordSpeed;

    /**
     * @var float 吞吐（Byte/秒）
     */
    public $ByteSpeed;

    /**
     * @var integer 脏数据条数
     */
    public $TotalErrorRecords;

    /**
     * @var float 等待数据发送到下游的时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WaitWriterTime;

    /**
     * @param string $NodeName 节点名称
     * @param string $DataSource 数据来源
     * @param integer $TotalReadRecords 总条数
     * @param integer $TotalReadBytes 总字节数
     * @param integer $RecordSpeed 速度（条/秒）
     * @param float $ByteSpeed 吞吐（Byte/秒）
     * @param integer $TotalErrorRecords 脏数据条数
     * @param float $WaitWriterTime 等待数据发送到下游的时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("DataSource",$param) and $param["DataSource"] !== null) {
            $this->DataSource = $param["DataSource"];
        }

        if (array_key_exists("TotalReadRecords",$param) and $param["TotalReadRecords"] !== null) {
            $this->TotalReadRecords = $param["TotalReadRecords"];
        }

        if (array_key_exists("TotalReadBytes",$param) and $param["TotalReadBytes"] !== null) {
            $this->TotalReadBytes = $param["TotalReadBytes"];
        }

        if (array_key_exists("RecordSpeed",$param) and $param["RecordSpeed"] !== null) {
            $this->RecordSpeed = $param["RecordSpeed"];
        }

        if (array_key_exists("ByteSpeed",$param) and $param["ByteSpeed"] !== null) {
            $this->ByteSpeed = $param["ByteSpeed"];
        }

        if (array_key_exists("TotalErrorRecords",$param) and $param["TotalErrorRecords"] !== null) {
            $this->TotalErrorRecords = $param["TotalErrorRecords"];
        }

        if (array_key_exists("WaitWriterTime",$param) and $param["WaitWriterTime"] !== null) {
            $this->WaitWriterTime = $param["WaitWriterTime"];
        }
    }
}
