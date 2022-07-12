<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ShippingRate extends JsonObject
{

    public const FIELD_PRICE = 'price';
    public const FIELD_FREE_ABOVE = 'freeAbove';
    public const FIELD_IS_MATCHING = 'isMatching';
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
     * <p>Only appears in response to requests for ShippingMethods by Cart or location to mark this shipping rate as one that matches the Cart or location.</p>
     *

     * @return null|bool
     */
    public function getIsMatching();

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
     * @param ?bool $isMatching
     */
    public function setIsMatching(?bool $isMatching): void;

    /**
     * @param ?ShippingRatePriceTierCollection $tiers
     */
    public function setTiers(?ShippingRatePriceTierCollection $tiers): void;
}
