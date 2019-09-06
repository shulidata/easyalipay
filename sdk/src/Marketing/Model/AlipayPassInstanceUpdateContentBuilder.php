<?php

namespace EasyAlipay\Marketing\Model;

/* *
 * alipay.pass.instance.update(卡券实例更新接口)业务参数封装
 */
class AlipayPassInstanceUpdateContentBuilder
{  
    // 商户指定卡券唯一值，卡券JSON模板中fileInfo->serialNumber字段对应的值
    private $serialNumber;
    
    // 代理商代替商户发放卡券后，再代替商户更新卡券时，此值为商户的pid/appid
    private $channelId;

    // 模版动态参数信息：对应模板中$变量名$的动态参数，见模板创建接口返回值中的tpl_params字段
    private $tplParams;

    // 券状态，支持更新为USED、CLOSED两种状态
    private $status;

    // 核销码串值【当状态变更为USED时，建议传】。该值正常为模板中核销区域（Operation）对应的message值。
    private $verifyCode;

    // 核销方式，该值正常为模板中核销区域（Operation）对应的format值。verify_code和verify_type需同时传入。
    private $verifyType;



    private $bizContentarr = array();

    private $bizContent = NULL;

    public function getBizContent()
    {
        if(!empty($this->bizContentarr)){
            $this->bizContent = json_encode($this->bizContentarr,JSON_UNESCAPED_UNICODE);
        }
        return $this->bizContent;
    }

    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
        $this->bizContentarr['serial_number'] = $serialNumber;
    }

    public function getChannelId()
    {
        return $this->channelId;
    }

    public function setChannelId($channelId)
    {
        $this->channelId = $channelId;
        $this->bizContentarr['channel_id'] = $channelId;
    }


    public function getTplParams()
    {
        return $this->tplParams;
    }

    public function setTplParams($tplParams)
    {
        $this->tplParams = $tplParams;
        $this->bizContentarr['tpl_params'] = $tplParams;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
        $this->bizContentarr['status'] = $status;
    }

    public function getVerifyCode()
    {
        return $this->verifyCode;
    }

    public function setVerifyCode($verifyCode)
    {
        $this->verifyCode = $verifyCode;
        $this->bizContentarr['verify_code'] = $verifyCode;
    }

    public function getVerifyType()
    {
        return $this->verifyType;
    }

    public function setVerifyType($verifyType)
    {
        $this->verifyType = $verifyType;
        $this->bizContentarr['verify_type'] = $verifyType;
    }

}
