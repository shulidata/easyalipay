<?php

namespace EasyAlipay\Payment\Model;

/* *
 * 功能：alipay.trade.pay(统一收单交易支付接口)接口业务参数封装
 */
class AlipayTradePayContentBuilder
{  
    // 商户订单号.
    private $outTradeNo;

    // 支付场景 
    private $scene;

    // 支付授权码
    private $authCode;

    // 订单标题，粗略描述用户的支付目的。
    private $subject;

    // 订单总金额，整形，此处单位为元，精确到小数点后2位，不能超过1亿元
    private $totalAmount;


    private $bizContentarr = array();

    private $bizContent = NULL;

    public function getBizContent()
    {
        if(!empty($this->bizContentarr)){
            $this->bizContent = json_encode($this->bizContentarr,JSON_UNESCAPED_UNICODE);
        }
        return $this->bizContent;
    }

    public function getOutTradeNo()
    {
        return $this->outTradeNo;
    }

    public function setOutTradeNo($outTradeNo)
    {
        $this->outTradeNo = $outTradeNo;
        $this->bizContentarr['out_trade_no'] = $outTradeNo;
    }

    public function getScene()
    {
        return $this->scene;
    }

    public function setScene($scene)
    {
        $this->scene = $scene;
        $this->bizContentarr['scene'] = $scene;
    }


    public function getAuthCode()
    {
        return $this->authCode;
    }

    public function setAuthCode($authCode)
    {
        $this->authCode = $authCode;
        $this->bizContentarr['authCode'] = $authCode;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
        $this->bizContentarr['subject'] = $subject;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
        $this->bizContentarr['total_amount'] = $totalAmount;
    }

    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

}

?>