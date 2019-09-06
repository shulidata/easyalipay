## 交易创建

#### 配置
```php
use EasyAlipay\Factory;

$options = [

    'app_id'                   => '2016051900098985',
    'alipay_public_key'        => '支付宝公钥',
    'merchant_private_key'     => '应用私钥',
    // ...
];

$app = Factory::payment($options);

$app['create']-> create($subject,$out_trade_no,$total_amount,$buyer_id);

```
参数说明

subject：订单标题，长度不超过256。

out_trade_no：订单支付时传入的商户订单号，长度不超过64。

total_amount：订单总金额，单位为元，精确到小数点后两位，取值范围[0.01,100000000] 

buyer_id：买家的支付宝唯一用户号（2088开头的16位纯数字）

