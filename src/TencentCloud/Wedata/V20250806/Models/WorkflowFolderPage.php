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
 * 资源文件分页
 *
 * @method integer getPageNumber() 获取数据页数，大于等于1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageNumber(integer $PageNumber) 设置数据页数，大于等于1
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageSize() 获取每页显示的数据条数，最小为10条，最大为200 条
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageSize(integer $PageSize) 设置每页显示的数据条数，最小为10条，最大为200 条
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取文件夹总数
 * @method void setTotalCount(integer $TotalCount) 设置文件夹总数
 * @method integer getTotalPageNumber() 获取总页数
 * @method void setTotalPageNumber(integer $TotalPageNumber) 设置总页数
 * @method array getItems() 获取文件夹列表
 * @method void setItems(array $Items) 设置文件夹列表
 */
class WorkflowFolderPage extends AbstractModel
{
    /**
     * @var integer 数据页数，大于等于1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageNumber;

    /**
     * @var integer 每页显示的数据条数，最小为10条，最大为200 条
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageSize;

    /**
     * @var integer 文件夹总数
     */
    public $TotalCount;

    /**
     * @var integer 总页数
     */
    public $TotalPageNumber;

    /**
     * @var array 文件夹列表
     */
    public $Items;

    /**
     * @param integer $PageNumber 数据页数，大于等于1
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageSize 每页显示的数据条数，最小为10条，最大为200 条
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 文件夹总数
     * @param integer $TotalPageNumber 总页数
     * @param array $Items 文件夹列表
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TotalPageNumber",$param) and $param["TotalPageNumber"] !== null) {
            $this->TotalPageNumber = $param["TotalPageNumber"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new WorkflowFolder();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
