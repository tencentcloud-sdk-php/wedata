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
 * 通用排序字段
 *
 * @method string getName() 获取<p>排序字段名称</p>
 * @method void setName(string $Name) 设置<p>排序字段名称</p>
 * @method string getDirection() 获取<p>排序方向：ASC|DESC</p>
 * @method void setDirection(string $Direction) 设置<p>排序方向：ASC|DESC</p>
 */
class OrderField extends AbstractModel
{
    /**
     * @var string <p>排序字段名称</p>
     */
    public $Name;

    /**
     * @var string <p>排序方向：ASC|DESC</p>
     */
    public $Direction;

    /**
     * @param string $Name <p>排序字段名称</p>
     * @param string $Direction <p>排序方向：ASC|DESC</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }
    }
}
