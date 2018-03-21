<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\Common\Money;

interface CartValueTier extends ShippingRatePriceTier {
    const FIELD_MINIMUM_CENT_AMOUNT = 'minimumCentAmount';
    const FIELD_PRICE = 'price';
    const FIELD_IS_MATCHING = 'isMatching';

    /**
     * @return int
     */
    public function getMinimumCentAmount();

    /**
     * @return Money
     */
    public function getPrice();

    /**
     * @return mixed
     */
    public function getIsMatching();

    /**
     * @param int $minimumCentAmount
     * @return $this
     */
    public function setMinimumCentAmount(int $minimumCentAmount);

    /**
     * @param Money $price
     * @return $this
     */
    public function setPrice(Money $price);

    /**
     * @param mixed $isMatching
     * @return $this
     */
    public function setIsMatching($isMatching);

}
