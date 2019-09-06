## 小程序二维码

产品文档地址：https://docs.alipay.com/mini/introduce/qrcode

##### 配置
```php
use EasyAlipay\Factory;

$options = [

    'app_id'                   => '2016051900098985',
    'alipay_public_key'        => '支付宝公钥',
    'merchant_private_key'     => '应用私钥',
    // ...
];

$app = Factory::mini($options);

$app['qrcode']->create($url_param,$query_param,$describe);
```
参数说明

url_param：小程序中能访问到的页面路径，长度不超过256。例如：page/component/component-pages/view/view

query_param：小程序的启动参数，打开小程序的query ，在小程序 onLaunch的方法中获取，长度不超过256。例如：x=1

describe：对应的二维码描述，长度不超过32。
