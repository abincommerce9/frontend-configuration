<?php

namespace Atoon\Configuration\Block;

use Magento\Framework\View\Element\Template;

class Configuration extends Template
{
    /**
     * @var \Atoon\Configuration\Model\ConfigurationRepository
     */
    private \Atoon\Configuration\Model\ConfigurationRepository $confRepository;

    public function __construct(
        Template\Context $context,
        \Atoon\Configuration\Model\ConfigurationRepository $confRepository,
        array $data = []
    ) {
        $this->confRepository = $confRepository;
        parent::__construct($context, $data);
    }

    /**
     * Get configuration text
     *
     * @return string
     */
    public function getConfigurationText()
    {
        return $this->confRepository->getConfigurations();
    }
}
