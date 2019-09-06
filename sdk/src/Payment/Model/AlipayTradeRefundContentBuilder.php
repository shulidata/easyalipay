<?php

namespace EasyAlipay\Payment\Model;

/* *
 * 功能：alipay.trade.refund(统一收单交易退款接口)接口业务参数封装
 */
class AlipayTradeRefundContentBuilder
{

    // 商户订单号.
    private $outTradeNo;

    // 支付宝交易号
    private $tradeNo;

    // 退款的金额
    private $refundAmount;

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

    public function getRefundAmount()
    {
        return $this->refundAmount;
    }

    public function setRefundAmount($refundAmount)
    {
        $this->refundAmount = $refundAmount;
        $this->bizContentarr['refund_amount'] = $refundAmount;
    }
}

?>