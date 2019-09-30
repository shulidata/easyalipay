<?php

namespace EasyAlipay\Payment\Create;

use EasyAlipay\Kernel\AopClient;
use EasyAlipay\Kernel\AopRequest;
use EasyAlipay\Payment\Model\AlipayTradeCreateContentBuilder;

class Client extends AopClient
{
    public function create(string $subject,string $out_trade_no,string $total_amount,string $buyer_id)
    {
        //构造查询业务请求参数对象
        $createContentBuilder = new AlipayTradeCreateContentBuilder();
        $createContentBuilder->setSubject($subject);
        $createContentBuilder->setOutTradeNo($out_trade_no);
        $createContentBuilder->setTotalAmount($total_amount);
        $createContentBuilder->setBuyerId($buyer_id);
        $request = new AopRequest ();
        $request->setBizContent($createContentBuilder->getBizContent());
        $request->setApiMethodName("alipay.trade.create");
        return($this->execute($request, NULL, NULL)) ;
    }
}
