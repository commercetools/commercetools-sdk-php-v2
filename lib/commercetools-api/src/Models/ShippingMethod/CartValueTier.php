<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartValueTier extends ShippingRatePriceTier
{
    public const FIELD_MINIMUM_CENT_AMOUNT = 'minimumCentAmount';
    public const FIELD_PRICE = 'price';
    public const FIELD_IS_MATCHING = 'isMatching';

    /**
     * <p>Minimum total price of a Cart for which a shipping rate applies.</p>
     *

     * @return null|int
     */
    public function getMinimumCentAmount();

    /**
     * <p>Fixed shipping rate Price for a CartValue.</p>
     *

     * @return null|Money
     */
    public function getPrice();

    /**
     * <p>Appears in response to <a href="#get-shippingmethods-for-a-cart">Get ShippingMethods for a Cart</a> if the shipping rate matches the search query.</p>
     *

     * @return null|bool
     */
    public function getIsMatching();

    /**
     * @param ?int $minimumCentAmount
     */
    public function setMinimumCentAmount(?int $minimumCentAmount): void;

    /**
     * @param ?Money $price
     */
    public function setPrice(?Money $price): void;

    /**
     * @param ?bool $isMatching
     */
    public function setIsMatching(?bool $isMatching): void;
}
