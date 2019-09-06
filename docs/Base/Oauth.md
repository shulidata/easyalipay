## 换取授权访问令牌

##### 配置
```php
use EasyAlipay\Factory;

$options = [

    'app_id'                   => '2016051900098985',
    'alipay_public_key'        => '支付宝公钥',
    'merchant_private_key'     => '应用私钥',
    // ...
];

$app = Factory::base($options);

$app['oauth']->getToken($grant_type, $code,$refresh_token);

```

参数说明

grant_type：值为authorization_code时，代表用code换取；值为refresh_token时，代表用refresh_token换取

code：授权码，用户对应用授权后得到。

refresh_token:刷刷新令牌，上次换取访问令牌时得到。见出参的refresh_token字段,可传null。