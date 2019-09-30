<?php

namespace EasyAlipay\Mini\Model;

/* *
 * 功能：zoloz.identification.user.web.query（人脸采集结果查询接口）接口业务参数封装
 * 前置条件：https://docs.alipay.com/mini/introduce/facecapture，调用JSAPI（faceVerify）唤起人脸采集，整个采集过程完全由人脸内部实现，采集完成后，通过回调函数返回采集结果。调用查询接口（zoloz.identification.user.web.query）获取可信的采集结果，如果采集成功，可通过此接口获取采集的人脸照片。
 */
class ZolozIdentificationUserWebQueryContentBuilder
{  
    // 商户请求的唯一标识，须与初始化传入的bizId保持一致。
    private $bizId;
    
    // 刷脸认证的唯一标识，用于查询认证结果
    private $zimId;

    // 扩展参数
    private $externParam;


    private $bizContentarr = array();

    private $bizContent = NULL;

    public function getBizContent()
    {
        if(!empty($this->bizContentarr)){
            $this->bizContent = json_encode($this->bizContentarr,JSON_UNESCAPED_UNICODE);
        }
        return $this->bizContent;
    }

    public function getBizId()
    {
        return $this->bizId;
    }

    public function setBizId($bizId)
    {
        $this->bizId = $bizId;
        $this->bizContentarr['biz_id'] = $bizId;
    }

    public function getZimId()
    {
        return $this->zimId;
    }

    public function setZimId($zimId)
    {
        $this->zimId = $zimId;
        $this->bizContentarr['zim_id'] = $zimId;
    }

    public function getExternParam()
    {
        return $this->externParam;
    }

    public function setExternParam($externParam)
    {
        $this->externParam = $externParam;
        $this->bizContentarr['extern_param'] = $externParam;
    }

}

?>