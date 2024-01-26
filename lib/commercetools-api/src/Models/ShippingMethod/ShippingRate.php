<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ShippingRate extends JsonObject
{
    public const FIELD_PRICE = 'price';
    public const FIELD_FREE_ABOVE = 'freeAbove';
    public const FIELD_IS_MATCHING = 'isMatching';
    public const FIELD_TIERS = 'tiers';

    /**
     * <p>Currency amount of the ShippingRate.</p>
     *

     * @return null|TypedMoney
     */
    public function getPrice();

    /**
     * <p><a href="/../shipping-delivery-overview#free-shipping">Free shipping</a> is applied if the sum of the (Custom) Line Item Prices reaches the specified value.</p>
     *

     * @return null|TypedMoney
     */
    public function getFreeAbove();

    /**
     * <p><code>true</code> if the ShippingRate matches given <a href="ctp:api:type:Cart">Cart</a> or <a href="ctp:api:type:Location">Location</a>.
     * Only appears in response to requests for <a href="ctp:api:endpoint:/{projectKey}/shipping-methods/matching-cart:GET">Get ShippingMethods for a Cart</a> or
     * <a href="ctp:api:endpoint:/{projectKey}/shipping-methods/matching-location:GET">Get ShippingMethods for a Location</a>.</p>
     *

     * @return null|bool
     */
    public function getIsMatching();

    /**
     * <p>Price tiers for the ShippingRate.</p>
     *

     * @return null|ShippingRatePriceTierCollection
     */
    public function getTiers();

    /**
     * @param ?TypedMoney $price
     */
    public function setPrice(?TypedMoney $price): void;

    /**
     * @param ?TypedMoney $freeAbove
     */
    public function setFreeAbove(?TypedMoney $freeAbove): void;

    /**
     * @param ?bool $isMatching
     */
    public function setIsMatching(?bool $isMatching): void;

    /**
     * @param ?ShippingRatePriceTierCollection $tiers
     */
    public function setTiers(?ShippingRatePriceTierCollection $tiers): void;
}
