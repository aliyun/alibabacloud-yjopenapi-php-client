![](https://aliyunsdk-pages.alicdn.com/icons/AlibabaCloud.svg)

# YuanJing OpenAPI SDK for PHP

## Requirements

PHP 5.5 and later

## Installation

### Composer

To install the bindings via Composer:
```
composer require alibabacloud/alibabacloud-yjopenapi-php-client 1.1.20230905
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
 | *ConsoleAdminApi* | **activateDeployment** | *activateDeploymentForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\ConsoleAdminActivateDeploymentResult* |  |
 | *ConsoleAdminApi* | **adaptGameVersion** | *adaptGameVersionForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\ConsoleAdminAdaptGameVersionResult* |  |
 | *ConsoleAdminApi* | **addGameToProject** | *addGameToProjectForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\ConsoleAdminAddGameToProjectResult* |  |
 | *ConsoleAdminApi* | **createGame** | *createGameForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\ConsoleAdminCreateGameResult* |  |
 | *ConsoleAdminApi* | **createProject** | *createProjectForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\ConsoleAdminCreateProjectResult* |  |
 | *ConsoleAdminApi* | **deleteGame** | *deleteGameForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\ConsoleAdminDeleteGameResult* |  |
 | *ConsoleAdminApi* | **deleteGameVersion** | *deleteGameVersionForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\ConsoleAdminDeleteGameVersionResult* |  |
 | *ConsoleAdminApi* | **deleteProject** | *deleteProjectForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\ConsoleAdminDeleteProjectResult* |  |
 | *ConsoleAdminApi* | **getGameVersion** | *getGameVersionForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\ConsoleAdminGetGameVersionResult* |  |
 | *ConsoleAdminApi* | **getGameVersionProgress** | *getGameVersionProgressForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\ConsoleAdminGetGameVersionProgressResult* |  |
 | *ConsoleAdminApi* | **listActivateableInstances** | *listActivateableInstancesForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\ConsoleAdminListActivateableInstancesResult* |  |
 | *ConsoleAdminApi* | **listActivatedInstances** | *listActivatedInstancesForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\ConsoleAdminListActivatedInstancesResult* |  |
 | *ConsoleAdminApi* | **listControllersOfGame** | *listControllersOfGameForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\ConsoleAdminListControllersOfGameResult* |  |
 | *ConsoleAdminApi* | **listDeployableInstances** | *listDeployableInstancesForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\ConsoleAdminListDeployableInstancesResult* |  |
 | *ConsoleAdminApi* | **listGameDeployDetailsOfProject** | *listGameDeployDetailsOfProjectForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\ConsoleAdminListGameDeployDetailsOfProjectResult* | 获取项目下游戏部署版本信息。 |
 | *ConsoleAdminApi* | **listGameVersions** | *listGameVersionsForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\ConsoleAdminListGameVersionsResult* |  |
 | *ConsoleAdminApi* | **listGames** | *listGamesForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\ConsoleAdminListGamesResult* |  |
 | *ConsoleAdminApi* | **listInstancesOfProject** | *listInstancesOfProjectForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\ConsoleAdminListInstancesOfProjectResult* | 分页获取项目中的实例 |
 | *ConsoleAdminApi* | **listProjects** | *listProjectsForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\ConsoleAdminListProjectsResult* |  |
 | *ConsoleAdminApi* | **listVersionDeployInstances** | *listVersionDeployInstancesForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\ConsoleAdminListVersionDeployInstancesResult* | 获取项目下游戏版本的部署实例信息。 |
 | *ConsoleAdminApi* | **removeGameFromProject** | *removeGameFromProjectForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\ConsoleAdminRemoveGameFromProjectResult* |  |
 | *ConsoleAdminApi* | **submitDeployment** | *submitDeploymentForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\ConsoleAdminSubmitDeploymentResult* |  |
 | *ConsoleAdminApi* | **uploadGameVersionByDownload** | *uploadGameVersionByDownloadForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\ConsoleAdminUploadGameVersionByDownloadResult* |  |
 | *DispatchApi* | **batchStopGame** | *batchStopGameForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\BatchStopGameResult* |  |
 | *DispatchApi* | **cancelGameHang** | *cancelGameHangForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\CancelGameHangResult* | 取消游戏挂机 |
 | *DispatchApi* | **gameNotify** | *gameNotifyForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\GameNotifyResult* | 游戏通知接口 |
 | *DispatchApi* | **getGameConcurrency** | *getGameConcurrencyForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\GetGameConcurrencyResult* | 调用GetGameConcurrency获取游戏当前并发数 |
 | *DispatchApi* | **getStock** | *getStockForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\GetStockResult* | 调用GetStock获取游戏当前库存 |
 | *DispatchApi* | **getStopGameToken** | *getStopGameTokenForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\GetStopGameTokenResult* | 全量踢下线获取token |
 | *DispatchApi* | **listGameServerIp** | *listGameServerIpForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\ListGameServerIpResult* |  |
 | *DispatchApi* | **queryGameHang** | *queryGameHangForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\QueryGameHangResult* | 查询游戏挂机状态 |
 | *DispatchApi* | **querySessionStatus** | *querySessionStatusForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\QuerySessionStatusResult* | 查询会话当前状态 |
 | *DispatchApi* | **setGameAlive** | *setGameAliveForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\SetGameAliveResult* | 设置游戏可运行时长 |
 | *DispatchApi* | **setGameHang** | *setGameHangForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\SetGameHangResult* | 设置游戏挂机 |
 | *DispatchApi* | **stopGame** | *stopGameForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\StopGameResult* | 服务端发起，停止某个用户的某个游戏的某个会话 |
 | *DispatchApi* | **stopPreopenContainer** | *stopPreopenContainerForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\StopPreopenContainerResult* | 停止预开容器 |
 | *DispatchApi* | **tryToGetSlot** | *tryToGetSlotForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\TryToGetSlotResult* | 为用户调度分配游戏容器，容器一旦分配成功会被锁住，一段时间内不再分配给其他用户，过期释放。 |
 | *DispatchApi* | **updatePreopenStrategy** | *updatePreopenStrategyForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\UpdatePreopenStrategyResult* | 更新预开预起策略 |
 | *LiveApi* | **queryStatus** | *queryStatusForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\LiveQueryStatusResult* |  |
 | *LiveApi* | **startGameLive** | *startGameLiveForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\LiveStartGameLiveResult* |  |
 | *LiveApi* | **stopGameLive** | *stopGameLiveForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\LiveStopGameLiveResult* |  |
 | *MultiplayApi* | **close** | *closeForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\MultiplayCloseResult* |  |
 | *MultiplayApi* | **init** | *initForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\MultiplayInitResult* |  |
 | *MultiplayApi* | **join** | *joinForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\MultiplayJoinResult* |  |
 | *MultiplayApi* | **leave** | *leaveForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\MultiplayLeaveResult* |  |
 | *MultiplayApi* | **modify** | *modifyForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\MultiplayModifyResult* |  |
 | *MultiplayApi* | **query** | *queryForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\MultiplayQueryResult* |  |
 | *TokenApi* | **getPair** |   | *\Yjopenapi\Client\Yjopenapi\Client\Model\GetPairResult* | 获取临时安全令牌(二元组) |
 | *TokenApi* | **getTriple** |   | *\Yjopenapi\Client\Yjopenapi\Client\Model\GetTripleResult* | 获取临时安全令牌 |
 | *UsercontrollerApi* | **deleteGameArchive** | *deleteGameArchiveForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\UsercontrollerDeleteGameArchiveResult* |  |
 | *UsercontrollerApi* | **getGameTrialSurplusDuration** | *getGameTrialSurplusDurationForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\UsercontrollerGetGameTrialSurplusDurationResult* |  |
 | *UsercontrollerApi* | **getUserGameArchive** | *getUserGameArchiveForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\UsercontrollerGetUserGameArchiveResult* |  |
 | *UsercontrollerApi* | **listLatestGameArchive** | *listLatestGameArchiveForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\UsercontrollerListLatestGameArchiveResult* |  |
 | *UsercontrollerApi* | **restoreGameArchive** | *restoreGameArchiveForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\UsercontrollerRestoreGameArchiveResult* |  |
 | *UsercontrollerApi* | **updateGameArchiveTagStatus** | *updateGameArchiveTagStatusForms*  | *\Yjopenapi\Client\Yjopenapi\Client\Model\UsercontrollerUpdateGameArchiveTagStatusResult* |  |

## License
[Apache-2.0](http://www.apache.org/licenses/LICENSE-2.0)

Copyright (c) 2009-present, Alibaba Cloud All rights reserved.

