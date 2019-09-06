## 小程序人脸采集与刷脸认证

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
```

##### 人脸采集

产品文档地址：https://docs.alipay.com/mini/introduce/facecapture
```php
$app['identification']->queryUserWeb($biz_id,$zim_id,$extern_param);
```
参数说明

biz_id：业务流水号，需要保证唯一性，长度不超过64。例如：5456897876546767654

zim_id：刷脸认证标识，长度不超过64。例如：731be7f204a962b0486a9b64ea3050ae

extern_param：扩展参数，长度不超过1024。


##### 刷脸认证

产品文档地址：https://docs.alipay.com/mini/introduce/alipay-face-verify
```php
$app['identification']->queryCertifyzhub($biz_id,$zim_id,$face_type,$need_img);
```
参数说明

biz_id：业务流水号，需要保证唯一性，长度不超过64。

zim_id：刷脸认证标识，长度不超过64。
