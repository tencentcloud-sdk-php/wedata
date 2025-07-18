<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * 批量操作的结果返回
 *
 * @method integer getSuccessCount() 获取批量操作成功数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessCount(integer $SuccessCount) 设置批量操作成功数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFailedCount() 获取批量操作失败数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailedCount(integer $FailedCount) 设置批量操作失败数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取批量操作的总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置批量操作的总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAsyncActionId() 获取异步操作记录的唯一id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAsyncActionId(string $AsyncActionId) 设置异步操作记录的唯一id
注意：此字段可能返回 null，表示取不到有效值。
 */
class BatchOperationOpsDto extends AbstractModel
{
    /**
     * @var integer 批量操作成功数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessCount;

    /**
     * @var integer 批量操作失败数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailedCount;

    /**
     * @var integer 批量操作的总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var string 异步操作记录的唯一id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AsyncActionId;

    /**
     * @param integer $SuccessCount 批量操作成功数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FailedCount 批量操作失败数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 批量操作的总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AsyncActionId 异步操作记录的唯一id
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
        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("FailedCount",$param) and $param["FailedCount"] !== null) {
            $this->FailedCount = $param["FailedCount"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("AsyncActionId",$param) and $param["AsyncActionId"] !== null) {
            $this->AsyncActionId = $param["AsyncActionId"];
        }
    }
}
