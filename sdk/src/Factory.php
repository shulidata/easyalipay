<?php

namespace EasyAlipay;

/**
 * Class Factory.
 *
 * @method static \EasyAlipay\Payment\Application            payment(array $config)
 * @method static \EasyAlipay\Mini\Application               mini(array $config)
 * @method static \EasyAlipay\OpenPublic\Application         openPublic(array $config)
 * @method static \EasyAlipay\Marketing\Application          marketing(array $config)
 * @method static \EasyAlipay\BasicService\Application       basicService(array $config)
 */
class Factory
{
    /**
     * @param string $name
     * @param array  $config
     *
     * @return \EasyAlipay\Kernel\ServiceContainer
     */
    public static function make($name, array $config)
    {
        $namespace = Kernel\Support\Str::studly($name);
        $application = "\\EasyAlipay\\{$namespace}\\Application";
        return new $application($config);
    }

    /**
     * Dynamically pass methods to the application.
     *
     * @param string $name
     * @param array  $arguments
     *
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        return self::make($name, ...$arguments);
    }
}
