## 小程序模版消息

产品文档地址：https://docs.alipay.com/mini/introduce/message

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

$app['templateMessage']->send($to_user_id,$form_id,$user_template_id,$page,$data);
```
参数说明

to_user_id：发送消息的用户userid，长度不超过20。例如：2088102122458832

form_id：用户发生的交易行为的交易号，或者用户在小程序产生表单提交的表单号，用于信息发送的校验，长度不超过64。例如：2017010100000000580012345678

user_template_id：用户申请的模板id号，固定的模板id会发送固定的消息，长度不超过64。例如：MDI4YzIxMDE2M2I5YTQzYjUxNWE4MjA4NmU1MTIyYmM=

page：小程序的跳转页面，用于消息中心用户点击之后详细跳转的小程序页面，长度不超过128。例如：page/component/index

data：开发者需要发送模板消息中的自定义部分来替换模板的占位符，长度不超过2048。例如：{"keyword1": {"value" : "12:00"},"keyword2": {"value" : "20180808"},"keyword3": {"value" : "支付宝"}}


