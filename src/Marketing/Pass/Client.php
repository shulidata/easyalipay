<?php

namespace EasyAlipay\Marketing\Pass;

use EasyAlipay\Kernel\Support;
use EasyAlipay\Kernel\AopClient;
use EasyAlipay\Kernel\AopRequest;
use EasyAlipay\Kernel\Config;
use EasyAlipay\Marketing\Model\AlipayPassTemplateAddContentBuilder;
use EasyAlipay\Marketing\Model\AlipayPassTemplateUpdateContentBuilder;
use EasyAlipay\Marketing\Model\AlipayPassInstanceAddContentBuilder;
use EasyAlipay\Marketing\Model\AlipayPassInstanceUpdateContentBuilder;

class Client extends AopClient
{
    public function createTemplate(string $unique_id,string $tpl_content)
    {
        //构造查询业务请求参数对象
        $templateAddContentBuilder = new AlipayPassTemplateAddContentBuilder();
        $templateAddContentBuilder->setUniqueId($unique_id);
        $templateAddContentBuilder->setTplContent($tpl_content);
        $request = new AopRequest ();
        $request->setBizContent($templateAddContentBuilder->getBizContent());
        $request->setApiMethodName("alipay.pass.template.add");
        return($this->execute($request, NULL, NULL)) ;
    }

    public function updateTemplate(string $tpl_id,string $tpl_content)
    {
        //构造查询业务请求参数对象
        $templateUpdateContentBuilder = new AlipayPassTemplateUpdateContentBuilder();
        $templateUpdateContentBuilder->setTplId($tpl_id);
        $templateUpdateContentBuilder->setTplContent($tpl_content);
        $request = new AopRequest ();
        $request->setBizContent($templateUpdateContentBuilder->getBizContent());
        $request->setApiMethodName("alipay.pass.template.update");
        return($this->execute($request, NULL, NULL)) ;
    }

    public function addInstance(string $tpl_id,string $tpl_params,string $recognition_type,string $recognition_info)
    {
        //构造查询业务请求参数对象
        $addInstanceContentBuilder = new AlipayPassInstanceAddContentBuilder();
        $addInstanceContentBuilder->getTplId($tpl_id);
        $addInstanceContentBuilder->setTplParams($tpl_params);
        $addInstanceContentBuilder->setRecognitionType($recognition_type);
        $addInstanceContentBuilder->setRecognitionInfo($recognition_info);
        $request = new AopRequest ();
        $request->setBizContent($addInstanceContentBuilder->getBizContent());
        $request->setApiMethodName("alipay.pass.instance.add");
        return($this->execute($request, NULL, NULL)) ;
    }

    public function updateInstance(string $serial_number,string $channel_id,string $tpl_params,string $status,string $verify_code,string $verify_type)
    {
        //构造查询业务请求参数对象
        $updateInstanceContentBuilder = new AlipayPassInstanceUpdateContentBuilder();
        $updateInstanceContentBuilder->setSerialNumber($serial_number);
        $updateInstanceContentBuilder->setChannelId($channel_id);
        $updateInstanceContentBuilder->setTplParams($tpl_params);
        $updateInstanceContentBuilder->setStatus($status);
        $updateInstanceContentBuilder->setVerifyCode($verify_code);
        $updateInstanceContentBuilder->setVerifyType($verify_type);
        $request = new AopRequest ();
        $request->setBizContent($updateInstanceContentBuilder->getBizContent());
        $request->setApiMethodName("alipay.pass.instance.update");
        return($this->execute($request, NULL, NULL)) ;
    }

}
