<?php

namespace EasyAlipay\Payment\Model;

/* *
 * 功能：alipay.trade.query(统一收单线下交易查询)接口业务参数封装
 */
class AlipayTradeQueryContentBuilder
{

    // 商户订单号
    private $outTradeNo;

    // 支付宝交易号
    private $tradeNo;

    //银行间联模式下有用，其它场景请不要使用,双联通过该参数指定需要查询的交易所属收单机构的pid;
    private $orgPid;
    
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

    public function getOrgPid()
    {
        return $this->orgPid;
    }

    public function setOrgPid($orgPid)
    {
        $this->orgPid = $orgPid;
        $this->bizContentarr['org_pid'] = $orgPid;
    }
}

?>