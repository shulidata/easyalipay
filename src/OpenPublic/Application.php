<?php

namespace EasyAlipay\OpenPublic;

use EasyAlipay\Kernel\ServiceContainer;

/**
 * Class Application.
 *
 * @property \EasyAlipay\OpenPublic\Message\Client          $message
 * @property \EasyAlipay\OpenPublic\Template\Client         $template
 *
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        Message\ServiceProvider::class,
        Template\ServiceProvider::class,
    ];
}
