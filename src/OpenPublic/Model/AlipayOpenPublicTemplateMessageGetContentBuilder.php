<?php

namespace EasyAlipay\OpenPublic\Model;

/* *
 * 功能：alipay.open.public.template.message.get(消息模板领取接口)业务参数封装
 */
class AlipayOpenPublicTemplateMessageGetContentBuilder
{

    // 消息母板id，登陆生活号后台(fuwu.alipay.com)，点击菜单“模板消息”，点击“模板库”，即可看到相应模板的消息母板id
    private $templateId;

    private $bizContentarr = array();

    private $bizContent = NULL;

    public function getBizContent()
    {
        if(!empty($this->bizContentarr)){
            $this->bizContent = json_encode($this->bizContentarr,JSON_UNESCAPED_UNICODE);
        }
        return $this->bizContent;
    }

    public function getTemplateId()
    {
        return $this->templateId;
    }

    public function setTemplateId($templateId)
    {
        $this->templateId = $templateId;
        $this->bizContentarr['template_id'] = $templateId;
    }
}

?>