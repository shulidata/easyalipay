## 生活号消息

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
#### 创建图文消息内容
```php
$app['message']->createImageTextContent($title, $cover, $content, $could_comment, $ctype, $benefit, $ext_tags, $login_ids);
```
参数说明

title：标题，长度不超过32。

cover：封面图url,长度不超过255，图片尺寸为996*450，最大不超过3M，支持格式:.jpg、.png ，请先调用图片上传接口获得图片url	https://oalipay-dl-django.alicdn.com/rest/1.0/image?fileIds=xxx&zoom=xxx

content：消息正文（支持富文本），长度不超过10000。

could_comment：是否允许评论 T:允许 F:不允许，默认不允许	T

ctype：图文类型 activity: 活动图文，不填默认普通图文

benefit：活动利益点，图文类型ctype为activity类型时才需要传，长度不超过10。例如：满**减**

ext_tags：关键词列表，英文逗号分隔，最多不超过5个，长度不超过50。例如：关键,热度

login_ids：可预览支付宝账号列表，需要预览时才填写， 英文逗号分隔，最多不超过10个，长度不超过10000。例如：13434343432,xxx@163.com


#### 更新图文消息内容
```php
$app['message']->modifyImageTextContent($content_id, $title, $cover, $content, $could_comment, $ctype, $benefit, $ext_tags, $login_ids);
```
参数说明

content_id：内容id，长度不超过100。

title：标题，长度不超过32。

cover：封面图url,长度不超过255，图片尺寸为996*450，最大不超过3M，支持格式:.jpg、.png ，请先调用图片上传接口获得图片url	https://docs.open.alipay.com/api_3/alipay.offline.material.image.upload

content：消息正文（支持富文本），长度不超过10000。

could_comment：是否允许评论 T:允许 F:不允许，默认不允许	T

ctype：图文类型 activity: 活动图文，不填默认普通图文

benefit：活动利益点，图文类型ctype为activity类型时才需要传，长度不超过10。例如：满**减**

ext_tags：关键词列表，英文逗号分隔，最多不超过5个，长度不超过50。例如：关键,热度

login_ids：可预览支付宝账号列表，需要预览时才填写， 英文逗号分隔，最多不超过10个，长度不超过10000。例如：13434343432,xxx@163.com


#### 群发文本消息
```php
$app['message']->sendText($text);
```
参数说明

text：文本消息内容


#### 群发图文消息
```php
$app['message']->sendImageText($articles);
```
参数说明

articles示例如下
```php
"articles":[{
        "title":"图文消息标题（长度不超过100）",
        "desc":"图文消息内容（长度不超过512）",
        "image_url":"图片链接，例如：http://example.com/abc.jpg（长度不超过100）",
        "url":"点击图文消息跳转的链接，例如：https://www.example.com/b.php（长度不超过100）",
        "action_name":"链接文字，例如：查看详情"
        }]
```
#### 查询已发送消息
```php
$app['message']->query($message_ids);
```
参数说明

message_ids：消息id集，长度不超过64，限制最多传入20个message_id。message_id在调用群发、组发消息接口时会返回，需调用方保存。例如：2017080301329810fa9f7ca2-4634-481b-bca2-54092fd4be72


#### 消息撤回
```php
$app['message']->recall($message_id);
```
参数说明

message_id：消息id，长度不超过64。例如：2016000000000000


