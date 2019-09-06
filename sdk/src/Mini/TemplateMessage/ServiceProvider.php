<?php

namespace EasyAlipay\Mini\TemplateMessage;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['templateMessage'] = function ($app) {
            return new Client($app);
        };
    }
}
