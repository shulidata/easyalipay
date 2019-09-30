<?php

namespace EasyAlipay\Mini\Model;

/* *
 * 功能：alipay.open.app.qrcode.create （小程序生成推广二维码接口）业务参数封装
 */
class AlipayOpenAppQrcodeCreateContentBuilder
{

    // 小程序中能访问到的页面路径，例如：page/component/component-pages/view/view
    private $urlParam;

    // 小程序的启动参数，打开小程序的query ，在小程序 onLaunch的方法中获取，例如：x=1
    private $queryParam;
    
    // 对应的二维码描述
    private $describe;

    private $bizContentarr = array();

    private $bizContent = NULL;

    public function getBizContent()
    {
        if(!empty($this->bizContentarr)){
            $this->bizContent = json_encode($this->bizContentarr,JSON_UNESCAPED_UNICODE);
        }
        return $this->bizContent;
    }

    public function getUrlParam()
    {
        return $this->urlParam;
    }

    public function setUrlParam($urlParam)
    {
        $this->urlParam = $urlParam;
        $this->bizContentarr['url_param'] = $urlParam;
    }

    public function getQueryParam()
    {
        return $this->queryParam;
    }

    public function setQueryParam($queryParam)
    {
        $this->queryParam = $queryParam;
        $this->bizContentarr['query_param'] = $queryParam;
    }

    public function getDescribe()
    {
    	return $this->describe;
    }
    
    public function setDescribe($describe)
    {
    	$this->describe = $describe;
    	$this->bizContentarr['describe'] = $describe;
    }
}

?>