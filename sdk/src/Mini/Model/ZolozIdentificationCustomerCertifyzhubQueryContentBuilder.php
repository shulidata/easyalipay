<?php

namespace EasyAlipay\Mini\Model;

/* *
 * 功能：zoloz.identification.customer.certifyzhub.query （人脸结果查询接口）业务参数封装
 * 前置条件：https://docs.alipay.com/mini/introduce/alipay-face-verify，需要先调用接口 my.ap.faceVerify，传入入参 bizId 和 bizType 唤起刷脸认证，认证结束后，通过回调函数得到认证结果。确保业务参数 biz_id 和 faceVerify 中的入参 bizId 一致，否则会导致查询失败。
 */
class ZolozIdentificationCustomerCertifyzhubQueryContentBuilder
{

    // 业务单据号，用于核对和排查.需要先调用接口 my.ap.faceVerify，传入入参 bizId 和 bizType 唤起刷脸认证，认证结束后，通过回调函数得到认证结果。确保业务参数 biz_id 和 faceVerify 中的入参 bizId 一致，否则会导致查询失败。
    private $bizId;
    
    // 刷脸认证的唯一标识，用于查询认证结果
    private $zimId;

    // 0：匿名注册 1：匿名认证 2：实名认证
    private $faceType;

    // 是否需要返回人脸图片
    private $needImg;

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

    public function getFaceType()
    {
        return $this->faceType;
    }

    public function setFaceType($faceType)
    {
        $this->faceType = $faceType;
        $this->bizContentarr['face_type'] = $faceType;
    }

    public function getNeedImg()
    {
    	return $this->needImg;
    }
    
    public function setNeedImg($needImg)
    {
    	$this->needImg = $needImg;
    	$this->bizContentarr['need_img'] = $needImg;
    }

}

?>