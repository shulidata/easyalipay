<?php

namespace EasyAlipay\OpenPublic\Model;

/* *
 * 功能：alipay.open.public.message.single.send(单发模板消息)业务参数封装
 */
class AlipayOpenPublicMessageSingleSendContentBuilder
{

    // 消息接收用户的userid
    private $toUserId;
    
    // 消息模板相关参数，其中包括templateId模板ID和context模板上下文
    private $template;

    private $bizContentarr = array();

    private $bizContent = NULL;

    public function getBizContent()
    {
        if(!empty($this->bizContentarr)){
            $this->bizContent = json_encode($this->bizContentarr,JSON_UNESCAPED_UNICODE);
        }
        return $this->bizContent;
    }

    public function getToUserId()
    {
        return $this->toUserId;
    }

    public function setToUserId($toUserId)
    {
        $this->toUserId = $toUserId;
        $this->bizContentarr['to_user_id'] = $toUserId;
    }

    public function getTemplate()
    {
        return $this->template;
    }

    public function setTemplate($template)
    {
        $this->template = $template;
        $this->bizContentarr['template'] = $template;
    }

}

?>