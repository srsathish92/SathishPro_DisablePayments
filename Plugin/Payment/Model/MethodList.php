<?php

/**
 * @author sathish.pro
 * @package SathishPro_DisablePayments
 */

namespace SathishPro\DisablePayments\Plugin\Payment\Model;

use Magento\Payment\Model\MethodList as PaymentMethodList;
use SathishPro\DisablePayments\Model\ConfigInterface;

class MethodList
{
    /**
     * @var ConfigInterface
     */
    private $configInterface;

    /**
     * @param ConfigInterface $configInterface
     */
    public function __construct(ConfigInterface $configInterface)
    {
        $this->configInterface = $configInterface;
    }

    /**
     * @param PaymentMethodList $subject
     * @param $result
     * @return array
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function afterGetAvailableMethods(PaymentMethodList $subject, $result)
    {
        $disabledMethods = explode(',', $this->configInterface->getDisabledPayments());

        if (!$this->configInterface->isEnabled() || !$disabledMethods) return $result;

        foreach ($result as $key => $_result) {
            if (in_array($_result->getCode(), $disabledMethods)) {
                unset($result[$key]);
            }
        }
        return $result;
    }
}
