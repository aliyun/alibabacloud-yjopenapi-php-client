![](https://aliyunsdk-pages.alicdn.com/icons/AlibabaCloud.svg)

# YuanJing OpenAPI SDK for PHP

## Requirements

PHP 5.5 and later

## Installation

### Composer

To install the bindings via Composer:
```
composer require alibabacloud/alibabacloud-yjopenapi-php-client 1.0.20221118-beta
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
 | *DispatchApi* | **batchStopGame** | *batchStopGameForms*  | *\Yjopenapi\Client\Model\BatchStopGameResult* | 游戏下全量踢下线，异步接口 |
 | *DispatchApi* | **getStock** | *getStockForms*  | *\Yjopenapi\Client\Model\GetStockResult* | 调用GetStock获取游戏当前库存 |
 | *DispatchApi* | **getStopGameToken** | *getStopGameTokenForms*  | *\Yjopenapi\Client\Model\GetStopGameTokenResult* | 全量踢下线获取token |
 | *DispatchApi* | **stopGame** | *stopGameForms*  | *\Yjopenapi\Client\Model\StopGameResult* | 服务端发起，停止某个用户的某个游戏的某个会话 |
 | *DispatchApi* | **tryToGetSlot** | *tryToGetSlotForms*  | *\Yjopenapi\Client\Model\TryToGetSlotResult* | 为用户调度分配游戏容器，容器一旦分配成功会被锁住，一段时间内不再分配给其他用户，过期释放。 |
 | *LiveApi* | **queryStatus** | *queryStatusForms*  | *\Yjopenapi\Client\Model\LiveQueryStatusResult* | 查询推流状态 |
 | *LiveApi* | **startGameLive** | *startGameLiveForms*  | *\Yjopenapi\Client\Model\LiveStartGameLiveResult* | 开始直播推流 |
 | *LiveApi* | **stopGameLive** | *stopGameLiveForms*  | *\Yjopenapi\Client\Model\LiveStopGameLiveResult* | 结束直播推流 |
 | *MultiplayApi* | **close** | *closeForms*  | *\Yjopenapi\Client\Model\MultiplayCloseResult* | 关闭联机 |
 | *MultiplayApi* | **init** | *initForms*  | *\Yjopenapi\Client\Model\MultiplayInitResult* | 初始化联机 |
 | *MultiplayApi* | **join** | *joinForms*  | *\Yjopenapi\Client\Model\MultiplayJoinResult* | 加入联机 |
 | *MultiplayApi* | **leave** | *leaveForms*  | *\Yjopenapi\Client\Model\MultiplayLeaveResult* | 离开联机 |
 | *MultiplayApi* | **modify** | *modifyForms*  | *\Yjopenapi\Client\Model\MultiplayModifyResult* | 修改联机 |
 | *MultiplayApi* | **query** | *queryForms*  | *\Yjopenapi\Client\Model\MultiplayQueryResult* | 离开联机 |
 | *TokenApi* | **getTriple** |   | *\Yjopenapi\Client\Model\GetTripleResult* | 获取临时安全令牌 |

## License
[Apache-2.0](http://www.apache.org/licenses/LICENSE-2.0)

Copyright (c) 2009-present, Alibaba Cloud All rights reserved.

