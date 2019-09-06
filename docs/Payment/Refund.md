## 交易退款

当交易发生之后一段时间内，由于买家或者卖家的原因需要退款时，卖家可以通过退款接口将支付款退还给买家，支付宝将在收到退款请求并且验证成功之后，按照退款规则将支付款按原路退到买家帐号上。 交易超过约定时间（签约时设置的可退款时间）的订单无法进行退款。一笔退款失败后重新提交，要采用原来的退款单号。总退款金额不能超过用户实际支付金额。

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

$app['refund']->refund($out_trade_no, $refund_amount);
```
参数说明

out_trade_no：订单支付时传入的商户订单号，长度不超过64。
refund_amount：需要退款的金额，该金额不能大于订单金额,单位为元，支持两位小数


