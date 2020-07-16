<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartChangeTaxRoundingModeAction extends CartUpdateAction
{
    public const FIELD_TAX_ROUNDING_MODE = 'taxRoundingMode';

    /**
     * @return null|string
     */
    public function getTaxRoundingMode();

    /**
     * @param ?string $taxRoundingMode
     */
    public function setTaxRoundingMode(?string $taxRoundingMode): void;
}
