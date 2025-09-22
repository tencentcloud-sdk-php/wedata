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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询工作流详细信息
 *
 * @method string getWorkflowName() 获取工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUin() 获取责任人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(string $OwnerUin) 设置责任人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateUserUin() 获取创建人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUserUin(string $CreateUserUin) 设置创建人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowType() 获取工作流类型，cycle和manual
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowType(string $WorkflowType) 设置工作流类型，cycle和manual
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWorkflowParams() 获取工作流参数数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowParams(array $WorkflowParams) 设置工作流参数数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method WorkflowSchedulerConfiguration getWorkflowSchedulerConfiguration() 获取统一调度参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowSchedulerConfiguration(WorkflowSchedulerConfiguration $WorkflowSchedulerConfiguration) 设置统一调度参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowDesc() 获取工作流描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowDesc(string $WorkflowDesc) 设置工作流描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPath() 获取工作流所属路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置工作流所属路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBundleId() 获取BundleId项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBundleId(string $BundleId) 设置BundleId项
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBundleInfo() 获取BundleInfo项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBundleInfo(string $BundleInfo) 设置BundleInfo项
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkflowDetail extends AbstractModel
{
    /**
     * @var string 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var string 责任人ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUin;

    /**
     * @var string 创建人ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUserUin;

    /**
     * @var string 工作流类型，cycle和manual
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowType;

    /**
     * @var array 工作流参数数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowParams;

    /**
     * @var WorkflowSchedulerConfiguration 统一调度参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowSchedulerConfiguration;

    /**
     * @var string 工作流描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowDesc;

    /**
     * @var string 工作流所属路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @var string BundleId项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BundleId;

    /**
     * @var string BundleInfo项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BundleInfo;

    /**
     * @param string $WorkflowName 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUin 责任人ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUserUin 创建人ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowType 工作流类型，cycle和manual
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $WorkflowParams 工作流参数数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param WorkflowSchedulerConfiguration $WorkflowSchedulerConfiguration 统一调度参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowDesc 工作流描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Path 工作流所属路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BundleId BundleId项
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BundleInfo BundleInfo项
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
        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("WorkflowType",$param) and $param["WorkflowType"] !== null) {
            $this->WorkflowType = $param["WorkflowType"];
        }

        if (array_key_exists("WorkflowParams",$param) and $param["WorkflowParams"] !== null) {
            $this->WorkflowParams = [];
            foreach ($param["WorkflowParams"] as $key => $value){
                $obj = new ParamInfo();
                $obj->deserialize($value);
                array_push($this->WorkflowParams, $obj);
            }
        }

        if (array_key_exists("WorkflowSchedulerConfiguration",$param) and $param["WorkflowSchedulerConfiguration"] !== null) {
            $this->WorkflowSchedulerConfiguration = new WorkflowSchedulerConfiguration();
            $this->WorkflowSchedulerConfiguration->deserialize($param["WorkflowSchedulerConfiguration"]);
        }

        if (array_key_exists("WorkflowDesc",$param) and $param["WorkflowDesc"] !== null) {
            $this->WorkflowDesc = $param["WorkflowDesc"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("BundleInfo",$param) and $param["BundleInfo"] !== null) {
            $this->BundleInfo = $param["BundleInfo"];
        }
    }
}
