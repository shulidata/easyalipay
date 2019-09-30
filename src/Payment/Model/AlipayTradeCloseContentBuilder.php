<?php

namespace EasyAlipay\Payment\Model;

/* *
 * 功能：alipay.trade.close (统一收单交易关闭接口)业务参数封装
 */
class AlipayTradeCloseContentBuilder
{

    // 商户订单号.
    private $outTradeNo;

    // 支付宝交易号
    private $tradeNo;
    
    //卖家端自定义的的操作员 ID
    private $operatorId;

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

    public function getOperatorId()
    {
    	return $this->operatorId;
    }
    
    public function setOperatorId($operatorId)
    {
    	$this->operatorId = $operatorId;
    	$this->bizContentarr['operator_id'] = $operatorId;
    }
}

?>