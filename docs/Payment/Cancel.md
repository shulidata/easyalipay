## 交易取消

##### 配置
```php
use EasyAlipay\Factory;

$options = [

    'app_id'                   => '2016051900098985',
    'alipay_public_key'        => '支付宝公钥',
    'merchant_private_key'     => '应用私钥',
    // ...
];

$app = Factory::payment($options);

$app['cancel']->cancel($out_trade_no);
```
参数说明

out_trade_no：订单支付时传入的商户订单号，长度不超过64。

