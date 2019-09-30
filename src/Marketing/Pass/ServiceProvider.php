<?php

namespace EasyAlipay\Marketing\Pass;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}.
     */
    public function register(Container $app)
    {
    	// var_dump($app);
        $app['pass'] = function ($app) {
            return new Client($app);
        };
    }
}
