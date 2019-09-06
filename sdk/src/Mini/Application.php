<?php

namespace EasyAlipay\Mini;

use EasyAlipay\Kernel\ServiceContainer;

/**
 * Class Application.
 *
 * @property \EasyAlipay\Mini\Identification\Client   $identification
 * @property \EasyAlipay\Mini\Qrcode\Client           $qrcode
 * @property \EasyAlipay\Mini\TemplateMessage\Client  $templateMessage
 * @property \EasyAlipay\Mini\Risk\Client             $risk
 *
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        Identification\ServiceProvider::class,
        Qrcode\ServiceProvider::class,
        TemplateMessage\ServiceProvider::class,
        Risk\ServiceProvider::class,
    ];
}
