<?php

namespace EasyAlipay\OpenPublic\Template;

use EasyAlipay\Kernel\AopClient;
use EasyAlipay\Kernel\AopRequest;
use EasyAlipay\OpenPublic\Model\AlipayOpenPublicTemplateMessageGetContentBuilder;
use EasyAlipay\OpenPublic\Model\AlipayOpenPublicTemplateMessageIndustryModifyContentBuilder;

class Client extends AopClient
{

    public function setIndustry(string $primary_industry_name,string $primary_industry_code,string $secondary_industry_code,string $secondary_industry_name)
    {
        //构造查询业务请求参数对象
        $industryModifyContentBuilder = new AlipayOpenPublicTemplateMessageIndustryModifyContentBuilder();
        $industryModifyContentBuilder->setPrimaryIndustryName($primary_industry_name);
        $industryModifyContentBuilder->setPrimaryIndustryCode($primary_industry_code);
        $industryModifyContentBuilder->setSecondaryIndustryCode($secondary_industry_code);
        $industryModifyContentBuilder->setSecondaryIndustryName($secondary_industry_name);
        $request = new AopRequest ();
        $request->setBizContent($industryModifyContentBuilder->getBizContent());
        $request->setApiMethodName("alipay.open.public.template.message.industry.modify");
        return($this->execute($request, NULL, NULL)) ;
    }

    public function getIndustry()
    {
        //构造查询业务请求参数对象
        $request = new AopRequest ();
        $request->setApiMethodName("alipay.open.public.setting.category.query");
        return($this->execute($request, NULL, NULL)) ;
    }

    public function getTemplate(string $template_id)
    {
        //构造查询业务请求参数对象
        $getContentBuilder = new AlipayOpenPublicTemplateMessageGetContentBuilder();
        $getContentBuilder->setTemplateId($template_id);
        $request = new AopRequest ();
        $request->setBizContent($getContentBuilder->getBizContent());
        $request->setApiMethodName("alipay.open.public.template.message.get");
        return($this->execute($request, NULL, NULL)) ;
    }

}
