## 支付宝卡包
产品文档：https://docs.alipay.com/mini/introduce/voucher

#### 配置
```php
use EasyAlipay\Factory;

$options = [

    'app_id'                   => '2016051900098985',
    'alipay_public_key'        => '支付宝公钥',
    'merchant_private_key'     => '应用私钥',
    // ...
];

$app = Factory::marketing($options);
```

#### 卡券模板创建
```php
$app['pass']->createTemplate($tpl_id,$tpl_content);
```
参数说明

tpl_id：商户用于控制模版的唯一性，长度不超过999。（可以使用时间戳保证唯一性），长度不超过30。例如：20140709150010

tpl_content：模板内容信息，遵循JSON规范，长度不超过99999。详情参见：[tpl_content参数说明](https://doc.open.alipay.com/doc2/detail.htm?treeId=193&articleId=105249&docType=1#tpl_content)

#### 卡券模板更新
```php
$app['pass']->updateTemplate($tpl_id,$tpl_content);
```
tpl_id：商户用于控制模版的唯一性，长度不超过999。（可以使用时间戳保证唯一性），长度不超过30。例如：20140709150010

tpl_content：模板内容信息，遵循JSON规范，长度不超过99999。详情参见：[tpl_content参数说明](https://doc.open.alipay.com/doc2/detail.htm?treeId=193&articleId=105249&docType=1#tpl_content)


#### 卡券实例发放
```php
$app['pass']->addInstance($tpl_id,$tpl_params,$recognition_type,$recognition_info);
```
tpl_id：商户用于控制模版的唯一性，长度不超过999。例如：20140709150010

tpl_params：模版动态参数信息：对应模板中$变量名$的动态参数，见模板创建接口返回值中的tpl_params字段，长度不超过99999。

recognition_type：Alipass添加对象识别类型：1–订单信息。长度不超过999。

recognition_info：支付宝用户识别信息，长度不超过999。 包括partner_id（商户的签约账号）和out_trade_no（某笔订单号）。例如：{"partner_id":"2088102114633762","out_trade_no":"1234567"}

#### 卡券实例更新
```php
$app['pass']->updateInstance($serial_number,$channel_id,$tpl_params,$status,$verify_code,$verify_type);
```
参数说明

serial_number：商户指定卡券唯一值，卡券JSON模板中fileInfo->serialNumber字段对应的值，长度不超过999。

channel_id：代理商代替商户发放卡券后，再代替商户更新卡券时，此值为商户的pid/appid，长度不超过999。

tpl_params：对应模板中$变量名$的动态参数，见模板创建接口返回值中的tpl_params字段，长度不超过99999。

status：券状态，支持更新为USED、CLOSED两种状态

verify_code：核销码串值【当状态变更为USED时，建议传】。该值正常为模板中核销区域（Operation）对应的message值。长度不超过999。

verify_type：核销方式，该值正常为模板中核销区域（Operation）对应的format值。verify_code和verify_type需同时传入，长度不超过99999。

#### tpl_content示例
```php
{
	"logo": "https://alipass.alipay.com//temps/free/logo.png",
	"strip": "https://alipass.alipay.com//temps/free/strip.png",
	"icon": "http://alipassprod.test.alipay.net/temps/free/icon.png",
	"content": {
		"evoucherInfo": {
			"title": "优惠券",
			"type": "boardingPass",
			"product": "free",
			"startDate": "2019-07-25 15:05:22",
			"endDate": "2029-12-31 23:59:59",
			"operation": [{
				"message": "$ackCode$",
				"messageEncoding": "UTF-8",
				"format": "barcode",
				"altText": "$ackCode$"
			}],
			"einfo": {
				"logoText": "优惠券",
				"headFields": [{
					"key": "status",
					"label": "状态",
					"value": "可使用",
					"type": "text"
				}],
				"primaryFields": [{
					"key": "strip",
					"label": "",
					"value": "凭此券即可抵扣1元",
					"type": "text"
				}],
				"secondaryFields": [{
					"key": "validDate",
					"label": "有效期至：",
					"value": "2029-12-31 23:59:59",
					"type": "text"
				}],
				"auxiliaryFields": [{
					"key": "key_1",
					"label": "",
					"value": "卡券Demo演示",
					"type": "text"
				}],
				"backFields": [{
					"key": "description",
					"label": "详情描述",
					"value": "1.该优惠有效期：截止至2029年12月31日；2.凭此券可以享受以下优惠：享门抵扣1元不与其他优惠同享。详询商家。",
					"type": "text"
				}]
			},
			"locations": [],
			"remindInfo": {
				"offset": "2"
			}
		},
		"merchant": {
			"mname": "君泓测试",
			"mtel": "",
			"minfo": ""
		},
		"platform": {
			"channelID": "2088201564809153",
			"webServiceUrl": "https://alipass.alipay.com/builder/syncRecord.htm?tempId=2019030622051381011176571"
		},
		"style": {
			"backgroundColor": "RGB(255,126,0)"
		},
		"fileInfo": {
			"formatVersion": "2",
			"canShare": true,
			"canBuy": false,
			"canPresent": false,
			"serialNumber": "$serialNumber$",
			"supportTaxi": "false",
			"taxiSchemaUrl": "alipays://platformapi/startapp?appId=20000778&bizid=260&channel=71322"
		},
		"appInfo": {
			"app": {
				"android_appid": "com.taobao.ecoupon",
				"ios_appid": "taobaolife://",
				"android_launch": "com.taobao.ecoupon",
				"ios_launch": "taobaolife://",
				"android_download": "http://download.taobaocdn.com/freedom/17988/andriod/Ecoupon_2.0.1_taobao_wap.apk",
				"ios_download": "https://itunes.apple.com/cn/app/id583295537"
			},
			"label": "券券APP",
			"message": "点击调起APP"
		},
		"source": "alipassprod",
		"alipayVerify": ["qrcode", "barcode", "text", "wave"]
	}
}
```