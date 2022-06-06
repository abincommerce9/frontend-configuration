<?php


namespace Atoon\Configuration\Api;


interface ConfigurationRepositoryInterface
{


    /**
     * Get system configuration
     *
     * @return string
     */
    public function getConfigurations();
}
