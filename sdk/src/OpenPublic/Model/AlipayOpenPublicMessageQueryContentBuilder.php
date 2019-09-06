<?php

namespace EasyAlipay\OpenPublic\Model;

/* *
 * 功能：alipay.open.public.message.query(生活号查询已发送消息接口)业务参数封装
 */
class AlipayOpenPublicMessageQueryContentBuilder
{  
    // 消息id集，限制最多传入20个message_id。message_id在调用群发、组发消息接口时会返回，需调用方保存
    private $messageIds;

    private $bizContentarr = array();

    private $bizContent = NULL;

    public function getBizContent()
    {
        if(!empty($this->bizContentarr)){
            $this->bizContent = json_encode($this->bizContentarr,JSON_UNESCAPED_UNICODE);
        }
        return $this->bizContent;
    }

    public function getMessageIds()
    {
        return $this->messageIds;
    }

    public function setMessageIds($messageIds)
    {
        $this->messageIds = $messageIds;
        $this->bizContentarr['message_ids'] = $messageIds;
    }

}

?>