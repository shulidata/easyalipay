<?php

namespace EasyAlipay\Mini\Risk;

use EasyAlipay\Kernel\AopClient;
use EasyAlipay\Kernel\AopRequest;
use EasyAlipay\Mini\Model\AlipaySecurityRiskContentDetectContentBuilder;

class Client extends AopClient
{

    public function detectContent(string $content)
    {
        //构造查询业务请求参数对象
        $riskContentBuilder = new AlipaySecurityRiskContentDetectContentBuilder();
        $riskContentBuilder->setContent($content);
        $request = new AopRequest ();
        $request->setBizContent($riskContentBuilder->getBizContent());
        $request->setApiMethodName("alipay.security.risk.content.detect");
        return($this->execute($request, NULL, NULL)) ;
    }

}
