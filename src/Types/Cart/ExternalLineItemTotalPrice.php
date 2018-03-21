<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Common\Money;

interface ExternalLineItemTotalPrice extends JsonObject {
    const FIELD_PRICE = 'price';
    const FIELD_TOTAL_PRICE = 'totalPrice';

    /**
     * @return Money
     */
    public function getPrice();

    /**
     * @return Money
     */
    public function getTotalPrice();

    /**
     * @param Money $price
     * @return $this
     */
    public function setPrice(Money $price);

    /**
     * @param Money $totalPrice
     * @return $this
     */
    public function setTotalPrice(Money $totalPrice);

}
