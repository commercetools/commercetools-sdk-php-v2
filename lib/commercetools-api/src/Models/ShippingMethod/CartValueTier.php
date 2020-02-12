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
     * @return null|int
     */
    public function getMinimumCentAmount();

    /**
     * @return null|Money
     */
    public function getPrice();

    /**
     * @return null|bool
     */
    public function getIsMatching();

    public function setMinimumCentAmount(?int $minimumCentAmount): void;

    public function setPrice(?Money $price): void;

    public function setIsMatching(?bool $isMatching): void;
}
