<?php

namespace Atoon\Configuration\Model;

use Atoon\Configuration\Api\ConfigurationRepositoryInterface;
use Atoon\Configuration\Block\Configuration;
use Atoon\Configuration\Helper\Config as configHelper;

class ConfigurationRepository implements ConfigurationRepositoryInterface
{
    protected $configHelper;
    /**
     * @var Configuration
     */
    private Configuration $configuration;

    public function __construct(
        configHelper $configHelper,
        Configuration $configuration
    ) {
        $this->configHelper = $configHelper;
        $this->configuration = $configuration;
    }

    /**
     * @inheritDoc
     */
    public function getConfigurations()
    {
        $tab =  $this->configHelper->getFrontendConfigurations();
        $tab = reset($tab);
        return $tab['frontend_tab']['frontend_text'];
    }

    public function getConfig()
    {
        $config = [];
        $config['Message'] = $this->configuration->getCodData();
        return $config;
    }
}
