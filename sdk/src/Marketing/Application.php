<?php

namespace EasyAlipay\Marketing;

use EasyAlipay\Kernel\ServiceContainer;

/**
 * Class Application.
 *
 * @property \EasyAlipay\Marketing\Pass\Client             $pass
 *
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        Pass\ServiceProvider::class,
    ];
}
