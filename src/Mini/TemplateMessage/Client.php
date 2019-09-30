<?php

namespace EasyAlipay\Mini\TemplateMessage;

use EasyAlipay\Kernel\AopClient;
use EasyAlipay\Kernel\AopRequest;
use EasyAlipay\Mini\Model\AlipayOpenAppMiniTemplatemessageSendContentBuilder;

class Client  extends AopClient
{
    public function send(string $to_user_id,string $form_id,string $user_template_id,string $page,string $data)
    {
        //构造查询业务请求参数对象
        $sendContentBuilder = new AlipayOpenAppMiniTemplatemessageSendContentBuilder();
        $sendContentBuilder->setToUserId($to_user_id);
        $sendContentBuilder->setFormId($form_id);
        $sendContentBuilder->setUserTemplateId($user_template_id);
        $sendContentBuilder->setPage($page);
        $sendContentBuilder->setData($data);
        $request = new AopRequest ();
        $request->setBizContent($sendContentBuilder->getBizContent());
        $request->setApiMethodName("alipay.open.app.mini.templatemessage.send");
        return($this->execute($request, NULL, NULL)) ;
    }

}
