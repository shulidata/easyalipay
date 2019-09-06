<?php

namespace EasyAlipay\Mini\Risk;

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
        $app['risk'] = function ($app) {
            return new Client($app);
        };
    }
}
