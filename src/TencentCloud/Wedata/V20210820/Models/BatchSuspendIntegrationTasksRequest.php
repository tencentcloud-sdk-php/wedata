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
 * BatchSuspendIntegrationTasks请求参数结构体
 *
 * @method array getTaskIds() 获取任务id
 * @method void setTaskIds(array $TaskIds) 设置任务id
 * @method integer getTaskType() 获取任务类型，201为实时任务，202为离线任务
 * @method void setTaskType(integer $TaskType) 设置任务类型，201为实时任务，202为离线任务
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getEvent() 获取事件类型(START, STOP, SUSPEND, SUSPEND_WITHOUT_SP,RESUME, COMMIT, TIMESTAMP)	
 * @method void setEvent(string $Event) 设置事件类型(START, STOP, SUSPEND, SUSPEND_WITHOUT_SP,RESUME, COMMIT, TIMESTAMP)	
 * @method array getTaskNames() 获取本次批量操作涉及任务，用于审计
 * @method void setTaskNames(array $TaskNames) 设置本次批量操作涉及任务，用于审计
 */
class BatchSuspendIntegrationTasksRequest extends AbstractModel
{
    /**
     * @var array 任务id
     */
    public $TaskIds;

    /**
     * @var integer 任务类型，201为实时任务，202为离线任务
     */
    public $TaskType;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 事件类型(START, STOP, SUSPEND, SUSPEND_WITHOUT_SP,RESUME, COMMIT, TIMESTAMP)	
     */
    public $Event;

    /**
     * @var array 本次批量操作涉及任务，用于审计
     */
    public $TaskNames;

    /**
     * @param array $TaskIds 任务id
     * @param integer $TaskType 任务类型，201为实时任务，202为离线任务
     * @param string $ProjectId 项目id
     * @param string $Event 事件类型(START, STOP, SUSPEND, SUSPEND_WITHOUT_SP,RESUME, COMMIT, TIMESTAMP)	
     * @param array $TaskNames 本次批量操作涉及任务，用于审计
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
        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Event",$param) and $param["Event"] !== null) {
            $this->Event = $param["Event"];
        }

        if (array_key_exists("TaskNames",$param) and $param["TaskNames"] !== null) {
            $this->TaskNames = $param["TaskNames"];
        }
    }
}
