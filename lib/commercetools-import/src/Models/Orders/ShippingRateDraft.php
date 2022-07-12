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

interface ShippingRateDraft extends JsonObject
{
    public const FIELD_PRICE = 'price';
    public const FIELD_FREE_ABOVE = 'freeAbove';
    public const FIELD_TIERS = 'tiers';

    /**

     * @return null|Money
     */
    public function getPrice();

    /**

     * @return null|Money
     */
    public function getFreeAbove();

    /**

     * @return null|ShippingRatePriceTierCollection
     */
    public function getTiers();

    /**
     * @param ?Money $price
     */
    public function setPrice(?Money $price): void;

    /**
     * @param ?Money $freeAbove
     */
    public function setFreeAbove(?Money $freeAbove): void;

    /**
     * @param ?ShippingRatePriceTierCollection $tiers
     */
    public function setTiers(?ShippingRatePriceTierCollection $tiers): void;
}
