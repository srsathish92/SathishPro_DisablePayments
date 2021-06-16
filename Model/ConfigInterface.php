<?php

/**
 * @author sathish.pro
 * @package SathishPro_DisablePayments
 */

namespace SathishPro\DisablePayments\Model;

/**
 * DisablePayments module configuration
 *
 * @api
 */
interface ConfigInterface
{
    /**
     * Disabled payments config path
     */
    const XML_PATH_DISABLED_METHODS = 'sathishpro/general/methods';

    /**
     * Enabled config path
     */
    const XML_PATH_ENABLED = 'sathishpro/general/enabled';

    /**
     * Check if module is enabled
     *
     * @return bool
     */
    public function isEnabled();

    /**
     * Return disabled payments for forntend only
     *
     * @return string
     */
    public function getDisabledPayments();
}
