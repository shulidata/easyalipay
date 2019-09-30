<?php

namespace EasyAlipay\Payment\Pay;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['pay'] = function ($app) {
            return new Client($app);
        };
    }
}
