<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Common\Money;

interface ShippingRateDraft extends JsonObject {
    const FIELD_PRICE = 'price';
    const FIELD_FREE_ABOVE = 'freeAbove';
    const FIELD_TIERS = 'tiers';

    /**
     * @return Money
     */
    public function getPrice();

    /**
     * @return Money
     */
    public function getFreeAbove();

    /**
     * @return ShippingRatePriceTierCollection
     */
    public function getTiers();

    /**
     * @param Money $price
     * @return $this
     */
    public function setPrice(Money $price);

    /**
     * @param Money $freeAbove
     * @return $this
     */
    public function setFreeAbove(Money $freeAbove);

    /**
     * @param ShippingRatePriceTierCollection $tiers
     * @return $this
     */
    public function setTiers(ShippingRatePriceTierCollection $tiers);

}
