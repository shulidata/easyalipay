<?php

namespace EasyAlipay\OpenPublic\Message;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['message'] = function ($app) {
            return new Client($app);
        };
    }
}
