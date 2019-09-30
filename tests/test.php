<?php
require __DIR__.'/../vendor/autoload.php';
use EasyAlipay\Factory;

$options = [
    'app_id'                   => '2016051900098985',
    'gateway_url'              => "https://openapi.alipaydev.com/gateway.do",//示例中使用的是沙箱环境网关，线上gateway_url：https://openapi.alipay.com/gateway.do
    'sign_type'                => "RSA",
    'charset'                  => "UTF-8",
    'alipay_public_key'        => 'MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDIgHnOn7LLILlKETd6BFRJ0GqgS2Y3mn1wMQmyh9zEyWlz5p1zrahRahbXAfCfSqshSNfqOmAQzSHRVjCqjsAw1jyqrXaPdKBmr90DIpIxmIyKXv4GGAkPyJ/6FTFY99uhpiq0qadD/uSzQsefWo0aTvP/65zi3eof7TcZ32oWpwIDAQAB',
    'merchant_private_key'     => 'MIICdwIBADANBgkqhkiG9w0BAQEFAASCAmEwggJdAgEAAoGBAJlJ7tgZ4vI2Nnxt7DzznbhVwGN8INQ1s/ZnXYgtRMmvbNKLTHZ1SbRmiAKixn3TDbzkHMvo0jY7ldb7puqUJUKZuKfVwaRcAYgI6NamflqtTDWhSq+hPZ5ZrB36lx7N7AxlMD038WvJC5pHbld06DDxhlUslS3pJCGrB9P6HO0RAgMBAAECgYArrFTQXQ+70pZTfT4BX6dgDY5yybrQuzw6x9huI/elPsXSdr2iQmhtbYjyt022K5uOZa+OqRa7PN7EEY7M5sh2cFRX5P77o2vN61Gwklc11iaJIpPgUOZUmAG8jHnj3lf40+YtMwdPxQfbiZ36UOebQYPc8iuJczUNoVtSPP3IwQJBAMZzCSV7pjTQ4mp2MNT/h3/5ZhaQnqlO4wm0etekKDDTrpvUlSN8MjRjhyJhRvulKd0zUdfrjASEUjZhsZydEAMCQQDFviiKquR0TgYK0eircDwR89XHUBKoblPLYi/GSdPXSL92AzyvDIyNF/GPwHOkc1c+BA/4ocuW/T+u4KfYWBRbAkEAvV/Rfp98gDJFnmqjNt+SIqGQtj/T6KWLKxu7jkTsxYt7uOEoYPCHyE6iCkDiSAnY5Wmv1GjG+Rh8i8C2iUmomQJBAIaeVmtQvAaRt3tWO9e6qKpwHXF7Cbiwo0sqpOuRBy7gz7c/rOhe2rCTRFhg5FloTFRj35ucSkWYUupy9tFJ5VECQDyK++bn0ZpJG/HRNJHvuKOSUM8U6LSvQrTGpyvKlj5wLcOniDAYEcCzkapY/wHAUMshD0eoFY2X3F/3PcuIgW4=',
    // ...
];

//本测试用例提供的是沙箱环境的配置信息，线上调用请更改为自己应用对应的信息
//app_id，alipay_public_key（支付宝公钥），merchant_private_key（应用私钥）为必填项
//gateway_url不设置就默认线上网关
//sign_type 不设置就默认RSA2（目前线上环境支持RSA）
//charset  不设置就默认UTF-8


//接口测试用例
$app = Factory::payment($options);
var_dump($app['query']->query("1561946980099_demo_pay"));
