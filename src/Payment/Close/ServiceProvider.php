<?php

namespace EasyAlipay\Payment\Close;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['close'] = function ($app) {
            return new Client($app);
        };
    }
}
