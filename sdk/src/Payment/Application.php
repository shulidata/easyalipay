<?php

namespace EasyAlipay\Payment;

use EasyAlipay\Kernel\ServiceContainer;

/**
 * Class Application.
 *
 * @property \EasyAlipay\Payment\Cancel\Client            $cancel
 * @property \EasyAlipay\Payment\Close\Client             $close
 * @property \EasyAlipay\Payment\Create\Client            $create
 * @property \EasyAlipay\Payment\Pay\Client               $pay
 * @property \EasyAlipay\Payment\Query\Client             $query
 * @property \EasyAlipay\Payment\Refund\Client            $refund
 *
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        Cancel\ServiceProvider::class,
        Close\ServiceProvider::class,
        Create\ServiceProvider::class,
        Pay\ServiceProvider::class,
        Query\ServiceProvider::class,
        Refund\ServiceProvider::class,
    ];
}
