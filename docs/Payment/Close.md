## 交易关闭

用于交易创建后，用户在一定时间内未进行支付，可调用该接口直接将未付款的交易进行关闭。

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

$app['close']->close($out_trade_no);
```
参数说明

out_trade_no：订单支付时传入的商户订单号，长度不超过64。

