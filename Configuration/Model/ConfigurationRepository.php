<?php


namespace Atoon\Configuration\Model;

use Atoon\Configuration\Api\ConfigurationRepositoryInterface;
use Atoon\Configuration\Helper\Config as configHelper;
use Magento\Framework\Api\AbstractSimpleObject;
use Magento\Framework\DataObject\KeyValueObjectInterface;

class ConfigurationRepository implements ConfigurationRepositoryInterface
{

    protected $configHelper;

    public function __construct(
        configHelper $configHelper
    ) {
        $this->configHelper = $configHelper;
    }

    /**
     * @inheritDoc
     */
    public function getConfigurations()
    {
        $tab =  $this->configHelper->getFrontendConfigurations();
        return $tab[0]['frontend_tab']['frontend_text'];
    }
}
