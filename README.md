![](https://aliyunsdk-pages.alicdn.com/icons/AlibabaCloud.svg)

# YuanJing OpenAPI SDK for PHP

## Requirements

PHP 5.5 and later

## Installation

### Composer

To install the bindings via Composer:
```
composer require alibabacloud/alibabacloud-yjopenapi-php-client 1.1.20230904
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
 | *ConsoleAdminApi* | **activateDeployment** | *activateDeploymentForms*  | *\Yjopenapi\Client\Model\ConsoleAdminActivateDeploymentResult* |  |
 | *ConsoleAdminApi* | **adaptGameVersion** | *adaptGameVersionForms*  | *\Yjopenapi\Client\Model\ConsoleAdminAdaptGameVersionResult* |  |
 | *ConsoleAdminApi* | **addGameToProject** | *addGameToProjectForms*  | *\Yjopenapi\Client\Model\ConsoleAdminAddGameToProjectResult* |  |
 | *ConsoleAdminApi* | **createGame** | *createGameForms*  | *\Yjopenapi\Client\Model\ConsoleAdminCreateGameResult* |  |
 | *ConsoleAdminApi* | **createProject** | *createProjectForms*  | *\Yjopenapi\Client\Model\ConsoleAdminCreateProjectResult* |  |
 | *ConsoleAdminApi* | **deleteGame** | *deleteGameForms*  | *\Yjopenapi\Client\Model\ConsoleAdminDeleteGameResult* |  |
 | *ConsoleAdminApi* | **deleteGameVersion** | *deleteGameVersionForms*  | *\Yjopenapi\Client\Model\ConsoleAdminDeleteGameVersionResult* |  |
 | *ConsoleAdminApi* | **deleteProject** | *deleteProjectForms*  | *\Yjopenapi\Client\Model\ConsoleAdminDeleteProjectResult* |  |
 | *ConsoleAdminApi* | **getGameVersion** | *getGameVersionForms*  | *\Yjopenapi\Client\Model\ConsoleAdminGetGameVersionResult* |  |
 | *ConsoleAdminApi* | **getGameVersionProgress** | *getGameVersionProgressForms*  | *\Yjopenapi\Client\Model\ConsoleAdminGetGameVersionProgressResult* |  |
 | *ConsoleAdminApi* | **listActivateableInstances** | *listActivateableInstancesForms*  | *\Yjopenapi\Client\Model\ConsoleAdminListActivateableInstancesResult* |  |
 | *ConsoleAdminApi* | **listActivatedInstances** | *listActivatedInstancesForms*  | *\Yjopenapi\Client\Model\ConsoleAdminListActivatedInstancesResult* |  |
 | *ConsoleAdminApi* | **listControllersOfGame** | *listControllersOfGameForms*  | *\Yjopenapi\Client\Model\ConsoleAdminListControllersOfGameResult* |  |
 | *ConsoleAdminApi* | **listDeployableInstances** | *listDeployableInstancesForms*  | *\Yjopenapi\Client\Model\ConsoleAdminListDeployableInstancesResult* |  |
 | *ConsoleAdminApi* | **listGameDeployDetailsOfProject** | *listGameDeployDetailsOfProjectForms*  | *\Yjopenapi\Client\Model\ConsoleAdminListGameDeployDetailsOfProjectResult* | 获取项目下游戏部署版本信息。 |
 | *ConsoleAdminApi* | **listGameVersions** | *listGameVersionsForms*  | *\Yjopenapi\Client\Model\ConsoleAdminListGameVersionsResult* |  |
 | *ConsoleAdminApi* | **listGames** | *listGamesForms*  | *\Yjopenapi\Client\Model\ConsoleAdminListGamesResult* |  |
 | *ConsoleAdminApi* | **listInstancesOfProject** | *listInstancesOfProjectForms*  | *\Yjopenapi\Client\Model\ConsoleAdminListInstancesOfProjectResult* | 分页获取项目中的实例 |
 | *ConsoleAdminApi* | **listProjects** | *listProjectsForms*  | *\Yjopenapi\Client\Model\ConsoleAdminListProjectsResult* |  |
 | *ConsoleAdminApi* | **listVersionDeployInstances** | *listVersionDeployInstancesForms*  | *\Yjopenapi\Client\Model\ConsoleAdminListVersionDeployInstancesResult* | 获取项目下游戏版本的部署实例信息。 |
 | *ConsoleAdminApi* | **removeGameFromProject** | *removeGameFromProjectForms*  | *\Yjopenapi\Client\Model\ConsoleAdminRemoveGameFromProjectResult* |  |
 | *ConsoleAdminApi* | **submitDeployment** | *submitDeploymentForms*  | *\Yjopenapi\Client\Model\ConsoleAdminSubmitDeploymentResult* |  |
 | *ConsoleAdminApi* | **uploadGameVersionByDownload** | *uploadGameVersionByDownloadForms*  | *\Yjopenapi\Client\Model\ConsoleAdminUploadGameVersionByDownloadResult* |  |
 | *DispatchApi* | **batchStopGame** | *batchStopGameForms*  | *\Yjopenapi\Client\Model\BatchStopGameResult* |  |
 | *DispatchApi* | **cancelGameHang** | *cancelGameHangForms*  | *\Yjopenapi\Client\Model\CancelGameHangResult* | 取消游戏挂机 |
 | *DispatchApi* | **gameNotify** | *gameNotifyForms*  | *\Yjopenapi\Client\Model\GameNotifyResult* | 游戏通知接口 |
 | *DispatchApi* | **getGameConcurrency** | *getGameConcurrencyForms*  | *\Yjopenapi\Client\Model\GetGameConcurrencyResult* | 调用GetGameConcurrency获取游戏当前并发数 |
 | *DispatchApi* | **getStock** | *getStockForms*  | *\Yjopenapi\Client\Model\GetStockResult* | 调用GetStock获取游戏当前库存 |
 | *DispatchApi* | **getStopGameToken** | *getStopGameTokenForms*  | *\Yjopenapi\Client\Model\GetStopGameTokenResult* | 全量踢下线获取token |
 | *DispatchApi* | **listGameServerIp** | *listGameServerIpForms*  | *\Yjopenapi\Client\Model\ListGameServerIpResult* |  |
 | *DispatchApi* | **queryGameHang** | *queryGameHangForms*  | *\Yjopenapi\Client\Model\QueryGameHangResult* | 查询游戏挂机状态 |
 | *DispatchApi* | **querySessionStatus** | *querySessionStatusForms*  | *\Yjopenapi\Client\Model\QuerySessionStatusResult* | 查询会话当前状态 |
 | *DispatchApi* | **setGameAlive** | *setGameAliveForms*  | *\Yjopenapi\Client\Model\SetGameAliveResult* | 设置游戏可运行时长 |
 | *DispatchApi* | **setGameHang** | *setGameHangForms*  | *\Yjopenapi\Client\Model\SetGameHangResult* | 设置游戏挂机 |
 | *DispatchApi* | **stopGame** | *stopGameForms*  | *\Yjopenapi\Client\Model\StopGameResult* | 服务端发起，停止某个用户的某个游戏的某个会话 |
 | *DispatchApi* | **stopPreopenContainer** | *stopPreopenContainerForms*  | *\Yjopenapi\Client\Model\StopPreopenContainerResult* | 停止预开容器 |
 | *DispatchApi* | **tryToGetSlot** | *tryToGetSlotForms*  | *\Yjopenapi\Client\Model\TryToGetSlotResult* | 为用户调度分配游戏容器，容器一旦分配成功会被锁住，一段时间内不再分配给其他用户，过期释放。 |
 | *DispatchApi* | **updatePreopenStrategy** | *updatePreopenStrategyForms*  | *\Yjopenapi\Client\Model\UpdatePreopenStrategyResult* | 更新预开预起策略 |
 | *LiveApi* | **queryStatus** | *queryStatusForms*  | *\Yjopenapi\Client\Model\LiveQueryStatusResult* |  |
 | *LiveApi* | **startGameLive** | *startGameLiveForms*  | *\Yjopenapi\Client\Model\LiveStartGameLiveResult* |  |
 | *LiveApi* | **stopGameLive** | *stopGameLiveForms*  | *\Yjopenapi\Client\Model\LiveStopGameLiveResult* |  |
 | *MultiplayApi* | **close** | *closeForms*  | *\Yjopenapi\Client\Model\MultiplayCloseResult* |  |
 | *MultiplayApi* | **demoCloseMultiPlay** | *demoCloseMultiPlayForms*  | *\Yjopenapi\Client\Model\MultiplayDemoCloseMultiPlayResult* | 联机demo关闭联机 |
 | *MultiplayApi* | **demoInitMultiPlay** | *demoInitMultiPlayForms*  | *\Yjopenapi\Client\Model\MultiplayDemoInitMultiPlayResult* | 联机demo初始化联机 |
 | *MultiplayApi* | **demoJoinMultiPlay** | *demoJoinMultiPlayForms*  | *\Yjopenapi\Client\Model\MultiplayDemoJoinMultiPlayResult* | 联机Demo加入联机接口 |
 | *MultiplayApi* | **demoLeaveMultiPlay** | *demoLeaveMultiPlayForms*  | *\Yjopenapi\Client\Model\MultiplayDemoLeaveMultiPlayResult* | 联机demo离开联机 |
 | *MultiplayApi* | **demoModifyMultiPlay** | *demoModifyMultiPlayForms*  | *\Yjopenapi\Client\Model\MultiplayDemoModifyMultiPlayResult* | 联机demo修改联机 |
 | *MultiplayApi* | **demoQueryMultiPlay** | *demoQueryMultiPlayForms*  | *\Yjopenapi\Client\Model\MultiplayDemoQueryMultiPlayResult* | 联机demo查询联机接口 |
 | *MultiplayApi* | **init** | *initForms*  | *\Yjopenapi\Client\Model\MultiplayInitResult* |  |
 | *MultiplayApi* | **join** | *joinForms*  | *\Yjopenapi\Client\Model\MultiplayJoinResult* |  |
 | *MultiplayApi* | **leave** | *leaveForms*  | *\Yjopenapi\Client\Model\MultiplayLeaveResult* |  |
 | *MultiplayApi* | **modify** | *modifyForms*  | *\Yjopenapi\Client\Model\MultiplayModifyResult* |  |
 | *MultiplayApi* | **query** | *queryForms*  | *\Yjopenapi\Client\Model\MultiplayQueryResult* |  |
 | *TokenApi* | **getPair** |   | *\Yjopenapi\Client\Model\GetPairResult* | 获取临时安全令牌(二元组) |
 | *TokenApi* | **getTriple** |   | *\Yjopenapi\Client\Model\GetTripleResult* | 获取临时安全令牌 |
 | *UsercontrollerApi* | **deleteGameArchive** | *deleteGameArchiveForms*  | *\Yjopenapi\Client\Model\UsercontrollerDeleteGameArchiveResult* |  |
 | *UsercontrollerApi* | **getGameTrialSurplusDuration** | *getGameTrialSurplusDurationForms*  | *\Yjopenapi\Client\Model\UsercontrollerGetGameTrialSurplusDurationResult* |  |
 | *UsercontrollerApi* | **getUserGameArchive** | *getUserGameArchiveForms*  | *\Yjopenapi\Client\Model\UsercontrollerGetUserGameArchiveResult* |  |
 | *UsercontrollerApi* | **listLatestGameArchive** | *listLatestGameArchiveForms*  | *\Yjopenapi\Client\Model\UsercontrollerListLatestGameArchiveResult* |  |
 | *UsercontrollerApi* | **restoreGameArchive** | *restoreGameArchiveForms*  | *\Yjopenapi\Client\Model\UsercontrollerRestoreGameArchiveResult* |  |
 | *UsercontrollerApi* | **updateGameArchiveTagStatus** | *updateGameArchiveTagStatusForms*  | *\Yjopenapi\Client\Model\UsercontrollerUpdateGameArchiveTagStatusResult* |  |

## License
[Apache-2.0](http://www.apache.org/licenses/LICENSE-2.0)

Copyright (c) 2009-present, Alibaba Cloud All rights reserved.

