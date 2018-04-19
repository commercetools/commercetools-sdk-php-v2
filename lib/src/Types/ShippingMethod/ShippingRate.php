<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Common\TypedMoney;

interface ShippingRate extends JsonObject
{
    const FIELD_PRICE = 'price';
    const FIELD_FREE_ABOVE = 'freeAbove';
    const FIELD_IS_MATCHING = 'isMatching';
    const FIELD_TIERS = 'tiers';

    /**
     * @return TypedMoney
     */
    public function getPrice();

    /**
     * @return TypedMoney
     */
    public function getFreeAbove();

    /**
     * @return mixed
     */
    public function getIsMatching();

    /**
     * @return ShippingRatePriceTierCollection
     */
    public function getTiers();

    /**
     * @param TypedMoney $price
     * @return $this
     */
    public function setPrice(TypedMoney $price);

    /**
     * @param TypedMoney $freeAbove
     * @return $this
     */
    public function setFreeAbove(TypedMoney $freeAbove);

    /**
     * @param mixed $isMatching
     * @return $this
     */
    public function setIsMatching($isMatching);

    /**
     * @param ShippingRatePriceTierCollection $tiers
     * @return $this
     */
    public function setTiers(ShippingRatePriceTierCollection $tiers);

}
