<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\Money;

interface CartClassificationTier extends ShippingRatePriceTier
{
    public const FIELD_VALUE = 'value';
    public const FIELD_PRICE = 'price';
    public const FIELD_TIERS = 'tiers';
    public const FIELD_IS_MATCHING = 'isMatching';

    /**

     * @return null|string
     */
    public function getValue();

    /**

     * @return null|Money
     */
    public function getPrice();

    /**

     * @return null|ShippingRatePriceTierCollection
     */
    public function getTiers();

    /**

     * @return null|bool
     */
    public function getIsMatching();

    /**
     * @param ?string $value
     */
    public function setValue(?string $value): void;

    /**
     * @param ?Money $price
     */
    public function setPrice(?Money $price): void;

    /**
     * @param ?ShippingRatePriceTierCollection $tiers
     */
    public function setTiers(?ShippingRatePriceTierCollection $tiers): void;

    /**
     * @param ?bool $isMatching
     */
    public function setIsMatching(?bool $isMatching): void;
}
