<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class DiscountedLineItemPriceForQuantityModel extends JsonObjectModel implements DiscountedLineItemPriceForQuantity
{
    /**
     * @var int
     */
    protected $quantity;
    /**
     * @var DiscountedLineItemPrice
     */
    protected $discountedPrice;

    /**
     * @return int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            $value = $this->raw(DiscountedLineItemPriceForQuantity::FIELD_QUANTITY);
            $value = (int)$value;
            $this->quantity = $value;
        }
        return $this->quantity;
    }
    /**
     * @return DiscountedLineItemPrice
     */
    public function getDiscountedPrice()
    {
        if (is_null($this->discountedPrice)) {
            $value = $this->raw(DiscountedLineItemPriceForQuantity::FIELD_DISCOUNTED_PRICE);
            if (is_null($value)) {
                return $this->mapData(DiscountedLineItemPrice::class, null);
            }
            $value = $this->mapData(DiscountedLineItemPrice::class, $value);

            $this->discountedPrice = $value;
        }
        return $this->discountedPrice;
    }

    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity)
    {
        $this->quantity = (int)$quantity;

        return $this;
    }
    /**
     * @param DiscountedLineItemPrice $discountedPrice
     * @return $this
     */
    public function setDiscountedPrice(DiscountedLineItemPrice $discountedPrice)
    {
        $this->discountedPrice = $discountedPrice;

        return $this;
    }

}
