<?php

namespace EasyAlipay\Payment\Refund;

use EasyAlipay\Kernel\AopClient;
use EasyAlipay\Kernel\AopRequest;
use EasyAlipay\Payment\Model\AlipayTradeRefundContentBuilder;

class Client extends AopClient
{
    public function refund(string $out_trade_no,string $refund_amount)
    {
        //构造查询业务请求参数对象
        $refundContentBuilder = new AlipayTradeRefundContentBuilder();
        $refundContentBuilder->setOutTradeNo($out_trade_no);
        $refundContentBuilder->setRefundAmount($refund_amount);
        $request = new AopRequest ();
        $request->setBizContent($refundContentBuilder->getBizContent());
        $request->setApiMethodName("alipay.trade.refund");
        return($this->execute($request, NULL, NULL)) ;
    }
}
