<?php

namespace EasyAlipay\OpenPublic\Model;

/* *
 * 功能：alipay.open.public.life.msg.recall(生活号消息撤回接口)业务参数封装
 */
class AlipayOpenPublicLifeMsgRecallContentBuilder
{

    // 消息id
    private $messageId;
    
    private $bizContentarr = array();

    private $bizContent = NULL;

    public function getBizContent()
    {
        if(!empty($this->bizContentarr)){
            $this->bizContent = json_encode($this->bizContentarr,JSON_UNESCAPED_UNICODE);
        }
        return $this->bizContent;
    }

    public function getMessageId()
    {
        return $this->messageId;
    }

    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;
        $this->bizContentarr['message_id'] = $messageId;
    }
}

?>