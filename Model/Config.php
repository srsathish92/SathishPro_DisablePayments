<?php

/**
 * @author sathish.pro
 * @package SathishPro_DisablePayments
 */

namespace SathishPro\DisablePayments\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

/**
 * DisablePayments module configuration
 */
class Config implements ConfigInterface
{
    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * {@inheritdoc}
     */
    public function isEnabled()
    {
        return $this->scopeConfig->isSetFlag(
            self::XML_PATH_ENABLED,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getDisabledPayments()
    {
        return $this->scopeConfig->getValue(
            ConfigInterface::XML_PATH_DISABLED_METHODS,
            ScopeInterface::SCOPE_STORE
        );
    }
}
