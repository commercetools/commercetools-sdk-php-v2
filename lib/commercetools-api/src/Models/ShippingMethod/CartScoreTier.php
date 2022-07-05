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

interface CartScoreTier extends ShippingRatePriceTier
{
    public const FIELD_SCORE = 'score';
    public const FIELD_PRICE = 'price';
    public const FIELD_PRICE_FUNCTION = 'priceFunction';
    public const FIELD_IS_MATCHING = 'isMatching';

    /**
     * <p>Abstract value for categorizing a Cart. The range starts at <code>0</code>. The default price covers <code>0</code>, tiers start at <code>1</code>. See <a href="/../tutorials/shipping-rate">Using Tiered Shipping Rates</a> for details and examples.</p>
     *

     * @return null|int
     */
    public function getScore();

    /**
     * <p>Defines a fixed price for the <code>score</code>.</p>
     *

     * @return null|Money
     */
    public function getPrice();

    /**
     * <p>Dynamically calculates a Price for a range of scores.</p>
     *

     * @return null|PriceFunction
     */
    public function getPriceFunction();

    /**
     * <p>Appears in response to <a href="#get-shippingmethods-for-a-cart">Get ShippingMethods for a Cart</a> if the shipping rate matches the search query.</p>
     *

     * @return null|bool
     */
    public function getIsMatching();

    /**
     * @param ?int $score
     */
    public function setScore(?int $score): void;

    /**
     * @param ?Money $price
     */
    public function setPrice(?Money $price): void;

    /**
     * @param ?PriceFunction $priceFunction
     */
    public function setPriceFunction(?PriceFunction $priceFunction): void;

    /**
     * @param ?bool $isMatching
     */
    public function setIsMatching(?bool $isMatching): void;
}
