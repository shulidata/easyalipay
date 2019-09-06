<?php

namespace EasyAlipay\Mini\Model;

/* *
 * 功能：alipay.open.app.mini.templatemessage.send(小程序发送模板消息) 业务参数封装
 * 前置条件：https://docs.alipay.com/mini/introduce/message
 */
class AlipayOpenAppMiniTemplatemessageSendContentBuilder
{

    // 发送消息的用户userid，例如:2088102122458832
    private $toUserId;

    // 用户发生的交易行为的交易号，或者用户在小程序产生表单提交的表单号，用于信息发送的校验，例如:2017010100000000580012345678
    private $formId;

    // 用户申请的模板id号，固定的模板id会发送固定的消息，例如:MDI4YzIxMDE2M2I5YTQzYjUxNWE4MjA4NmU1MTIyYmM=
    private $userTemplateId;

    // 小程序的跳转页面，用于消息中心用户点击之后详细跳转的小程序页面，例如:page/component/index
    private $page;

    // 开发者需要发送模板消息中的自定义部分来替换模板的占位符，例如:{"keyword1": {"value" : "12:00"},"keyword2": {"value" : "20180808"},"keyword3": {"value" : "支付宝"}}
    private $data;

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

    public function getFormId()
    {
        return $this->formId;
    }

    public function setFormId($formId)
    {
        $this->formId = $formId;
        $this->bizContentarr['form_id'] = $formId;
    }

    public function getUserTemplateId()
    {
        return $this->userTemplateId;
    }

    public function setUserTemplateId($userTemplateId)
    {
        $this->userTemplateId = $userTemplateId;
        $this->bizContentarr['user_template_id'] = $userTemplateId;
    }

    public function getPage()
    {
        return $this->page;
    }

    public function setPage($page)
    {
        $this->page = $page;
        $this->bizContentarr['page'] = $page;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
        $this->bizContentarr['data'] = $data;
    }
}

?>