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
     * @return null|float
     */
    public function getScore();

    /**
     * @return null|Money
     */
    public function getPrice();

    /**
     * @return null|PriceFunction
     */
    public function getPriceFunction();

    /**
     * @return null|bool
     */
    public function getIsMatching();

    public function setScore(?float $score): void;

    public function setPrice(?Money $price): void;

    public function setPriceFunction(?PriceFunction $priceFunction): void;

    public function setIsMatching(?bool $isMatching): void;
}
