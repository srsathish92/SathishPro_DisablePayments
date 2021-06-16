<?php

/**
 * @author sathish.pro
 * @package SathishPro_DisablePayments
 */

namespace SathishPro\DisablePayments\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;
use Magento\Payment\Helper\Data;

class Allmethods implements OptionSourceInterface
{
    /**
     * Payment data
     *
     * @var Data
     */
    protected $_paymentData;

    /**
     * @param Data $paymentData
     */
    public function __construct(Data $paymentData)
    {
        $this->_paymentData = $paymentData;
    }

    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        return $this->_paymentData->getPaymentMethodList(true, true, false);
    }
}
