<?php

namespace EasyAlipay\Payment\Cancel;

use EasyAlipay\Kernel\AopClient;
use EasyAlipay\Kernel\AopRequest;
use EasyAlipay\Payment\Model\AlipayTradeCancelContentBuilder;

class Client extends AopClient
{
    public function cancel(string $out_trade_no)
    {
        //构造查询业务请求参数对象
        $cancelContentBuilder = new AlipayTradeCancelContentBuilder();
        $cancelContentBuilder->setOutTradeNo($out_trade_no);
        $request = new AopRequest ();
        $request->setBizContent($cancelContentBuilder->getBizContent());
        $request->setApiMethodName("alipay.trade.cancel");
        return($this->execute($request, NULL, NULL)) ;
    }
}
