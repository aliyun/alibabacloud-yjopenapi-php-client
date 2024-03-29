![](https://aliyunsdk-pages.alicdn.com/icons/AlibabaCloud.svg)

# YuanJing OpenAPI SDK for PHP

## Requirements

PHP 5.5 and later

## Installation

### Composer

To install the bindings via Composer:
```
composer require alibabacloud/alibabacloud-yjopenapi-php-client 1.0.20230810
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/vendor/autoload.php');
```

## Usage

```
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$configuration = \Yjopenapi\Client\Api\Configuration::getDefaultConfiguration();
$configuration
    ->setHost(host)
    ->setAccessKey(Your Access Key)
    ->setSecretKey(Your Secret Key);


// {{Api}},{{Method}},{{Param}} is placeholder, take a look at Explain Of Usage Placeholder
$api = new \Yjopenapi\Client\Api\{{Api}}(new \GuzzleHttp\Client(), $configuration);
try {
    // OpenAPI result
    $result = $api->{{Method}}(${{Param}})

    // OpenAPI result with header
    $resultWithHeader = $api->{{Method}}WithHttpInfo(${{Param}})
    $result = $resultWithHeader[0]

    // OpenAPI TraceId
    $traceId = $resultWithHeader[2][\Yjopenapi\Client\Model\ModelInterface::Trace_Id][0]
    // OpenAPI Status Code
    statusCode := $resultWithHeader[2][\Yjopenapi\Client\Model\ModelInterface::Result_Status][0]

} catch (\Yjopenapi\Client\Api\ApiException $e) {
    // handle exception
}

```

## Explain Of Usage Placeholder

| Api | Method | Params | Result | Description |
| ------------ | ------------- | ------------- | ------------- | ------------- |
 | *ConsoleAdminApi* | **activateDeployment** | *activateDeploymentForms*  | *\Yjopenapi\Client\Model\ConsoleAdminActivateDeploymentResult* | 激活已部署成功的游戏版本的部署 |
 | *ConsoleAdminApi* | **adaptGameVersion** | *adaptGameVersionForms*  | *\Yjopenapi\Client\Model\ConsoleAdminAdaptGameVersionResult* | 发起游戏版本适配 |
 | *ConsoleAdminApi* | **addGameToProject** | *addGameToProjectForms*  | *\Yjopenapi\Client\Model\ConsoleAdminAddGameToProjectResult* | 将游戏添加到项目 |
 | *ConsoleAdminApi* | **createGame** | *createGameForms*  | *\Yjopenapi\Client\Model\ConsoleAdminCreateGameResult* | 创建游戏 |
 | *ConsoleAdminApi* | **createProject** | *createProjectForms*  | *\Yjopenapi\Client\Model\ConsoleAdminCreateProjectResult* | 创建项目 |
 | *ConsoleAdminApi* | **deleteGame** | *deleteGameForms*  | *\Yjopenapi\Client\Model\ConsoleAdminDeleteGameResult* | 删除指定的游戏 |
 | *ConsoleAdminApi* | **deleteGameVersion** | *deleteGameVersionForms*  | *\Yjopenapi\Client\Model\ConsoleAdminDeleteGameVersionResult* | 发起游戏版本适配 |
 | *ConsoleAdminApi* | **deleteProject** | *deleteProjectForms*  | *\Yjopenapi\Client\Model\ConsoleAdminDeleteProjectResult* | 删除指定的项目 |
 | *ConsoleAdminApi* | **getGameVersion** | *getGameVersionForms*  | *\Yjopenapi\Client\Model\ConsoleAdminGetGameVersionResult* | 获取单个游戏版本信息 |
 | *ConsoleAdminApi* | **getGameVersionProgress** | *getGameVersionProgressForms*  | *\Yjopenapi\Client\Model\ConsoleAdminGetGameVersionProgressResult* | 查询版本处理进度（包含上传、适配、部署） |
 | *ConsoleAdminApi* | **listActivateableInstances** | *listActivateableInstancesForms*  | *\Yjopenapi\Client\Model\ConsoleAdminListActivateableInstancesResult* | 指定项目和游戏版本，获取可激活且可调度的实例及调度配置 |
 | *ConsoleAdminApi* | **listActivatedInstances** | *listActivatedInstancesForms*  | *\Yjopenapi\Client\Model\ConsoleAdminListActivatedInstancesResult* | 指定项目和游戏，获取已激活版本的可调度实例及调度配置 |
 | *ConsoleAdminApi* | **listControllersOfGame** | *listControllersOfGameForms*  | *\Yjopenapi\Client\Model\ConsoleAdminListControllersOfGameResult* | 获取单个游戏关联的控制器列表 |
 | *ConsoleAdminApi* | **listDeployableInstances** | *listDeployableInstancesForms*  | *\Yjopenapi\Client\Model\ConsoleAdminListDeployableInstancesResult* | 指定项目和游戏版本，获取可以部署的实例 |
 | *ConsoleAdminApi* | **listGameDeployDetailsOfProject** | *listGameDeployDetailsOfProjectForms*  | *\Yjopenapi\Client\Model\ConsoleAdminListGameDeployDetailsOfProjectResult* | 获取项目下游戏部署版本信息 |
 | *ConsoleAdminApi* | **listGameVersions** | *listGameVersionsForms*  | *\Yjopenapi\Client\Model\ConsoleAdminListGameVersionsResult* | 分页获取游戏版本列表 |
 | *ConsoleAdminApi* | **listGames** | *listGamesForms*  | *\Yjopenapi\Client\Model\ConsoleAdminListGamesResult* | 分页获取游戏列表 |
 | *ConsoleAdminApi* | **listInstancesOfProject** | *listInstancesOfProjectForms*  | *\Yjopenapi\Client\Model\ConsoleAdminListInstancesOfProjectResult* | 分页获取项目中的实例 |
 | *ConsoleAdminApi* | **listProjects** | *listProjectsForms*  | *\Yjopenapi\Client\Model\ConsoleAdminListProjectsResult* | 分页获取项目列表 |
 | *ConsoleAdminApi* | **listVersionDeployInstances** | *listVersionDeployInstancesForms*  | *\Yjopenapi\Client\Model\ConsoleAdminListVersionDeployInstancesResult* | 获取项目下游戏版本的部署实例信息 |
 | *ConsoleAdminApi* | **removeGameFromProject** | *removeGameFromProjectForms*  | *\Yjopenapi\Client\Model\ConsoleAdminRemoveGameFromProjectResult* | 将游戏移出项目 |
 | *ConsoleAdminApi* | **submitDeployment** | *submitDeploymentForms*  | *\Yjopenapi\Client\Model\ConsoleAdminSubmitDeploymentResult* | 提交游戏版本的部署请求 |
 | *ConsoleAdminApi* | **uploadGameVersionByDownload** | *uploadGameVersionByDownloadForms*  | *\Yjopenapi\Client\Model\ConsoleAdminUploadGameVersionByDownloadResult* | 一键上传：文件上传接口，用远程下载的方式生成新版本 |
 | *DispatchApi* | **batchStopGame** | *batchStopGameForms*  | *\Yjopenapi\Client\Model\BatchStopGameResult* | 游戏下全量踢下线，异步接口 |
 | *DispatchApi* | **cancelGameHang** | *cancelGameHangForms*  | *\Yjopenapi\Client\Model\CancelGameHangResult* | 取消游戏挂机 |
 | *DispatchApi* | **gameNotify** | *gameNotifyForms*  | *\Yjopenapi\Client\Model\GameNotifyResult* | 游戏通知 |
 | *DispatchApi* | **getGameConcurrency** | *getGameConcurrencyForms*  | *\Yjopenapi\Client\Model\GetGameConcurrencyResult* | 调用GetGameConcurrency获取游戏当前并发数 |
 | *DispatchApi* | **getStock** | *getStockForms*  | *\Yjopenapi\Client\Model\GetStockResult* | 调用GetStock获取游戏当前库存 |
 | *DispatchApi* | **getStopGameToken** | *getStopGameTokenForms*  | *\Yjopenapi\Client\Model\GetStopGameTokenResult* | 全量踢下线获取token |
 | *DispatchApi* | **listGameServerIp** | *listGameServerIpForms*  | *\Yjopenapi\Client\Model\ListGameServerIpResult* | 获取自己租户下的游戏服务器ip列表 |
 | *DispatchApi* | **queryGameHang** | *queryGameHangForms*  | *\Yjopenapi\Client\Model\QueryGameHangResult* | 查询游戏挂机状态 |
 | *DispatchApi* | **querySessionStatus** | *querySessionStatusForms*  | *\Yjopenapi\Client\Model\QuerySessionStatusResult* | 查询会话当前状态 |
 | *DispatchApi* | **setGameAlive** | *setGameAliveForms*  | *\Yjopenapi\Client\Model\SetGameAliveResult* | 设置游戏可运行时长 |
 | *DispatchApi* | **setGameHang** | *setGameHangForms*  | *\Yjopenapi\Client\Model\SetGameHangResult* | 设置游戏挂机 |
 | *DispatchApi* | **stopGame** | *stopGameForms*  | *\Yjopenapi\Client\Model\StopGameResult* | 服务端发起，停止某个用户的某个游戏的某个会话 |
 | *DispatchApi* | **stopPreopenContainer** | *stopPreopenContainerForms*  | *\Yjopenapi\Client\Model\StopPreopenContainerResult* | 停止预开容器 |
 | *DispatchApi* | **tryToGetSlot** | *tryToGetSlotForms*  | *\Yjopenapi\Client\Model\TryToGetSlotResult* | 为用户调度分配游戏容器，容器一旦分配成功会被锁住，一段时间内不再分配给其他用户，过期释放。 |
 | *InteractiveApi* | **getParty** | *getPartyForms*  | *\Yjopenapi\Client\Model\InteractiveGetPartyResult* | 获取派对 |
 | *InteractiveApi* | **getPartyStatus** | *getPartyStatusForms*  | *\Yjopenapi\Client\Model\InteractiveGetPartyStatusResult* | 查询派对游戏状态 |
 | *InteractiveApi* | **joinParty** | *joinPartyForms*  | *\Yjopenapi\Client\Model\InteractiveJoinPartyResult* | 加入分配席位 |
 | *InteractiveApi* | **kickOutUser** | *kickOutUserForms*  | *\Yjopenapi\Client\Model\InteractiveKickOutUserResult* | 踢出派对 |
 | *InteractiveApi* | **modifySeats** | *modifySeatsForms*  | *\Yjopenapi\Client\Model\InteractiveModifySeatsResult* | 修改席位 |
 | *InteractiveApi* | **shutDownParty** | *shutDownPartyForms*  | *\Yjopenapi\Client\Model\InteractiveShutDownPartyResult* | 关闭派对 |
 | *LiveApi* | **queryStatus** | *queryStatusForms*  | *\Yjopenapi\Client\Model\LiveQueryStatusResult* | 查询推流状态 |
 | *LiveApi* | **startGameLive** | *startGameLiveForms*  | *\Yjopenapi\Client\Model\LiveStartGameLiveResult* | 开始直播推流 |
 | *LiveApi* | **stopGameLive** | *stopGameLiveForms*  | *\Yjopenapi\Client\Model\LiveStopGameLiveResult* | 结束直播推流 |
 | *MultiplayApi* | **close** | *closeForms*  | *\Yjopenapi\Client\Model\MultiplayCloseResult* | 关闭联机 |
 | *MultiplayApi* | **init** | *initForms*  | *\Yjopenapi\Client\Model\MultiplayInitResult* | 初始化联机 |
 | *MultiplayApi* | **join** | *joinForms*  | *\Yjopenapi\Client\Model\MultiplayJoinResult* | 加入联机 |
 | *MultiplayApi* | **leave** | *leaveForms*  | *\Yjopenapi\Client\Model\MultiplayLeaveResult* | 离开联机 |
 | *MultiplayApi* | **modify** | *modifyForms*  | *\Yjopenapi\Client\Model\MultiplayModifyResult* | 修改联机 |
 | *MultiplayApi* | **query** | *queryForms*  | *\Yjopenapi\Client\Model\MultiplayQueryResult* | 离开联机 |
 | *TokenApi* | **getPair** |   | *\Yjopenapi\Client\Model\GetPairResult* | 获取临时安全令牌(二元组) |
 | *TokenApi* | **getTriple** |   | *\Yjopenapi\Client\Model\GetTripleResult* | 获取临时安全令牌 |
 | *UsercontrollerApi* | **deleteGameArchive** | *deleteGameArchiveForms*  | *\Yjopenapi\Client\Model\UsercontollerDeleteGameArchiveResult* | 根据存档id删除存档纪录 |
 | *UsercontrollerApi* | **getGameTrialSurplusDuration** | *getGameTrialSurplusDurationForms*  | *\Yjopenapi\Client\Model\UsercontollerGetGameTrialSurplusDurationResult* | 查询剩余试玩游戏时长 |
 | *UsercontrollerApi* | **getUserGameArchive** | *getUserGameArchiveForms*  | *\Yjopenapi\Client\Model\UsercontollerGetUserGameArchiveResult* | 查询用户正常状态的最新存档纪录，按照存档时间倒序 |
 | *UsercontrollerApi* | **listLatestGameArchive** | *listLatestGameArchiveForms*  | *\Yjopenapi\Client\Model\UsercontollerListLatestGameArchiveResult* | 查询用户正常状态的最新存档纪录，按照存档时间倒序 |
 | *UsercontrollerApi* | **restoreGameArchive** | *restoreGameArchiveForms*  | *\Yjopenapi\Client\Model\UsercontollerRestoreGameArchiveResult* | 将指定的存档ID恢复为最新存档 |
 | *UsercontrollerApi* | **updateGameArchiveTagStatus** | *updateGameArchiveTagStatusForms*  | *\Yjopenapi\Client\Model\UsercontollerUpdateGameArchiveTagStatusResult* | 更新存档打标状态 |

## License
[Apache-2.0](http://www.apache.org/licenses/LICENSE-2.0)

Copyright (c) 2009-present, Alibaba Cloud All rights reserved.

