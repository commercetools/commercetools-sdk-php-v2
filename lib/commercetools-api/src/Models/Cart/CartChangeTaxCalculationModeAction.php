<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartChangeTaxCalculationModeAction extends CartUpdateAction
{
    public const FIELD_TAX_CALCULATION_MODE = 'taxCalculationMode';

    /**

     * @return null|string
     */
    public function getTaxCalculationMode();

    /**
     * @param ?string $taxCalculationMode
     */
    public function setTaxCalculationMode(?string $taxCalculationMode): void;
}
