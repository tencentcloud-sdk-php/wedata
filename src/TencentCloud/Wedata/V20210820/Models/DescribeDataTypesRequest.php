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
 * DescribeDataTypes请求参数结构体
 *
 * @method string getDatasourceType() 获取数据源类型，MYSQL|HIVE|KAFKA|POSTGRE|TCHouse-P|ORACLE|SQLSERVER|FTP|HDFS|ICEBERG|HBASE|TDSQL|TDSQLC|SPARK|VIRTUAL|TBASE|DB2|DM|GAUSSDB|GBASE|IMPALA|ES|S3_DATAINSIGHT|GREENPLUM|PHOENIX|SAP_HANA|SFTP|OCEANBASE|CLICKHOUSE|KUDU|VERTICA|REDIS|COS|DLC|DORIS|CKAFKA|MONGODB|FTP_FILE|HDFS_FILE|DTS_KAFKA|REST_API|FILE|TIDB|SYBASE|TCHOUSE_X 等
 * @method void setDatasourceType(string $DatasourceType) 设置数据源类型，MYSQL|HIVE|KAFKA|POSTGRE|TCHouse-P|ORACLE|SQLSERVER|FTP|HDFS|ICEBERG|HBASE|TDSQL|TDSQLC|SPARK|VIRTUAL|TBASE|DB2|DM|GAUSSDB|GBASE|IMPALA|ES|S3_DATAINSIGHT|GREENPLUM|PHOENIX|SAP_HANA|SFTP|OCEANBASE|CLICKHOUSE|KUDU|VERTICA|REDIS|COS|DLC|DORIS|CKAFKA|MONGODB|FTP_FILE|HDFS_FILE|DTS_KAFKA|REST_API|FILE|TIDB|SYBASE|TCHOUSE_X 等
 * @method string getProjectId() 获取项目ID。
 * @method void setProjectId(string $ProjectId) 设置项目ID。
 */
class DescribeDataTypesRequest extends AbstractModel
{
    /**
     * @var string 数据源类型，MYSQL|HIVE|KAFKA|POSTGRE|TCHouse-P|ORACLE|SQLSERVER|FTP|HDFS|ICEBERG|HBASE|TDSQL|TDSQLC|SPARK|VIRTUAL|TBASE|DB2|DM|GAUSSDB|GBASE|IMPALA|ES|S3_DATAINSIGHT|GREENPLUM|PHOENIX|SAP_HANA|SFTP|OCEANBASE|CLICKHOUSE|KUDU|VERTICA|REDIS|COS|DLC|DORIS|CKAFKA|MONGODB|FTP_FILE|HDFS_FILE|DTS_KAFKA|REST_API|FILE|TIDB|SYBASE|TCHOUSE_X 等
     */
    public $DatasourceType;

    /**
     * @var string 项目ID。
     */
    public $ProjectId;

    /**
     * @param string $DatasourceType 数据源类型，MYSQL|HIVE|KAFKA|POSTGRE|TCHouse-P|ORACLE|SQLSERVER|FTP|HDFS|ICEBERG|HBASE|TDSQL|TDSQLC|SPARK|VIRTUAL|TBASE|DB2|DM|GAUSSDB|GBASE|IMPALA|ES|S3_DATAINSIGHT|GREENPLUM|PHOENIX|SAP_HANA|SFTP|OCEANBASE|CLICKHOUSE|KUDU|VERTICA|REDIS|COS|DLC|DORIS|CKAFKA|MONGODB|FTP_FILE|HDFS_FILE|DTS_KAFKA|REST_API|FILE|TIDB|SYBASE|TCHOUSE_X 等
     * @param string $ProjectId 项目ID。
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
        if (array_key_exists("DatasourceType",$param) and $param["DatasourceType"] !== null) {
            $this->DatasourceType = $param["DatasourceType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
