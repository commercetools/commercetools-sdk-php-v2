<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Common\Money;

interface CartClassificationTier extends ShippingRatePriceTier
{
    const FIELD_VALUE = 'value';
    const FIELD_PRICE = 'price';
    const FIELD_IS_MATCHING = 'isMatching';

    /**
     * @return null|string
     */
    public function getValue();

    /**
     * @return null|Money
     */
    public function getPrice();

    /**
     * @return null|bool
     */
    public function getIsMatching();

    public function setValue(?string $value): void;

    public function setPrice(?Money $price): void;

    public function setIsMatching(?bool $isMatching): void;
}
