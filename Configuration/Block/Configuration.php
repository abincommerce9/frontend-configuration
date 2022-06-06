<?php

namespace Atoon\Configuration\Block;

use Magento\Framework\View\Element\Template;
use Atoon\Configuration\Helper\Config as configHelper;


class Configuration extends Template
{

    /**
     * @var configHelper
     */
    private configHelper $configHelper;

    public function __construct(
        configHelper $configHelper,
        Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->configHelper = $configHelper;
    }


    public function getCodData()
    {
        $tab =  $this->configHelper->getFrontendConfigurations();
        $tab = reset($tab);
        return $tab['frontend_tab']['frontend_text'];
    }
}
