<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Base\JsonObject;

interface ShippingRateDraft extends JsonObject
{
    const FIELD_PRICE = 'price';
    const FIELD_FREE_ABOVE = 'freeAbove';
    const FIELD_TIERS = 'tiers';

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

    public function setPrice(?Money $price): void;

    public function setFreeAbove(?Money $freeAbove): void;

    public function setTiers(?ShippingRatePriceTierCollection $tiers): void;
}
