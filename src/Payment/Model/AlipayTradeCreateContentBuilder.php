<?php

namespace EasyAlipay\Payment\Model;

/* *
 * 功能：alipay.trade.create (统一收单交易关闭接口)业务参数封装
 */
class AlipayTradeCreateContentBuilder
{

    // 商户订单号.
    private $outTradeNo;
    
    // 订单标题，粗略描述用户的支付目的。
    private $subject;

    // 订单总金额，整形，此处单位为元，精确到小数点后2位，不能超过1亿元
    private $totalAmount;

    //买家的支付宝唯一用户号（2088开头的16位纯数字)
    private $buyerId;

    private $bizContentarr = array();

    private $bizContent = NULL;

    public function getBizContent()
    {
        if(!empty($this->bizContentarr)){
            $this->bizContent = json_encode($this->bizContentarr,JSON_UNESCAPED_UNICODE);
        }
        return $this->bizContent;
    }

    public function getTradeNo()
    {
        return $this->tradeNo;
    }

    public function setTradeNo($tradeNo)
    {
        $this->tradeNo = $tradeNo;
        $this->bizContentarr['trade_no'] = $tradeNo;
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

    public function getBuyerId()
    {
    	return $this->buyerId;
    }
    
    public function setBuyerId($buyerId)
    {
    	$this->buyerId = $buyerId;
    	$this->bizContentarr['buyer_id'] = $buyerId;
    }

}

?>