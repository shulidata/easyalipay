<?php

namespace EasyAlipay\Base\Oauth;

use EasyAlipay\Kernel\AopClient;
use EasyAlipay\Base\Model\AlipaySystemOauthTokenRequest;

class Client extends AopClient
{
    public function getToken(string $grant_type, string $code, string $refresh_token)
    {
        //构造查询业务请求参数对象
        $alipaySystemOauthTokenRequest = new AlipaySystemOauthTokenRequest();
        $alipaySystemOauthTokenRequest->setGrantType($grant_type);
        $alipaySystemOauthTokenRequest->setCode($code);
        $alipaySystemOauthTokenRequest->setRefreshToken($refresh_token);
        return($this->execute($alipaySystemOauthTokenRequest, NULL, NULL)) ;
    }
}
