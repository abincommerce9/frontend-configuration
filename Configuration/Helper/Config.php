<?php

namespace Atoon\Configuration\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Config extends AbstractHelper
{
    protected $frontend_tabconfig = [

            "frontend_tab" => "frontend_section/checkout_group"
        ];



    /**
     * @param $field
     * @param null $storeId
     * @return mixed
     */
    public function getConfigValue($field, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            $field,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }


    public function getFrontendConfigurations()
    {
        $configs = [];
        try {
            foreach ($this->frontend_tabconfig as $key => $value) {
                $configs[][$key] = $this->getConfigValue($value);
            }
        } catch (\Exception $e) {
            return [];
        }
        return $configs;
    }

}
