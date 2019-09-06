<?php

namespace EasyAlipay\Mini\Identification;

use EasyAlipay\Kernel\AopClient;
use EasyAlipay\Kernel\AopRequest;
use EasyAlipay\Mini\Model\ZolozIdentificationCustomerCertifyzhubQueryContentBuilder;
use EasyAlipay\Mini\Model\ZolozIdentificationUserWebQueryContentBuilder;

class Client extends AopClient
{

    public function queryCertifyzhub(string $biz_id,string $zim_id)
    {
        //构造查询业务请求参数对象
        $zhubQueryContentBuilder = new ZolozIdentificationCustomerCertifyzhubQueryContentBuilder();
        $zhubQueryContentBuilder->setBizId($biz_id);
        $zhubQueryContentBuilder->setZimId($zim_id);
        $zhubQueryContentBuilder->setFaceType(2);
        $request = new AopRequest ();
        $request->setBizContent($zhubQueryContentBuilder->getBizContent());
        $request->setApiMethodName("zoloz.identification.customer.certifyzhub.query");
        return($this->execute($request, NULL, NULL)) ;
    }

    public function queryUserWeb(string $biz_id,string $zim_id,string $extern_param)
    {
        //构造查询业务请求参数对象
        $userWebQueryContentBuilder = new ZolozIdentificationUserWebQueryContentBuilder();
        $userWebQueryContentBuilder->setBizId($biz_id);
        $userWebQueryContentBuilder->setZimId($zim_id);
        $userWebQueryContentBuilder->setExternParam($extern_param);
        $request = new AopRequest ();
        $request->setBizContent($userWebQueryContentBuilder->getBizContent());
        $request->setApiMethodName("zoloz.identification.user.web.query");
        return($this->execute($request, NULL, NULL)) ;
    }

}
