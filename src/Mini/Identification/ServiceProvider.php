<?php

namespace EasyAlipay\Mini\Identification;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['identification'] = function ($app) {
            return new Client($app);
        };
    }
}
