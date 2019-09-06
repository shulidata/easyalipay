## 交易支付

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

$app['pay']->pay($subject,$out_trade_no,$total_amount,$auth_code);
```

参数说明

subject：订单标题，长度不超过256。

out_trade_no：订单支付时传入的商户订单号，长度不超过64。

total_amount：订单总金额，单位为元，精确到小数点后两位，取值范围[0.01,100000000] 

auth_code：支付授权码，25~30开头的长度为16~24位的数字，实际字符串长度以开发者获取的付款码长度为准

