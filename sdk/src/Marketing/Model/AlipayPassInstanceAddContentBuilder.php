<?php

namespace EasyAlipay\Marketing\Model;

/* *
 * 功能：alipay.pass.instance.add (卡券实例发放接口)业务参数封装
 */
class AlipayPassInstanceAddContentBuilder
{

    // 支付宝pass模版ID，即调用模板创建接口时返回的tpl_id
    private $tplId;
    
    // 模版动态参数信息：对应模板中$变量名$的动态参数，见模板创建接口返回值中的tpl_params字段
    private $tplParams;

    // Alipass添加对象识别类型：1–订单信息
    private $recognitionType;

    // 支付宝用户识别信息：uid发券组件。对接文档：https://docs.open.alipay.com/199/sy3hs4
    private $recognitionInfo;

    private $bizContentarr = array();

    private $bizContent = NULL;

    public function getBizContent()
    {
        if(!empty($this->bizContentarr)){
            $this->bizContent = json_encode($this->bizContentarr,JSON_UNESCAPED_UNICODE);
        }
        return $this->bizContent;
    }

    public function getTplId()
    {
        return $this->tplId;
    }

    public function setTplId($tplId)
    {
        $this->tplId = $tplId;
        $this->bizContentarr['tpl_id'] = $tplId;
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

    public function getRecognitionType()
    {
        return $this->recognitionType;
    }

    public function setRecognitionType($recognitionType)
    {
        $this->recognitionType = $recognitionType;
        $this->bizContentarr['recognition_type'] = $recognitionType;
    }


    public function getRecognitionInfo()
    {
    	return $this->recognitionInfo;
    }
    
    public function setRecognitionInfo($recognitionInfo)
    {
    	$this->recognitionInfo = $recognitionInfo;
    	$this->bizContentarr['recognition_info'] = $recognitionInfo;
    }

}
