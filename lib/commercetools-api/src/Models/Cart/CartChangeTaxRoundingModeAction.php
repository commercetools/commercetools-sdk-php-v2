<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;

interface CartChangeTaxRoundingModeAction extends CartUpdateAction
{
    
    const FIELD_TAX_ROUNDING_MODE = 'taxRoundingMode';

    /**
     *
     * @return string|null
     */
    public function getTaxRoundingMode();
    public function setTaxRoundingMode(?string $taxRoundingMode): void;
}