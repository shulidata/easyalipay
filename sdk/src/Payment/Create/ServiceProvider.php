<?php

namespace EasyAlipay\Payment\Create;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['create'] = function ($app) {
            return new Client($app);
        };
    }
}
