<?php

namespace EasyAlipay\OpenPublic\Model;

/* *
 * 功能：alipay.open.public.template.message.industry.modify(模板消息行业设置修改接口)业务参数封装
 */
class AlipayOpenPublicTemplateMessageIndustryModifyContentBuilder
{

    // 服务窗消息模板所属主行业一/二级名称，查看行业信息:https://alipay.open.taobao.com/doc2/detail?treeId=197&docType=1&articleId=105043
    private $primaryIndustryName;

    // 服务窗消息模板所属主行业一/二级编码
    private $primaryIndustryCode;

    // 服务窗消息模板所属副行业一/二级编码
    private $secondaryIndustryCode;

    // 服务窗消息模板所属副行业一/二级名称
    private $secondaryIndustryName;

    private $bizContentarr = array();

    private $bizContent = NULL;

    public function getBizContent()
    {
        if(!empty($this->bizContentarr)){
            $this->bizContent = json_encode($this->bizContentarr,JSON_UNESCAPED_UNICODE);
        }
        return $this->bizContent;
    }

    public function getPrimaryIndustryName()
    {
        return $this->primaryIndustryName;
    }

    public function setPrimaryIndustryName($primaryIndustryName)
    {
        $this->primaryIndustryName = $primaryIndustryName;
        $this->bizContentarr['primary_industry_name'] = $primaryIndustryName;
    }

    public function getPrimaryIndustryCode()
    {
        return $this->primaryIndustryCode;
    }

    public function setPrimaryIndustryCode($primaryIndustryCode)
    {
        $this->primaryIndustryCode = $primaryIndustryCode;
        $this->bizContentarr['primary_industry_code'] = $primaryIndustryCode;
    }

    public function getSecondaryIndustryCode()
    {
        return $this->secondaryIndustryCode;
    }

    public function setSecondaryIndustryCode($secondaryIndustryCode)
    {
        $this->secondaryIndustryCode = $secondaryIndustryCode;
        $this->bizContentarr['secondary_industry_code'] = $secondaryIndustryCode;
    }

    public function getSecondaryIndustryName()
    {
        return $this->secondaryIndustryName;
    }

    public function setSecondaryIndustryName($secondaryIndustryName)
    {
        $this->secondaryIndustryName = $secondaryIndustryName;
        $this->bizContentarr['secondary_industry_name'] = $secondaryIndustryName;
    }
}

?>