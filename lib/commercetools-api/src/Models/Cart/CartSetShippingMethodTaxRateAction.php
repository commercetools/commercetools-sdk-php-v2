<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;

interface CartSetShippingMethodTaxRateAction extends CartUpdateAction
{
    
    const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';

    /**
     *
     * @return ExternalTaxRateDraft|null
     */
    public function getExternalTaxRate();
    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void;
}