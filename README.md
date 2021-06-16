## Disable Payments in Magento 2
Disable payment methods for frontend only in Magento2.

#### 1 - Installation Disable Payment Methods

##### Manual Installation

Install Disable payments for frontend only in Magento2
 * Download the extension
 * Unzip the file
 * Create a folder {Magento root}/app/code/SathishPro/DisablePayments
 * Copy the content from the unzip folder

#### 2 - Enable Disable Frontend

 * php bin/magento module:enable SathishPro_DisablePayments
 * php bin/magento setup:upgrade
 * php bin/magento cache:flush
 * php bin/magento setup:di:compile

#### 3 - Configuration

Stores > Configuration > SathishPro > General Settings > Enable Module
- This option used to enable or disable the module

Stores > Configuration > SathishPro > General Settings > Disable Payment Methods
- Selected payment methods will disable in frontend only

#### 4 - Notes:
* This module tested in Magento 2.4