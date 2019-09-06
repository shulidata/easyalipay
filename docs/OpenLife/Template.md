## 生活号消息模版

#### 配置
```php
use EasyAlipay\Factory;

$options = [

    'app_id'                   => '2016051900098985',
    'alipay_public_key'        => '支付宝公钥',
    'merchant_private_key'     => '应用私钥',
    // ...
];

$app = Factory::openPublic($options);
```
#### 模板消息行业设置修改
```php
$app['template']->setIndustry($primary_industry_name,$primary_industry_code,$secondary_industry_code,$secondary_industry_name);
```
参数说明

primary_industry_name：服务窗消息模板所属主行业一/二级名称，长度不超过30。例如：IT科技/IT软件与服务。查看行业信息：https://alipay.open.taobao.com/doc2/detail?treeId=197&docType=1&articleId=105043

primary_industry_code：服务窗消息模板所属主行业一/二级编码，长度不超过20。例如：10001/20102

secondary_industry_code：服务窗消息模板所属副行业一/二级编码，长度不超过20。例如：10001/20102

secondary_industry_name：服务窗消息模板所属副行业一/二级名称，长度不超过30。例如：IT科技/IT软件与服务


#### 查询行业设置
```php
$app['template']->getIndustry();
```

#### 消息模板领取
```php
$app['template']->getTemplate($template_id);
```
参数说明

template_id：消息母板id，长度不超过20。登陆生活号后台(fuwu.alipay.com)，点击菜单“模板消息”，点击“模板库”，即可看到相应模板的消息母板id。

