<?php

namespace EasyAlipay\OpenPublic\Model;

/* *
 * 功能：alipay.open.public.message.content.modify (更新图文消息内容接口)业务参数封装
 */
class AlipayOpenPublicMessageContentModifyContentBuilder
{

    // 内容id 
    private $contentId;
    // 标题
    private $title;
    // 封面图url, 尺寸为996*450，最大不超过3M，支持格式:.jpg、.png ，请先调用图片上传接口(https://docs.open.alipay.com/api_3/alipay.offline.material.image.upload)获得图片url
    private $cover; 
    // 消息正文（支持富文本）
    private $content; 
    // 是否允许评论 T:允许 F:不允许，默认不允许
    private $couldComment; 
    // 图文类型 activity: 活动图文，不填默认普通图文
    private $ctype; 
    // 活动利益点，图文类型ctype为activity类型时才需要传，最多10个字符
    private $benefit; 
    // 关键词列表，英文逗号分隔，最多不超过5个
    private $extTags; 
    // 可预览支付宝账号列表，需要预览时才填写，英文逗号分隔，最多不超过10个
    private $loginIds; 
    
    private $bizContentarr = array();

    private $bizContent = NULL;

    public function getBizContent()
    {
        if(!empty($this->bizContentarr)){
            $this->bizContent = json_encode($this->bizContentarr,JSON_UNESCAPED_UNICODE);
        }
        return $this->bizContent;
    }

    public function getContentId()
    {
        return $this->contentId;
    }

    public function setContentId($contentId)
    {
        $this->contentId = $contentId;
        $this->bizContentarr['content_id'] = $contentId;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        $this->bizContentarr['title'] = $title;
    }

    public function getCover()
    {
        return $this->cover;
    }

    public function setCover($cover)
    {
        $this->cover = $cover;
        $this->bizContentarr['cover'] = $cover;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
        $this->bizContentarr['content'] = $content;
    }

    public function getCouldComment()
    {
        return $this->couldComment;
    }

    public function setCouldComment($couldComment)
    {
        $this->couldComment = $couldComment;
        $this->bizContentarr['could_comment'] = $couldComment;
    }

    public function getCtype()
    {
        return $this->ctype;
    }

    public function setCtype($ctype)
    {
        $this->ctype = $ctype;
        $this->bizContentarr['ctype'] = $ctype;
    }

    public function getBenefit()
    {
        return $this->benefit;
    }

    public function setBenefit($benefit)
    {
        $this->benefit = $benefit;
        $this->bizContentarr['benefit'] = $benefit;
    }

    public function getExtTags()
    {
        return $this->extTags;
    }

    public function setExtTags($extTags)
    {
        $this->extTags = $extTags;
        $this->bizContentarr['ext_tags'] = $extTags;
    }

    public function getLoginIds()
    {
        return $this->loginIds;
    }

    public function setLoginIds($loginIds)
    {
        $this->loginIds = $loginIds;
        $this->bizContentarr['login_ids'] = $loginIds;
    }
}

?>