<?php

namespace EasyAlipay\Marketing\Model;

/* *
 * 功能：alipay.pass.template.add (卡券模板创建接口)业务参数封装
 */
class AlipayPassTemplateAddContentBuilder
{

    // 商户用于控制模版的唯一性。（可以使用时间戳保证唯一性）
    private $uniqueId;

    // 模板内容信息，遵循JSON规范，详情参见tpl_content参数说明：https://doc.open.alipay.com/doc2/detail.htm?treeId=193&articleId=105249&docType=1#tpl_content
    private $tplContent;

    private $bizContentarr = array();

    private $bizContent = NULL;

    public function getBizContent()
    {
        if(!empty($this->bizContentarr)){
            $this->bizContent = json_encode($this->bizContentarr,JSON_UNESCAPED_UNICODE);
        }
        return $this->bizContent;
    }

    public function getUniqueId()
    {
        return $this->uniqueId;
    }

    public function setUniqueId($uniqueId)
    {
        $this->uniqueId = $uniqueId;
        $this->bizContentarr['unique_id'] = $uniqueId;
    }

    public function getTplContent()
    {
        return $this->tplContent;
    }

    public function setTplContent($tplContent)
    {
        $this->tplContent = $tplContent;
        $this->bizContentarr['tpl_content'] = $tplContent;
    }
}
