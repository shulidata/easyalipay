<?php

namespace EasyAlipay\Mini\Model;

/* *
 * 功能：alipay.security.risk.content.detect(小程序内容风险检测服务) 业务参数封装
 */
class AlipaySecurityRiskContentDetectContentBuilder
{

    // 需要识别的文本，不要包含特殊字符以及双引号等可能引起json格式化错误问题的字符.
    private $content;
    
    private $bizContentarr = array();

    private $bizContent = NULL;

    public function getBizContent()
    {
        if(!empty($this->bizContentarr)){
            $this->bizContent = json_encode($this->bizContentarr,JSON_UNESCAPED_UNICODE);
        }
        return $this->bizContent;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
        $this->bizContentarr['content'] = $content;
    }
}

?>