<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BestDeal extends DiscountTypeCombination
{
    public const FIELD_CHOSEN_DISCOUNT_TYPE = 'chosenDiscountType';

    /**
     * <p>Discount type that offers the best deal; the value can be <code>product-discount</code> or <code>cart-discount</code>.</p>
     *

     * @return null|string
     */
    public function getChosenDiscountType();

    /**
     * @param ?string $chosenDiscountType
     */
    public function setChosenDiscountType(?string $chosenDiscountType): void;
}
