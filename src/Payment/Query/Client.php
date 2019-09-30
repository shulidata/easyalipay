<?php

namespace EasyAlipay\Payment\Query;

use EasyAlipay\Kernel\AopClient;
use EasyAlipay\Kernel\AopRequest;
use EasyAlipay\Payment\Model\AlipayTradeQueryContentBuilder;

class Client extends AopClient
{
    public function query(string $out_trade_no)
    {
        //构造查询业务请求参数对象
        $queryContentBuilder = new AlipayTradeQueryContentBuilder();
        $queryContentBuilder->setOutTradeNo($out_trade_no);
        $request = new AopRequest ();
        $request->setBizContent($queryContentBuilder->getBizContent());
        $request->setApiMethodName("alipay.trade.query");
        return($this->execute($request, NULL, NULL)) ;
    }
}


