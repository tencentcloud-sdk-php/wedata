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
 * 用户文件信息
 *
 * @method string getResourceId() 获取资源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceId(string $ResourceId) 设置资源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileName() 获取文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileName(string $FileName) 设置文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileExtensionType() 获取文件类型，如 jar zip 等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileExtensionType(string $FileExtensionType) 设置文件类型，如 jar zip 等
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取文件上传类型，资源管理为 resource
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置文件上传类型，资源管理为 resource
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMd5Value() 获取文件MD5值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMd5Value(string $Md5Value) 设置文件MD5值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSize() 获取文件大小，单位为字节
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSize(integer $Size) 设置文件大小，单位为字节
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLocalPath() 获取本地路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocalPath(string $LocalPath) 设置本地路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLocalTempPath() 获取本地临时路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocalTempPath(string $LocalTempPath) 设置本地临时路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemotePath() 获取远程路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemotePath(string $RemotePath) 设置远程路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerName() 获取文件拥有者名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerName(string $OwnerName) 设置文件拥有者名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwner() 获取文件拥有者uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwner(string $Owner) 设置文件拥有者uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPathDepth() 获取文件深度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPathDepth(string $PathDepth) 设置文件深度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtraInfo() 获取附加信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraInfo(string $ExtraInfo) 设置附加信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZipPath() 获取本地临时压缩文件绝对路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZipPath(string $ZipPath) 设置本地临时压缩文件绝对路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBucket() 获取文件所属存储桶
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucket(string $Bucket) 设置文件所属存储桶
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取文件所属存储桶的地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置文件所属存储桶的地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeleteName() 获取删除用户名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeleteName(string $DeleteName) 设置删除用户名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeleteOwner() 获取删除用户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeleteOwner(string $DeleteOwner) 设置删除用户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperator() 获取操作者id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperator(string $Operator) 设置操作者id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperatorName() 获取操作者名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatorName(string $OperatorName) 设置操作者名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFullPath() 获取全路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFullPath(string $FullPath) 设置全路径
注意：此字段可能返回 null，表示取不到有效值。
 */
class UserFileDTONew extends AbstractModel
{
    /**
     * @var string 资源ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceId;

    /**
     * @var string 文件名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileName;

    /**
     * @var string 文件类型，如 jar zip 等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileExtensionType;

    /**
     * @var string 文件上传类型，资源管理为 resource
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 文件MD5值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Md5Value;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer 文件大小，单位为字节
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Size;

    /**
     * @var string 本地路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocalPath;

    /**
     * @var string 本地临时路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocalTempPath;

    /**
     * @var string 远程路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemotePath;

    /**
     * @var string 文件拥有者名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerName;

    /**
     * @var string 文件拥有者uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Owner;

    /**
     * @var string 文件深度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PathDepth;

    /**
     * @var string 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 附加信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraInfo;

    /**
     * @var string 本地临时压缩文件绝对路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZipPath;

    /**
     * @var string 文件所属存储桶
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Bucket;

    /**
     * @var string 文件所属存储桶的地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 删除用户名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeleteName;

    /**
     * @var string 删除用户id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeleteOwner;

    /**
     * @var string 操作者id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operator;

    /**
     * @var string 操作者名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatorName;

    /**
     * @var string 全路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FullPath;

    /**
     * @param string $ResourceId 资源ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileName 文件名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileExtensionType 文件类型，如 jar zip 等
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 文件上传类型，资源管理为 resource
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Md5Value 文件MD5值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Size 文件大小，单位为字节
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LocalPath 本地路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LocalTempPath 本地临时路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RemotePath 远程路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerName 文件拥有者名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Owner 文件拥有者uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PathDepth 文件深度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExtraInfo 附加信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ZipPath 本地临时压缩文件绝对路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Bucket 文件所属存储桶
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 文件所属存储桶的地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeleteName 删除用户名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeleteOwner 删除用户id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Operator 操作者id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OperatorName 操作者名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FullPath 全路径
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileExtensionType",$param) and $param["FileExtensionType"] !== null) {
            $this->FileExtensionType = $param["FileExtensionType"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Md5Value",$param) and $param["Md5Value"] !== null) {
            $this->Md5Value = $param["Md5Value"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("LocalPath",$param) and $param["LocalPath"] !== null) {
            $this->LocalPath = $param["LocalPath"];
        }

        if (array_key_exists("LocalTempPath",$param) and $param["LocalTempPath"] !== null) {
            $this->LocalTempPath = $param["LocalTempPath"];
        }

        if (array_key_exists("RemotePath",$param) and $param["RemotePath"] !== null) {
            $this->RemotePath = $param["RemotePath"];
        }

        if (array_key_exists("OwnerName",$param) and $param["OwnerName"] !== null) {
            $this->OwnerName = $param["OwnerName"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("PathDepth",$param) and $param["PathDepth"] !== null) {
            $this->PathDepth = $param["PathDepth"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = $param["ExtraInfo"];
        }

        if (array_key_exists("ZipPath",$param) and $param["ZipPath"] !== null) {
            $this->ZipPath = $param["ZipPath"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("DeleteName",$param) and $param["DeleteName"] !== null) {
            $this->DeleteName = $param["DeleteName"];
        }

        if (array_key_exists("DeleteOwner",$param) and $param["DeleteOwner"] !== null) {
            $this->DeleteOwner = $param["DeleteOwner"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("OperatorName",$param) and $param["OperatorName"] !== null) {
            $this->OperatorName = $param["OperatorName"];
        }

        if (array_key_exists("FullPath",$param) and $param["FullPath"] !== null) {
            $this->FullPath = $param["FullPath"];
        }
    }
}
