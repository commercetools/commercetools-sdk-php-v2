<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\Common\Money;

interface CartScoreTier extends ShippingRatePriceTier {
    const FIELD_SCORE = 'score';
    const FIELD_PRICE = 'price';
    const FIELD_PRICE_FUNCTION = 'priceFunction';
    const FIELD_IS_MATCHING = 'isMatching';

    /**
     * @return string
     */
    public function getScore();

    /**
     * @return Money
     */
    public function getPrice();

    /**
     * @return PriceFunction
     */
    public function getPriceFunction();

    /**
     * @return mixed
     */
    public function getIsMatching();

    /**
     * @param string $score
     * @return $this
     */
    public function setScore(string $score);

    /**
     * @param Money $price
     * @return $this
     */
    public function setPrice(Money $price);

    /**
     * @param PriceFunction $priceFunction
     * @return $this
     */
    public function setPriceFunction(PriceFunction $priceFunction);

    /**
     * @param mixed $isMatching
     * @return $this
     */
    public function setIsMatching($isMatching);

}
