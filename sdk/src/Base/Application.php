<?php

namespace EasyAlipay\Base;

use EasyAlipay\Kernel\ServiceContainer;

/**
 * Class Application.
 *
 * @property \EasyAlipay\Base\Image\Client            $image
 * @property \EasyAlipay\Base\Oauth\Client            $oauth
 * @property \EasyAlipay\Base\Video\Client            $video
 *
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        Oauth\ServiceProvider::class,
    ];
}
