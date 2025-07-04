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
 * DescribeRuleTemplatesByPage请求参数结构体
 *
 * @method integer getPageNumber() 获取当前页
 * @method void setPageNumber(integer $PageNumber) 设置当前页
 * @method integer getPageSize() 获取每页记录数
 * @method void setPageSize(integer $PageSize) 设置每页记录数
 * @method string getProjectId() 获取工作空间ID
 * @method void setProjectId(string $ProjectId) 设置工作空间ID
 * @method array getOrderFields() 获取通用排序字段
 * @method void setOrderFields(array $OrderFields) 设置通用排序字段
 * @method array getFilters() 获取通用过滤条件
 * @method void setFilters(array $Filters) 设置通用过滤条件
 */
class DescribeRuleTemplatesByPageRequest extends AbstractModel
{
    /**
     * @var integer 当前页
     */
    public $PageNumber;

    /**
     * @var integer 每页记录数
     */
    public $PageSize;

    /**
     * @var string 工作空间ID
     */
    public $ProjectId;

    /**
     * @var array 通用排序字段
     */
    public $OrderFields;

    /**
     * @var array 通用过滤条件
     */
    public $Filters;

    /**
     * @param integer $PageNumber 当前页
     * @param integer $PageSize 每页记录数
     * @param string $ProjectId 工作空间ID
     * @param array $OrderFields 通用排序字段
     * @param array $Filters 通用过滤条件
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = [];
            foreach ($param["OrderFields"] as $key => $value){
                $obj = new OrderField();
                $obj->deserialize($value);
                array_push($this->OrderFields, $obj);
            }
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
