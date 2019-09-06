<?php

namespace EasyAlipay\Payment\Pay;

use EasyAlipay\Kernel\AopClient;
use EasyAlipay\Kernel\AopRequest;
use EasyAlipay\Payment\Model\AlipayTradePayContentBuilder;

class Client extends AopClient
{
    public function pay(string $subject,string $out_trade_no,string $total_amount,string $auth_code)
    {
        //构造查询业务请求参数对象
        $payContentBuilder = new AlipayTradePayContentBuilder();
        $payContentBuilder->setSubject($subject);
        $payContentBuilder->setOutTradeNo($out_trade_no);
        $payContentBuilder->setTotalAmount($total_amount);
        $payContentBuilder->setScene("bar_code");
        $payContentBuilder->setAuthCode($auth_code);
        $request = new AopRequest ();
        $request->setBizContent($payContentBuilder->getBizContent());
        $request->setApiMethodName("alipay.trade.pay");
        return($this->execute($request, NULL, NULL)) ;
    }
}
