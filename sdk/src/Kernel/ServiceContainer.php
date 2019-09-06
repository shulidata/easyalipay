<?php

namespace EasyAlipay\Kernel;

use EasyAlipay\Kernel\Config;
use EasyAlipay\Kernel\Providers\ConfigServiceProvider;
use Pimple\Container;

/**
 * Class ServiceContainer
 *
 * @property \EasyAlipay\Kernel\Config                 $config
 */
class ServiceContainer extends Container
{
    /**
     * @var array
     */
    protected $providers = [];

    /**
     * @var array
     */
    protected $defaultConfig = [];

    /**
     * @var array
     */
    protected $userConfig = [];

    /**
     * Constructor.
     *
     * @param array       $config
     */
    public function __construct(array $config = [])
    {
        $this->registerProviders($this->getProviders());
        parent::__construct();
        $this->userConfig = $config;  
        $config = new config();
        $this->defaultConfig = $config->config;
    }

    public function getConfig()
    {
        return array_replace_recursive($this->defaultConfig, $this->userConfig);
    }


    /**
     * Return all providers.
     *
     * @return array
     */
    public function getProviders()
    {
        return array_merge([
            ConfigServiceProvider::class,
        ], $this->providers);
    }

    /**
     * @param array $providers
     */
    public function registerProviders(array $providers)
    {
        foreach ($providers as $provider) {
            parent::register(new $provider());
        }
    }
}
