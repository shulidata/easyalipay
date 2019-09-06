<?php

namespace EasyAlipay\Payment\Query;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['query'] = function ($app) {
            return new Client($app);
        };
    }
}
