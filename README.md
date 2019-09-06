## EasyAlipay

EasyAlipay 是基于支付宝OpenAPI开源的PHP语言版本SDK。使用本SDK前你需要具备基础的PHP相关能力，掌握自动加载，[Composer](https://getcomposer.org/)的使用等，并了解[支付宝的相关业务](https://docs.open.alipay.com/api)。

## 1.0.0 🎉🎉🎉
EsayAlipay 1.0.0 首次发布，欢迎加入下方的钉钉群一起交流，我们致力于打造一个方便开发者快速接入支付宝业务的SDK。本SDK针对通用授权、支付、小程序、生活号、营销等场景做了业务模型封装，并在持续增加中。同时对API参数做了最简单处理，以最少可用原则精简了参数，方便开发者更快的使用，降低开发者门槛。

## 一、背景

开发者在接入支付宝的过程中经常遇到想开发一个功能但是不清楚应该使用哪个API，找到对应API后参数又过于复杂不清楚哪些参数是自己真正要使用的。针对这种情况EsayAlipay主要在方法层面对API进行模型化归类，在参数层面对复杂参数进行简化，用最少的参数覆盖最高频的调用，不求百分百覆盖所有场景。

## 二、功能简介

EasyAlipay 提供了以下的能力：

### 2.1 纯PHP语言开发不采用任何框架

提供给开发者一个最干净的SDK，开发者在使用时候可以直接引入到任何PHP框架中。

### 2.2 Composer管理

本SDK相关依赖全部采用Composer管理。

### 2.3 业务场景封装

对通用授权、支付、小程序、生活号、营销等场景做了简单业务封装，并在持续增加中。

### 2.4 参数精简

基于最少可用原则对参数做了精简，每个方法对应对原生OpenAPI都在对应场景目录下Model目录中的每个文件中做了注释说明，如果精简后的参数不能满足您的使用需求，可直接在文件中添加对应参数。
## 三、环境需求
```php
PHP >= 7.0
PHP cURL 扩展
PHP OpenSSL 扩展
PHP fileinfo 扩展
```
## 四、快速开始
```php
use EasyAlipay\Factory;

$options = [
    'app_id'                   => '你的应用APPID',
    'gateway_url'              => "网关地址",//沙箱环境网关gateway_url：https://openapi.alipaydev.com/gateway.do，线上网关gateway_url：https://openapi.alipay.com/gateway.do
    'sign_type'                => "RSA2",
    'charset'                  => "UTF-8",
    'alipay_public_key'        => '支付宝公钥',
    'merchant_private_key'     => '应用私钥',
    // ...
];

//通用基础
$app = Factory::base($options);
//营销
$app = Factory::marketing($options);
//小程序
$app = Factory::mini($options);
//生活号
$app = Factory::openPublic($options);
//支付
$app = Factory::payment($options);

```
支付宝公钥与应用私钥配置请参考：[三步搞定签名](https://docs.open.alipay.com/291/106103/)

创建应用地址：[支付宝开放平台](https://openhome.alipay.com)

支付宝小程序门户：[小程序开发平台](https://mini.open.alipay.com)

## 五、文档与示例

请参考 docs目录下的相关文档，里面有具体每个方法每个参数的详细说明，文档目录与代码结构保持一致方便开发者理解。在工程的 tests 目录下 test.php文件中提供了一个沙箱环境交易查询的示例。

## 六、开源许可

EasyAlipay 参考依赖了一些三方组件，在NOTICE中引入了他们的开源协议。


## 七、信息交流

欢迎加入EasyAlipay钉钉交流群：23311489

<img src="https://gw.alipayobjects.com/mdn/rms_1e5ba1/afts/img/A*7sA8Tpin7f0AAAAAAAAAAABkARQnAQ" width=256 height=256>