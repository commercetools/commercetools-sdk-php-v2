<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\Common\Money;

interface CartClassificationTier extends ShippingRatePriceTier
{
    const FIELD_VALUE = 'value';
    const FIELD_PRICE = 'price';
    const FIELD_IS_MATCHING = 'isMatching';

    /**
     * @return string
     */
    public function getValue();

    /**
     * @return Money
     */
    public function getPrice();

    /**
     * @return mixed
     */
    public function getIsMatching();

    /**
     * @param string $value
     * @return $this
     */
    public function setValue(string $value);

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
