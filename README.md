![](https://aliyunsdk-pages.alicdn.com/icons/AlibabaCloud.svg)

# YuanJing OpenAPI SDK for PHP

## Requirements

PHP 5.5 and later

## Installation

### Composer

To install the bindings via Composer:
```
composer require alibabacloud/alibabacloud-yjopenapi-php-client 1.1.20240930
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
 | *AdaptApi* | **createAndSubmitAll** | *createAndSubmitAllForms*  | *\Yjopenapi\Client\Model\AdaptCreateAndSubmitAllResult* | createAndSubmitAll |
 | *AdaptApi* | **queryRequestById** | *queryRequestByIdForms*  | *\Yjopenapi\Client\Model\AdaptQueryRequestByIdResult* | queryRequestById |
 | *AiApi* | **batchUpdateKbVersion** | *batchUpdateKbVersionForms*  | *\Yjopenapi\Client\Model\AiBatchUpdateKbVersionResult* |  |
 | *AiApi* | **cancelQueue** | *cancelQueueForms*  | *\Yjopenapi\Client\Model\AiCancelQueueResult* | 取消排队 |
 | *AiApi* | **createNpcRole** | *createNpcRoleForms*  | *\Yjopenapi\Client\Model\AiCreateNpcRoleResult* |  |
 | *AiApi* | **deleteModels** | *deleteModelsForms*  | *\Yjopenapi\Client\Model\AiDeleteModelsResult* | 删除私有模型 |
 | *AiApi* | **getPrompt** | *getPromptForms*  | *\Yjopenapi\Client\Model\AiGetPromptResult* | 查询推理结果 |
 | *AiApi* | **getQueue** | *getQueueForms*  | *\Yjopenapi\Client\Model\AiGetQueueResult* | 查询排队 |
 | *AiApi* | **listModels** | *listModelsForms*  | *\Yjopenapi\Client\Model\AiListModelsResult* | 查看私有模型列表 |
 | *AiApi* | **prompt** | *promptForms*  | *\Yjopenapi\Client\Model\AiPromptResult* | 场景化推理 |
 | *AiApi* | **updateModels** | *updateModelsForms*  | *\Yjopenapi\Client\Model\AiUpdateModelsResult* | 修改私有模型信息 |
 | *AiApi* | **updateNpcRole** | *updateNpcRoleForms*  | *\Yjopenapi\Client\Model\AiUpdateNpcRoleResult* |  |
 | *AiApi* | **uploadModels** | *uploadModelsForms*  | *\Yjopenapi\Client\Model\AiUploadModelsResult* | 上传私有模型 |
 | *ConsoleAdminApi* | **activateDeployment** | *activateDeploymentForms*  | *\Yjopenapi\Client\Model\ConsoleAdminActivateDeploymentResult* |  |
 | *ConsoleAdminApi* | **adaptGameVersion** | *adaptGameVersionForms*  | *\Yjopenapi\Client\Model\ConsoleAdminAdaptGameVersionResult* |  |
 | *ConsoleAdminApi* | **addGameToProject** | *addGameToProjectForms*  | *\Yjopenapi\Client\Model\ConsoleAdminAddGameToProjectResult* |  |
 | *ConsoleAdminApi* | **batchUpdateDispatchConfig** | *batchUpdateDispatchConfigForms*  | *\Yjopenapi\Client\Model\ConsoleAdminBatchUpdateDispatchConfigResult* | 批量更新游戏各自调度配置 |
 | *ConsoleAdminApi* | **createGame** | *createGameForms*  | *\Yjopenapi\Client\Model\ConsoleAdminCreateGameResult* |  |
 | *ConsoleAdminApi* | **createOrder** | *createOrderForms*  | *\Yjopenapi\Client\Model\ConsoleAdminCreateOrderResult* | 订单下单 |
 | *ConsoleAdminApi* | **createProject** | *createProjectForms*  | *\Yjopenapi\Client\Model\ConsoleAdminCreateProjectResult* |  |
 | *ConsoleAdminApi* | **deleteGame** | *deleteGameForms*  | *\Yjopenapi\Client\Model\ConsoleAdminDeleteGameResult* |  |
 | *ConsoleAdminApi* | **deleteGameVersion** | *deleteGameVersionForms*  | *\Yjopenapi\Client\Model\ConsoleAdminDeleteGameVersionResult* |  |
 | *ConsoleAdminApi* | **deleteProject** | *deleteProjectForms*  | *\Yjopenapi\Client\Model\ConsoleAdminDeleteProjectResult* |  |
 | *ConsoleAdminApi* | **getBillFlowInfo** | *getBillFlowInfoForms*  | *\Yjopenapi\Client\Model\ConsoleAdminGetBillFlowInfoResult* |  |
 | *ConsoleAdminApi* | **getGameInstanceContainerRatio** | *getGameInstanceContainerRatioForms*  | *\Yjopenapi\Client\Model\ConsoleAdminGetGameInstanceContainerRatioResult* |  |
 | *ConsoleAdminApi* | **getGameRecommendedInstance** | *getGameRecommendedInstanceForms*  | *\Yjopenapi\Client\Model\ConsoleAdminGetGameRecommendedInstanceResult* |  |
 | *ConsoleAdminApi* | **getGameVersion** | *getGameVersionForms*  | *\Yjopenapi\Client\Model\ConsoleAdminGetGameVersionResult* |  |
 | *ConsoleAdminApi* | **getGameVersionProgress** | *getGameVersionProgressForms*  | *\Yjopenapi\Client\Model\ConsoleAdminGetGameVersionProgressResult* |  |
 | *ConsoleAdminApi* | **getOrder** | *getOrderForms*  | *\Yjopenapi\Client\Model\ConsoleAdminGetOrderResult* | 查询订单 |
 | *ConsoleAdminApi* | **listActivateableInstances** | *listActivateableInstancesForms*  | *\Yjopenapi\Client\Model\ConsoleAdminListActivateableInstancesResult* |  |
 | *ConsoleAdminApi* | **listActivatedInstances** | *listActivatedInstancesForms*  | *\Yjopenapi\Client\Model\ConsoleAdminListActivatedInstancesResult* |  |
 | *ConsoleAdminApi* | **listControllersOfGame** | *listControllersOfGameForms*  | *\Yjopenapi\Client\Model\ConsoleAdminListControllersOfGameResult* |  |
 | *ConsoleAdminApi* | **listDeployableInstances** | *listDeployableInstancesForms*  | *\Yjopenapi\Client\Model\ConsoleAdminListDeployableInstancesResult* |  |
 | *ConsoleAdminApi* | **listGameCcu** | *listGameCcuForms*  | *\Yjopenapi\Client\Model\ConsoleAdminListGameCcuResult* | 分游戏实时并发 |
 | *ConsoleAdminApi* | **listGameDeployDetailsOfProject** | *listGameDeployDetailsOfProjectForms*  | *\Yjopenapi\Client\Model\ConsoleAdminListGameDeployDetailsOfProjectResult* | 获取项目下游戏部署版本信息。 |
 | *ConsoleAdminApi* | **listGameVersions** | *listGameVersionsForms*  | *\Yjopenapi\Client\Model\ConsoleAdminListGameVersionsResult* |  |
 | *ConsoleAdminApi* | **listGames** | *listGamesForms*  | *\Yjopenapi\Client\Model\ConsoleAdminListGamesResult* |  |
 | *ConsoleAdminApi* | **listInstancesOfProject** | *listInstancesOfProjectForms*  | *\Yjopenapi\Client\Model\ConsoleAdminListInstancesOfProjectResult* | 分页获取项目中的实例 |
 | *ConsoleAdminApi* | **listMonthBill** | *listMonthBillForms*  | *\Yjopenapi\Client\Model\ConsoleAdminListMonthBillResult* | 月度账单列表 |
 | *ConsoleAdminApi* | **listProjects** | *listProjectsForms*  | *\Yjopenapi\Client\Model\ConsoleAdminListProjectsResult* |  |
 | *ConsoleAdminApi* | **listVersionDeployInstances** | *listVersionDeployInstancesForms*  | *\Yjopenapi\Client\Model\ConsoleAdminListVersionDeployInstancesResult* | 获取项目下游戏版本的部署实例信息。 |
 | *ConsoleAdminApi* | **queryAdaptResultByVersionId** | *queryAdaptResultByVersionIdForms*  | *\Yjopenapi\Client\Model\ConsoleAdminQueryAdaptResultByVersionIdResult* | 查询适配结果 |
 | *ConsoleAdminApi* | **recommendSpecification** | *recommendSpecificationForms*  | *\Yjopenapi\Client\Model\ConsoleAdminRecommendSpecificationResult* |  |
 | *ConsoleAdminApi* | **removeGameFromProject** | *removeGameFromProjectForms*  | *\Yjopenapi\Client\Model\ConsoleAdminRemoveGameFromProjectResult* |  |
 | *ConsoleAdminApi* | **rtOverView** | *rtOverViewForms*  | *\Yjopenapi\Client\Model\ConsoleAdminRtOverViewResult* | 实时并发数 |
 | *ConsoleAdminApi* | **rtTrend** | *rtTrendForms*  | *\Yjopenapi\Client\Model\ConsoleAdminRtTrendResult* | 实时并发趋势图 |
 | *ConsoleAdminApi* | **submitDeployment** | *submitDeploymentForms*  | *\Yjopenapi\Client\Model\ConsoleAdminSubmitDeploymentResult* |  |
 | *ConsoleAdminApi* | **submitRefund** | *submitRefundForms*  | *\Yjopenapi\Client\Model\ConsoleAdminSubmitRefundResult* | 订单退订 |
 | *ConsoleAdminApi* | **uploadGameVersionByDownload** | *uploadGameVersionByDownloadForms*  | *\Yjopenapi\Client\Model\ConsoleAdminUploadGameVersionByDownloadResult* |  |
 | *DispatchApi* | **batchStopGame** | *batchStopGameForms*  | *\Yjopenapi\Client\Model\BatchStopGameResult* |  |
 | *DispatchApi* | **cancelGameHang** | *cancelGameHangForms*  | *\Yjopenapi\Client\Model\CancelGameHangResult* | 取消游戏挂机 |
 | *DispatchApi* | **clientNotify** | *clientNotifyForms*  | *\Yjopenapi\Client\Model\ClientNotifyResult* | clientNotify |
 | *DispatchApi* | **gameNotify** | *gameNotifyForms*  | *\Yjopenapi\Client\Model\GameNotifyResult* | 游戏通知接口 |
 | *DispatchApi* | **getGameConcurrency** | *getGameConcurrencyForms*  | *\Yjopenapi\Client\Model\GetGameConcurrencyResult* | 调用GetGameConcurrency获取游戏当前并发数 |
 | *DispatchApi* | **getStock** | *getStockForms*  | *\Yjopenapi\Client\Model\GetStockResult* | 调用GetStock获取游戏当前库存 |
 | *DispatchApi* | **getStopGameToken** | *getStopGameTokenForms*  | *\Yjopenapi\Client\Model\GetStopGameTokenResult* | 全量踢下线获取token |
 | *DispatchApi* | **listGameServerIp** | *listGameServerIpForms*  | *\Yjopenapi\Client\Model\ListGameServerIpResult* |  |
 | *DispatchApi* | **queryGameHang** | *queryGameHangForms*  | *\Yjopenapi\Client\Model\QueryGameHangResult* | 查询游戏挂机状态 |
 | *DispatchApi* | **querySessionStatus** | *querySessionStatusForms*  | *\Yjopenapi\Client\Model\QuerySessionStatusResult* | 查询会话当前状态 |
 | *DispatchApi* | **replaceSlot** | *replaceSlotForms*  | *\Yjopenapi\Client\Model\ReplaceSlotResult* | replaceSlot |
 | *DispatchApi* | **setGameAlive** | *setGameAliveForms*  | *\Yjopenapi\Client\Model\SetGameAliveResult* | 设置游戏可运行时长 |
 | *DispatchApi* | **setGameHang** | *setGameHangForms*  | *\Yjopenapi\Client\Model\SetGameHangResult* | 设置游戏挂机 |
 | *DispatchApi* | **stopGame** | *stopGameForms*  | *\Yjopenapi\Client\Model\StopGameResult* | 服务端发起，停止某个用户的某个游戏的某个会话 |
 | *DispatchApi* | **stopPreopenContainer** | *stopPreopenContainerForms*  | *\Yjopenapi\Client\Model\StopPreopenContainerResult* | 停止预开容器 |
 | *DispatchApi* | **tryToGetSlot** | *tryToGetSlotForms*  | *\Yjopenapi\Client\Model\TryToGetSlotResult* | 为用户调度分配游戏容器，容器一旦分配成功会被锁住，一段时间内不再分配给其他用户，过期释放。 |
 | *DispatchApi* | **tryToGetSlots** | *tryToGetSlotsForms*  | *\Yjopenapi\Client\Model\TryToGetSlotsResult* | tryToGetSlots |
 | *DispatchApi* | **updatePreopenStrategy** | *updatePreopenStrategyForms*  | *\Yjopenapi\Client\Model\UpdatePreopenStrategyResult* | 更新预开预起策略 |
 | *LiveApi* | **queryStatus** | *queryStatusForms*  | *\Yjopenapi\Client\Model\LiveQueryStatusResult* |  |
 | *LiveApi* | **startGameLive** | *startGameLiveForms*  | *\Yjopenapi\Client\Model\LiveStartGameLiveResult* |  |
 | *LiveApi* | **stopGameLive** | *stopGameLiveForms*  | *\Yjopenapi\Client\Model\LiveStopGameLiveResult* |  |
 | *MultiplayApi* | **close** | *closeForms*  | *\Yjopenapi\Client\Model\MultiplayCloseResult* |  |
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

