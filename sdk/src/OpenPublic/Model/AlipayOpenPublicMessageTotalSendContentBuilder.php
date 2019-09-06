<?php

namespace EasyAlipay\OpenPublic\Model;

/* *
 * 功能：alipay.open.public.message.total.send (群发消息)业务参数封装,详见：https://docs.open.alipay.com/api_6/alipay.open.public.message.total.send
 */
class AlipayOpenPublicMessageTotalSendContentBuilder
{

    // 消息类型，text：文本消息，image-text：图文消息
    private $msgType;

    // 图文消息，当msg_type为image-text，该值必须设置
    private $articles;
    
    // 文本消息内容，当msg_type为text，必须设置该值
    private $text;

    private $bizContentarr = array();

    private $bizContent = NULL;

    public function getBizContent()
    {
        if(!empty($this->bizContentarr)){
            $this->bizContent = json_encode($this->bizContentarr,JSON_UNESCAPED_UNICODE);
        }
        return $this->bizContent;
    }

    public function getMsgType()
    {
        return $this->msgType;
    }

    public function setMsgType($msgType)
    {
        $this->msgType = $msgType;
        $this->bizContentarr['msg_type'] = $msgType;
    }

    public function getArticles()
    {
        return $this->articles;
    }

    public function setArticles($articles)
    {
        $this->articles = $articles;
        $this->bizContentarr['articles'] = $articles;
    }

    public function getText()
    {
    	return $this->text;
    }
    
    public function setText($text)
    {
    	$this->text = $text;
    	$this->bizContentarr['text'] = $text;
    }
}

?>