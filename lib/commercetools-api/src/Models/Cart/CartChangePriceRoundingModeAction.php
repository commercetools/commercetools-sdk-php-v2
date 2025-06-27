<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartChangePriceRoundingModeAction extends CartUpdateAction
{
    public const FIELD_PRICE_ROUNDING_MODE = 'priceRoundingMode';

    /**
     * <p>New value to set.</p>
     *

     * @return null|string
     */
    public function getPriceRoundingMode();

    /**
     * @param ?string $priceRoundingMode
     */
    public function setPriceRoundingMode(?string $priceRoundingMode): void;
}
