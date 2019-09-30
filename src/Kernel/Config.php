<?php

namespace EasyAlipay\Kernel;

class Config 
{
	public $config = [
	//应用ID
    'app_id'                   => '',
    //支付宝公钥
    'alipay_public_key'        => '',
    //商户私钥
    'merchant_private_key'     => '',
    //网管地址
	'gateway_url'               => "https://openapi.alipay.com/gateway.do",
    //异步通知地址
	'notify_url'               => "",
	//同步跳转
	'return_url'               => "",
	//编码格式
	'charset'                  => "UTF-8",
	//签名方式,默认为RSA2(RSA2048)
	'sign_type'                =>"RSA2",
    // ...

    ];
}
