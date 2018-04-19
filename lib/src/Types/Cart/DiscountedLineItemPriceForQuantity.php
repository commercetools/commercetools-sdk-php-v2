<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonObject;

interface DiscountedLineItemPriceForQuantity extends JsonObject
{
    const FIELD_QUANTITY = 'quantity';
    const FIELD_DISCOUNTED_PRICE = 'discountedPrice';

    /**
     * @return int
     */
    public function getQuantity();

    /**
     * @return DiscountedLineItemPrice
     */
    public function getDiscountedPrice();

    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity);

    /**
     * @param DiscountedLineItemPrice $discountedPrice
     * @return $this
     */
    public function setDiscountedPrice(DiscountedLineItemPrice $discountedPrice);

}
